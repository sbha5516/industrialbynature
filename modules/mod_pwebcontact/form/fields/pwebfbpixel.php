<?php
/**
 * @version 3.4.6
 * @package PWebContact
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */

defined('_JEXEC') or die( 'Restricted access' );

JFormHelper::loadFieldClass('text');

/**
 * FB Pixel field
 */
class JFormFieldPwebFbPixel extends JFormFieldText
{
    protected $type = 'PwebFbPixel';

    protected function getInput()
    {
        $doc = JFactory::getDocument();
        $doc->addScriptDeclaration(
'if(typeof jQuery!=="undefined")
jQuery(document).ready(function($){
	$("#pwebcontact_paste_'.$this->id.'").click(function(e){
		e.preventDefault();
		var s = prompt("'.JText::_('MOD_PWEBCONTACT_FBPIXEL_SCRIPT_PASTE').'");
		if(s){
				var u = s.match(/\'init\',\s?\'([\w_]+)/);
			if (u && typeof u[1] != "undefined") document.getElementById("'.$this->id.'").value = u[1];
		}
	});
});'
        );

        if (version_compare(JVERSION, '3.0.0') == -1)
        {
            $html  = '<div class="fltlft">';
            $html .= parent::getInput();
            $html .= '</div><div class="button2-left"><div class="blank">';
            $html .= '<a id="pwebcontact_paste_'.$this->id.'" href="#">';
            $html .= JText::_('MOD_PWEBCONTACT_PASTE_BUTTON');
            $html .= '</a>';
            $html .= '</div></div>';
        }
        else
        {
            $html  = '<div class="input-append">';
            $html .= parent::getInput();
            $html .= '<a class="btn" id="pwebcontact_paste_'.$this->id.'" href="#">';
            $html .= JText::_('MOD_PWEBCONTACT_PASTE_BUTTON');
            $html .= '</a>';
            $html .= '</div>';
        }

        return $html;
    }
}