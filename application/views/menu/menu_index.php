<?php
if (!function_exists('generateRowsByLevel')) {
    /**
     * @param array $level The current navigation level array
     * @param string $output The output to be added to
     * @param lang language abreviature to genrate correct links
     * @param int $depth The current depth of the tree to determine classname
     */
    function generateRowsByLevel($level, &$output, $depth = 0.3)
    {
        foreach ($level as $row) {
            $output .= "<tr>";
            $output .= "<td class='text-center'>" . $row['menu_id'] . "</td>";
            $output .= "<td style='padding-left: " . $depth * 2.5 . "%;'>" . $row['nombre'] . "</td>";
            $output .= "<td class='text-center' >";
            $active = ($row['estatus'] == 1) ? 'icon-checkmark3' : 'icon-cross3';
            $output .= "<i class='" . $active . "'> </i>";
            $output .= "</td>";
            $output .= "<td style='text-align:center' >" . $row['parent_id'] . "</td>";
            $output .= "<td class='text-center'>" . $row['orden'] . "</td>";
            $output .= "<td >" . $row['page_uri'] . "</td>";
            $output .= "<td >" . $row['icon'] . "</td>";
            $output .= '<td class="text-center">';
            $active = ($row['estatus'] == 1) ? 'Desactivar' : 'Activar';
            $output .= '<div class="clearfix">';
            $output .= '<button class="btn btn-success btn-sm sweet_alert" data-elem-type="estatus" data-elem-nombre="'. $row['nombre'] . '" data-elem-id="' . $row['menu_id'] . '"> ' . $active . ' <i class="fa fa-cog"></i></button>';
            $output .= '<a href="' . base_url('menu/editar/' . $row['menu_id']) . '" class="btn btn-info btn-sm"> <i class="fa fa-file-o"></i> Editar </a>';
            $output .= '<button class="btn btn-danger btn-sm sweet_alert" data-elem-type="borrar" data-elem-nombre="'. $row['nombre'] . '" data-elem-id="' . $row['menu_id'] . '"> Borrar <i class="fa fa-times"></i></button>';
            $output .= '</div>';
            $output .= "</td>";
            $output .= "</tr>";
            // if the row has any children, parse those to ensure we have a properly
            // displayed nested table
            if (!empty($row['children'])) {
                generateRowsByLevel($row['children'], $output, $depth + 1);
            }
        }
    }
}
?>
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Menú</span> - Listado</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo base_url() ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active">Menú</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?php echo base_url('menu/insertar') ?>" class="btn btn-primary" type="button"><i
                            class="icon-plus3"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">

    <!-- Basic card -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Listado de menús</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <?php echo get_bootstrap_alert(); ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center"> Menu ID</th>
                        <th> Nombre</th>
                        <th class="text-center"> Estatus</th>
                        <th class="text-center"> Padre</th>
                        <th class="text-center"> Orden</th>
                        <th> Url</th>
                        <th class="text-center"> Icono</th>
                        <th class="text-center"> Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $out = '';
                    generateRowsByLevel($navlist, $out);
                    echo $out; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /content area -->