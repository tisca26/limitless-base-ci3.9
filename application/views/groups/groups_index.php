<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Grupos</span> - Listado</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo base_url() ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <span class="breadcrumb-item active">Grupos</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?php echo base_url('groups/insertar') ?>" class="btn btn-primary" type="button"><i
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
            <h5 class="card-title">Listado de grupos</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table datatable-basic table-hover">
                <thead>
                <tr>
                    <th>Grupo</th>
                    <th>Estatus</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($grupos as $grupo): ?>
                    <tr>
                        <td><?php echo $grupo->nombre; ?></td>
                        <td>
                            <span class="badge badge-<?php echo (bool)$grupo->estatus ? 'success' : 'danger' ?>"><?php echo (bool)$grupo->estatus ? 'Activo' : 'Inactivo' ?></span>
                        </td>
                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="<?php echo base_url('acl/frm_acl/' . $grupo->groups_id . '/1') ?>"
                                           class="dropdown-item"><i class="icon-accessibility"></i> Permisos</a>
                                        <a href="<?php echo base_url('groups/editar/' . $grupo->groups_id) ?>"
                                           class="dropdown-item"><i class="icon-pencil7"></i> Editar</a>
                                        <a href="#" class="dropdown-item sweet_warning"
                                           data-elem-id="<?php echo $grupo->groups_id ?>"
                                           data-elem-nombre="<?php echo $grupo->nombre ?>"><i class="icon-eraser"></i>
                                            Borrar</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /content area -->