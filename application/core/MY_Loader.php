<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Template view
     *
     * Funcion que carga una plantilla a partir de una vista especifica, recibe 4 parametros
     *
     * 1. string Nombre de la plantilla
     * 2. array Arreglo con las variables a pasar a la vista
     * 3. string Nombre de la vista especifica
     * 4. bool Saber si regresa la vista como string o la renderea
     * @access    public
     * @param    string
     * @param    array
     * @param    array
     * @param    bool
     * @return    void
     */
    function template_view($view = 'plantillas/plantilla01', $vars = array(), $template = array(), $return = FALSE)
    {
        $vars['_T'] = isset($template['_T']) ? $template['_T'] . ".php" : '';
        $vars['_R'] = isset($template['_R']) ? $template['_R'] . ".php" : '';
        $vars['_L'] = isset($template['_L']) ? $template['_L'] . ".php" : '';
        $vars['_B'] = isset($template['_B']) ? $template['_B'] . ".php" : '';
        $vars['_F'] = isset($template['_F']) ? $template['_F'] . ".php" : '';
        $vars['_S'] = isset($template['_S']) ? $template['_S'] . ".js" : '';
        return $this->view($view, $vars, $return);
    }
}