<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start("ob_gzhandler");
else
    ob_start();

class Pages extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->slice(array('head', 'header', 'footer'));
		$this->stencil->layout('layout');
	}

  	function index()
 	{

        if ($this->config->item('maintenance_mode')) {
            $this->stencil->layout('maintenance');
            $data['subpage_text'] = $this->config->item('maintenance_message');
            $this->stencil->data($data);
            $this->stencil->paint('maintenance');
            return;
        }

        $view = NULL;
        $segmentCount = count(($this->uri->segments));
        $view = $this->uri->segment($segmentCount);
        if (!$view) {
            $view = 'index';
        }
        if ($view == 'iain') {
            $this->output->set_status_header('301');
            $view = 'iain-white';
        }
        // Check if view has an alias e.g. 'microsoft-windows', 'ms-windows' returns 'windows'
        $view = $this->stencil->checkAlias($view);
        if ($segmentCount > 1) {
            $section = $this->uri->segment(1);
        }
        $viewPath = '';
        for ($x = 1; $x < $segmentCount; $x++) {
            $viewPath .= $this->uri->segment($x) . '/';
        }
        $viewPath = $viewPath . $view;
        if (file_exists(APPPATH . 'views/pages/' . $viewPath . EXT)) {
            $this->stencil->paint($viewPath);
        } else {
            $this->output->set_status_header('404');
            $this->stencil->title('404 Page Not Found');
            if (ENVIRONMENT != 'production') {
                $data['subpage_text'] = 'Could not find <strong>view</strong> "<em>' . $viewPath . '</em>".';
            }
            $this->stencil->data($data);
            $this->stencil->paint('404');
        }

	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */