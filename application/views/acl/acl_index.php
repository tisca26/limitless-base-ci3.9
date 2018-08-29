<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Permisos</span> - Listado</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo base_url() ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active">Permisos</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">

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
            <h5 class="card-title">Listado de permisos - <?php echo $title; ?></h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <?php echo get_bootstrap_alert(); ?>
            <?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>
            <?php echo form_open('acl/edit_acl', array('id' => 'form1', 'class' => 'form-validate-jquery')); ?>
            <?php echo form_hidden('targetid', $targetid) ?>
            <?php echo form_hidden('targettype', $targettype) ?>
            <div class="row">
                <div class="col-md-12">
                    <?php if (empty($rows)): ?>
                        <div class="message">
                            <p>Sin información</p>
                        </div>
                    <?php else: ?>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th><?php echo 'Recurso'; ?></th>
                                <th class="text-center"><?php echo 'R'; ?></th>
                                <th class="text-center"><?php echo 'I'; ?></th>
                                <th class="text-center"><?php echo 'U'; ?></th>
                                <th class="text-center"><?php echo 'D'; ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($rows as $row) {
                                //if is an user
                                $r_name = 'R[]';
                                $i_name = 'I[]';
                                $u_name = 'U[]';
                                $d_name = 'D[]';
                                $r_disable = '';
                                $i_disable = '';
                                $u_disable = '';
                                $d_disable = '';
                                if ($targettype == 2) {
                                    if ($row->R_G == 1) {
                                        $r_name = 'R';
                                        $r_disable = 'disabled';
                                    }
                                    if ($row->I_G == 1) {
                                        $i_name = 'I';
                                        $i_disable = 'disabled';
                                    }
                                    if ($row->U_G == 1) {
                                        $u_name = 'U';
                                        $u_disable = 'disabled';
                                    }
                                    if ($row->D_G == 1) {
                                        $d_name = 'D';
                                        $d_disable = 'disabled';
                                    }
                                }
                                echo '<tr>';
                                echo '<td>' . form_hidden('id[]', $row->RESOURCEID) . $row->resource . '</td>';
                                echo '<td class="text-center" >' . form_checkbox(array('name' => $r_name, 'id' => 'R' . $row->resources_id, 'value' => $row->resources_id, 'checked' => (bool)$row->R, $r_disable => '')) . '</td>';
                                echo '<td class="text-center" >' . form_checkbox(array('name' => $i_name, 'id' => 'I' . $row->resources_id, 'value' => $row->resources_id, 'checked' => (bool)$row->I, $i_disable => '')) . '</td>';
                                echo '<td class="text-center" >' . form_checkbox(array('name' => $u_name, 'id' => 'U' . $row->resources_id, 'value' => $row->resources_id, 'checked' => (bool)$row->U, $u_disable => '')) . '</td>';
                                echo '<td class="text-center" >' . form_checkbox(array('name' => $d_name, 'id' => 'D' . $row->resources_id, 'value' => $row->resources_id, 'checked' => (bool)$row->D, $d_disable => '')) . '</td>';
                                echo '</tr>';
                            }
                            ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>


            <div class="text-right">
                <?php $dir = ($targettype == 1) ? 'groups' : 'users'; ?>
                <a class="btn bg-grey-300" href="<?php echo base_url() . $dir ?>">Regresar</a>
                <button type="submit" class="btn btn-primary" id="btn_submit">Guardar <i
                            class="icon-paperplane ml-2"></i></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

</div>
<!-- /content area -->