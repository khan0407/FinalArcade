<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin is used to access box.net repository
 *
 * @since 2.0
 * @package    repository_boxnet
 * @copyright  2010 Dongsheng Cai {@link http://dongsheng.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once($CFG->dirroot . '/repository/lib.php');
require_once($CFG->libdir . '/boxlib.php');

/**
 * repository_boxnet class implements box.net client
 *
 * @since 2.0
 * @package    repository_boxnet
<<<<<<< HEAD
 * @copyright  2009 Dongsheng Cai {@link http://dongsheng.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class repository_boxnet extends repository {
    private $boxclient;
=======
 * @copyright  2010 Dongsheng Cai {@link http://dongsheng.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class repository_boxnet extends repository {

    /** @const MANAGE_URL Manage URL. */
    const MANAGE_URL = 'https://app.box.com/files';

    /** @const SESSION_PREFIX Key used to store information in the session. */
    const SESSION_PREFIX = 'repository_boxnet';

    /** @var string Client ID */
    protected $clientid;

    /** @var string Client secret */
    protected $clientsecret;

    /** @var string Access token */
    protected $accesstoken;

    /** @var object Box.net object */
    protected $boxnetclient;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0

    /**
     * Constructor
     *
     * @param int $repositoryid
     * @param stdClass $context
     * @param array $options
     */
    public function __construct($repositoryid, $context = SYSCONTEXTID, $options = array()) {
        parent::__construct($repositoryid, $context, $options);
<<<<<<< HEAD
        $this->api_key = $this->get_option('api_key');
        $this->setting_prefix = 'boxnet_';

        $this->auth_token = get_user_preferences($this->setting_prefix.'_auth_token', '');
        $this->logged = false;
        if (!empty($this->auth_token)) {
            $this->logged = true;
        }
        // already logged
        if(!empty($this->logged)) {
            if(empty($this->boxclient)) {
                $this->boxclient = new boxclient($this->api_key, $this->auth_token);
            }
        } else {
            $this->boxclient = new boxclient($this->api_key);
        }
    }

    /**
     * check if user logged
     *
     * @return boolean
     */
    public function check_login() {
        return $this->logged;
    }

    /**
     * reset auth token
     *
     * @return string
     */
    public function logout() {
        // reset auth token
        set_user_preference($this->setting_prefix . '_auth_token', '');
        return $this->print_login();
    }

    /**
     * Save settings
     *
     * @param array $options
     * @return mixed
     */
    public function set_option($options = array()) {
        if (!empty($options['api_key'])) {
            set_config('api_key', trim($options['api_key']), 'boxnet');
        }
        unset($options['api_key']);
        $ret = parent::set_option($options);
        return $ret;
    }

    /**
     * Get settings
     *
     * @param string $config
     * @return mixed
     */
    public function get_option($config = '') {
        if($config==='api_key') {
            return trim(get_config('boxnet', 'api_key'));
        } else {
            $options['api_key'] = trim(get_config('boxnet', 'api_key'));
        }
        $options = parent::get_option($config);
        return $options;
=======

        $clientid = get_config('boxnet', 'clientid');
        $clientsecret = get_config('boxnet', 'clientsecret');
        $returnurl = new moodle_url('/repository/repository_callback.php');
        $returnurl->param('callback', 'yes');
        $returnurl->param('repo_id', $this->id);
        $returnurl->param('sesskey', sesskey());

        $this->boxnetclient = new boxnet_client($clientid, $clientsecret, $returnurl, '');
    }

    /**
     * Construct a breadcrumb from a path.
     *
     * @param string $fullpath Path containing multiple parts separated by slashes.
     * @return array Array expected to be generated in {@link self::get_listing()}.
     */
    protected function build_breadcrumb($fullpath) {
        $breadcrumb = array(array(
            'name' => get_string('pluginname', 'repository_boxnet'),
            'path' => ''
        ));
        $breadcrumbpath = '';
        $crumbs = explode('/', $fullpath);
        foreach ($crumbs as $crumb) {
            if (empty($crumb)) {
                // That is probably the root crumb, we've already added it.
                continue;
            }
            list($unused, $tosplit) = explode(':', $crumb, 2);
            if (strpos($tosplit, '|') !== false) {
                list($id, $crumbname) = explode('|', $tosplit, 2);
            } else {
                $crumbname = $tosplit;
            }
            $breadcrumbpath .= '/' . $crumb;
            $breadcrumb[] = array(
                'name' => urldecode($crumbname),
                'path' => $breadcrumbpath
            );
        }
        return $breadcrumb;
    }

    /**
     * Build a part of the path.
     *
     * This is used to construct the path that the user is currently browsing.
     * It must contain a 'type', and a 'value'. Then it can also contain a
     * 'name' which is very useful to prevent extra queries to get the name only.
     *
     * See {@link self::split_part} to extra the information from a part.
     *
     * @param string $type Type of part, typically 'folder' or 'search'.
     * @param string $value The value of the part, eg. a folder ID or search terms.
     * @param string $name The name of the part.
     * @return string type:value or type:value|name
     */
    protected function build_part($type, $value, $name = '') {
        $return = $type . ':' . urlencode($value);
        if ($name !== '') {
            $return .= '|' . urlencode($name);
        }
        return $return;
    }

    /**
     * Extract information from a part of path.
     *
     * @param string $part value generated from {@link self::build_parth()}.
     * @return array containing type, value and name.
     */
    protected function split_part($part) {
        list($type, $tosplit) = explode(':', $part);
        $name = '';
        if (strpos($tosplit, '|') !== false) {
            list($value, $name) = explode('|', $tosplit, 2);
        } else {
            $value = $tosplit;
        }
        return array($type, urldecode($value), urldecode($name));
    }

    /**
     * check if user logged
     *
     * @return boolean
     */
    public function check_login() {
        return $this->boxnetclient->is_logged_in();
    }

    /**
     * reset auth token
     *
     * @return string
     */
    public function logout() {
        if ($this->check_login()) {
            $this->boxnetclient->log_out();
        }
        return $this->print_login();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }

    /**
     * Search files from box.net
     *
     * @param string $search_text
     * @return mixed
     */
    public function search($search_text, $page = 0) {
<<<<<<< HEAD
        global $OUTPUT;
        $list = array();
        $ret  = array();
        $tree = $this->boxclient->getAccountTree();
        if (!empty($tree)) {
            $filenames = $tree['file_name'];
            $fileids   = $tree['file_id'];
            $filesizes = $tree['file_size'];
            $filedates = $tree['file_date'];
            $fileicon  = $tree['thumbnail'];
            foreach ($filenames as $n=>$v){
                if(strstr(strtolower($v), strtolower($search_text)) !== false) {
                    $list[] = array('title'=>$v,
                            'size'=>$filesizes[$n],
                            'date'=>$filedates[$n],
                            'source'=>'https://www.box.com/api/1.0/download/'
                                .$this->auth_token.'/'.$fileids[$n],
                            'thumbnail' => $OUTPUT->pix_url(file_extension_icon($v, 90))->out(false));
                }
            }
        }
        $ret['list'] = array_filter($list, array($this, 'filter'));
        return $ret;
=======
        return $this->get_listing($this->build_part('search', $search_text));
    }

    /**
     * Downloads a repository file and saves to a path.
     *
     * @param string $ref reference to the file
     * @param string $filename to save file as
     * @return array
     */
    public function get_file($ref, $filename = '') {
        $ref = unserialize(self::convert_to_valid_reference($ref));
        $path = $this->prepare_file($filename);
        if (!empty($ref->downloadurl)) {
            $c = new curl();
            $result = $c->download_one($ref->downloadurl, null, array('filepath' => $filename,
                'timeout' => self::GETFILE_TIMEOUT, 'followlocation' => true));
            $info = $c->get_info();
            if ($result !== true || !isset($info['http_code']) || $info['http_code'] != 200) {
                throw new moodle_exception('errorwhiledownload', 'repository', '', $result);
            }
        } else {
            if (!$this->boxnetclient->download_file($ref->fileid, $path)) {
                throw new moodle_exception('cannotdownload', 'repository');
            }
        }
        return array('path' => $path);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }

    /**
     * Get file listing
     *
     * @param string $path
     * @param string $page
     * @return mixed
     */
<<<<<<< HEAD
    public function get_listing($path = '/', $page = ''){
        $list = array();
        $ret  = array();
        $ret['list'] = array();
        $tree = $this->boxclient->getfiletree($path);
        $ret['manage'] = 'http://www.box.com/files';
        $ret['path'] = array(array('name'=>'Root', 'path'=>0));
        if(!empty($tree)) {
            $ret['list'] = array_filter($tree, array($this, 'filter'));
        }
=======
    public function get_listing($fullpath = '', $page = ''){
        global $OUTPUT;

        $ret = array();
        $ret['list'] = array();
        $ret['manage'] = self::MANAGE_URL;
        $ret['dynload'] = true;

        $crumbs = explode('/', $fullpath);
        $path = array_pop($crumbs);

        if (empty($path)) {
            $type = 'folder';
            $pathid = 0;
            $pathname = get_string('pluginname', 'repository_boxnet');
        } else {
            list($type, $pathid, $pathname) = $this->split_part($path);
        }

        $ret['path'] = $this->build_breadcrumb($fullpath);
        $folders = array();
        $files = array();

        if ($type == 'search') {
            $result = $this->boxnetclient->search($pathname);
        } else {
            $result = $this->boxnetclient->get_folder_items($pathid);
        }
        foreach ($result->entries as $item) {
            if ($item->type == 'folder') {
                $folders[$item->name . ':' . $item->id] = array(
                    'title' => $item->name,
                    'path' => $fullpath . '/' . $this->build_part('folder', $item->id, $item->name),
                    'date' => strtotime($item->modified_at),
                    'thumbnail' => $OUTPUT->pix_url(file_folder_icon(64))->out(false),
                    'thumbnail_height' => 64,
                    'thumbnail_width' => 64,
                    'children' => array(),
                    'size' => $item->size,
                );
            } else {
                $files[$item->name . ':' . $item->id] = array(
                    'title' => $item->name,
                    'source' => $this->build_part('file', $item->id, $item->name),
                    'size' => $item->size,
                    'date' => strtotime($item->modified_at),
                    'thumbnail' => $OUTPUT->pix_url(file_extension_icon($item->name, 64))->out(false),
                    'thumbnail_height' => 64,
                    'thumbnail_width' => 64,
                    'author' => $item->owned_by->name,
                );
            }
        }

        collatorlib::ksort($folders, collatorlib::SORT_NATURAL);
        collatorlib::ksort($files, collatorlib::SORT_NATURAL);
        $ret['list'] = array_merge($folders, $files);
        $ret['list'] = array_filter($ret['list'], array($this, 'filter'));

>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        return $ret;
    }

    /**
     * Return login form
     *
     * @return array
     */
    public function print_login(){
<<<<<<< HEAD
        $t = $this->boxclient->getTicket();
        if ($this->options['ajax']) {
            $popup_btn = new stdClass();
            $popup_btn->type = 'popup';
            $popup_btn->url = ' https://www.box.com/api/1.0/auth/' . $t['ticket'];

            $ret = array();
            $ret['login'] = array($popup_btn);
            return $ret;
        } else {
            echo '<table>';
            echo '<tr><td><label>'.get_string('username', 'repository_boxnet').'</label></td>';
            echo '<td><input type="text" name="boxusername" /></td></tr>';
            echo '<tr><td><label>'.get_string('password', 'repository_boxnet').'</label></td>';
            echo '<td><input type="password" name="boxpassword" /></td></tr>';
            echo '<input type="hidden" name="ticket" value="'.$t['ticket'].'" />';
            echo '</table>';
            echo '<input type="submit" value="'.get_string('enter', 'repository').'" />';
=======
        $url = $this->boxnetclient->get_login_url();
        if ($this->options['ajax']) {
            $ret = array();
            $popup_btn = new stdClass();
            $popup_btn->type = 'popup';
            $popup_btn->url = $url->out(false);
            $ret['login'] = array($popup_btn);
            return $ret;
        } else {
            echo html_writer::link($url, get_string('login', 'repository'), array('target' => '_blank'));
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        }
    }

    /**
     * Names of the plugin settings
     *
     * @return array
     */
    public static function get_type_option_names() {
<<<<<<< HEAD
        return array('api_key', 'pluginname');
    }

    /**
     * Store the auth token returned by box.net
     */
    public function callback() {
        $this->auth_token  = optional_param('auth_token', '', PARAM_TEXT);
        set_user_preference($this->setting_prefix . '_auth_token',    $this->auth_token);
=======
        return array('clientid', 'clientsecret', 'pluginname');
    }

    /**
     * Catch the request token.
     */
    public function callback() {
        $this->boxnetclient->is_logged_in();
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }

    /**
     * Add Plugin settings input to Moodle form
     *
     * @param moodleform $mform
     * @param string $classname
     */
    public static function type_config_form($mform, $classname = 'repository') {
        global $CFG;
        parent::type_config_form($mform);
<<<<<<< HEAD
        $public_account = get_config('boxnet', 'public_account');
        $api_key = get_config('boxnet', 'api_key');
        if (empty($api_key)) {
            $api_key = '';
        }
        $strrequired = get_string('required');
        $mform->addElement('text', 'api_key', get_string('apikey', 'repository_boxnet'), array('value'=>$api_key,'size' => '40'));
        $mform->addRule('api_key', $strrequired, 'required', null, 'client');
        $mform->addElement('static', null, '',  get_string('information','repository_boxnet'));

        //retrieve the flickr instances
        $params = array();
        $params['context'] = array();
        //$params['currentcontext'] = $this->context;
        $params['onlyvisible'] = false;
        $params['type'] = 'boxnet';
        $instances = repository::get_instances($params);
        if (empty($instances)) {
            $callbackurl = get_string('callbackwarning', 'repository_boxnet');
            $mform->addElement('static', null, '',  $callbackurl);
        } else {
            $instance = array_shift($instances);
            $callbackurl = $CFG->wwwroot.'/repository/repository_callback.php?repo_id='.$instance->id;
            $mform->addElement('static', 'callbackurl', '', get_string('callbackurltext', 'repository_boxnet', $callbackurl));
=======

        $clientid = get_config('boxnet', 'clientid');
        $clientsecret = get_config('boxnet', 'clientsecret');
        $strrequired = get_string('required');

        $mform->addElement('text', 'clientid', get_string('clientid', 'repository_boxnet'),
            array('value' => $clientid, 'size' => '40'));
        $mform->addRule('clientid', $strrequired, 'required', null, 'client');
        $mform->setType('clientid', PARAM_RAW_TRIMMED);

        $mform->addElement('text', 'clientsecret', get_string('clientsecret', 'repository_boxnet'),
            array('value' => $clientsecret, 'size' => '40'));
        $mform->addRule('clientsecret', $strrequired, 'required', null, 'client');
        $mform->setType('clientsecret', PARAM_RAW_TRIMMED);

        $mform->addElement('static', null, '',  get_string('informationapiv2', 'repository_boxnet'));

        if (strpos($CFG->wwwroot, 'https') !== 0) {
            $mform->addElement('static', null, '',  get_string('warninghttps', 'repository_boxnet'));
        }

        if (get_config('boxnet', 'api_key')) {
            $url = new moodle_url('/repository/boxnet/migrationv1.php');
            $url = $url->out();
            $mform->addElement('static', null, '', get_string('migrationadvised', 'repository_boxnet', $url));
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        }
    }

    /**
<<<<<<< HEAD
     * Box.net supports file linking and copying
=======
     * Box.net supports copied and links.
     *
     * Theoretically this API is ready for references, though it only works for
     * Box.net Business accounts, but it is not enabled because we are not supporting it.
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
     *
     * @return int
     */
    public function supported_returntypes() {
<<<<<<< HEAD
        return FILE_INTERNAL | FILE_EXTERNAL | FILE_REFERENCE;
=======
        return FILE_INTERNAL | FILE_EXTERNAL;
    }

    /**
     * Convert a reference to the new reference style.
     *
     * While converting Box.net to APIv2 we introduced a new format for
     * file references, see {@link self::get_file_reference()}. This function
     * ensures that the format is always the same regardless of the whether
     * the reference was from APIv1 or v2.
     *
     * @param mixed $reference File reference.
     * @return stdClass Valid file reference.
     */
    public static function convert_to_valid_reference($reference) {
        if (strpos($reference, 'http') === 0) {
            // It is faster to check if the reference is a URL rather than trying to unserialize it.
            $reference = serialize((object) array('downloadurl' => $reference, 'fileid' => '', 'filename' => '', 'userid' => ''));
        }
        return $reference;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }

    /**
     * Prepare file reference information
     *
     * @param string $source
     * @return string file referece
     */
    public function get_file_reference($source) {
<<<<<<< HEAD
        // Box.net returns a url.
        return $source;
    }

    /**
=======
        global $USER;
        list($type, $fileid, $filename) = $this->split_part($source);
        $reference = new stdClass();
        $reference->fileid = $fileid;
        $reference->filename = $filename;
        $reference->userid = $USER->id;
        $reference->downloadurl = '';
        if (optional_param('usefilereference', false, PARAM_BOOL)) {
            try {
                $shareinfo = $this->boxnetclient->share_file($reference->fileid);
            } catch (moodle_exception $e) {
                throw new repository_exception('cannotcreatereference', 'repository_boxnet');
            }
            $reference->downloadurl = $shareinfo->download_url;
        }
        return serialize($reference);
    }

    /**
     * Get a link to the file.
     *
     * This returns the URL of the web view of the file. To generate this link the
     * file must be shared.
     *
     * @param stdClass $reference Reference.
     * @return string URL.
     */
    public function get_link($reference) {
        $reference = unserialize(self::convert_to_valid_reference($reference));
        $shareinfo = $this->boxnetclient->share_file($reference->fileid, false);
        return $shareinfo->url;
    }

     /**
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
     * Returns information about file in this repository by reference
     * {@link repository::get_file_reference()}
     * {@link repository::get_file()}
     *
     * Returns null if file not found or is not readable
     *
     * @param stdClass $reference file reference db record
     * @return null|stdClass with attribute 'filepath'
     */
    public function get_file_by_reference($reference) {
<<<<<<< HEAD
        $array = explode('/', $reference->reference);
        $fileid = array_pop($array);
        $fileinfo = $this->boxclient->get_file_info($fileid, self::SYNCFILE_TIMEOUT);
        if ($fileinfo) {
            $size = (int)$fileinfo->size;
            if (file_extension_in_typegroup($fileinfo->file_name, 'web_image')) {
                // this is an image - download it to moodle
                $path = $this->prepare_file('');
                $c = new curl;
                $result = $c->download_one($reference->reference, null, array('filepath' => $path, 'timeout' => self::SYNCIMAGE_TIMEOUT));
                if ($result === true) {
                    return (object)array('filepath' => $path);
                }
            }
            return (object)array('filesize' => $size);
=======
        $reference = unserialize(self::convert_to_valid_reference($reference->reference));
        $url = $reference->downloadurl;
        $c = new curl();
        $c->get($url, null, array('timeout' => self::SYNCIMAGE_TIMEOUT, 'followlocation' => true, 'nobody' => true));
        $info = $c->get_info();
        if (isset($info['http_code']) && $info['http_code'] == 200 &&
                array_key_exists('download_content_length', $info) &&
                $info['download_content_length'] >= 0) {
            $filesize = (int)$info['download_content_length'];
            return (object) array('filesize' => $filesize);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        }
        return null;
    }

    /**
     * Return human readable reference information
     * {@link stored_file::get_reference()}
     *
     * @param string $reference
     * @param int $filestatus status of the file, 0 - ok, 666 - source missing
     * @return string
     */
    public function get_reference_details($reference, $filestatus = 0) {
<<<<<<< HEAD
        // Indicate it's from box.net repository + secure URL
        $array = explode('/', $reference);
        $fileid = array_pop($array);
        $fileinfo = $this->boxclient->get_file_info($fileid, self::SYNCFILE_TIMEOUT);
        if (!empty($fileinfo)) {
            $reference = (string)$fileinfo->file_name;
        }
        $details = $this->get_name() . ': ' . $reference;
        if (!empty($fileinfo)) {
            return $details;
        } else {
            return get_string('lostsource', 'repository', $details);
=======
        // Indicate it's from box.net repository.
        $reference = unserialize(self::convert_to_valid_reference($reference));
        if (!$filestatus) {
            return $this->get_name() . ': ' . $reference->filename;
        } else {
            return get_string('lostsource', 'repository', $reference->filename);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
        }
    }

    /**
<<<<<<< HEAD
     * Return the source information
     *
     * @param stdClass $url
     * @return string|null
     */
    public function get_file_source_info($url) {
        global $USER;
        $array = explode('/', $url);
        $fileid = array_pop($array);
        $fileinfo = $this->boxclient->get_file_info($fileid, self::SYNCFILE_TIMEOUT);
        if (!empty($fileinfo)) {
            return 'Box ('. fullname($USER). '): '. (string)$fileinfo->file_name. ': '. $url;
        } else {
            return 'Box: '. $url;
        }
=======
     * Return the source information.
     *
     * @param string $source Not the reference, just the source.
     * @return string|null
     */
    public function get_file_source_info($source) {
        global $USER;
        list($type, $fileid, $filename) = $this->split_part($source);
        return 'Box ('. fullname($USER) . '): ' . $filename;
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }

    /**
     * Repository method to serve the referenced file
     *
     * @param stored_file $storedfile the file that contains the reference
     * @param int $lifetime Number of seconds before the file should expire from caches (default 24 hours)
     * @param int $filter 0 (default)=no filtering, 1=all files, 2=html files only
     * @param bool $forcedownload If true (default false), forces download of file rather than view in browser/plugin
     * @param array $options additional options affecting the file serving
     */
    public function send_file($storedfile, $lifetime=86400 , $filter=0, $forcedownload=false, array $options = null) {
<<<<<<< HEAD
        $ref = $storedfile->get_reference();
        // Let box.net serve the file. It will return 'no such file' content if file not found
        // also if file has the different name than alias, it will be returned with the box.net filename
        header('Location: ' . $ref);
=======
        $ref = unserialize(self::convert_to_valid_reference($storedfile->get_reference()));
        header('Location: ' . $ref->downloadurl);
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
    }
}
