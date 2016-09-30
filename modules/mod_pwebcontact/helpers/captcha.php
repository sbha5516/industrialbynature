<?php

/**
 * @version 3.4.6
 * @package PWebContact
 * @subpackage Captcha
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

class modPWebContactCaptchaHelper
{

    private $public_key  = '6LcPnAoTAAAAAELHJ46n697mYqOKzC_kyvhmmu5s';
    private $private_key = '6LcPnAoTAAAAAO9ZxguoPNVGHwa-62AazCFVcJQe';
    private $options     = array('theme' => 'light', 'module_id' => 0);

    public function __construct($options = null)
    {
        if (is_array($options))
        {
            $this->options = array_merge($this->options, $options);
        }
    }

    public function display($name, $id, $class = '')
    {
        $hl       = JFactory::getLanguage()->getTag();
        $hl_parts = explode('-', $hl);
        if (isset($hl_parts[1]) && strtolower($hl_parts[0]) == strtolower($hl_parts[1]))
        {
            $hl = strtolower($hl_parts[0]);
        }

        JHtml::_('jquery.framework');

        $document = JFactory::getDocument();
        $document->addScript('https://www.google.com/recaptcha/api.js?hl=' . $hl . '&render=explicit');
        $document->addScriptDeclaration(
                'jQuery(document).ready(function($){'
                . '$(window).load(function(){'
                // Get captcha widget ID
                . 'var grecaptchaId='
                // Render captcha
                . 'grecaptcha.render("' . $id . '",{'
                . 'sitekey:"' . $this->public_key . '"'
                . ',theme:"' . $this->options['theme'] . '"'
                . ($this->options['module_id'] ? ',"expired-callback":function(){pwebContact' . $this->options['module_id'] . '.captchaExpired()}' : '')
                . '});'
                // Store captcha widget ID
                . '$("#pwebcontact' . $this->options['module_id'] . '_captcha").data("grecaptchaId",grecaptchaId)'
                . '})'
                . '});'
        );

        return '<div id="' . $id . '" class="' . $class . '" style="min-height:78px;min-width:304px"></div>';
    }

    public function checkAnswer($answer = null)
    {
        $input    = JFactory::getApplication()->input;
        $remoteip = modPwebcontactHelper::detectIP();
        $answer   = $input->get('g-recaptcha-response', '', 'string');

        // Discard spam submissions
        if (empty($remoteip) || empty($answer))
        {
            return false;
        }

        $drivers     = array('socket', 'stream', 'curl');
        $verify_peer = true;
        while (!empty($drivers))
        {
            try
            {
                $http = JHttpFactory::getHttp(null, $drivers);
                $http->setOption('verify_peer', $verify_peer);

                $response = $http->post('https://www.google.com/recaptcha/api/siteverify', array(
                    'secret' => $this->private_key,
                    'response' => $answer,
                    'remoteip' => $remoteip
                        ), array(), 5
                );

                $drivers = null;
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

                $msg = 'Google reCaptcha HTTP request error: ' . $e->getMessage();
                if (PWEBCONTACT_DEBUG)
                    modPwebcontactHelper::setLog($msg);

                if (empty($drivers))
                    $drivers = false;
            }
        }

        if ($drivers === false)
        {
            throw new Exception($msg);
        }

        if ($response->code >= 200 && $response->code < 400)
        {
            $result = json_decode($response->body, true);
            if (isset($result['success']) && $result['success'] == true)
            {
                return true;
            }
            elseif (isset($result['error-codes']) && $result['error-codes'])
            {
                throw new Exception(implode(', ', $result['error-codes']));
            }
        }

        return false;
    }

}
