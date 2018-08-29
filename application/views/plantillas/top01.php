<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="../full/index.html" class="d-inline-block">
            <img src="<?php echo cdn_assets(); ?>images/logo_light.png" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <?php echo $this->menu_manager->generar_menu_db(); ?>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo cdn_assets(); ?>images/image.png" class="rounded-circle" alt="">
                    <span><?php echo get_attr_session('usr_nombre') ?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                                class="badge badge-pill bg-blue ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="<?php echo base_url('admin_sys/salir')?>" class="dropdown-item"><i class="icon-switch2"></i> Salir</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->