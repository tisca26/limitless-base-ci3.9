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
<?php require(require_template($_T, '_T')); ?>

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <?php require(require_template($_B, '_B')); ?>
        <?php //require("../test/test_plantilla.php"); ?>

        <?php require(require_template($_F, '_F')); ?>


    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
