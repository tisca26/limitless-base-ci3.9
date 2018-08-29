<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Menú</span> - Editar</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="<?php echo base_url() ?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                <a href="<?php echo base_url('menu') ?>" class="breadcrumb-item">Menú</a>
                <span class="breadcrumb-item active">Editar</span>
            </div>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
                <a href="<?php echo base_url('menu/') ?>" class="btn btn-info" type="button"><i
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
            <h5 class="card-title">Edición de menú</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <?php echo get_bootstrap_alert(); ?>
            <?php echo validation_errors("<div class='alert alert-danger'>", "</div>"); ?>
            <?php echo form_open('menu/frm_editar', array('id' => 'form1', 'class' => 'form-validate-jquery')); ?>
            <?php echo form_hidden('menu_id', $menu->menu_id); ?>
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Datos personales</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre: <span class="text-danger">*</span></label>
                                    <?php $data_nombre = [
                                        'class' => 'form-control',
                                        'placeholder' => 'Nombre',
                                        'autofocus' => 'true',
                                        'required' => 'true'
                                    ]; ?>
                                    <?php echo form_input('nombre', set_value('nombre', $menu->nombre), $data_nombre); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Descripción corta: </label>
                                    <?php $data_shortdesc = [
                                        'class' => 'form-control',
                                        'placeholder' => 'Descripción corta'
                                    ]; ?>
                                    <?php echo form_input('shortdesc', set_value('shortdesc', $menu->shortdesc), $data_shortdesc); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Menú padre <span class="text-danger"> * </span></label>
                                    <?php echo form_dropdown('parent_id', $menus, $menu->parent_id, 'class="form-control select-search" data-fouc') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Estatus</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input name="estatus" type="checkbox" class="form-check-input-styled"
                                                   value="1" <?php echo set_checkbox('estatus', 1, (bool)$menu->estatus); ?>
                                                   data-fouc>
                                            ¿Activo?
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $radio_res = '';
                            $radio_url = '';
                            $page_res = '';
                            if ($menu->resource_id === NULL) {
                                $radio_url = 'checked';
                            } else {
                                $radio_res = 'checked';
                                $pos_slash = stripos($menu->page_uri, "/");
                                $page_res = substr($menu->page_uri, $pos_slash + 1);
                            }

                            ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input-styled" name="radio_url"
                                                   value="0" id="radio_res" <?php echo $radio_res; ?>
                                                   data-fouc>
                                            Enlace por recurso
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Recurso:</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php echo form_dropdown('resource_id', $recursos, ($menu->resource_id != null) ? $menu->resource_id : '', 'id="resource_id" class="form-control select-search" data-fouc') ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
											    <span class="input-group-prepend">
												    <span class="input-group-text">/</span>
											    </span>
                                                <?php $data_page_res = [
                                                    'id' => 'page_res',
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enlace adicional al recurso'
                                                ]; ?>
                                                <?php echo form_input('page_res', set_value('page_res', $page_res), $data_page_res); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input-styled" name="radio_url"
                                                   value="1" id="radio_url" <?php echo $radio_url; ?>
                                                   data-fouc>
                                            Enlace personalizado
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Enlace estándar:</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php $data_page_uri = [
                                                'id' => 'page_uri',
                                                'class' => 'form-control',
                                                'placeholder' => 'Enlace estándar del recurso'
                                            ]; ?>
                                            <?php echo form_input('page_uri', set_value('page_uri', ($menu->resource_id == null)? $menu->page_uri : ''), $data_page_uri); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Órden: <span class="text-danger">*</span></label>
                                    <?php $data_orden = [
                                        'class' => 'form-control',
                                        'placeholder' => 'Órden del menú',
                                    ]; ?>
                                    <?php echo form_input('orden', set_value('orden', $menu->orden), $data_orden); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ícono: </label>
                                    <?php $data_icon = [
                                        'class' => 'form-control',
                                        'placeholder' => 'Ícono del menú'
                                    ]; ?>
                                    <?php echo form_input('icon', set_value('icon', $menu->icon), $data_icon); ?>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="text-right">
                <a class="btn bg-grey-300" href="<?php echo base_url('menu') ?>">Cancelar</a>
                <button type="submit" class="btn btn-primary" id="btn_submit">Guardar <i
                            class="icon-paperplane ml-2"></i></button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

</div>
<!-- /content area -->