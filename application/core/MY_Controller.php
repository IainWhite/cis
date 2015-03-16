<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * CodeIgniter MY_Controller Class
 *
 * Initializes common controller settings, this is to be derived by all controllers of this application
 *
 * @name	    MY_Controller
 * @category	Core Libraries
 * @author	    Iain White
 */


class MY_Controller extends CI_Controller
{
    var $isLoggedIn = FALSE;
    var $isAdmin = FALSE;
    var $userData = NULL;

    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->lang->load('auth');
        if ($this->ion_auth->logged_in()) {
            $this->isLoggedIn = TRUE;
            if ($this->ion_auth->is_admin()) {
                $this->isAdmin = TRUE;
            }
            $this->userData = $this->ion_auth->user()->row();
        }
        // Maintenance page
        // Profiler
        // Firephp
    }
    
    /**
     * Initialization
     */
    function init()
    {

        // is_logged_in
        // is_admin
    }

}