<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('addCss'))
{
	function addCss($css = NULL, $rootFolder = 'assets/css/')
	{
		if (is_null($css))
		{
			return FALSE;
		}

        $assetRoot = $rootFolder;

		if (!is_array($css))
		{
            if (preg_match('/^assets\//', $css)) {
                $rootFolder = '';
            } else {
                $rootFolder = $assetRoot;
            }
			$file_type = (preg_match('/\.css$/i', $css) ? NULL : '.css');
			$url = (!preg_match('#^www|^http|^//#', $css)) ? base_url($rootFolder . $css . $file_type) : $css;
			return '<link rel="stylesheet" href="' . $url . '">' . "\n";
		}
		else
		{
			$items = array();
			$i = 0;
			$tab = "\t";
			foreach ($css as $item)
			{
                if (preg_match('/^assets\//', $item)) {
                    $rootFolder = '';
                } else {
                    $rootFolder = $assetRoot;
                }
				if ($i == count($css) - 1) {
					$tab = '';
				}
				$file_type = (preg_match('/\.css$/i', $item) ? NULL : '.css');
				$url = (!preg_match('#^www|^http|^//#', $item)) ? base_url($rootFolder . $item . $file_type) : $item;
				$items[] = '<link rel="stylesheet" href="' . $url . '">' . "\n" . $tab;
				$i++;
			}
			return implode('', $items);
		}
	}
}

if (!function_exists('addJs'))
{
	function addJs($js = NULL, $rootFolder = 'assets/js/')
	{
		if (is_null($js)) {
			return FALSE;
		}

        $assetRoot = $rootFolder;


		if (!is_array($js))
		{
            if (preg_match('/^assets\//', $js)) {
                $rootFolder = '';
            } else {
                $rootFolder = $assetRoot;
            }
			$file_type = (preg_match('/\.js$/i', $js) ? NULL : '.js');
			$url = (!preg_match('#^www|^http|^//#', $js)) ? base_url($rootFolder . $js . $file_type) : $js;
			return '<script src="' . $url . '"></script>' . "\n";
		}
		else
		{
			$items = array();
			$i = 0;
			$tab = "\t";
			foreach ($js as $item)
			{
                if (preg_match('/^assets\//', $item)) {
                    $rootFolder = '';
                } else {
                    $rootFolder = $assetRoot;
                }
				if ($i == count($js) - 1) {
					$tab = '';
				}
				$file_type = (preg_match('/\.js$/i', $item) ? NULL : '.js');
				$url = (!preg_match('#^www|^http|^//#', $item)) ? base_url($rootFolder . $item . $file_type) : $item;
				$items[] = '<script src="' . $url . '"></script>' . "\n" . $tab;
				$i++;
			}
			return implode('', $items);
		}
	}
}

if (!function_exists('addMeta'))
{
	function addMeta($meta = NULL)
	{
		if (is_null($meta))
		{
			return FALSE;
		}
		$items = array();
        $i = 0;
        $tab = '';
		foreach ($meta as $key => $value)
		{
            if ($i > 0) {
                $tab = "\t";
            }
			$items[] = $tab . '<meta name="' . $key . '" content="' . $value . '">' . "\n";
            $i++;
		}
		return implode('', $items);
	}
}

if (!function_exists('addChromeFrame'))
{
	function addChromeFrame()
	{
		return '<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->'."\n";
	}
}

if (!function_exists('addViewPort'))
{
	function addViewPort()
	{
		return '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
	}
}

if (!function_exists('addMobile'))
{
    function addMobile()
    {
        return '<meta http-equiv="cleartype" content="on">' . "\n\t" .
            '<meta name="HandheldFriendly" content="True">' . "\n\t" .
            '<meta name="MobileOptimized" content="320">' . "\n";
    }
}

