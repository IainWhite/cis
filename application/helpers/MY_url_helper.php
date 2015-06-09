<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Get domain
 *
 * Return the domain name only based on the "base_url" item from your config file.
 *
 * @access    public
 * @return    string
 */
if ( ! function_exists('get_domain'))
{
    function get_domain()
    {
        $CI =& get_instance();
        return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url'));
    }
}

if ( ! function_exists('getFavicon'))
{
    function getFavicon($url)
    {
        $HTTPRequest = @fopen($url, 'r');
        if ($HTTPRequest) {
            stream_set_timeout($HTTPRequest, 0.1);
            $html = fread($HTTPRequest, 4096);
            $HTTPRequestData = stream_get_meta_data($HTTPRequest);
            fclose($HTTPRequest);
            if (!$HTTPRequestData['timed_out']) {
                if (preg_match('/<link[^>]+rel="(?:shortcut )?icon"[^>]+?href="([^"]+?)"/si', $html, $matches)) {
                    $linkUrl = html_entity_decode($matches[1]);
                    if (substr($linkUrl, 0, 1) == '/') {
                        $urlParts = parse_url($url);
                        $faviconURL = $urlParts['scheme'] . '://' . $urlParts['host'] . $linkUrl;
                    } elseif (substr($linkUrl, 0, 7) == 'http://') {
                        $faviconURL = $linkUrl;
                    } elseif (substr($url, -1, 1) == '/') {
                        $faviconURL = $url . $linkUrl;
                    } else {
                        $faviconURL = $url . '/' . $linkUrl;
                    }
                } else {
                    $urlParts = parse_url($url);
                    $faviconURL = $urlParts['scheme'] . '://' . $urlParts['host'] . '/favicon.ico';
                }
                $HTTPRequest = @fopen($faviconURL, 'r');
                if ($HTTPRequest) {
                    stream_set_timeout($HTTPRequest, 0.1);
                    $favicon = fread($HTTPRequest, 8192);
                    $HTTPRequestData = stream_get_meta_data($HTTPRequest);
                    fclose($HTTPRequest);
                    if (!$HTTPRequestData['timed_out'] && strlen($favicon) < 8192) {
                        return $faviconURL;
                    }
                }
            }
        }
        return false;
    }
}
/*
if ( ! function_exists('file2URL'))
{
    function file2URL($file)
    {
        $url = 'http';
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS'] == "on") {
                $url .= 's';    
            }
        }
        $url .= '://';
        if ($_SERVER['SERVER_PORT'] != '80') {
            $url .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];
        } else {
            $url .= $_SERVER['SERVER_NAME'];
        }
        return str_replace($_SERVER['DOCUMENT_ROOT'], $url, $file);
    }
}
 */