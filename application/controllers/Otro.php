<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Otro extends CI_Controller
{
    protected $plantilla = 'plantillas/plantilla01';
    public function index()
    {
        $template['_B'] = 'test/test_plantilla';
        $this->load->template_view($this->plantilla, null, $template);
//        $this->load->template_view($this->plantilla, null, null);
    }

}