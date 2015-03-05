<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->slice(array('head', 'header'));
		$this->stencil->layout('layout');
        if (isset($_GET['profiler'])) {
            $this->output->enable_profiler(true);
        }
        if (ENVIRONMENT != 'production')
        {
            $this->load->library('Firephp');
        }
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
        $section = NULL;
        $level1 = NULL;
        $level2 = NULL;
        $view = NULL;
        $segmentCount = count(($this->uri->segments));
        if ($segmentCount > 3) {
            $section = $this->uri->segment(1);
            $level1 = $this->uri->segment(2);
            $level2 = $this->uri->segment(3);
            $view = $this->uri->segment(4);
        }
        if ($segmentCount == 3) {
            $section = $this->uri->segment(1);
            $level1 = $this->uri->segment(2);
            $view = $this->uri->segment(3);
        }
        if ($segmentCount == 2) {
            $section = $this->uri->segment(1);
            $view = $this->uri->segment(2);
        }
        if ($segmentCount == 1) {
            $view = $this->uri->segment(1);
        }
        $viewPath = '';
        if ($section) {
            $viewPath = $section . '/';
        }
        if ($level1) {
            $viewPath = $viewPath . $level1 . '/';
        }
        if ($level2) {
            $viewPath = $viewPath . $level2 . '/';
        }
        $viewPath = $viewPath . $view;
        if (file_exists(APPPATH . 'views/pages/' . $viewPath . EXT)) {
            $this->stencil->paint($viewPath);
        } else {
            $this->output->set_status_header('404');
            $this->stencil->title('404 Page Not Found');
            $data['subpage_text'] = '404 Page Does not Exist!';
            if (ENVIRONMENT != 'production') {
                $data['subpage_text'] = 'Could not find <strong>view</strong> "<em>' . $viewPath . '</em>".';
            }
            $this->stencil->data($data);
            $this->stencil->paint('404_view');
        }

        /*
		switch ($this->uri->segment(1)) 
		{
			// This is used for quick static pages without having to deal with routing (see routes.php and the docs for more info)
			// Just make the "case" look exactly like the URL you want
			case 'terms-of-service' :
				$this->stencil->title('License');
				$data['subpage_text'] = 'MIT License';
				$this->stencil->data($data);
				$this->stencil->paint('license_view');
				break;
			
			default :
				$this->output->set_status_header('404');
				
				$this->stencil->title('404 Page Not Found');
				$data['subpage_text'] = '404 Page Does not Exist!';
				$this->stencil->data($data);
				$this->stencil->paint('404_view');
				break;
		}
        */
	}
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */