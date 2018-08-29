<?php defined('BASEPATH') OR exit('No direct script access allowed');

include "Privy.php";

class Resources extends Privy
{
    protected $plantilla = 'plantillas/plantilla01';
    public function __construct()
    {
        parent::__construct();
        $this->set_read_list(array('index'));
        $this->set_insert_list(array('insertar', 'frm_insertar'));
        $this->set_update_list(array('editar', 'frm_editar'));
        $this->set_delete_list(array('borrar'));
        $this->check_access();
        $this->load->model('resources_model');
    }

    public function index()
    {
        $data['recursos'] = $this->resources_model->recursos_todos();
        $template['_B'] = 'resources/resources_index';
        $template['_S'] = 'resources/resources_index';
        $this->load->template_view($this->plantilla, $data, $template);
    }

    public function insertar()
    {
        $template['_B'] = 'resources/resources_insertar';
        $template['_S'] = 'resources/resources_insertar';
        $this->load->template_view($this->plantilla, null, $template);
    }

    public function frm_insertar()
    {
        $this->form_validation->set_rules('resource', 'Nombre', 'required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $this->insertar();
        } else {
            $recurso = $this->input->post();
            if ($this->resources_model->insertar($recurso)) {
                $msg = 'Se agregó con éxito registro, puede dar de alta otro o <strong><a href="' . base_url('resources') . '">regrese al inicio</a></strong>';
                set_bootstrap_alert($msg, BOOTSTRAP_ALERT_SUCCESS);
            } else {
                $msg = 'Error al guardar el registro, intente nuevamente';
                set_bootstrap_alert($msg, BOOTSTRAP_ALERT_DANGER);
            }
            redirect('resources/insertar');
        }
    }

    public function editar($id = 0)
    {
        if (!valid_id($id)) {
            $msg = 'Error en el identificador';
            set_bootstrap_alert($msg, BOOTSTRAP_ALERT_DANGER);
            redirect('resources');
        }
        $data['recurso'] = $this->resources_model->recursos_por_id($id);
        $template['_B'] = 'resources/resources_editar';
        $template['_S'] = 'resources/resources_editar';
        $this->load->template_view($this->plantilla, $data, $template);
    }

    public function frm_editar()
    {
        $this->form_validation->set_rules('resources_id', 'Identificador', 'required|integer');
        $this->form_validation->set_rules('resource', 'Nombre', 'required|min_length[3]');
        $resources_id = $this->input->post('resources_id');
        if ($this->form_validation->run() == FALSE) {
            $this->editar($resources_id);
        } else {
            $recurso = $this->input->post();
            if ($this->resources_model->editar($recurso)) {
                $msg = 'Se editó con éxito el registro';
                set_bootstrap_alert($msg, BOOTSTRAP_ALERT_SUCCESS);
            } else {
                $msg = 'Error al editar el registro, intente nuevamente';
                set_bootstrap_alert($msg, BOOTSTRAP_ALERT_DANGER);
            }
            redirect('resources');
        }
    }

    public function borrar($id = 0)
    {
        if (!valid_id($id)) {
            return redirect('resources');
        }
        if ($this->resources_model->borrar($id) !== false) {
            $msg = 'Se borró el registro con éxito';
            set_bootstrap_alert($msg, BOOTSTRAP_ALERT_SUCCESS);
        } else {
            $msg = 'Error al borrar el registro, intente nuevamente';
            set_bootstrap_alert($msg, BOOTSTRAP_ALERT_DANGER);
        }
        redirect('resources');
    }
}