<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Usuarios</span> - Editar</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo base_url() ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <a href="<?php echo base_url('users') ?>" class="breadcrumb-item">Usuarios</a>
                <span class="breadcrumb-item active">Editar</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?php echo base_url('users/') ?>" class="btn btn-info" type="button"><i
                            class="icon-backward2 mr-1"></i> Regresar</a>
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
            <h5 class="card-title">Edición de usuarios</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <?php echo get_bootstrap_alert(); ?>
            <?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>
            <?php echo form_open('users/frm_editar', array('id' => 'form1', 'class' => 'form-validate-jquery')); ?>
            <input type="hidden" name="usuarios_id" value="<?php echo $usuario->usuarios_id; ?>">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Datos personales</legend>

                        <div class="form-group">
                            <label>Nombre: <span class="text-danger">*</span></label>
                            <?php $data_nombre = [
                                'class' => 'form-control',
                                'placeholder' => 'Nombre',
                                'autofocus' => 'true',
                                'required' => 'true'
                            ]; ?>
                            <?php echo form_input('nombre', set_value('nombre', $usuario->nombre), $data_nombre); ?>
                        </div>

                        <div class="form-group">
                            <label>Apellido Paterno: <span class="text-danger">*</span></label>
                            <?php $data_apellido_paterno = [
                                'class' => 'form-control',
                                'placeholder' => 'Apellido paterno',
                                'required' => 'true'
                            ]; ?>
                            <?php echo form_input('apellido_paterno', set_value('apellido_paterno', $usuario->apellido_paterno), $data_apellido_paterno); ?>
                        </div>

                        <div class="form-group">
                            <label>Apellido Materno: <span class="text-danger">*</span></label>
                            <?php $data_apellido_materno = [
                                'class' => 'form-control',
                                'placeholder' => 'Apellido materno',
                                'required' => 'true'
                            ]; ?>
                            <?php echo form_input('apellido_materno', set_value('apellido_materno', $usuario->apellido_materno), $data_apellido_materno); ?>
                        </div>

                        <div class="form-group">
                            <label>Correo: <span class="text-danger">*</span></label>
                            <input name="email" type="email" class="form-control" placeholder="Email" required value="<?php echo set_value('email', $usuario->email)?>">
                        </div>

                    </fieldset>
                </div>

                <div class="col-md-6">
                    <fieldset>
                        <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Datos de la cuenta</legend>
                        <div class="form-group">
                            <label>Username: <span class="text-danger">*</span></label>
                            <?php $data_username = [
                                'class' => 'form-control',
                                'placeholder' => 'Username',
                                'required' => 'true'
                            ]; ?>
                            <?php echo form_input('username', set_value('username', $usuario->username), $data_username); ?>
                        </div>

                        <div class="form-group">
                            <label>Contraseña:</label>
                            <input name="passwd" type="text" class="form-control"
                                   placeholder="Dejar en blanco si no se modifica">
                        </div>

                        <div class="form-group">
                            <label>Estatus</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input name="estatus" type="checkbox" class="form-check-input-styled" value="1" <?php echo set_checkbox('estatus', 1, (bool) $usuario->estatus); ?>
                                           data-fouc>
                                    ¿Activo?
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Grupos: <span class="text-danger">*</span></label>
                            <?php $grupos_id = explode(',', $usuario->grupos_id); ?>
                            <?php foreach ($grupos as $grupo): ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input name="groups[]" type="checkbox" class="form-check-input-styled" value="<?php echo $grupo->groups_id; ?>"
                                               data-fouc <?php echo set_checkbox('groups[]', $grupo->groups_id, in_array($grupo->groups_id, $grupos_id)); ?>>
                                        <?php echo $grupo->nombre; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </fieldset>
                </div>
            </div>

            <div class="text-right">
                <a class="btn bg-grey-300" href="<?php echo base_url('users') ?>">Cancelar</a>
                <button type="submit" class="btn btn-primary" id="btn_submit">Guardar <i
                            class="icon-paperplane ml-2"></i></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

</div>
<!-- /content area -->