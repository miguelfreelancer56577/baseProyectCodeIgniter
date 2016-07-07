<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cssjs {

    var $css;
    var $js;
    var $path_css;
    var $path_js;

    function Cssjs() {
        $this->path_css = base_url() . 'recursos/styles/';
        $this->path_js = base_url() . 'recursos/script/';
        $this->clear();
    }

    function clear_css() {
        $this->css = array();
    }

    function clear_js() {
        $this->js = array();
    }

    function clear() {
        $this->css = array();
        $this->js = array();
    }

    function set_path_css($path) {
        if (is_string($path)):
            $this->path_css = $path;
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    function set_path_js($path) {
        if (is_string($path)):
            $this->path_js = $path;
            return TRUE;
        else:
            return FALSE;
        endif;
    }

    function add_css($filename, $use_path = TRUE) {
        if (is_string($filename)):
            $this->css[] = '<link href="' . (($use_path === TRUE) ? $this->path_css : '') . $filename . '.css" rel="stylesheet" type="text/css" media="all" />';
            return TRUE;
        else:
            if (is_array($filename) && count($filename) > 0):
                foreach ($filename as $fname):
                    $this->css[] = '<link href="' . (($use_path === TRUE) ? $this->path_css : '') . $fname . '.css" rel="stylesheet" type="text/css" media="all" />';
                endforeach;
                return TRUE;
            else:
                return FALSE;
            endif;
        endif;
    }

    function add_js($filename, $use_path = TRUE, $use_ext = TRUE) {
        if (is_string($filename)):
            $this->js[] = '<script type="text/javascript" src="' . (($use_path === TRUE) ? $this->path_js : '') . $filename . (($use_ext === TRUE) ? '.js' : '') . '"></script>';
            return TRUE;
        else:
            if (is_array($filename) && count($filename) > 0):
                foreach ($filename as $fname):
                    $this->js[] = '<script type="text/javascript" src="' . (($use_path === TRUE) ? $this->path_js : '') . $fname . (($use_ext === TRUE) ? '.js' : '') . '"></script>';
                endforeach;

                return TRUE;
            else:
                return FALSE;
            endif;
        endif;
    }

    function get_css() {
        return $this->css;
    }

    function get_js() {
        return $this->js;
    }

    function generate_css() {
        if (!empty($this->css)):
            $html = '';
            foreach ($this->css as $css):
                $html .= $css . "n";
            endforeach;
            return $html;
        else:
            return '';
        endif;
    }

    function generate_js() {
        if (!empty($this->js)):
            $html = '';
            foreach ($this->js as $js):
                $html .= $js . "n";
            endforeach;
            return $html;
        else:
            return '';
        endif;
    }

}
