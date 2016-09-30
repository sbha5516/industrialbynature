<?php

/**
 * @version   3.4.8
 * @package   PWebContact
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license   GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author    Piotr Moćko
 */
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formrule');

/**
 * Form Rule class for the Joomla Framework.
 *
 * @package     Joomla.Platform
 * @subpackage  Form
 * @since       11.1
 */
class JFormRulePwebGoogleAC extends JFormRule
{

    /**
     * Method to test the value.
     *
     * @param   SimpleXMLElement $element   The SimpleXMLElement object representing the <field /> tag for the form field object.
     * @param   mixed            $value     The form field value to validate.
     * @param   string           $group     The field name group control value. This acts as as an array container for the field.
     *                                      For example if the field has name="foo" and the group value is set to "bar" then the
     *                                      full field name would end up being "bar[foo]".
     * @param   Registry         $input     An optional Registry object with the entire data set to validate against the entire form.
     * @param   JForm            $form      The form object for which the field is being tested.
     *
     * @return  boolean  True if the value is valid, false otherwise.
     *
     * @since   11.1
     * @throws  UnexpectedValueException if rule is invalid.
     */
    public function test(SimpleXMLElement $element, $value, $group = null, JRegistry $input = null, JForm $form = null)
    {
        if ($value)
        {
            require_once JPATH_ROOT . '/modules/mod_pwebcontact/helpers/google.php';

            try
            {
                PwebcontactGoogleApi::getInstance()->setAccessCode($value);
            }
            catch (Exception $ex)
            {
                JFactory::getLanguage()->load('mod_pwebcontact_admin', JPATH_ROOT);
                JFactory::getApplication()->enqueueMessage(JText::sprintf('MOD_PWEBCONTACT_GOOGLE_API_ACCESS_CODE_ERROR', $ex->getMessage()), 'error');
            }
        }

        return true;
    }

}
