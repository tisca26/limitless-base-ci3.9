<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('require_template')) {
    function require_template($path = 'body01', $type = '_B')
    {
        if (is_string($path) && !empty($path)){
            if ($type === '_S'){
                return FCPATH . 'assets/js/' . $path;
            }
            return  VIEWPATH . $path;
        }
        switch ($type){
            case '_T':
                return 'top01.php';
            case '_R':
                return 'right01.php';
            case '_L':
                return 'left01.php';
            case '_B':
                return 'body01.php';
            case '_F':
                return 'footer01.php';
            default:
                return 'error01.php';
        }
    }
}