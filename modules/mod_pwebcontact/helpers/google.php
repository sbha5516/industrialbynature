<?php

/**
 * @version    3.4.8
 * @package    PWebContact
 * @subpackage Google API v4 Integration
 * @copyright  © 2016 Perfect Web sp. z o.o., All rights reserved. http://www.perfect-web.co
 * @license    GNU General Public License http://www.gnu.org/licenses/gpl-3.0.html
 * @author     Piotr Moćko
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.file');

class PwebcontactGoogleApi extends JOAuth2Client
{

    protected static $instance = null;

    public static function getInstance()
    {
        // Automatically instantiate the singleton object if not already done.
        if (empty(self::$instance))
        {
            self::$instance = new PwebcontactGoogleApi();
        }
        return self::$instance;
    }

    /**
     * Constructor.
     *
     * @param   JRegistry        $options      JOAuth2Client options object
     * @param   JHttp            $http         The HTTP client object
     * @param   JInput           $input        The input object
     * @param   JApplicationWeb  $application  The application object
     *
     * @since   12.3
     */
    public function __construct(JRegistry $options = null, JHttp $http = null, JInput $input = null, JApplicationWeb $application = null)
    {
        parent::__construct($options, $http, $input, $application);

        if (!$this->getOption('clientid'))
        {
            $this->setOption('clientid', '932670599424-8u117up80ee81bpc8qfo72515nu3pp9j.apps.googleusercontent.com');
        }

        if (!$this->getOption('clientsecret'))
        {
            $this->setOption('clientsecret', 'xId_tnwHlJNErImkQwJdJlEe');
        }

        if (!$this->getOption('authurl'))
        {
            $this->setOption('authurl', 'https://accounts.google.com/o/oauth2/auth');
        }

        if (!$this->getOption('tokenurl'))
        {
            $this->setOption('tokenurl', 'https://accounts.google.com/o/oauth2/token');
        }

        if (!$this->getOption('tokenpath'))
        {
            $this->setOption('tokenpath', JPATH_ROOT . '/modules/mod_pwebcontact/form/fields/tokenData.json');
        }

        if (!$this->getOption('redirecturi'))
        {
            $this->setOption('redirecturi', 'urn:ietf:wg:oauth:2.0:oob');
        }

        if (!$this->getOption('requestparams'))
        {
            $this->setOption('requestparams', array());
        }

        $params = $this->getOption('requestparams');

        if (!array_key_exists('access_type', $params))
        {
            $params['access_type'] = 'offline';
        }

        if ($params['access_type'] == 'offline' && $this->getOption('userefresh') === null)
        {
            $this->setOption('userefresh', true);
        }

        if (!array_key_exists('approval_prompt', $params))
        {
            $params['approval_prompt'] = 'auto';
        }

        $this->setOption('requestparams', $params);
    }

    public function hasToken()
    {
        $token = $this->getToken();
        return (is_array($token) && !empty($token['access_token']) && !empty($token['refresh_token']));
    }

    /**
     * Get the access token from the JOAuth2Client instance.
     *
     * @return  array  The access token
     *
     * @since   12.3
     */
    public function getToken()
    {
        $token = parent::getToken();
        if (empty($token) && JFile::exists($this->getOption('tokenpath')))
        {
            $token = json_decode(file_get_contents($this->getOption('tokenpath')), true);
            $this->setOption('accesstoken', $token);
        }
        return $token;
    }

    /**
     * Set an option for the JOAuth2Client instance.
     *
     * @param   array  $value  The access token
     *
     * @return  JOAuth2Client  This object for method chaining
     *
     * @since   12.3
     */
    public function setToken($value)
    {
        // backup the old token
        $old_token = (array) $this->getOption('accesstoken');

        // set a new token
        parent::setToken($value);

        // get the new token
        $token = (array) $this->getOption('accesstoken');

        // make sure that refresh token was not removed
        if (!array_key_exists('refresh_token', $token) && array_key_exists('refresh_token', $old_token))
        {
            $token['refresh_token'] = $old_token['refresh_token'];
        }

        // save the new token
        $token = json_encode($token);
        JFile::write($this->getOption('tokenpath'), $token);

        return $this;
    }

    public function setAccessCode($code)
    {
        $this->input->set('code', $code);
        return $this->authenticate();
    }

    public function createAccessCodeUrl($scope = null)
    {
        return $this->getOption('authurl')
                . '?access_type=offline'
                . '&approval_prompt=force'
                . '&client_id=' . urlencode($this->getOption('clientid'))
                . '&redirect_uri=' . urlencode($this->getOption('redirecturi'))
                . '&response_type=code'
                . '&scope=' . urlencode($scope);
    }

    /**
     * Make a REST request
     *
     * @param   string  $url      The URL for the request.
     * @param   mixed   $data     The data to include in the request.
     * @param   array   $headers  The headers to send with the request.
     * @param   string  $method   The type of http request to send.
     *
     * @return  mixed  Data from Google.
     *
     * @since   12.3
     */
    public function makeRESTRequest($url, $data = null, $headers = array(), $method = 'get', $timeout = null)
    {
        if (!isset($headers['Content-Type']))
        {
            $headers['Content-Type'] = 'application/json; charset=UTF-8';
        }
        if (!isset($headers['Accept-Encoding']))
        {
            $headers['Accept-Encoding'] = 'gzip';
        }

        if (!empty($data) && !is_scalar($data))
        {
            $data = json_encode($data);
        }

        return $this->query($url, $data, $headers, $method);
    }

    public function addRowToSpreadsheet($spreadsheet_id, $sheet_id, $row_values = array())
    {
        $values = array();
        foreach ($row_values as $value)
        {
            $values[] = array(
                'userEnteredValue' => array(
                    (is_numeric($value) ? 'numberValue' : 'stringValue') => $value
                )
            );
        }

        $data = array(
            'requests' => array(
                0 => array(
                    'appendCells' => array(
                        'sheetId' => $sheet_id,
                        'fields' => 'userEnteredValue',
                        'rows' => array(
                            'values' => $values
                        )
                    )
                )
            )
        );

        return $this->makeRESTRequest(
                'https://sheets.googleapis.com/v4/spreadsheets/' . $spreadsheet_id . ':batchUpdate'
                , $data
                , array()
                , 'post'
        );
    }

}
