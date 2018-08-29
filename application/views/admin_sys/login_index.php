<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SOE</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="<?php echo cdn_assets(); ?>css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo cdn_assets(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo cdn_assets(); ?>css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo cdn_assets(); ?>css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo cdn_assets(); ?>css/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo cdn_assets(); ?>css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?php echo cdn_assets(); ?>js/main/jquery.min.js"></script>
    <script src="<?php echo cdn_assets(); ?>js/main/bootstrap.bundle.min.js"></script>
    <script src="<?php echo cdn_assets(); ?>js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?php echo cdn_assets(); ?>js/app.js"></script>
    <!-- /theme JS files -->

</head>

<body>
<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->

            <?php echo form_open('admin_sys/login', array('class' => 'login-form')); ?>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Ingresar con su cuenta</h5>
                        <span class="d-block text-muted">Captura tus datos personales</span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="text" class="form-control" placeholder="Usuario" name="nombre_usr">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="password" class="form-control" placeholder="Password" name="pass_usr">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Entrar <i
                                    class="icon-circle-right2 ml-2"></i></button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <!-- /login form -->

        </div>
        <!-- /content area -->
    </div>
    <!-- /main content -->
</div>
<!-- /page content -->

</body>
</html>