if (!function_exists('addFavicons'))
{
	function addFavicons()
	{
        return '<link rel="icon" href="' . base_url('assets/image/favicons/favicon-32.png') . '" type="image/png"' . '>' . "\n\t" .
			'<link rel="shortcut icon" href="' . base_url('favicon.ico') . '">' . "\n\t" .
			'<link rel="apple-touch-icon" sizes="57x57" href="' . base_url('assets/image/favicons/favicon-57.png') . '">' . "\n\t" .
			'<link rel="apple-touch-icon-precomposed" sizes="57x57" href="' . base_url('assets/image/favicons/favicon-57.png') . '">' . "\n\t" .
			'<link rel="apple-touch-icon" sizes="72x72" href="' . base_url('assets/image/favicons/favicon-72.png') . '">' . "\n\t" .
            '<link rel="apple-touch-icon" sizes="76x76" href="' . base_url('assets/image/favicons/favicon-76.png') . '">' . "\n\t" .
            '<link rel="apple-touch-icon" sizes="114x114" href="' . base_url('assets/image/favicons/favicon-114.png') . '">' . "\n\t" .
            '<link rel="apple-touch-icon" sizes="120x120" href="' . base_url('assets/image/favicons/favicon-120.png') . '">' . "\n\t" .
            '<link rel="apple-touch-icon" sizes="144x144" href="' . base_url('assets/image/favicons/favicon-144.png') . '">' . "\n\t" .
            '<link rel="apple-touch-icon" sizes="152x152" href="' . base_url('assets/image/favicons/favicon-152.png') . '">' . "\n\t" .
			'<link rel="apple-touch-startup-image" href="' . base_url('/assets/img/startup.png') . '">' . "\n";
	}
}

if (!function_exists('addjQuery'))
{
    function addjQuery($version = NULL, $local = TRUE)
    {
        if (is_null($version)) {
            return '<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>' . "\n";
        }
        else {
            if ($local) {
                return '<script src="' . base_url() . 'assets/js/jquery-' . $version . '.min.js"></script>' . "\n";
            } else {
                return '<script src="//ajax.googleapis.com/ajax/libs/jquery/' . $version . '/jquery.min.js"></script>' . "\n";
            }
        }
    }
}

if (!function_exists('addjQueryMigrate'))
{
    function addjQueryMigrate()
    {
            return '<script src="' . base_url() . 'assets/plugins/jquery-migrate-1.2.1.min.js"></script>' . "\n";
    }
}

if (!function_exists('addjQueryUI'))
{
    function addjQueryUI($version, $local = TRUE)
    {
        if ($local) {
            return '<script src="' . base_url() . 'plugins/jqueryui/' . $version . '/jquery-ui.min.js"></script>' . "\n";
        } else {
            return '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/' . $version . '/jquery-ui.min.js"></script>' . "\n";
        }
    }
}

if (!function_exists('addjQueryUICSS'))
{
    function addjQueryCSS($version, $local = TRUE)
    {
        if ($local) {
            return '<link rel="stylesheet" href="' . base_url() . 'plugins/jqueryui/' . $version . '/jquery-ui.min.css">' . "\n";
        } else {
            return '<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/' . $version . '/themes/smoothness/jquery-ui.csss">' . "\n";
        }
    }
}

if (!function_exists('addFontAwesomeCSS'))
{
    function addFontAwesomeCSS($version, $local = TRUE)
    {
        if ($local) {
            return '<link rel="stylesheet" href="' . base_url() . 'plugins/font-awesome/' . $version . '/css/font-awesome.min.css">' . "\n";
        } else {
            return '<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/' . $version . '/css/font-awesome.min.css">' . "\n";
        }
    }
}

if (!function_exists('addBootstrapCSS'))
{
    function addBootstrapCSS($version, $local = TRUE)
    {
        if ($local) {
            return '<link rel="stylesheet" href="' . base_url() . 'plugins/bootstrap/' . $version . '/css/bootstrap.min.css">' . "\n";
        } else {
            return '<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/' . $version . '/css/bootstrap.min.css">' . "\n";
        }
    }
}

