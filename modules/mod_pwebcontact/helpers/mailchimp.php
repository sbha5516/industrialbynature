<?php

/**
 * @version 3.4.8
 * @package PWebContact
 * @subpackage Mailchimp
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Andrzej Kawula, Piotr Moćko
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

class modPWebContactMailchimpHelper
{

    public static function getLists($options)
    {
        $response = self::doRequest('lists/list.json', $options);

        $lists = array();
        if ($response && isset($response->data))
        {
            foreach ($response->data as $list)
            {
                $lists[$list->id] = $list->name;
            }
        }

        return $lists;
    }

    public static function subscribe($id_list, $email, $name = '', $fields = array(), $options = array())
    {
        $data = array(
            'id' => $id_list,
            'double_optin' => (!empty($options['opt']) ? true : false),
            'email' => array(
                'email' => $email
            )
        );

        if (!empty($name))
        {
            $fields['FNAME'] = $name;
        }
        $data['merge_vars'] = $fields;

        return self::doRequest('lists/subscribe.json', $options, $data, array('Content-Type: multipart/form-data'));
    }

    protected static function doRequest($rest_path, $options, $data = array(), $headers = array(), $drivers = array('socket', 'stream', 'curl'))
    {
        $app = JFactory::getApplication();
        if (!defined('PWEBCONTACT_DEBUG'))
            define('PWEBCONTACT_DEBUG', false);

        $key_parts = explode('-', $options['apikey']);
        if (empty($options['apikey']) || count($key_parts) < 2)
        {
            $msg = 'Mailchimp error: ' . JText::_('MOD_PWEBCONTACT_BAD_API_KEY');
            if (PWEBCONTACT_DEBUG)
                modPwebcontactHelper::setLog($msg);
            if ($app->isAdmin())
                $app->enqueueMessage($msg, 'error');
            return false;
        }

        $data['apikey'] = $options['apikey'];
        $url            = 'https://' . $key_parts[1] . '.api.mailchimp.com/2.0/';

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

                $msg = 'Mailchimp HTTP request error: ' . $e->getMessage();
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

        if (isset($result->errors) && isset($result->errors[0]) && isset($result->errors[0]->error))
        {
            $msg = 'Mailchimp REST response: ' . $result->errors[0]->error;
            if (PWEBCONTACT_DEBUG)
                modPwebcontactHelper::setLog($msg);
            if ($app->isAdmin())
                $app->enqueueMessage($msg, 'error');
        }
        elseif (isset($result->status) && $result->status == 'error')
        {
            $msg = 'Mailchimp REST response: ' . $result->error;
            if (PWEBCONTACT_DEBUG)
                modPwebcontactHelper::setLog($msg);
            if ($app->isAdmin())
                $app->enqueueMessage($msg, 'error');
        }
        else
        {
            if (PWEBCONTACT_DEBUG)
                modPwebcontactHelper::setLog('Mailchimp request success');
        }

        return $result;
    }

}
