<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Recursos</span> - Editar</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo base_url() ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <a href="<?php echo base_url('resources') ?>" class="breadcrumb-item">Recursos</a>
                <span class="breadcrumb-item active">Editar</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?php echo base_url('resources/') ?>" class="btn btn-info" type="button"><i
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
            <h5 class="card-title">Edición de recursos</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <?php echo get_bootstrap_alert(); ?>
            <?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>
            <?php echo form_open('resources/frm_editar', array('id' => 'form1', 'class' => 'form-validate-jquery')); ?>
            <input type="hidden" name="resources_id" value="<?php echo $recurso->resources_id; ?>">
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Datos </legend>
                        <div class="form-group">
                            <label>Recurso: <span class="text-danger">*</span></label>
                            <?php $data_recurso = [
                                'class' => 'form-control',
                                'placeholder' => 'Recurso',
                                'autofocus' => 'true',
                                'required' => 'true'
                            ]; ?>
                            <?php echo form_input('resource', set_value('resource', $recurso->resource), $data_recurso); ?>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="text-right">
                <a class="btn bg-grey-300" href="<?php echo base_url('resources') ?>">Cancelar</a>
                <button type="submit" class="btn btn-primary" id="btn_submit">Guardar <i
                        class="icon-paperplane ml-2"></i></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

</div>
<!-- /content area -->