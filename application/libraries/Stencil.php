<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stencil {

    protected $version          = '2.1';
    protected $CI;
	protected $title  		    = '';
	protected $layout  		    = '';
	protected $body_class 	    = '';
    protected $safeURL 	        = '';
    protected $cat 	            = '';
	protected $data			    = array();
	protected $meta 		    = array();
	protected $css    		    = array();
	protected $js     		    = array();
	protected $slice		    = array();
    protected $isLooking	    = FALSE;
    protected $controller       = '';
    protected $method           = '';
    protected $pageName         = '';
    protected $views            = array();
    protected $isSub            = FALSE;
    protected $description      = '';
    protected $canonical        = '';
    protected $SEOTitle         = '';
    protected $SEODescription   = '';
    protected $SEOImage         = '';

	public function __construct()
    {
        $this->CI =& get_instance();
        $this->isLooking = $this->CI->config->item('is_looking');
        $url = (!empty($_SERVER['HTTPS'])) ? "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] : "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $this->safeURL = urlencode($url);
        $segmentCount = count(($this->CI->uri->segments));
        if ($segmentCount > 0) {
            $this->cat = $this->CI->uri->segment(1);
            switch ($this->CI->uri->segment(1)) {
                case '404' :
                case 'about' :
                case 'contact' :
                case 'maintenance' :
                case 'privacy-policy' :
                case 'search-results' :
                case 'site-map' :
                case 'terms-and-conditions' :
                    $this->cat = 'home';
                    break;
            }
        } else {
            $this->cat = 'home';
        }
        $this->controller = $this->CI->router->fetch_class();
        $this->method = $this->CI->router->fetch_method();
        $this->pageName = $this->CI->uri->segment($segmentCount);
	}

    public function sub($page, $data = NULL, $useMore = FALSE)
    {
        $this->isSub = TRUE;
        $this->views = array_merge($this->views, (array)$page);
        $this->data['sub-content'][count($this->views)] = $this->CI->load->view('pages/' . $page, $this->data, TRUE) . "\n";
        if ($useMore) {
            $readMore = '<a href="/' . $page .'" class="readMoreLink">Read More</a>';
            $this->data['sub-content'][count($this->views)] .= "\n" . $readMore;
        }
    }

	public function paint($page, $data = NULL)
    {
        $this->isSub = FALSE;
        $this->views = array_merge($this->views, (array)$page);
        // Move here to set title etc
        $this->data['content'] = $this->CI->load->view('pages/' . $page, $this->data, TRUE) . "\n";
        $this->data['css'] = add_css($this->css);
        $this->data['meta'] = add_meta($this->meta);
        $this->data['js'] = add_js($this->js);
        if (!$this->title) {
            !$this->title = get_domain() . ' | ' . $this->config->item('default-title');
        }
        $this->SEOTitle = urlencode($this->title);
        $this->data['title'] = $this->title;
        // Check we have a page description
        if (!$this->description) {
            preg_match("/<p>(.*)<\/p>/i", $this->data['content'], $matches);
            if (count($matches) == 0) {
                $this->description = $this->config->item('default-description');
            } else {
                $description = strip_tags($matches[1]);
                if (strlen($description) > 155) {
                    $description = substr($description, 0, strrpos(substr($description, 0, 200), ' '));
                    $description = substr($description, 0, strrpos(substr($description, 0, 200), '. ')) . '.';
                }
                $description = str_replace('"', "'", $description);
                $this->description = $description;
            }
        }
        $this->SEODescription = urlencode($this->description);
        $this->data['description'] = $this->description;
        $this->data['body_class'] = 'controller-' . $this->controller . ' method-' . $this->method . ' page-' . $this->pageName;

        if (!is_null($data))
            foreach ($data as $key => $value)
                $this->data[$key] = $value;

        foreach ($this->slice as $key => $value) {
            if (is_array($value)) {
                foreach ($value as $k => $v) {
                    if (method_exists($this->CI->slices, $v)) {
                        $result = call_user_func_array(array($this->CI->slices, $v), array());
                        foreach ($result as $restult_k => $result_v) {
                            if (!isset($this->data[$restult_k]))
                                $this->data[$restult_k] = $result_v;
                        }
                    }
                    $this->data[$k] = $this->CI->load->view('slices/' . $v, $this->data, TRUE) . "\n";
                }
            } elseif (!is_numeric($key)) {
                if (method_exists($this->CI->slices, $key)) {
                    $result = call_user_func_array(array($this->CI->slices, $key), array());
                    foreach ($result as $k => $v) {
                        if (!isset($this->data[$k]))
                            $this->data[$k] = $v;
                    }
                }
                $this->data[$key] = $this->CI->load->view('slices/' . $value, $this->data, TRUE) . "\n";
            } else {
                if (method_exists($this->CI->slices, $value)) {
                    $result = call_user_func_array(array($this->CI->slices, $value), array());
                    foreach ($result as $restult_k => $result_v) {
                        if (!isset($this->data[$restult_k]))
                            $this->data[$restult_k] = $result_v;
                    }
                }
                $this->data[$value] = $this->CI->load->view('slices/' . $value, $this->data, TRUE) . "\n";
            }
        }
        // Move to top to get title etc
        //$this->data['content'] = $this->CI->load->view('pages/'.$page, $this->data, TRUE)."\n";
        if (!empty($this->data['sub-content'])) {
            foreach ($this->data['sub-content'] as $content)
            $this->data['content'] .= $content;
        }
        $footerComment = '<!-- ' . date('l dS \of F Y h:i:s A') . ' -->';
        $this->data['content'] .= "\n" . $footerComment;
        $this->CI->load->view('layouts/' . $this->layout, $this->data);
	}

	public function layout($layout)
	{
        if (!$this->isSub) {
            $this->layout = $layout;
        }
	}

	public function css($css)
	{
		$this->css = array_merge($this->css, (array)$css);
	}

	public function js($js)
	{
		$this->js = array_merge($this->js, (array)$js);
	}

	public function meta($meta)
	{
        if (!$this->isSub) {
            $this->meta = array_merge($this->meta, (array)$meta);
        }
	}

	public function title($title)
    {
        if (!$this->isSub) {
            $this->title = $title;
        }
	}

	public function slice($slice)
	{
		$this->slice = array_merge($this->slice, (array)$slice);
	}

	public function data($key, $value = NULL)
	{
		if (!is_null($value))
		{
			$this->data[$key] = $value;
		}
		else
		{
			foreach ($key as $k => $v)
			{
				$this->data[$k] = $v;
			}
		}
	}

    public function dumpStencil()
    {
        $out = '<h4>Template Data</h4>';
        $out .= '<strong>Category: </strong>' . $this->cat . '<br>';
        $out .= '<strong>Page Title: </strong>' . $this->title . '<br>';
        $out .= '<strong>Page Description: </strong>' . $this->description . '<br>';
        $out .= '<strong>Page Layout: </strong>' . $this->layout . '<br>';
        $out .= '<strong>Slices: </strong>' . print_r($this->slice, TRUE) . '<br>';
        $out .= '<strong>Meta Tags: </strong>' . print_r($this->meta, TRUE) . '<br>';
        $out .= '<strong>CSS: </strong>' . print_r($this->css, TRUE) . '<br>';
        $out .= '<strong>JavaScript: </strong>' . print_r($this->js, TRUE) . '<br>';
        $out .= '<strong>Body Class: </strong>' . $this->body_class . '<br>';
        $out .= '<strong>Is Looking: </strong>' . $this->isLooking . '<br>';
        $out .= '<strong>Safe URL: </strong>' . $this->safeURL . '<br>';
        $out .= '<strong>Controller: </strong>' . $this->controller . '<br>';
        $out .= '<strong>Method: </strong>' . $this->method . '<br>';
        $out .= '<strong>Page Name: </strong>' . $this->pageName . '<br>';
        $out .= '<strong>Views: </strong>' . print_r($this->views, TRUE) . '<br>';
        $out .= '<hr>';
        return $out;
    }

    public function getIsLooking()
    {
        return $this->isLooking;
    }

    public function getIsSub()
    {
        return $this->isSub;
    }

    public function getCat()
    {
        return $this->cat;
    }

    public function getWeekSwitch()
    {
        $dayOfMonth = date('j');
        $weekSwitch = 4;
        if ($dayOfMonth < 8) {
            $weekSwitch = 1;
        }
        if ($dayOfMonth > 7 && $dayOfMonth < 15) {
            $weekSwitch = 2;
        }
        if ($dayOfMonth > 14 && $dayOfMonth < 22) {
            $weekSwitch = 3;
        }
        return $weekSwitch;
    }

    public function getQuauterSwitch()
    {
        $monthNo = date('n');
        $quauterSwitch = 4;
        if ($monthNo < 4) {
            $quauterSwitch = 1;
        }
        if ($monthNo > 3 && $monthNo < 7) {
            $quauterSwitch = 2;
        }
        if ($monthNo > 6 && $monthNo < 10) {
            $quauterSwitch = 3;
        }
        return $quauterSwitch;
    }

    public function getVersion($what = 'this')
    {
        switch ($what) {
            case 'this' :
                return $this->version;
                break;
            case 'CI' :
                return CI_VERSION;
                break;
            case 'PHP' :
                if (function_exists('phpversion')) {
                    return phpversion();
                } else {
                    return 'N/A';
                }
                break;
            case 'Zend' :
                if (function_exists('zend_version')) {
                    return zend_version();
                } else {
                    return 'N/A';
                }
                break;
            case 'PostgreSQL' :
                if (function_exists('pg_version')) {
                    return pg_version();
                } else {
                    return 'N/A';
                }
                break;
            case 'MySQL' :
                return 'N/A';
                break;
        }
    }

    public function getDescription()
    {
        if (!$this->isSub) {
            return $this->description;
        }
    }

    public function setDescription($description)
    {
        $this->isdescription = $description;
    }

}

/* End of file Stencil.php */ 
/* Location: ./application/libararies/Stencil.php */