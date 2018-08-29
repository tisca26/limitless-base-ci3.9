<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_manager
{

    private $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    public function generar_menu($menu = 'menu_web_1')
    {
        global $URI;
        $this->CI->cargar_idioma->carga_lang('menus/' . $menu);
        $menuCurrent = (strlen($URI->segment(1)) > 2) ? $URI->segment(1) : $URI->segment(2);
        $data['menu_root'] = str_replace(" ", "-", strtolower($menuCurrent));
        $this->CI->load->view('menus/' . $menu, $data);
    }

    public function generar_menu_db()
    {
        $tree = array();

        $this->CI->load->model('menu_model');

        $tree = $this->CI->menu_model->generateallActiveTreeArrayByUser(get_attr_session('usr_id'));
        //$tree = $this->CI->menu_model->generateallActiveTreeArrayByUser(1);

        $output = "";

        if (!empty($tree)) {
            $output = '<!-- INICIO GENERACION DE MENUS --><ul class="navbar-nav">';
            $this->generarMenuPorNivel($tree, $output);
            $output .= '</ul><!-- FIN GENERACION DE MENUS -->';
        }
        return $output;
    }

    protected function generarMenuPorNivel($tree, &$output, $parent = 0, &$flag = 0, &$level = 1)
    {
        if (isset($tree[$parent])) {
            foreach ($tree[$parent] as $row) {
                if (isset($tree[$row->menu_id]) && $level == 1) { //hijo de root, primeros visibles y tiene hijos
                    $output .= "<li class='nav-item dropdown'>";
                } elseif (!isset($tree[$row->menu_id]) && $level == 1) { //hijo de root y no tiene hijos
                    $output .= "<li class='nav-item'>";
                } elseif (isset($tree[$row->menu_id]) && $level > 1) { //tiene submenu en cualquier nivel, no es hijo de root
                    $inner_li = "class='nav-item dropdown'"; //no se hace nada ni se pinta nada porque el framework de plantilla no lo requiere
                }

                if (isset($tree[$row->menu_id])) { // si tiene hijos, avanza hasta llegar a la hoja
                    $aux = "";
                    $flag1 = 0;
                    $level_aux = $level;
                    $level_aux++;
                    $this->generarMenuPorNivel($tree, $aux, $row->menu_id, $flag1, $level_aux); //Como si tuvo un hijo avanzamos, esto seguirá hasta llegar a la hoja
                    if ($flag1 == 1) {//si tiene (tuvo) hijo
                        $flag = 1;
                        $icono = '<i class="' . $row->icon . '"></i> ';
                        $contenido_name = $row->nombre;
                        $class_content = '';
                        if ($level == 1) { //TIENE SUBMENU Y ES HIJO DE ROOT
                            $class_content = 'class="navbar-nav-link dropdown-toggle" data-toggle="dropdown"';
                        }
                        if ($level > 1) { //TIENE SUBMENU Y NO ES HIJO DE ROOT
                            $class_content = 'class="dropdown-item dropdown-toggle"';
                        }
                        $link_con_hijo = '<a href="javascript:;" ' . $class_content . '>' . $icono . $contenido_name . '</a>';
                        if ($level == 1) { //soy hijo de root y tengo hijos
                            $output .= $link_con_hijo;
                            $output .= "<div class='dropdown-menu'>";
                            $output .= $aux;
                            $output .= "</div>";
                        } elseif ($level > 1) {//no soy hijo de root y tengo hijos
                            $output .= "<div class='dropdown-submenu'>";
                            $output .= $link_con_hijo;
                            $output .= "<div class='dropdown-menu'>";
                            $output .= $aux;
                            $output .= "</div>";
                            $output .= "</div>";
                        }
                    } elseif (!empty($row->page_uri)) { //No tiene/tuvo hijo y si tiene url asignada
                        $icono = '<i class="' . $row->icon . '"></i> ';
                        $contenido_name = $row->nombre;
                        $output .= '<a class="btn_loading_page" href="' . base_url() . $row->page_uri . '" >' . $icono . $contenido_name . '</a>';
                        $flag = 1;
                        $level--;
                    }
                } elseif (!empty($row->page_uri)) { // genera contenido si es que tiene enlace (recurso), YA LLEGAMOS A LA HOJA INDEPENDIENTEMENTE DEL NIVEL
                    $icono = '<i class="' . $row->icon . '"></i> ';
                    $contenido_name = $row->nombre;
                    if ($level == 1) { //es hijo de root
                        $class_hoja = 'navbar-nav-link';
                    } else { //no es hijo de root
                        $class_hoja = 'dropdown-item';
                    }
                    $output .= '<a class="' . $class_hoja . '" href="' . base_url() . $row->page_uri . '">' . $icono . $contenido_name . '</a>';
                    $flag = 1;
                }
                if ($level == 1){
                    $output .= "</li>";
                }
                $output .= "";
            }
        }
    }
}

?>
