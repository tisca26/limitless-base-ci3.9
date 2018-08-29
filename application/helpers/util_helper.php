<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('number_format_clean')) {
    function number_format_clean($number, $precision = 0, $dec_point = '.', $thousands_sep = ',')
    {
        $element = number_format($number, $precision, $dec_point, $thousands_sep);
        $elements = explode($dec_point, $element);
        $decimals = str_split($elements[1]);
        foreach ($decimals as $digit) {
            if ($digit != 0) {
                return $element;
            }
        }
        return $elements[0];
    }
}

if (!function_exists('in_array_field')) {
    function in_array_field($needle = '', string $needle_field = 'id', array $haystack = array(), bool $strict = false)
    {
        if ($strict) {
            foreach ($haystack as $key => $item) {
                if (isset($item->$needle_field) && $item->$needle_field === $needle) {
                    log_message("debug", "El valor de $needle_field es: " . $item->$needle_field);
                    return $key;
                }
            }
        } else {
            foreach ($haystack as $key => $item) {
                if (isset($item->$needle_field) && $item->$needle_field == $needle) {
                    log_message("debug", "El valor de $needle_field es: " . $item->$needle_field);
                    return $key;
                }
            }
        }
        return false;
    }
}

if (!function_exists('valid_id')) {
    function valid_id($id = '0')
    {
        $number = false;
        if (is_string($id) && $id > 0) {
            $number = filter_var($id, FILTER_VALIDATE_INT);
        }
        return ($number !== FALSE);
    }
}

if (!function_exists('meses_sel')) {
    function meses_sel($mes = 'Jan')
    {
        $meses = array(
            'Jan' => 'Ene',
            'January' => 'Enero',
            'Feb' => 'Feb',
            'February' => 'Febrero',
            'Mar' => 'Mar',
            'March' => 'Marzo',
            'Apr' => 'Abr',
            'April' => 'Abril',
            'May' => 'May',
            'May' => 'Mayo',
            'Jun' => 'Jun',
            'June' => 'Junio',
            'Jul' => 'Jul',
            'July' => 'Julio',
            'Aug' => 'Ago',
            'August' => 'Agosto',
            'Sep' => 'Sep',
            'September' => 'Septiembre',
            'Oct' => 'Oct',
            'October' => 'Octubre',
            'Nov' => 'Nov',
            'November' => 'Noviembre',
            'Dec' => 'Dic',
            'December' => 'Diciembre'
        );
        return $meses[$mes];
    }
}
if (!function_exists('dias_sel')) {
    function dias_sel($dia = 'Mon')
    {
        $dias = array(
            'Mon' => 'Lun',
            'Monday' => 'Lunes',
            'Tue' => 'Mar',
            'Tuesday' => 'Martes',
            'Wed' => 'Mie',
            'Wednesday' => 'Miércoles',
            'Thu' => 'Jue',
            'Thursday' => 'Jueves',
            'Fri' => 'Vie',
            'Friday' => 'Viernes',
            'Sat' => 'Sab',
            'Saturday' => 'Sábado',
            'Sun' => 'Dom',
            'Sunday' => 'Domingo'
        );
        return $dias[$dia];
    }
}
if (!function_exists('startsWith')) {
    function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }
}

if (!function_exists('endsWith')) {
    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);

        return $length === 0 ||
            (substr($haystack, -$length) === $needle);
    }
}
if (!function_exists('is_dir_empty')) {
    function is_dir_empty($dir)
    {
        if (!is_dir($dir)) return true;
        $handle = opendir($dir);
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                return FALSE;
            }
        }
        return TRUE;
    }
}
?>