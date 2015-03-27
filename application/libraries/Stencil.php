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
    protected $h1               = '';
    protected $flags		    = array();

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
        if (!is_null($data)) {
            foreach ($data as $key => $value) {
                $this->data[$key] = $value;
            }
        }
        $this->data['content'] = $this->CI->load->view('pages/' . $page, $this->data, TRUE) . "\n";
        $this->data['css'] = addCss($this->css);
        $this->data['meta'] = addMeta($this->meta);
        $this->data['js'] = addJs($this->js);
        if (!$this->title) {
            !$this->title = get_domain() . ' | ' . $this->CI->config->item('default-title');
        }
        $this->SEOTitle = urlencode($this->title);
        $this->data['title'] = $this->title;
        // Check we have a page description
        if (!$this->description) {
            preg_match("/<p>(.*)<\/p>/i", $this->data['content'], $matches);
            if (count($matches) == 0) {
                $this->description = $this->CI->config->item('default-description');
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
        if (!$this->SEOImage) {
            $this->SEOImage = urlencode(base_url() . $this->CI->config->item('default-image'));
        }
        $this->data['body_class'] = 'controller-' . $this->controller . ' method-' . $this->method . ' page-' . $this->pageName . ' cat-' . $this->cat;

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
        $this->data['content'] .= "\n" . $footerComment . "\n";
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
        $this->css = array_unique($this->css);
	}

	public function js($js)
	{
		$this->js = array_merge($this->js, (array)$js);
        $this->js = array_unique($this->js);
	}

	public function meta($meta)
	{
        if (!$this->isSub) {
            $this->meta = array_merge($this->meta, (array)$meta);
            $this->meta = array_unique($this->meta);
        }
	}

	public function title($title)
    {
        if (!$this->isSub) {
            $this->title = $title;
        }
	}

    public function getTitle()
    {
        return $this->title;
    }

    public function setFlag($flag, $value)
    {
        $this->flags[$flag] = $value;
    }

    public function getFlag($flag)
    {
        return $this->flags[$flag];
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
                $sql = 'SELECT VERSION() AS version;';
                $query = $this->CI->db->query($sql);
                $row = $query->row();
                $v = $row->version;
                $query->free_result();
                return $v;
                break;
        }
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->isdescription = $description;
    }

    public function getSEOTitle()
    {
        return $this->SEOTitle;
    }

    public function getSEODescription()
    {
        return $this->SEODescription;
    }

    public function getSEOImage()
    {
        return $this->SEOImage;
    }

    public function getSEOUrl()
    {
        return $this->safeURL;
    }

    public function setHeadline($title, $pageTitle = NULL)
    {
        if (!$pageTitle) {
            $pageTitle = $title;
        }
        if (!$this->isSub) {
            $this->title = $pageTitle;
            $this->h1 = $title;
            return NULL;
        } else {
            return '<h2>' . $title . '</h2>';
        }
    }

    public function getH1()
    {
        return $this->h1;
    }

    public function addAppleMobile()
    {
        $siteName = $this->CI->config->item('site-name');
        $style = $this->CI->config->item('web-app-status-bar-style');

        return '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n\t" .
        '<meta name="apple-mobile-web-app-status-bar-style" content="' . $style . '">' . "\n\t" .
        '<meta name="mobile-web-app-capable" content="yes">' . "\n\t" .
        '<meta name="apple-mobile-web-app-title" content="' . $siteName . '">' . "\n";
    }

    public function addDescription()
    {
        $this->CI->load->library('stencil');
        $description = $this->CI->stencil->getDescription();
        $author = $this->CI->config->item('author-name');
        return '<meta name="description" content="' . $description . '">' . "\n\t" .
        '<meta name="author" content="' . $author . '">' . "\n";
    }

    public function addGeo()
    {
        $title = $this->getTitle();
        return '<meta name="geo.position" content="-27.68278;152.91278">' . "\n\t" .
        '<meta name="geo.placename" content="Springfield Lakes, Australia">' . "\n\t" .
        '<meta name="geo.region" content="AU">' . "\n\t" .
        '<meta name="ICBM" content="-27.68278, 152.91278">' . "\n\t" .
        '<meta name="DC.title" content="' . $title . '">' . "\n";
    }

    public function addSeo()
    {
        $siteName = $this->CI->config->item('site-name');
        $authorUrl = $this->CI->config->item('author-url');
        $publisherUrl = $this->CI->config->item('publisher-url');
        $siteTwitter = $this->CI->config->item('site-twitter');
        $creatorTwitter = $this->CI->config->item('creator-twitter');

        $seoTitle = $this->getSEOTitle();
        $seoDescription = $this->getSEODescription();
        $seoImage = $this->getSEOImage();
        $seoURL = $this->getSEOUrl();

        return '<link rel="author" href="' . $authorUrl . '" />' . "\n\t" .
        '<link rel="publisher" href="' . $publisherUrl . '" />' . "\n\t" .
        '<meta itemprop="name" content="' . $seoTitle . '" />' . "\n\t" .
        '<meta itemprop="description" content="' . $seoDescription . '" />' . "\n\t" .
        '<meta itemprop="image" content="' . $seoImage . '}" />' . "\n\t" .
        '<meta property="og:title" content="' . $seoTitle . '" />' . "\n\t" .
        '<meta property="og:type" content="website" />' . "\n\t" .
        '<meta property="og:url" content="' . $seoURL . '" />' . "\n\t" .
        '<meta property="og:image" content="' . $seoImage . '" />' . "\n\t" .
        '<meta property="og:description" content="' . $seoDescription . '" />' . "\n\t" .
        '<meta property="og:site_name" content="' .$siteName . '" />' . "\n\t" .
        '<meta property="og:locale" content="en_AU" />' . "\n\t" .
        '<meta name="twitter:card" content="summary" />' . "\n\t" .
        '<meta name="twitter:site" content="' . $siteTwitter . '" />' . "\n\t" .
        '<meta name="twitter:title" content="' . $seoTitle . '" />' . "\n\t" .
        '<meta name="twitter:description" content="' . $seoDescription . '" />' . "\n\t" .
        '<meta name="twitter:image" content="' . $seoImage . '" />' . "\n\t" .
        '<meta name="twitter:url" content="' . $seoURL . '" />' . "\n\t" .
        '<meta name="twitter:creator" content="' . $creatorTwitter . '" />' . "\n";
    }

    public function addWindowsTile()
    {
        $title = $this->CI->config->item('windows-title-name');
        $image = base_url() . $this->CI->config->item('windows-title-image');
        $colour = $this->CI->config->item('windows-title-colour');

        return '<meta name="application-name" content="' . $title  . '">' . "\n\t" .
        '<meta name="msapplication-TileImage" content="' .  $image . '">' . "\n\t" .
        '<meta name="msapplication-TileColor" content="' . $colour . '">' . "\n";
    }

    public function addH1()
    {
        $h1 = $this->getH1();
        $class = $this->getH1Class($h1);
        return '<h1' . $class . '>' . $h1 . '</h1>' . "\n";
    }

    public function addBreadcrumb()
    {
        $segmentCount = count(($this->CI->uri->segments));
        $path = '/';
        $out = '<ul class="pull-right breadcrumb">' . "\n";
        $out .= '        <li><a href="/"><i class="fa fa-home"></i></a></li>' . "\n";
        for ($x = 1; $x <= $segmentCount; $x++) {
            $path .= $this->CI->uri->segment($x) . '/';
            $label = $this->CI->uri->segment($x);
            $label = $this->filename2Eng($label);
            if ($x == $segmentCount) {
                $out .= '         <li class="active">' . $label . '</li>' . "\n";
            } else {
                $out .= '        <li><a href="' . $path . '">' . $label . '</a></li>' . "\n";
            }
        }
        $out .= '        </ul>';
        return $out . "\n";
    }

    public function filename2Eng($filename)
    {
        $out = $this->checkFileNameDb($filename);
        if ($out) {
            return $out;
        }
        $out = str_replace('-', ' ', $filename);
        $out = str_replace('_', ' ', $out);
        $out = ucwords($out);
        return $out;
    }

    public function checkFileNameDb($filename)
    {
    $eng = NULL;
    $sql = "SELECT eng FROM wd_file_eng WHERE filename = '" . $filename . "';";
    $query = $this->CI->db->query($sql);
    foreach ($query->result() as $row)
    {
        $eng = $row->eng;
    }$query->free_result();
    return $eng;
    }

    public function getH1Class($heading)
    {
        $class = NULL;
        $sql = "SELECT class FROM wd_headers WHERE header = '" . $heading . "';";
        $query = $this->CI->db->query($sql);
        foreach ($query->result() as $row)
        {
            $class = $row->class;
        }
        $query->free_result();
        if (!$class) {
            switch ($this->cat) {
                case 'home' :
                    $class = 'fa-paw';
                    break;
                case 'it' :
                    $class = 'fa-desktop';
                    break;
                case 'project-management' :
                    $class = 'fa-puzzle-piece';
                    break;
                case 'web-development' :
                    $class = 'fa-globe';
                    break;
                case 'iain-white' :
                    $class = 'fa-user';
                    break;
                case 'mobile-development' :
                    $class = 'fa-android';
                    break;
                case 'people' :
                    $class = 'fa-users';
                    break;
                case 'companies' :
                    $class = 'fa-building';
                    break;
                case 'books' :
                    $class = 'fa-book';
                    break;
                case 'languages' :
                    $class = 'fa-file-code-o';
                    break;
                default :
                    $class = 'fa-paw';
                    break;
            }
        }

        $headerClass = 'header-icon';
        $classArray = explode('-', $class);
        if ($classArray[0] == 'fp') {
            $headerClass = 'header-icon2';
        }
        $out = ' class ="pull-left ' . $headerClass . ' ' . $class . '"';

        return $out;
    }

    public function sanitizeFileName($text)
    {
        $fileName = NULL;
        // Special case page name to fileName
        $sql = "SELECT filename FROM wd_file_eng WHERE eng = '" . $text . "';";
        $query = $this->CI->db->query($sql);
        foreach ($query->result() as $row)
        {
            $fileName = $row->filename;
        }
        $query->free_result();
        if (!$fileName) {
            $fileName = strtolower($text);
        }
        $out = preg_replace("/[^a-z0-9]+/i", '-', $fileName);
        return $out;
    }

    public function addLink($text, $path = '', $title = NULL, $full = FALSE)
    {
        if (!$title) {
            $title = $text;
        }
        $fileName = $this->sanitizeFileName($text);

        switch (strtoupper($path)) {
            case 'WD':
                $path = 'web-development';
                break;
            case 'IW':
                $path = 'iain-white';
                break;
            case 'IT':
                $path = 'it';
                break;
            case 'PM':
                $path = 'project-management';
                break;
            case 'P':
                $path = 'people';
                break;
            case 'C':
                $path = 'companies';
                break;
            case 'B':
                $path = 'books';
                break;
            case 'L':
                $path = 'languages';
                break;
            case 'MD':
                $path = 'mobile-development';
                break;
        }
        if ($full) {
            $path = base_url() . $path;
        } else {
            $path = '/' . $path;
        }
        $path = $path . '/' . $fileName;
        return '<a href="' . $path . '" title="' . $title . '">' . $text . '</a>';
    }

    public function addExternalLink($text, $path, $title = NULL)
    {
        if (!$title) {
            $title = $text;
        }
        return '<a href="' . $path . '" rel="external" title="' . $title . '">' . $text . '</a>';
    }

    public function addWikiLink($text, $page = NULL)
    {
        if (!$page) {
            $page = $text;
        }
        return '<a href="http://en.wikipedia.org/wiki/' . $page . '" rel="external" title="Wikipedia ' . $text . '">Wikipedia entry for ' . $text . '</a>';
    }

    public function addRFCLink($rfcNum)
    {

        return '<a href="http://tools.ietf.org/html/rfc' . $rfcNum . '" rel="external" title="RFC ' . $rfcNum . '">RFC ' . $rfcNum . '</a>';
    }

    public function addCodeSnippet($language = 'none', $fileName = NULL)
    {
        if (!$fileName) {
            $fileName = $language . '.txt';
        }
        $this->css('assets/plugins/prism/prism-coy.css');
        $this->css('assets/plugins/prism/prism-line-numbers.css');
        $this->js('assets/plugins/prism/prism.js');
        $fileContent = file_get_contents('assets/code/' . $fileName);
        return '<pre class="codeBlock"><code class="language-' . $language . ' line-numbers"">' . $fileContent . '</code></pre>' . "\n";
    }

    public function addImage($name, $ext = 'jpg', $imgStyle = 'left', $size = 'p', $zoom = FALSE, $title = NULL, $showTitle = FALSE, $fullSize = 'l')
    {
        return $this->_addImage($name, $ext, $imgStyle, NULL, $size, $zoom, $title, $showTitle, $fullSize);
    }

    public function addHeadshot($name, $ext = 'jpg', $imgStyle = 'left', $size = '', $zoom = FALSE, $title = NULL, $showTitle = FALSE, $fullSize = 'l')
    {
        return $this->_addImage($name, $ext, $imgStyle, 'headshot', $size, $zoom, $title, $showTitle, $fullSize);
    }

    public function addLogo($name, $ext = 'jpg', $imgStyle = 'left', $title = NULL, $showTitle = FALSE)
    {
        return $this->_addImage($name, $ext, $imgStyle, 'logo', '', FALSE, $title, $showTitle, '');
    }

    public function _addImage($name, $ext = 'jpg', $imgStyle = 'left', $cat = NULL, $size = 'p', $zoom = FALSE, $title = NULL, $showTitle = FALSE, $fullSize = 'l')
    {
        $basePath = '/assets/images/';
        if ($cat === 'headshot') {
            $basePath = '/assets/images/headshots/';
        }
        if ($cat === 'logo') {
            $basePath = '/assets/images/logos/';
        }
        $filename = strtolower(preg_replace("/[\s_]/", '-', $name));
        if ($size === '') {
            $file = $basePath . $filename . '.' . $ext;
        } else {
            $file = $basePath . $size . '/' . $filename . '.' . $ext;
        }
        $imgClass = 'class="img-responsive rounded-2x';
        $containerClass = 'imageContainer';
        switch ($imgStyle) {
            case 'left':
                $imgClass .= ' pull-left margin-right-10 box-shadow shadow-effect-1 img-thumbnail';
                $containerClass .= ' pull-left';
                break;
            case 'right':
                $imgClass .= ' pull-right margin-left-10 box-shadow shadow-effect-1 img-thumbnail';
                $containerClass .= ' pull-right';
                break;
            case 'centre':
            case 'center':
                $imgClass .= ' box-shadow shadow-effect-1 center-block img-thumbnail';
                $containerClass .= ' col-xs-12 col-sm-10 col-md-6 col-lg-6 col-sm-offset-1 col-md-offset-3 col-lg-offset-3';
                break;
            case 'none':
                $imgClass .= '';
                break;
            default:
                $imgClass .= '';
                break;
        }
        if ($zoom) {
            $imgClass .= ' zoomImage';
        }
        $imgClass .= '"';
        if ($title) {
            $name = $title;
        }
        $out = '<img src="' . $file . '" alt="' . $filename . '" title="' . $name . '" ' . $imgClass . '/>' . "\n";
        if ($zoom) {
            $zoomFile = $basePath . $fullSize . '/' . $filename . '.' . $ext;
            $out = '<div class="' . $containerClass . '">' . "\n";
            $out .= '   <a href="' . $zoomFile . '" title="' . $name . '" data-rel="fancybox-button" class="fancybox-button">' . "\n";
            $out .= '        <span class="imgZoomIcon text-center"><i class="fa fa-search"></i></span>' . "\n";
            $out .= '       <img src="' . $file . '" alt="' . $filename . '" title="' . $name . '" ' . $imgClass . '/>' . "\n";
            $out .= '    </a>' . "\n";
            if ($showTitle) {
                $out .= '    <div class="caption"><p class="text-center">' . $name . '</p></div>' . "\n";
            }
            $out .= '</div>' . "\n";
            $this->css('assets/plugins/fancybox/source/jquery.fancybox.css');
            $this->js('assets/plugins/fancybox/source/jquery.fancybox.pack.js');
            $this->js('assets/js/plugins/fancy-box.js');
        } else {
            if ($showTitle) {
                $out = '<div class="' . $containerClass . '">' . "\n";
                $out .= '   <img src="' . $file . '" alt="' . $filename . '" title="' . $name . '" ' . $imgClass . '/>' . "\n";
                $out .= '    <div class="caption"><p class="text-center">' . $name . '</p></div>' . "\n";
                $out .= '</div>' . "\n";
            }
        }
        return $out;
    }

    public function elapsedYears($val, $round = FALSE, $showMonths = FALSE, $to = NULL)
    {
        $val = str_replace('/', '-', $val);
        $val = date('Y-m-d', strtotime($val));
        $elapsedArray =$this-> dateDifference($val, 'now');
        if ($to) {
            $to = str_replace('/', '-', $to);
            $to = date('Y-m-d', strtotime($to));
            $elapsedArray = $this->dateDifference($val, $to);
        }
        $out = '';
        // Years
        if ($elapsedArray[0] > 0) {
            // Years no months
            if (!$showMonths) {
                $years = $elapsedArray[0];
                if ($round) {
                    if ($elapsedArray[1] > 5) {
                        $years = $elapsedArray[0] + 1;
                    }
                }
                if ($years > 1) {
                    $out = $years . ' years';
                } else {
                    $out = $years . ' year';
                }
            } else {
                // Year and months
                $years = $elapsedArray[0];
                $months = $elapsedArray[1];
                if ($round) {
                    if ($elapsedArray[2] > 15) {
                        $months = $elapsedArray[1] + 1;
                    }
                    if ($months >= 12) {
                        $years = $elapsedArray[0] + 1;
                        $months = $months - 12;
                    }
                }
                if ($years > 1) {
                    $out = $years . ' years';
                } else {
                    $out = $years . ' year';
                }
                if ($months > 0) {
                    if ($months > 1) {
                        $out .= ' ' . $months . ' months';
                    } else {
                        $out .= ' ' . $months . ' month';
                    }
                }
            }
        } else {
            // Months
            $months = $elapsedArray[1];
            if ($round) {
                if ($elapsedArray[2] > 15) {
                    $months = $elapsedArray[1] + 1;
                }
            }
            if ($months >= 12) {
                $out = '1 year';
            }
            if ($months > 1) {
                $out = $months . ' months';
            } else if ($months < 1){
                $out = 'less than a month';
            } else {
                $out = $months . ' month';
            }
        }
        return $out;
    }

    public function dateDifference($startDate, $endDate)
    {
        $startDate = strtotime($startDate);
        $endDate = strtotime($endDate);
        if ($startDate === false || $endDate === false || $startDate > $endDate) {
            return false;
        }
        $years = date('Y', $endDate) - date('Y', $startDate);
        $endMonth = date('m', $endDate);
        $startMonth = date('m', $startDate);

        // Calculate months
        $months = $endMonth - $startMonth;
        if ($months <= 0)  {
            $months += 12;
            $years--;
        }
        if ($years < 0) {
            return false;
        }
        // Calculate the days
        $offsets = array();
        if ($years > 0) {
            $offsets[] = $years . (($years == 1) ? ' year' : ' years');
        }
        if ($months > 0) {
            $offsets[] = $months . (($months == 1) ? ' month' : ' months');
        }
        $offsets = count($offsets) > 0 ? '+' . implode(' ', $offsets) : 'now';
        $days = $endDate - strtotime($offsets, $startDate);
        $days = date('z', $days);
        return array($years, $months, $days);
    }

    public function listDir($path)
    {
        $files = scandir(getDocRoot() . '/application/views/pages' . $path);
        $limit = count($files);
        $out = '';
        for ($i = 0; $i < $limit; $i++) {
            $file = $files[$i];
            if ($file !== '.' && $file !== '..') {
                $file = str_replace('.php', '', $file);
                $name = $this->filename2Eng($file);
                $out .= '<a href="'. $path . '/' . $file . '">' . $name . '</a><br/>' . "\n";
            }
        }
        return $out;
    }

    public function addActive($test, $check = NULL)
    {
        if ($check) {
            $check = $this->getFlag($check);
        } else {
            $check = $this->cat;
        }
        if ($test == $check) {
            return 'active';
        }  else {
            return '';
        }
    }

    public function addIn($test, $check = NULL)
    {
        if ($check) {
            $check = $this->getFlag($check);
        } else {
            $check = $this->cat;
        }
        if ($test == $check) {
            return 'in';
        }  else {
            return '';
        }
    }

    public function getWisdom()
    {
        $sql = 'SELECT quote, author, additional FROM wd_wisdom WHERE RAND() < (SELECT ((1 / COUNT(id)) * 10) FROM wd_wisdom) ORDER BY RAND() LIMIT 1;';
        $query = $this->CI->db->query($sql);
        $row = $query->row();
        $quote = $row->quote;
        $author = $row->author;
        $additional = $row->additional;
        $query->free_result();
        $out = '<div class="speechbubble rounded-2x">' . "\n";
        $out .= '    <p>' . $quote . '</p>' . "\n";
        $out .= '</div>' . "\n";
        $out .= '<p class="speechbubble-author">' . $author;
        if ($additional) {
            $out .= ', <span>' . $additional . '</span>';
        }
        $out .= '</p>' . "\n";
        return $out;
    }

    public function getPragmaticTips($limit = 'ALL', $random = FALSE)
    {
        if ($limit === 'ALL' || !$limit) {
            $limtSQL = '';
        } else {
            $limtSQL = ' LIMIT ' . $limit;
        }
        if ($random) {
            $sql = 'SELECT tip FROM wd_pragmatic_tips WHERE RAND() < (SELECT ((1 / COUNT(id)) * 10) FROM wd_pragmatic_tips) ORDER BY RAND()' . $limtSQL . ';';
        } else {
            $sql = 'SELECT tip FROM wd_pragmatic_tips ORDER BY id' . $limtSQL . ';';
        }
        $query = $this->CI->db->query($sql);
        $out = '';
        foreach ($query->result() as $row)
        {
            $tip = $row->tip;
            $out .= '<p class="pragTip">' . $tip . '</p>' . "\n";
        }
        $query->free_result();
        return $out;
    }

    public function addBook($what = NULL, $how = 'type', $num = 1)
    {
        // $how = type, cat, author, title
        $whereSQL = " WHERE " . $how . " = '" . $what . "'";
        if ($num == 1) {
            $sql = 'SELECT * FROM wd_books' . $whereSQL . ' LIMIT 1;';
        } else {
            $sql = 'SELECT * FROM wd_books' . $whereSQL . ' ORDER BY RAND() LIMIT ' . $num . ';';
        }
        $query = $this->CI->db->query($sql);
        $out = '';
        if ($query->num_rows() < 1) {
            return $out;
        }
        foreach ($query->result() as $row)
        {
            $title = $row->title;
            $author = $row->author;
            $id = $row->id;
            $banner = $row->banner;
            $out .= '<div class="row well rounded-2x shadow-effect-1"><div class="col-lg-12 col-md-12">' . "\n";
            $out .= '<div class="pull-left margin-right-5">' . "\n";
            $out .= '<a href="http://www.fishpond.com.au/product_info.php?ref=2802&id=';
            $out .= $id;
            $out .= '&affiliate_banner_id=1" target="_blank"><img class="pull-left margin-right-5 box-shadow shadow-effect-1 img-thumbnail rounded-2x" src="http://www.fishpond.com.au/affiliate_show_banner.php?ref=2802&affiliate_pbanner_id=';
            $out .= $banner;
            $out .= '" alt="';
            $out .= $title;
            $out .= '" title="';
            $out .= $title;
            $out .= '" /></a>' . "\n";
            $out .= '</div>' . "\n";
            $out .= '<p><strong>';
            $out .= $title;
            $out .= '</strong></p>' . "\n";
            $out .= '<p>by ' . $author . '</p>' . "\n";
            $out .= '<p>Buy the book <a href="http://www.fishpond.com.au/product_info.php?ref=2802&id=';
            $out .= $id;
            $out .= '&affiliate_banner_id=1" target="_blank">';
            $out .= $title;
            $out .= '</a> on Fishpond.</p>' . "\n";
            $out .= '</div>' . "\n</div>\n";
        }
        return $out;
    }

    public function addBookCover($what = NULL, $how = 'title')
    {
        // $how = title, id
        $whereSQL = " WHERE " . $how . " = '" . $what . "'";
        $sql = 'SELECT * FROM wd_books' . $whereSQL . ' LIMIT 1;';
        $query = $this->CI->db->query($sql);
        $out = '';
        if ($query->num_rows() < 1) {
            return $out;
        }
        $row = $query->row();
        $title = $row->title;
        $id = $row->id;
        $banner = $row->banner;
        $out = '<div class="pull-left margin-right-10">' . "\n";
        $out .= '<a href="http://www.fishpond.com.au/product_info.php?ref=2802&id=';
        $out .= $id;
        $out .= '&affiliate_banner_id=1" target="_blank"><img class="pull-left margin-right-5 box-shadow shadow-effect-1 img-thumbnail rounded-2x" src="http://www.fishpond.com.au/affiliate_show_banner.php?ref=2802&affiliate_pbanner_id=';
        $out .= $banner;
        $out .= '" alt="';
        $out .= $title;
        $out .= '" title="';
        $out .= $title;
        $out .= '" /></a>' . "\n";
        $out .= '</div>' . "\n";
        return $out;
    }

    public function addBuyBook($what = NULL, $how = 'title')
    {
        // $how = title, id
        $whereSQL = " WHERE " . $how . " = '" . $what . "'";
        $sql = 'SELECT id FROM wd_books' . $whereSQL . ' LIMIT 1;';
        $query = $this->CI->db->query($sql);
        $out = '';
        if ($query->num_rows() < 1) {
            return $out;
        }
        $row = $query->row();
        $id = $row->id;
        $out = '<span class="label label-green rounded"><i class="fa fa-book"></i> ';
        $out .= '<a href="http://www.fishpond.com.au/product_info.php?ref=2802&id=';
        $out .= $id;
        $out .= '&affiliate_banner_id=1" target="_blank">';
        $out .= 'Buy this book';
        $out .= '</a></span>' . "\n";
        return $out;
    }

    public function addBookRating($score = 0) {
        $out = '';
        if ($score > 5) {
            $score = 5;
        }
        for ($i = 0; $i < $score; $i++) {
            $out .= ' <i class="fa fa-thumbs-o-up color-blue"></i>';
        }
        for ($i = $score + 1; $i < 6; $i++) {
            $out .= ' <i class="fa fa-thumbs-o-up color-grey"></i>';
        }
        return $out;
    }

    public function addRSS($feed, $num = 5, $cache = 30)
    {
        $out = '';
        $this->CI->load->library('rssparser');
        $rss = $this->CI->rssparser->set_feed_url($feed)->set_cache_life($cache)->getFeed($num);
        foreach ($rss as $item)
        {
            $out .= '<div class="col-lg-12 col-md-12"><h3><a href="' . $item['link'] . '">' . $item['title'] . "</a></h3>";
            $date = new DateTime($item['pubDate']);
            $dateStr = $date->format('D d-m-Y \a\t H:i');
            $out .= '<p>by <strong>' . $item['author'] . '</strong> on ' . $dateStr . '</p>';
            $out .= $item['description'];
            $out .= '</div>' . "\n";
        }
        return $out;
    }

    public function addPDFLink($filename, $text = NULL, $class = NULL, $title = NULL, $sizeInLink = TRUE, $suppressSize = FALSE, $suppressIcon = FALSE)
    {
        $url = asset_url() . 'pdf/' . $filename . '.pdf';
        if (!$text) {
            $text = $filename;
        }
        if (!$title) {
            $title = $text;
        }
        if ($suppressSize) {
            $sizeInLink = FALSE;
        }
        if (!$suppressIcon) {
            $text .= ' <i class="fa fa-file-pdf-o"></i>';
        }
        $classStr = '';
        if ($class) {
            $classStr = ' class="' . $class . '"';
        }
        $out = '<a href="' . $url . '" title="' . $title . '"' . $classStr . '>';
        $fileSizeStr = '';
        if (!$suppressSize) {
            $root = $_SERVER['DOCUMENT_ROOT'];
            $bytes = filesize($root . '/assets/pdf/' . $filename . '.pdf');
            if ($bytes) {
                if ($bytes >= 1073741824) {
                    $fileSize = number_format(round($bytes / 1024 / 1024 / 1024, 1)) . 'GB';
                } elseif ($bytes >= 1048576) {
                    $fileSize = number_format(round($bytes / 1024 / 1024, 1)) . 'MB';
                } elseif ($bytes >= 1024) {
                    $fileSize = number_format(round($bytes / 1024, 1)) . 'KB';
                } else {
                    $fileSize = number_format($bytes) . ' bytes';
                }
                $fileSizeStr = ' (' . $fileSize . ')';
            }
        }
        if ($sizeInLink) {
            $text .= $fileSizeStr;
            $out .= $text . '</a>';
        } else {
            $out .= $text . '</a>' . $fileSizeStr;
        }
        return $out;
    }

    public function getQualificationsCount($cat = 'ALL')
    {
        if (!$cat) {
            $cat = 'ALL';
        }
        $whereSQL = '';
        if ($cat !== 'ALL') {
            $whereSQL = " WHERE institute = '" . $cat . "'";
        }
        $sql = 'SELECT count(id) AS num FROM wd_course' . $whereSQL . ';';
        $query = $this->CI->db->query($sql);
        $out = 0;
        if ($query->num_rows() < 1) {
            return $out;
        }
        $row = $query->row();
        $out = $row->num;
        return $out;
    }

    public function getQualifications($cat = 'ALL', $limit = 0)
    {
        if (!$cat) {
            $cat = 'ALL';
        }
        if (!$limit) {
            $limit = 0;
        }
        $whereSQL = '';
        if ($cat !== 'ALL') {
            $whereSQL = " WHERE institute = '" . $cat . "'";
        }
        $limtSQL = '';
        if ($limit !== 0) {
            $limtSQL = ' LIMIT ' . $limit;
        }
        $sql = "SELECT * FROM wd_course" . $whereSQL . " ORDER BY when_date DESC, id DESC" . $limtSQL . ";";
        $query = $this->CI->db->query($sql);
        $out = '';
        if ($query->num_rows() < 1) {
            return $out;
        }
        $out = '';
        $i = 0;
        foreach ($query->result() as $row)
        {
            $i++;
            $out .= '   <tr>' .  "\n";
            $out .= '       <td class="clickable row-toggle collapsed" data-toggle="collapse" id="row' . $i . '" data-target=".row' . $i . '"><strong class="color-site-blue">' . $row->title . '</strong></td>' . "\n";
            $out .= '       <td>' . $row->lecturer . '</td>' . "\n";
            $out .= '       <td><a href="/companies/' . $this->sanitizeFileName($row->institute) . '">' . $row->institute  . '</a></td>' . "\n";
            $out .= '       <td class="text-right">' . date('M-Y', strtotime($row->when_date)) . '</td>' . "\n";
            $out .= '   </tr>' .  "\n";
            $out .= '   <tr class="collapse row' . $i . '">' .  "\n";
            $out .= '       <td colspan="4">' . $row->desc . '</td>' . "\n";
            $out .= '   </tr>' .  "\n";
        }
        if ($out) {
            $wrapper = '<table class="table table-hover table-striped table-curved shadow-effect-1">' . "\n";
            $wrapper .= '    <tr>' . "\n";
            $wrapper .= '        <th>Subject</th>' . "\n";
            $wrapper .= '        <th>Lecture</th>' . "\n";
            $wrapper .= '        <th>Institution</th>' . "\n";
            $wrapper .= '        <th>Date</th>' . "\n";
            $wrapper .= '    </tr>' . "\n";
            $out = $wrapper . $out . "</table>\n";
        }
        return $out;
    }

}

/* End of file Stencil.php */ 
/* Location: ./application/libararies/Stencil.php */