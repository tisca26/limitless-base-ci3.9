<?php defined('BASEPATH') OR exit('No direct script access allowed');

include("Privy.php");

class Dashboard extends Privy
{
    protected $plantilla = 'plantillas/plantilla01';
    public function __construct()
    {
        parent::__construct();
        $this->set_read_list(array('index'));
        $this->check_access();
    }

    public function index()
    {
        $template['_B'] = 'test/test_plantilla';
        $this->load->template_view($this->plantilla, null, $template);
    }
}