if (!function_exists('addBootstrapJS'))
{
    function addBootstrapJS($version, $local = TRUE)
    {
        if ($local) {
            return '<script src="' . base_url() . 'plugins/bootstrap/' . $version . '/cjs/bootstrap.min.js"></script>' . "\n";
        } else {
            return '<script src="//maxcdn.bootstrapcdn.com/bootstrap/' . $version . '/js/bootstrap.min.js"></script>' . "\n";
        }
    }
}

if (!function_exists('asset_url'))
{
	function asset_url($src = NULL)
	{
		if (is_null($src)) {
			return base_url() . 'assets/';
		}
		
		return base_url() . 'assets/' . $src;
	}
}

if (!function_exists('addOldIEJS'))
{
    function addOldIEJS()
    {
        $out = '<!--[if lt IE 9]>' . "\n";
        $out .= "\t\t" . '<script src="' . base_url() . 'plugins/respond.js"></script>' . "\n";
        $out .= "\t\t" . '<script src="' . base_url() . 'plugins/html5shiv.js"></script>' . "\n";
        $out .= "\t" . '<![endif]-->' . "\n";
        return $out;
    }
}

if (!function_exists('getDocRoot')) {
    function getDocRoot()
    {
        $localPath = getenv("SCRIPT_NAME");
        $absolutePath = getenv("SCRIPT_FILENAME");
        $documentRoot = substr($absolutePath, 0, strpos($absolutePath, $localPath));
        return $documentRoot;
    }
}

if (!function_exists('findFiles')) {
    function findFiles($dir = NULL, &$dirArray, $incAdmin = FALSE, $incFiles = TRUE)
    {
        if (!$dir) {
            //@TODO
        }
        $dirCount = 0;
        $fileCount = 0;
        // Create array of current directory
        $files = scandir($dir);

        if (is_array($files)) {
            foreach ($files as $val) {
                // Skip home and previous listings
                if ($val == '.' || $val == '..') {
                    continue;
                }
                // If directory then dive deeper, else add file to directory key
                if (is_dir($dir . '/' . $val)) {
                    if (!$incAdmin && $val == 'auth') {
                        continue;
                    }
                    // Add value to current array, dir or file
                    $dirCount++;
                    $dirArray[$dir][] = $val;
                    $dirArray[$dir]['DIRCOUNT'] = $dirCount;
                    findFiles($dir . '/' . $val, $dirArray, $incAdmin, $incFiles);
                } else {
                    $fileCount++;
                    if ($incFiles) {
                        $dirArray[$dir][] = $val;
                    }
                    $dirArray[$dir]['FILECOUNT'] = $fileCount;
                }
            }
        }
        ksort($dirArray);
    }
}

if (!function_exists('findPages')) {
    function findPages($incAdmin = FALSE, $incFiles = FALSE) {
        $folderList = array();
        $documentRoot = getDocRoot();
        findFiles($documentRoot . '/application/views/pages/', $folderList, $incAdmin, $incFiles);

        Kint::dump($folderList);
        return $folderList;
    }
}

if (!function_exists('showPageListPages')) {
    function showPageList($incAdmin = FALSE, $incFiles = FALSE)
    {
        $pageArray = findPages($incAdmin, $incFiles);
        foreach($pageArray as $key => $value) {
            $dir = removeprefix($key, getDocRoot() . '/application/views/pages/');
            if (!$dir) {
                $dir = '/';
            }
            $fileCount = 0;
            $dirCount = 0;
            if (array_key_exists('FILECOUNT', $value)) {
                $fileCount = $value['FILECOUNT'];
            }
            if (array_key_exists('DIRCOUNT', $value)) {
                $dirCount = $value['DIRCOUNT'];
            }
            echo $dir . ' Dirs: ' . $dirCount . ' Files: ' . $fileCount , "<br />\n";
        }
    }
}

if (!function_exists('removeprefix')) {
    function removeprefix($text, $prefix)
    {
        if (0 === strpos($text, $prefix))
            $text = substr($text, strlen($prefix)) . '';
        return $text;
    }
}

/* End of file stencil_helper.php */
/* Location: ./application/helpers/stencil_helper.php */ 