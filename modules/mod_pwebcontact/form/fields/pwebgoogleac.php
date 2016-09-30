<?php

/**
 * @version 3.4.8
 * @package PWebContact
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('Text');

/**
 * Download ID
 */
class JFormFieldPwebGoogleAC extends JFormFieldText
{

    protected $type = 'PwebGoogleAC';

    protected function getInput()
    {
        $html        = '';
        $this->value = '';

        if (JFactory::getUser()->authorise('core.manage', 'com_installer'))
        {
            require_once JPATH_ROOT . '/modules/mod_pwebcontact/helpers/google.php';

            $client   = PwebcontactGoogleApi::getInstance();
            $url      = $client->createAccessCodeUrl('https://www.googleapis.com/auth/spreadsheets');
            $hasToken = $client->hasToken();

            if (version_compare(JVERSION, '3.0.0', '<'))
            {
                $html = '<div class="fltlft">'
                        . parent::getInput()
                        . '</div>'
                        . '<div class="button2-left"><div class="blank">'
                        . '<a href="' . $url . '" target="_blank">'
                        . JText::_('MOD_PWEBCONTACT_GOOGLE_API_ACCESS_CODE_BUTTON')
                        . '</a>'
                        . '</div></div>'
                        . '<span class="badge badge-' . ($hasToken ? 'success' : 'important') . '">'
                        . '<i class="icon icon-' . ($hasToken ? 'checkmark' : 'remove') . '"></i> '
                        . JText::_('MOD_PWEBCONTACT_GOOGLE_API_' . ($hasToken ? 'HAS_ACCESS' : 'NO_ACCESS'))
                        . '</span> ';
            }
            else
            {
                $html = '<div class="input-prepend input-append">'
                        . '<span class="btn btn-' . ($hasToken ? 'success' : 'danger') . '">'
                        . '<i class="icon icon-' . ($hasToken ? 'checkmark' : 'remove') . '"></i> '
                        . JText::_('MOD_PWEBCONTACT_GOOGLE_API_' . ($hasToken ? 'HAS_ACCESS' : 'NO_ACCESS'))
                        . '</span>'
                        . parent::getInput()
                        . '<a href="' . $url . '" target="_blank" class="btn">'
                        . JText::_('MOD_PWEBCONTACT_GOOGLE_API_ACCESS_CODE_BUTTON')
                        . '</a>'
                        . '</div>';
            }
        }

        return $html;
    }

}
