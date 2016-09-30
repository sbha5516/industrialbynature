<?php

/**
 * @version 3.3.4
 * @package PWebContact
 * @copyright © 2015 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('List');

/**
 * Api keys
 */
class JFormFieldPwebApikeys extends JFormFieldList
{

    protected $type = 'PwebApikeys';
    protected $lists = null;

    /**
     * Method to attach a JForm object to the field.
     *
     * @param   SimpleXMLElement  $element  The SimpleXMLElement object representing the <field /> tag for the form field object.
     * @param   mixed             $value    The form field value to validate.
     * @param   string            $group    The field name group control value. This acts as as an array container for the field.
     *                                      For example if the field has name="foo" and the group value is set to "bar" then the
     *                                      full field name would end up being "bar[foo]".
     *
     * @return  boolean  True on success.
     *
     * @since   11.1
     */
    public function setup(SimpleXMLElement $element, $value, $group = null)
    {
        $newsletter_type = strtolower($this->form->getField('newsletter_type', 'params')->value);

        if ($newsletter_type == 'mailchimp')
        {
            $options = array(
                'apikey'    => $this->form->getField($newsletter_type .'_apikey', 'params')->value
            );
            $this->getLists($newsletter_type, $options);
        }
        elseif ($newsletter_type == 'freshmail')
        {
            $options = array(
                'apikey'    => $this->form->getField($newsletter_type .'_apikey', 'params')->value,
                'secret'    => $this->form->getField($newsletter_type .'_secret', 'params')->value,
            );
            $this->getLists($newsletter_type, $options);
        }

        return parent::setup($element, $value, $group);

    }

    protected function getLists($newsletter_type, $options)
    {
        if (!file_exists(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/'. $newsletter_type .'.php'))
            return false;

        require_once JPATH_ROOT . '/modules/mod_pwebcontact/helpers/'. $newsletter_type .'.php';
        $class = 'modPwebContact' . ucfirst(strtolower($newsletter_type)) . 'Helper';
        $this->lists = call_user_func(array($class, 'getLists'), $options);
    }

    protected function getOptions()
    {
        $options = array();

        if (is_array($this->lists))
        {
            foreach ($this->lists as $key => $value)
            {
                $options[] = JHtml::_(
                    'select.option', json_encode(array($key => $value)),
                    JText::alt(trim((string) $value), preg_replace('/[^a-zA-Z0-9_\-]/', '_', $this->fieldname)), 'value', 'text',
                    false
                );
            }
        }

        reset($options);
        return $options;
    }

}
