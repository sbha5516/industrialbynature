<?php
/**
 * @version   3.4.0
 * @package   PWebContact
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license   GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author    Piotr Moćko, Mateusz Podraza
 */
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('Text');

/**
 * Download ID
 */
class JFormFieldPwebGoogleColumns extends JFormFieldText
{

	protected $type = 'PwebGoogleColumns';

	protected function getInput()
	{
		$html = '';

		if (version_compare(JVERSION, '3.0.0', '<'))
		{
			$html = '<div class="fltlft"><code class="pwebcontact-googlecolumns">'
				. JText::_('MOD_PWEBCONTACT_GOOGLE_SHEETS_COLUMNS_HINT')
				. '</code></div><div class="button2-left"><div class="blank">'
				. '<a href="#" class="pwebcontact-getgooglecolumns" " target="_blank">'
				. JText::_('MOD_PWEBCONTACT_GOOGLE_SHEETS_COLUMNS_BUTTON')
				. '</a>'
				. '</div></div>';
		}
		else
		{
			$html = '<div class="input-append"><code class="pwebcontact-googlecolumns">'
				. JText::_('MOD_PWEBCONTACT_GOOGLE_SHEETS_COLUMNS_HINT')
				. '</code><a href="#" class="pwebcontact-getgooglecolumns btn" target="_blank">'
				. JText::_('MOD_PWEBCONTACT_GOOGLE_SHEETS_COLUMNS_BUTTON')
				. '</a>'
				. '</div>';
		}

		return $html;
	}

}
