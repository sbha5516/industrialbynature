<?php

/**
 * @version 3.4.8
 * @package PWebContact
 * @subpackage AcyMailing
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Andrzej Kawula, Piotr Moćko
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

class modPWebContactAcymailingHelper
{

    public static function parseLists($lists, $return_array = false)
    {
        if (empty($lists))
            return array();

        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query
                ->select('listid, name')
                ->from($db->quoteName('#__acymailing_list'))
                ->where('published = 1');

        if (is_string($lists) && strtolower($lists) != 'all')
        {
            $query->where('listid IN (' . $db->escape($lists) . ')');
        }

        $db->setQuery($query);
        $tmp = $db->loadAssocList();

        if ($return_array)
            return $tmp;

        $return = array();
        foreach ($tmp as $list)
        {
            $return[] = json_encode(array($list['listid'] => $list['name']));
        }

        return $return;
    }

    public static function subscribe($id_list, $email, $name = '', $fields = array(), $options = array())
    {
        if (!empty($options['from_params']))
        {
            $lists = self::parseLists($id_list, true);
            foreach ($lists as $list)
                self::subscribe($list['listid'], $email);

            return true;
        }

        $db = JFactory::getDbo();
        $query = $db->getQuery(true)
                ->select('subid')
                ->from('#__acymailing_subscriber')
                ->where('email = ' . $db->quote($db->escape($email)));
        $db->setQuery($query);

        $subscriber_id = (int) $db->loadResult();
        if (!$subscriber_id)
        {
            $user = JFactory::getUser();

            $obj = new stdClass();
            $obj->email = $email;
            $obj->userid = ($user->email == $email ? $user->id : 0);
            $obj->name = ($name ? $name : strstr($email, '@', true));
            $obj->created = time();
            $obj->confirmed = 1;
            $obj->enabled = 1;
            $obj->accept = 1;
            $obj->ip = $_SERVER['REMOTE_ADDR'];
            $obj->html = 1;
            $obj->key = NULL;
            $obj->confirmed_date = 0;
            $obj->confirmed_ip = NULL;
            $obj->lastopen_date = 0;
            $obj->lastopen_ip = NULL;
            $obj->lastclick_date = 0;
            $obj->lastsent_date = 0;
            $obj->source = 'Perfect Contact Form';

            if ($db->insertObject('#__acymailing_subscriber', $obj))
            {
                $subscriber_id = $db->insertid();
            }
            else
            {
                return false;
            }
        }

        $query->clear()
                ->select('listid')
                ->from('#__acymailing_listsub')
                ->where(array(
                    'subid = ' . (int) $subscriber_id,
                    'listid = ' . (int) $id_list
                        )
        );
        $db->setQuery($query);

        if (!$db->loadResult())
        {
            $sub = new stdClass();
            $sub->listid = (int) $id_list;
            $sub->subid = (int) $subscriber_id;
            $sub->subdate = time();
            $sub->unsubdate = NULL;
            $sub->status = 1;

            return $db->insertObject('#__acymailing_listsub', $sub);
        }

        return true;
    }

}
