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
                <a href="javascript:;" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown"><i class=""></i> Administración</a>
                <div class='dropdown-menu'>
                    <div class='dropdown-submenu'>
                        <a href="javascript:;" class="dropdown-item dropdown-toggle"><i class=""></i> Seguridad</a>
                        <div class='dropdown-menu'>
                            <a class="dropdown-item" href="http://localhost/soe3/resources/"><i class=""></i> Recursos</a>
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


<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> -
                        Horizontal Nav</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <a href="#" class="btn btn-labeled btn-labeled-right bg-primary">Button <b><i
                                    class="icon-menu7"></i></b></a>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="#" class="breadcrumb-item">Link</a>
                        <span class="breadcrumb-item active">Current</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            Link
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                Dropdown
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Action</a>
                                <a href="#" class="dropdown-item">Another action</a>
                                <a href="#" class="dropdown-item">One more action</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Separate action</a>
                            </div>
                        </div>
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
                    <h5 class="card-title">Basic card</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h6 class="font-weight-semibold">Start your development with no hassle!</h6>
                    <p class="mb-3">Common problem of templates is that all code is deeply integrated into the core.
                        This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to
                        remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra
                        code easily just by removing the path to specific LESS file with component styling. All plugins
                        and their options are also in separate files. Use only components you actually need!</p>

                    <h6 class="font-weight-semibold">What is this?</h6>
                    <p class="mb-3">Starter kit is a set of pages, useful for developers to start development process
                        from scratch. Each layout includes base components only: layout, page kits, color system which
                        is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup.
                        CSS files are compiled without any plugins or components. Starter kit was moved to a separate
                        folder for better accessibility.</p>

                    <h6 class="font-weight-semibold">How does it work?</h6>
                    <p>You open one of the starter pages, add necessary plugins, uncomment paths to files in
                        components.less file, compile new CSS. That's it. I'd also recommend to open one of main pages
                        with functionality you need and copy all paths/JS code from there to your new page, it's just
                        faster and easier.</p>
                </div>
            </div>
            <!-- /basic card -->


            <!-- Basic table -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Basic table</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Seed project includes the most basic components that can help you in development process - basic
                    grid example, card, table and form layouts with standard components. Nothing extra. Easily turn on
                    and off styles of different components in <code>_config.scss</code> file so that your CSS is always
                    as clean as possible. Bootstrap components are always enabled though.
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Eugene</td>
                            <td>Kopyov</td>
                            <td>@Kopyov</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Victoria</td>
                            <td>Baker</td>
                            <td>@Vicky</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>James</td>
                            <td>Alexander</td>
                            <td>@Alex</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Franklin</td>
                            <td>Morrison</td>
                            <td>@Frank</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /basic table -->


            <!-- Form layouts -->
            <div class="row">
                <div class="col-md-6">

                    <!-- Horizontal form -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Horizontal form</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Text input</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Select</label>
                                    <div class="col-lg-9">
                                        <select name="select" class="form-control">
                                            <option value="opt1">Basic select</option>
                                            <option value="opt2">Option 2</option>
                                            <option value="opt3">Option 3</option>
                                            <option value="opt4">Option 4</option>
                                            <option value="opt5">Option 5</option>
                                            <option value="opt6">Option 6</option>
                                            <option value="opt7">Option 7</option>
                                            <option value="opt8">Option 8</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Textarea</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control"
                                                  placeholder="Default textarea"></textarea>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit form <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /horizotal form -->

                </div>

                <div class="col-md-6">

                    <!-- Vertical form -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Vertical form</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="form-group">
                                    <label>Text input</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Select</label>
                                    <select name="select" class="form-control">
                                        <option value="opt1">Basic select</option>
                                        <option value="opt2">Option 2</option>
                                        <option value="opt3">Option 3</option>
                                        <option value="opt4">Option 4</option>
                                        <option value="opt5">Option 5</option>
                                        <option value="opt6">Option 6</option>
                                        <option value="opt7">Option 7</option>
                                        <option value="opt8">Option 8</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Textarea</label>
                                    <textarea rows="4" cols="4" class="form-control"
                                              placeholder="Default textarea"></textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit form <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /vertical form -->

                </div>
            </div>
            <!-- /form layouts -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a
                                href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">Text link</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="navbar-nav-link">
                            <i class="icon-lifebuoy"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                           class="navbar-nav-link font-weight-semibold">
								<span class="text-pink-400">
									<i class="icon-cart2 mr-2"></i>
									Purchase
								</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
