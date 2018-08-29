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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="../full/index.html" class="navbar-nav-link">
                    <i class="icon-arrow-left8 mr-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Administración MIO</a>

                <div class="dropdown-menu">
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Seguridad</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Recursos</a>
                            <a href="#" class="dropdown-item">Usuarios</a>
                            <a href="#" class="dropdown-item">Grupos</a>
                        </div>
                    </div>
                    <a href="#" class="dropdown-item">Menú</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Vertical</a>

                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Second level</a>
                    <div class="dropdown-submenu">
                        <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Third level</a>
                            <div class="dropdown-submenu">
                                <a href="#" class="dropdown-item dropdown-toggle">Has child</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Fourth level</a>
                                    <a href="#" class="dropdown-item">Fourth level</a>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item">Third level</a>
                        </div>
                    </div>
                    <a href="#" class="dropdown-item">Second level</a>
                </div>
            </li>

            <li class='nav-item dropdown'>
                <a href="javascript:;" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown"><i class=""></i>
                    Administración</a>
                <div class='dropdown-menu'>
                    <div class='dropdown-submenu'>
                        <a href="javascript:;" class="dropdown-item dropdown-toggle"><i class=""></i> Seguridad</a>
                        <div class='dropdown-menu'>
                            <a class="dropdown-item" href="http://localhost/soe3/resources/"><i class=""></i>
                                Recursos</a>
                            <a class="dropdown-item" href="http://localhost/soe3/users/"><i class=""></i> Usuarios</a>
                            <a class="dropdown-item" href="http://localhost/soe3/groups/"><i class=""></i> Grupos</a>
                        </div>
                    </div>
                    <a class="dropdown-item" href="http://localhost/soe3/menu/"><i class=""></i> Menú</a>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    Text link
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-bell2"></i>
                    <span class="d-md-none ml-2">Notifications</span>
                    <span class="badge badge-mark border-white ml-auto ml-md-0"></span>
                </a>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo cdn_assets(); ?>images/image.png" class="rounded-circle" alt="">
                    <span>Victoria</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                                class="badge badge-pill bg-blue ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->