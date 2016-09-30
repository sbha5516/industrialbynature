<?php

/**
 * @version 3.4.8
 * @package PWebContact
 * @subpackage Freshmail
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Andrzej Kawula, Piotr Moćko
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

class modPWebContactFreshmailHelper
{

    public static function getLists($options)
    {
        $response = self::doRequest('subscribers_list/lists', $options);

        $lists = array();
        if ($response && isset($response->lists))
        {
            foreach ($response->lists as $list)
            {
                $lists[$list->subscriberListHash] = $list->name;
            }
        }

        return $lists;
    }

    public static function subscribe($id_list, $email, $name = '', $fields = array(), $options = array())
    {
        $custom_fields = array();
        foreach ($fields as $key => $value)
        {
            if (strpos($key, 'fm_') === 0)
            {
                $subkey = substr($key, 3);
                if ($subkey !== 'email')
                {
                    $custom_fields[$subkey] = $value;
                }
            }
        }

        return self::doRequest('subscriber/add', $options, array(
                    'email' => $email,
                    'list' => $id_list,
                    'custom_fields' => $custom_fields
        ));
    }

    protected static function doRequest($rest_path, $options, $data = null)
    {
        $app = JFactory::getApplication();
        if (!defined('PWEBCONTACT_DEBUG'))
            define('PWEBCONTACT_DEBUG', false);

        if ($data !== null)
        {
            $data = json_encode($data);
        }

        $headers                   = array();
        $headers['X-Rest-ApiKey']  = $options['apikey'];
        $headers['X-Rest-ApiSign'] = sha1($options['apikey']
                . '/rest/' . $rest_path
                . $data
                . $options['secret']
        );
        $headers['Content-Type']   = 'application/json';
        $url                       = 'https://api.freshmail.com/rest/';

        $drivers     = array('socket', 'stream', 'curl');
        $verify_peer = true;
        while (!empty($drivers))
        {
            try
            {
                $driver = $drivers[0];
                $http   = JHttpFactory::getHttp(null, $driver);
                if (empty($http))
                {
                    array_shift($drivers);
                }
                else
                {
                    $http->setOption('verify_peer', $verify_peer);
                    if ($driver == 'curl')
                    {
                        $http->setOption('transport.curl', array(CURLOPT_SSL_VERIFYPEER => $verify_peer));
                    }

                    if (empty($data))
                        $response = $http->get($url . $rest_path, $headers);
                    else
                        $response = $http->post($url . $rest_path, $data, $headers);

                    $result  = json_decode($response->body);
                    $drivers = null;
                }
            }
            catch (Exception $e)
            {
                if ($verify_peer)
                {
                    $verify_peer = false;
                }
                else
                {
                    $verify_peer = true;
                    array_shift($drivers);
                }

                $msg = 'Freshmail HTTP request error: ' . $e->getMessage();
                if (PWEBCONTACT_DEBUG)
                    modPwebcontactHelper::setLog($msg);

                if (empty($drivers))
                {
                    if ($app->isAdmin())
                        $app->enqueueMessage($msg, 'error');
                    return false;
                }
            }
        }

        if (isset($result->errors) && isset($result->errors[0]) && isset($result->errors[0]->message))
        {
            $msg = 'Freshmail REST response: ' . $result->errors[0]->message . ', REST code: ' . $result->errors[0]->code . ', HTTP code: ' . $response->code;
            if (PWEBCONTACT_DEBUG)
                modPwebcontactHelper::setLog($msg);
            if ($app->isAdmin())
                $app->enqueueMessage($msg, 'error');
        }
        else
        {
            if (PWEBCONTACT_DEBUG)
                modPwebcontactHelper::setLog('Freshmail request success');
        }

        return $result;
    }

}
