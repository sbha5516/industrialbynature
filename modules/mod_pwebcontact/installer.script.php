<?php

/**
 * @version 3.4.8
 * @package PWebContact
 * @copyright © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author Piotr Moćko
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');

class mod_pwebcontactInstallerScript
{

    protected $manifest = null;
    protected $old_manifest = null;
    protected $extension = null;

    /**
     * Constructor
     *
     * @param   JAdapterInstance  $adapter  The object responsible for running this script
     */
    public function __construct(JAdapterInstance $adapter)
    {
        
    }

    /**
     * Called before any type of action
     *
     * @param   string  $route  Which action is happening (install|uninstall|discover_install|update)
     * @param   JAdapterInstance  $adapter  The object responsible for running this script
     *
     * @return  boolean  True on success
     */
    public function preflight($route, JAdapterInstance $adapter)
    {
        $parent = $adapter->getParent();
        $this->manifest = $parent->getManifest();
        $this->loadExtensionFromManifest();

        if ($route == 'update' || $route == 'uninstall')
        {
            $this->loadExtensionId();
        }

        $this->loadExtensionManifestCache();
    }

    /**
     * Called after any type of action
     *
     * @param   string  $route  Which action is happening (install|uninstall|discover_install|update)
     * @param   JAdapterInstance  $adapter  The object responsible for running this script
     *
     * @return  boolean  True on success
     */
    public function postflight($route, JAdapterInstance $adapter)
    {
        $parent = $adapter->getParent();

        $dlid = null;
        $files = JFolder::files($parent->getPath('extension_root') . '/form', '^[a-f0-9]{25,32}$', false, true);
        if (count($files))
        {
            // get Download ID from old type of key
            $dlid = basename($files[0]);
            // delete old md5 files
            JFile::delete($files);
        }

        $update_site_exists = false;
        // Get all update sites from Perfect-Web.co
        $update_sites = $this->getUpdateSites();
        foreach ($update_sites as $update_site)
        {
            // Update DLID only if it is current extension
            if ($this->extension->element == $update_site->element AND $this->extension->type == $update_site->type)
            {
                $update_site_exists = true;
                $version = isset($this->manifest->version) ? (string) $this->manifest->version : null;
                $this->updateUpdateSite($update_site->id, $update_site->server, $version, $dlid);
            }
            // Update all other Perfect-Web.co extensions
            else
            {
                $this->updateUpdateSite($update_site->id, $update_site->server);
            }
        }

        // Create update site for current extension if does not exists
        if (!$update_site_exists)
        {
            $name = isset($this->manifest->name) ? (string) $this->manifest->name : 'Perfect Extension';
            $version = isset($this->manifest->version) ? (string) $this->manifest->version : null;
            $this->createUpdateSite($name, $version, $dlid);
        }
    }

    /**
     * Called on installation
     *
     * @param   JAdapterInstance  $adapter  The object responsible for running this script
     *
     * @return  boolean  True on success
     */
    public function install(JAdapterInstance $adapter)
    {
        if (version_compare(JVERSION, '3.0.0') == -1)
        {
            $this->installPwebJ3AUI();
        }
        elseif (version_compare(JVERSION, '3.1.4') == -1)
        {
            $this->installPwebJ3AUI('bootstrap');
        }
    }

    /**
     * Called on update
     *
     * @param   JAdapterInstance  $adapter  The object responsible for running this script
     *
     * @return  boolean  True on success
     */
    public function update(JAdapterInstance $adapter)
    {
        $db = JFactory::getDBO();

        if (version_compare(JVERSION, '3.0.0') == -1)
        {
            $this->installPwebJ3AUI();
        }
        elseif (version_compare(JVERSION, '3.1.4') == -1)
        {
            $this->installPwebJ3AUI('bootstrap');
        }

        if (version_compare($this->old_manifest->get('version', '3.0.0'), '3.0.0') == -1)
        {
            // upgrade options

            $query = $db->getQuery(true);
            $query->select('id, params')
                    ->from('#__modules')
                    ->where('module = ' . $db->quote('mod_pwebcontact'));
            $db->setQuery($query);

            try
            {
                $modules = $db->loadObjectList();
            }
            catch (Exception $e)
            {
                $modules = false;
            }

            if (is_array($modules))
            {
                foreach ($modules as $module)
                {
                    $params = new JRegistry($module->params);

                    // skip new configuration
                    if ($params->get('layout_type', false) !== false)
                        continue;

                    // toggler tab
                    $params->def('toggler_name', $params->get('toggle_button'));
                    $params->def('toggler_rotate', $params->get('toggle_rotate'));
                    $params->def('toggler_width', $params->get('style_btn_width'));
                    $params->def('toggler_height', $params->get('style_btn_height'));
                    $params->def('toggler_font_size', $params->get('style_font'));
                    $params->def('toggler_icon_gallery', $params->get('style_btn_icon', -1));
                    $params->def('toggler_icon', $params->get('style_btn_icon') ? 'gallery' : null);
                    $params->def('toggler_vertical', $params->get('toggle_vertical') ? 1 : 0);

                    // upload
                    if ($params->get('show_upload') AND $params->get('require_upload'))
                        $params->set('show_upload', 2);
                    $params->set('upload_size_limit', round($params->get('upload_size_limit', 1024) / 1024, 2));
                    $params->def('upload_files_limit', $params->get('upload_file_limit'));
                    $params->def('upload_show_limits', $params->get('upload_show_size_limit'));
                    $params->set('upload_allowed_ext', str_replace(',', '|', $params->get('upload_allowed_ext')));

                    // styles
                    $params->def('text_color', $params->get('style_color'));
                    $params->def('form_font_size', $params->get('style_font'));
                    $params->def('bg_color', $params->get('style_bg'));
                    $params->def('bg_opacity', $params->get('style_opacity'));

                    // labels
                    if ($params->get('layout') == 'static.static')
                        $params->def('labels_position', 'above');

                    // modal styles
                    $params->set('modal_opacity', $params->get('modal_opacity', -1));
                    if (strpos($params->get('layout'), 'modal') !== false)
                    {
                        if ($params->get('modal_width') > 0)
                            $params->def('form_width', $params->get('modal_width') . 'px');
                        if ($params->get('modal_image'))
                        {
                            $params->def('bg_image', $params->get('modal_image'));
                            $params->def('bg_padding_position', 'left');
                            $params->def('bg_padding', '200px');
                        }
                    }

                    // auto-popup on page load
                    if ($params->get('open_form'))
                    {
                        $params->def('open_toggler', 1);
                        $params->def('open_count', 0);
                    }

                    // redirect disabled
                    if (!$params->get('redirect_enable'))
                    {
                        $params->set('redirect_itemid', '');
                        $params->set('redirect_url', '');
                    }

                    // redirect delay
                    if (($delay = (int) $params->get('redirect_delay')))
                    {
                        $params->set('redirect_delay', round($delay / 1000));
                    }

                    // tracking scripts
                    $oncomplete = array();
                    if ($params->get('analytics_tracker_enabled'))
                    {
                        if ($params->get('analytics_tracker_type', 1))
                        {
                            if ($params->get('analytics_tracker_page'))
                                $oncomplete[] = '_gaq.push([\'_trackPageview\', \'' . $params->get('analytics_tracker_page') . '\']);';
                            if ($params->get('analytics_tracker_event'))
                                $oncomplete[] = '_gaq.push([\'_trackEvent\', ' . $params->get('analytics_tracker_event') . ']);';
                        }
                        else
                        {
                            if ($params->get('analytics_tracker_page'))
                                $oncomplete[] = 'pageTracker._trackPageview(\'' . $params->get('analytics_tracker_page') . '\');';
                            if ($params->get('analytics_tracker_event'))
                                $oncomplete[] = 'pageTracker._trackEvent(' . $params->get('analytics_tracker_event') . ');';
                        }
                    }
                    $oncomplete[] = $params->get('custom_script');
                    $params->def('oncomplete', implode("\r\n", $oncomplete));

                    // integrations
                    if ($params->get('comprofiler') AND $params->get('comprofiler_userprofile'))
                        $params->set('comprofiler', 2);
                    if ($params->get('jomsocial') AND $params->get('jomsocial_userprofile'))
                        $params->set('jomsocial', 2);
                    if ($params->get('sobipro') AND $params->get('sobipro_entry'))
                        $params->set('sobipro', 2);

                    // layout
                    switch (substr($params->get('layout'), 0, strpos($params->get('layout'), '.')))
                    {
                        case 'modal':
                            $params->def('layout_type', 'modal');
                            break;
                        case 'static':
                            $params->def('layout_type', 'static');
                            $params->def('position', 'static:');
                            break;
                        default:
                            $params->def('layout_type', 'slidebox');
                    }

                    if ($params->get('layout_type') == 'slidebox' OR $params->get('layout_type') == 'modal')
                    {
                        switch (substr($params->get('layout'), strpos($params->get('layout'), '-')))
                        {
                            case 'right':
                                $params->def('position', 'right:top');
                                $params->def('offset', $params->get('style_top'));
                                break;
                            case 'top':
                                $params->def('position', 'top:left');
                                $params->def('offset', $params->get('style_left'));
                                break;
                            case 'bottom':
                                $params->def('position', 'bottom:left');
                                $params->def('offset', $params->get('style_left'));
                                break;
                            case 'static':
                                $params->def('position', 'static:');
                                break;
                            default:
                                $params->def('layout_type', 'left:top');
                                $params->def('offset', $params->get('style_top'));
                        }
                    }

                    $params->set('layout', 'default');

                    // fields
                    $fields = array();
                    if ($params->get('pretext'))
                    {
                        $field = new stdClass;
                        $field->type = 'separator_text';
                        $field->name = $params->get('pretext');
                        $fields[] = $field;
                    }
                    $field = new stdClass;
                    $field->type = 'separator_system_top';
                    $fields[] = $field;

                    for ($i = 1; $i <= $params->get('fields_before', 0); $i++)
                    {
                        switch ($params->get('field_' . $i . '_type'))
                        {
                            case 'select':
                                $type = 'select';
                                $field_params = 'MOD_PWEBCONTACT_SELECT';
                                break;
                            case 'multiple':
                                $type = 'multiple';
                                $field_params = 4;
                                break;
                            case 'radio':
                                $type = 'radio';
                                $field_params = 1;
                                break;
                            case 'checkbox':
                                $type = 'checkboxes';
                                $field_params = 1;
                                break;
                            case 'textarea':
                                $type = 'textarea';
                                $field_params = 5;
                                break;
                            case 'calendar':
                                $type = 'date';
                                $field_params = '%d-%m-%Y';
                                break;
                            case 'text':
                                $type = 'text';
                                $field_params = '';
                                break;
                            default:
                                $type = false;
                        }
                        if ($type)
                        {
                            $field = new stdClass;
                            $field->type = $type;
                            $field->name = $params->get('field_' . $i . '_label');
                            $field->alias = 'field_' . $i;
                            $field->values = $params->get('field_' . $i . '_values');
                            $field->tooltip = '';
                            $field->params = $field_params;
                            $field->required = $params->get('field_' . $i . '_require') == 1;
                            $fields[] = $field;
                        }
                    }

                    if ($params->get('show_name'))
                    {
                        $field = new stdClass;
                        $field->type = 'name';
                        $field->name = 'MOD_PWEBCONTACT_NAME';
                        $field->alias = 'name';
                        $field->values = '';
                        $field->tooltip = '';
                        $field->params = '';
                        $field->required = $params->get('require_name') == 1;
                        $fields[] = $field;
                    }
                    if ($params->get('show_email'))
                    {
                        $field = new stdClass;
                        $field->type = 'email';
                        $field->name = 'MOD_PWEBCONTACT_EMAIL';
                        $field->alias = 'email';
                        $field->values = '';
                        $field->tooltip = '';
                        $field->params = '';
                        $field->required = $params->get('require_email') == 1;
                        $fields[] = $field;
                    }
                    if ($params->get('show_phone'))
                    {
                        $field = new stdClass;
                        $field->type = 'phone';
                        $field->name = 'MOD_PWEBCONTACT_PHONE';
                        $field->alias = 'phone';
                        $field->values = '';
                        $field->tooltip = '';
                        $field->params = '/[\\d\\-\\+() ]+/';
                        $field->required = $params->get('require_phone') == 1;
                        $fields[] = $field;
                    }

                    while ($params->get('field_' . $i . '_require', false) !== false)
                    {

                        switch ($params->get('field_' . $i . '_type'))
                        {
                            case 'select':
                                $type = 'select';
                                $field_params = 'MOD_PWEBCONTACT_SELECT';
                                break;
                            case 'multiple':
                                $type = 'multiple';
                                $field_params = 4;
                                break;
                            case 'radio':
                                $type = 'radio';
                                $field_params = 1;
                                break;
                            case 'checkbox':
                                $type = 'checkboxes';
                                $field_params = 1;
                                break;
                            case 'textarea':
                                $type = 'textarea';
                                $field_params = 5;
                                break;
                            case 'calendar':
                                $type = 'date';
                                $field_params = '%d-%m-%Y';
                                break;
                            case 'text':
                                $type = 'text';
                                $field_params = '';
                                break;
                            default:
                                $type = false;
                        }
                        if ($type)
                        {
                            $field = new stdClass;
                            $field->type = $type;
                            $field->name = $params->get('field_' . $i . '_label');
                            $field->alias = 'field_' . $i;
                            $field->values = $params->get('field_' . $i . '_values');
                            $field->tooltip = '';
                            $field->params = $field_params;
                            $field->required = $params->get('field_' . $i . '_require') == 1;
                            $fields[] = $field;
                        }

                        $i++;
                    }

                    if ($params->get('show_message'))
                    {
                        $field = new stdClass;
                        $field->type = 'textarea';
                        $field->name = 'MOD_PWEBCONTACT_MESSAGE';
                        $field->alias = 'message';
                        $field->values = '';
                        $field->tooltip = '';
                        $field->params = '3|' . $params->get('chars_limit', 0);
                        $field->required = $params->get('require_message') == 1;
                        $fields[] = $field;
                    }

                    $field = new stdClass;
                    $field->type = 'separator_upload';
                    $fields[] = $field;

                    if ($params->get('show_agree'))
                    {
                        $field = new stdClass;
                        $field->type = 'checkbox';
                        $field->name = $params->get('agree_label', 'Agree to terms');
                        $field->alias = 'agree';
                        $field->values = 'JYes';
                        $field->tooltip = '';
                        $field->params = $params->get('agree_url');
                        $field->required = true;
                        $fields[] = $field;
                    }

                    $field = new stdClass;
                    $field->type = 'separator_system_bottom';
                    $fields[] = $field;

                    $params->def('fields', json_encode($fields));


                    // update params in database
                    $module->params = $params->toString();

                    $query->clear()
                            ->update('#__modules')
                            ->set('params = ' . $db->quote($db->escape($module->params)))
                            ->where('id = ' . $module->id);
                    $db->setQuery($query);

                    try
                    {
                        $db->execute();
                    }
                    catch (Exception $e)
                    {
                        
                    }
                }
            }


            // remove old update server from module version 1.5 - 2.1.3
            $this->removeUpdateSite('http://www.perfect-web.pl/updates/mod_pwebcontact-update.xml');


            // remove old files
            $media_files = array(
                'css/debug.css',
                'css/tooltip.css',
                'email_tmpl/admin_html.php',
                'email_tmpl/admin_text.php',
                'email_tmpl/user_html.php',
                'email_tmpl/user_text.php',
                'images/contact.jpg',
                'images/fail.png',
                'images/show-hide.png',
                'images/success.png',
                'js/mootools.pwebcontact.js',
                'js/uploader.js'
            );
            $media_folders = array(
                'css/default',
                'css/general',
                'css/modal',
                'css/static',
                'images/toggler'
            );
            $module_files = array(
                'email_template.php',
                'email_template_html.php',
                'form/fields/logo.png',
                'form/fields/pwebsnippets.php',
                'form/fields/pwebtoolbar.php',
                'tmpl/modal.php',
                'tmpl/static.php'
            );
            $module_folders = array(
                'css',
                'email_tmpl',
                'fields',
                'form/elements',
                'helpers15',
                'images',
                'js'
            );

            foreach ($media_files as $file)
                if (JFile::exists(JPATH_ROOT . '/media/mod_pwebcontact/' . $file))
                    JFile::delete(JPATH_ROOT . '/media/mod_pwebcontact/' . $file);
            foreach ($media_folders as $folder)
                if (JFolder::exists(JPATH_ROOT . '/media/mod_pwebcontact/' . $folder))
                    JFolder::delete(JPATH_ROOT . '/media/mod_pwebcontact/' . $folder);
            foreach ($module_files as $file)
                if (JFile::exists(JPATH_ROOT . '/modules/mod_pwebcontact/' . $file))
                    JFile::delete(JPATH_ROOT . '/modules/mod_pwebcontact/' . $file);
            foreach ($module_folders as $folder)
                if (JFolder::exists(JPATH_ROOT . '/modules/mod_pwebcontact/' . $folder))
                    JFolder::delete(JPATH_ROOT . '/modules/mod_pwebcontact/' . $folder);
        }

        if (version_compare($this->old_manifest->get('version', '3.0.0'), '3.1.0') == -1)
        {
            if (JFile::exists(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/helper.php'))
                JFile::delete(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/helper.php');
        }

        if (version_compare($this->old_manifest->get('version', '3.0.0'), '3.2.0') == -1)
        {
            if (JFile::exists(JPATH_ROOT . '/media/mod_pwebcontact/js/admin.js'))
                JFile::delete(JPATH_ROOT . '/media/mod_pwebcontact/js/admin.js');
        }

        if (version_compare($this->old_manifest->get('version', '3.0.0'), '3.2.4') == -1)
        {
            // remove old update server from module version 2.2.0 - 3.2.3
            $this->removeUpdateSite('http://www.perfect-web.co/updates/mod_pwebcontact-update.xml');
        }

        if (version_compare($this->old_manifest->get('version', '3.0.0'), '3.3.0') == -1)
        {
            // remove old update server from module version 3.2.4 - 3.2.22
            $this->removeUpdateSite('%//www.perfect-web.co/index.php?option=com_pwebshop%');

            if (JFile::exists(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/updateserver.php'))
                JFile::delete(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/updateserver.php');
            if (JFile::exists(JPATH_ROOT . '/modules/mod_pwebcontact/form/rules/pwebupdatestream.php'))
                JFile::delete(JPATH_ROOT . '/modules/mod_pwebcontact/form/rules/pwebupdatestream.php');

            // fix write permissions to cache and upload folders
            $paths = JFolder::folders(JPATH_ROOT . '/media/mod_pwebcontact/upload/', '^\d+$', false, true);
            if (empty($paths))
            {
                $paths = array();
            }
            $paths[] = JPATH_ROOT . '/cache/mod_pwebcontact';
            foreach ($paths as $path)
            {
                if (JPath::canChmod($path))
                {
                    JPath::setPermissions($path, null, '0755');
                    if (!is_writable($path))
                    {
                        JPath::setPermissions($path, null, '0777');
                    }
                }
            }
        }

        if (version_compare($this->old_manifest->get('version', '3.0.0'), '3.4.8') == -1)
        {
            if (JFile::exists(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/googledocs.php'))
                JFile::delete(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/googledocs.php');
            if (JFolder::exists(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/vendor'))
                JFolder::delete(JPATH_ROOT . '/modules/mod_pwebcontact/helpers/vendor');
        }

        if (JFile::exists(JPATH_ROOT . '/mod_pwebcontact_ajax.php'))
        {
            JFile::delete(JPATH_ROOT . '/mod_pwebcontact_ajax.php');
            if (!is_file(JPATH_ROOT . '/components/com_ajax/ajax.php'))
                JFile::copy(JPATH_ROOT . '/modules/mod_pwebcontact/ajax.php', JPATH_ROOT . '/mod_pwebcontact_ajax.php');
        }

        if (JFile::exists(JPATH_ROOT . '/media/mod_pwebcontact/js/jquery.pwebcontact.js'))
            JFile::delete(JPATH_ROOT . '/media/mod_pwebcontact/js/jquery.pwebcontact.js');
    }

    /**
     * Called on uninstallation
     *
     * @param   JAdapterInstance  $adapter  The object responsible for running this script
     */
    public function uninstall(JAdapterInstance $adapter)
    {
        
    }

    protected function installPwebJ3AUI($msg = 'jquery')
    {
        if (!is_file(JPATH_ADMINISTRATOR . '/manifests/packages/pkg_pwebj3aiui.xml'))
        {
            $app = JFactory::getApplication();
            $app->enqueueMessage(
                    'Install also required plugin'
                    . ' <a href="https://www.perfect-web.co/joomla-extensions/62-jquery-bootstrap-in-joomla-25" target="_blank">Perfect Joomla! 3 User Interface</a>'
                    . ($msg == 'jquery' ? ' to extend your Joomla! with native support of jQuery and Bootstrap from Joomla! 3' : ' to update Bootstrap to version 2.3.2 from Joomla! 3.1.4+ to fix Lightbox bug'
                    ) . '. <a href="javascript:void()" onclick="document.getElementById(\'install_url\').value=\'https://www.perfect-web.co/downloads/joomla-3-ui-libraries-for-joomla-25/latest/pkg_pwebj3aiui-zip?format=raw\';Joomla.submitbutton4()">'
                    . 'Click here</a> to install.'
                    , 'warning');
        }
    }

    protected function removeUpdateSite($location = null)
    {
        $db = JFactory::getDBO();

        $query = $db->getQuery(true);
        $query->select('update_site_id')
                ->from('#__update_sites')
                ->where('location LIKE ' . $db->quote($db->escape($location)));
        $db->setQuery($query);

        try
        {
            $update_site_id = (int) $db->loadResult();
        }
        catch (Exception $e)
        {
            $update_site_id = false;
        }

        if ($update_site_id)
        {
            $query->clear()
                    ->delete('#__update_sites_extensions')
                    ->where('update_site_id = ' . $update_site_id);
            $db->setQuery($query);
            try
            {
                $db->execute();
            }
            catch (Exception $e)
            {
                
            }

            $query->clear()
                    ->delete('#__update_sites')
                    ->where('update_site_id = ' . $update_site_id);
            $db->setQuery($query);
            try
            {
                $db->execute();
            }
            catch (Exception $e)
            {
                
            }
        }
    }

    /**
     * Get Akeeba Release System update stream id
     *
     * @return int
     */
    protected function getUpdateStreamId()
    {
        return isset($this->manifest->perfect_update_id) ? (int) $this->manifest->perfect_update_id : 0;
    }

    protected function loadExtensionFromManifest()
    {
        if (!isset($this->extension) || empty($this->extension))
        {
            $this->extension = JTable::getInstance('extension');

            $this->extension->type = strtolower((string) $this->manifest->attributes()->type);
            $this->extension->folder = isset($this->manifest->attributes()->group) ? strtolower((string) $this->manifest->attributes()->group) : '';
            $this->extension->client_id = 0;

            if ($cname = (string) $this->manifest->attributes()->client)
            {
                // Attempt to map the client to a base path
                $client = JApplicationHelper::getClientInfo($cname, true);
                if ($client !== false)
                {
                    $this->extension->client_id = $client->id;
                }
            }

            $type = $this->extension->type;
            if ($type == 'component')
            {
                $name = strtolower(JFilterInput::getInstance()->clean((string) $this->manifest->name, 'cmd'));
                if (substr($name, 0, 4) == 'com_')
                {
                    $this->extension->element = $name;
                }
                else
                {
                    $this->extension->element = 'com_' . $name;
                }
            }
            elseif ($type == 'package')
            {
                $this->extension->element = 'pkg_' . strtolower(JFilterInput::getInstance()->clean((string) $this->manifest->packagename, 'cmd'));
            }
            elseif ($type == 'module' || $type == 'plugin')
            {
                if (count($this->manifest->files->children()))
                {
                    foreach ($this->manifest->files->children() as $file)
                    {
                        if ((string) $file->attributes()->$type)
                        {
                            $this->extension->element = strtolower((string) $file->attributes()->$type);
                            break;
                        }
                    }
                }
            }

            if (!$this->extension->element)
            {
                $this->extension->element = strtolower(str_replace('InstallerScript', '', __CLASS__));
            }
        }
    }

    protected function loadExtensionId()
    {
        if (!isset($this->extension->extension_id) || empty($this->extension->extension_id))
        {
            $db = JFactory::getDBO();
            $query = $db->getQuery(true)
                    ->select('extension_id')
                    ->from('#__extensions')
                    ->where(array(
                $db->quoteName('type') . ' = ' . $db->quote($this->extension->type),
                $db->quoteName('element') . ' = ' . $db->quote($this->extension->element),
                $db->quoteName('folder') . ' = ' . $db->quote($this->extension->folder),
                $db->quoteName('client_id') . ' = ' . $db->quote($this->extension->client_id)
            ));

            $db->setQuery($query);
            try
            {
                $this->extension->extension_id = (int) $db->loadResult();
            }
            catch (Exception $e)
            {
                $this->extension->extension_id = 0;
            }
        }

        return ($this->extension->extension_id > 0);
    }

    protected function loadExtensionManifestCache()
    {
        if (!isset($this->old_manifest) || empty($this->old_manifest))
        {
            jimport('joomla.registry.registry');

            $db = JFactory::getDBO();
            $query = $db->getQuery(true)
                    ->select('manifest_cache')
                    ->from('#__extensions');

            if ($this->extension->extension_id)
            {
                $query->where($db->quoteName('extension_id') . ' = ' . (int) $this->extension->extension_id);
            }
            else
            {
                $query->where(array(
                    $db->quoteName('type') . ' = ' . $db->quote($this->extension->type),
                    $db->quoteName('element') . ' = ' . $db->quote($this->extension->element),
                    $db->quoteName('folder') . ' = ' . $db->quote($this->extension->folder),
                    $db->quoteName('client_id') . ' = ' . $db->quote($this->extension->client_id)
                ));
            }

            $db->setQuery($query);
            try
            {
                $manifest_cache = $db->loadResult();
            }
            catch (Exception $e)
            {
                $manifest_cache = null;
            }

            $this->old_manifest = new JRegistry($manifest_cache);
        }
    }

    protected function getUpdateSites()
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);

        $query->select('us.update_site_id AS id, ' . (version_compare(JVERSION, '3.2.2', '>=') ? 'us.extra_query' : 'us.location') . ' AS server'
                        . ', e.type, e.element, e.folder, e.client_id AS client')
                ->from('#__update_sites_extensions AS ue')
                ->join('LEFT', '#__extensions AS e ON ue.extension_id = e.extension_id')
                ->join('INNER', '#__update_sites AS us ON us.update_site_id = ue.update_site_id')
                ->where('us.location LIKE ' . $db->quote('%'.$db->escape('://www.perfect-web.co/index.php?option=com_ars&view=update&task=stream&format=xml&id=').'%', false));

        $db->setQuery($query);
        try
        {
            $update_sites = $db->loadObjectList();
        }
        catch (Exception $e)
        {
            $update_sites = null;
        }

        return $update_sites ? $update_sites : array();
    }

    protected function updateUpdateSite($update_site_id, $url_query, $version = null, $dlid = null)
    {
        $db = JFactory::getDBO();

        $update_site = new stdClass();
        $update_site->update_site_id = $update_site_id;

        //parse url of extra_query ( basically extracting vars )
        $url = parse_url($url_query);

        if (version_compare(JVERSION, '3.2.2', '>='))
        {
            $url_query = isset($url['path']) ? $url['path'] : '';
        }
        else
        {
            $url_query = isset($url['query']) ? $url['query'] : '';
        }

        parse_str($url_query, $url_vars);

        if ($version !== null)
            $url_vars['version'] = $version;

        $url_vars['jversion'] = JVERSION;
        $url_vars['host'] = JUri::root();

        if ($dlid !== null)
        {
            if (isset($url_vars['dlid']) AND $url_vars['dlid'] != $dlid)
            {
                // purge updates cache after changing Download ID
                $query = $db->getQuery(true)
                        ->delete('#__updates')
                        ->where('update_site_id = ' . (int) $update_site_id);
                $db->setQuery($query);
                try
                {
                    $db->execute();
                }
                catch (Exception $e)
                {
                    
                }
            }
            $url_vars['dlid'] = $dlid;
        }

        if (version_compare(JVERSION, '3.2.2', '>='))
        {
            $url['path'] = http_build_query($url_vars);
            $update_site->extra_query = $url['path'];
        }
        else
        {
            $url['query'] = http_build_query($url_vars);
            $update_site->location = 'https://' . $url['host'] . $url['path'] . '?' . $url['query'];
        }

        try
        {
            return $db->updateObject('#__update_sites', $update_site, 'update_site_id');
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    protected function createUpdateSite($name, $version = null, $dlid = null)
    {
        if (!$this->loadExtensionId() || !($update_stream_id = $this->getUpdateStreamId()))
        {
            return false;
        }

        $db = JFactory::getDBO();

        $update_site = new stdClass();
        $update_site->name = $name;
        $update_site->type = 'extension';
        $update_site->enabled = 1;
        $update_site->location = 'https://www.perfect-web.co/index.php?option=com_ars&view=update&task=stream&format=xml&id=' . $update_stream_id;

        $url_query = array(
            'version' => $version ? $version : '1.0.0',
            'jversion' => JVERSION,
            'host' => JUri::root()
        );
        if ($dlid !== null)
            $url_query['dlid'] = $dlid;

        if (version_compare(JVERSION, '3.2.2', '>='))
        {
            $update_site->extra_query = http_build_query($url_query);
        }
        else
        {
            $update_site->location .= '&' . http_build_query($url_query);
        }

        try
        {
            $db->insertObject('#__update_sites', $update_site, 'update_site_id');

            $update_site_extension = new stdClass();
            $update_site_extension->update_site_id = $update_site->update_site_id;
            $update_site_extension->extension_id = $this->extension->extension_id;
            $db->insertObject('#__update_sites_extensions', $update_site_extension, 'update_site_id');
        }
        catch (Exception $e)
        {
            return false;
        }
        return true;
    }

}
