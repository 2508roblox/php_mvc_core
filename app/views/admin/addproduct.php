<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YNEX - Bootstrap 5 Premium Admin & Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/favicon.ico" type="image/x-icon">
    <!-- Choices JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main Theme Js -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/main.js"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style Css -->
    <link href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/css/styles.min.css" rel="stylesheet">
    <!-- Icons Css -->
    <link href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/css/icons.css" rel="stylesheet">
    <!-- Node Waves Css -->
    <link href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/node-waves/waves.min.css" rel="stylesheet">
    <!-- Simplebar Css -->
    <link href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/@simonwep/pickr/themes/nano.min.css">
    <!-- Choices Css -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/quill/quill.snow.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/quill/quill.bubble.css">
    <!-- Filepond CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond/filepond.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">
    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/flatpickr/flatpickr.min.css">
    <script type="text/javascript">

    </script><noscript>
        <p>To display this page you need a browser that supports JavaScript.</p>
    </noscript>
    <meta http-equiv="imagetoolbar" content="no" />
    <style type="text/css">

    </style>
    <style type="text/css" media="print">

    </style>
    <!--[if gte IE 5]><frame></frame><![endif]-->
</head>

<body>
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5> <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist"> <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button> <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button> </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-light-theme"> Light </label> <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-dark-theme"> Dark </label> <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-ltr"> LTR </label> <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-rtl"> RTL </label> <input class="form-check-input" type="radio" name="direction" id="switcher-rtl"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-vertical"> Vertical </label> <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-horizontal"> Horizontal </label> <input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-click"> Menu Click </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-hover"> Menu Hover </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-click"> Icon Click </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-hover"> Icon Hover </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-default-menu"> Default Menu </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-default-menu" checked> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-closed-menu"> Closed Menu </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icontext-menu"> Icon Text </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-overlay"> Icon Overlay </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icon-overlay"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-detached"> Detached </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-detached"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-double-menu"> Double Menu </label> <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-double-menu"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-regular"> Regular </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-classic"> Classic </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-modern"> Modern </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-full-width"> Full Width </label> <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-boxed"> Boxed </label> <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-fixed"> Fixed </label> <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-scroll"> Scrollable </label> <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-header-fixed"> Fixed </label> <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-header-scroll"> Scrollable </label> <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors" id="switcher-menu-light"> </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors" id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors" id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors" id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Header" type="radio" name="header-colors" id="switcher-header-light" checked> </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Header" type="radio" name="header-colors" id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Header" type="radio" name="header-colors" id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3"> </div>
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer flex-wrap"> <a href="https://themeforest.net/item/ynex-bootstrap-admin-dashboard-template/45551445" class="btn btn-primary m-1">Buy Now</a> <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary m-1">Our Portfolio</a>
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <div class="page">
        <!-- app-header -->
        <header class="app-header">
            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">
                <!-- Start::header-content-left -->
                <div class="header-content-left">
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo"> <a href="index.html" class="header-logo"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                                <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                            </a> </div>
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link --><a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->
                </div>
                <!-- End::header-content-left -->
                <!-- Start::header-content-right -->
                <div class="header-content-right">
                    <!-- Start::header-element -->
                    <div class="header-element header-search">
                        <!-- Start::header-link --><a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal"> <i class="bx bx-search-alt-2 header-link-icon"></i> </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle --><a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/us_flag.jpg" alt="img" class="rounded-circle"> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/us_flag.jpg" alt="img"> </span> English </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/spain_flag.jpg" alt="img"> </span> Spanish </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/french_flag.jpg" alt="img"> </span> French </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/germany_flag.jpg" alt="img"> </span> German </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/italy_flag.jpg" alt="img"> </span> Italian </a>
                            </li>
                            <li> <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"> <span class="avatar avatar-xs lh-1 me-2"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/russia_flag.jpg" alt="img"> </span> Russian </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting --><a href="javascript:void(0);" class="header-link layout-setting"> <span class="light-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-moon header-link-icon"></i>
                                <!-- End::header-link-icon --> </span> <span class="dark-layout">
                                <!-- Start::header-link-icon --> <i class="bx bx-sun header-link-icon"></i>
                                <!-- End::header-link-icon --> </span> </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle --><a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <i class="bx bx-cart header-link-icon"></i> <span class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p><span class="badge bg-success-transparent" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/1.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="<?php echo ASSETS_URL_ROOT ?>/cart.html">SomeThing Phone</a> </div>
                                                <div> <span class="text-black mb-1">$1,299.00</span> <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Metallic Blue</li>
                                                    <li>6gb Ram</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/3.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="<?php echo ASSETS_URL_ROOT ?>/cart.html">Stop
                                                        Watch</a> </div>
                                                <div> <span class="text-black mb-1">$179.29</span> <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item">
                                                    <li>Analog</li>
                                                    <li><span class="badge bg-pink-transparent fs-10">Free
                                                            shipping</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/5.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="<?php echo ASSETS_URL_ROOT ?>/cart.html">Photo
                                                        Frame</a> </div>
                                                <div> <span class="text-black mb-1">$29.00</span> <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Decorative</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/4.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="<?php echo ASSETS_URL_ROOT ?>/cart.html">Kikon
                                                        Camera</a> </div>
                                                <div> <span class="text-black mb-1">$4,999.00</span> <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Black</li>
                                                    <li>50MM</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/6.jpg" alt="img" class="avatar avatar-sm avatar-rounded br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start justify-content-between mb-0">
                                                <div class="mb-0 fs-13 text-dark fw-semibold"> <a href="<?php echo ASSETS_URL_ROOT ?>/cart.html">Canvas Shoes</a> </div>
                                                <div> <span class="text-black mb-1">$129.00</span> <a href="javascript:void(0);" class="header-cart-remove float-end dropdown-item-close"><i class="ti ti-trash"></i></a> </div>
                                            </div>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <ul class="header-product-item d-flex">
                                                    <li>Gray</li>
                                                    <li>Sports</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid"> <a href="<?php echo ASSETS_URL_ROOT ?>/checkout.html" class="btn btn-primary">Proceed to
                                        checkout</a> </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center"> <span class="avatar avatar-xl avatar-rounded bg-warning-transparent"> <i class="ri-shopping-cart-2-line fs-2"></i> </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6> <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="products.html" class="btn btn-primary btn-wave btn-sm m-1" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle --><a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false"> <i class="bx bx-bell header-link-icon"></i>
                            <span class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary" id="notification-icon-badge">5</span> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p><span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i class="ti ti-gift fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Your Order Has
                                                        Been Shipped</a></p><span class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    No: 123456 Has Shipped To Your Delivery Address</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span class="avatar avatar-md bg-secondary-transparent avatar-rounded"><i class="ti ti-discount-2 fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Discount
                                                        Available</a></p><span class="text-muted fw-normal fs-12 header-notification-text">Discount
                                                    Available On Selected Products</span>
                                            </div>
                                            <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span class="avatar avatar-md bg-pink-transparent avatar-rounded"><i class="ti ti-user-check fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Account Has
                                                        Been Verified</a></p><span class="text-muted fw-normal fs-12 header-notification-text">Your
                                                    Account Has Been Verified Sucessfully</span>
                                            </div>
                                            <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span class="avatar avatar-md bg-warning-transparent avatar-rounded"><i class="ti ti-circle-check fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Order Placed
                                                        <span class="text-warning">ID: #1116773</span></a></p><span class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    Placed Successfully</span>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                        <div class="pe-2"> <span class="avatar avatar-md bg-success-transparent avatar-rounded"><i class="ti ti-clock fs-18"></i></span> </div>
                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Order Delayed
                                                        <span class="text-success">ID: 7731116</span></a></p><span class="text-muted fw-normal fs-12 header-notification-text">Order
                                                    Delayed Unfortunately</span>
                                            </div>
                                            <div> <a href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a> </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid"> <a href="notifications.html" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center"> <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i class="ri-notification-off-line fs-2"></i> </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-shortcuts-dropdown">
                        <!-- Start::header-link|dropdown-toggle --><a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false"> <i class="bx bx-grid-alt header-link-icon"></i> </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end" aria-labelledby="notificationDropdown">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                                </div>
                            </div>
                            <div class="dropdown-divider mb-0"></div>
                            <div class="main-header-shortcuts p-2" id="header-shortcut-scroll">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/figma.png" alt=""> </span> <span class="d-block fs-12">Figma</span> </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/microsoft-powerpoint.png" alt="">
                                                </span> <span class="d-block fs-12">Power Point</span> </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/microsoft-word.png" alt=""> </span>
                                                <span class="d-block fs-12">MS Word</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/calender.png" alt=""> </span> <span class="d-block fs-12">Calendar</span> </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/sketch.png" alt=""> </span> <span class="d-block fs-12">Sketch</span> </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/google-docs.png" alt=""> </span>
                                                <span class="d-block fs-12">Docs</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/google.png" alt=""> </span> <span class="d-block fs-12">Google</span> </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/translate.png" alt=""> </span> <span class="d-block fs-12">Translate</span> </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);">
                                            <div class="text-center p-3 related-app"> <span class="avatar avatar-sm avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/apps/google-sheets.png" alt=""> </span>
                                                <span class="d-block fs-12">Sheets</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-top">
                                <div class="d-grid"> <a href="javascript:void(0);" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link --><a onclick="openFullscreen();" href="#" class="header-link"> <i class="bx bx-fullscreen full-screen-open header-link-icon"></i> <i class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i> </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/9.jpg" alt="img" width="32" height="32" class="rounded-circle"> </div>
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1">Json Taylor</p><span class="op-7 fw-normal d-block fs-11">Web Designer</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="profile.html"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex" href="mail.html"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span class="badge bg-success-transparent ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="to-do-list.html"><i class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex" href="mail-settings.html"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                            <li><a class="dropdown-item d-flex" href="chat.html"><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="sign-in-cover.html"><i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon --><a href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas"> <i class="bx bx-cog header-link-icon"></i> </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->
                </div>
                <!-- End::header-content-right -->
            </div>
            <!-- End::main-header-container -->
        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">
            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header"> <a href="index.html" class="header-logo"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark"> </a> </div>
            <!-- End::main-sidebar-header -->
            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">
                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left"> <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg> </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-home side-menu__icon"></i> <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2">12</span></span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Dashboards</a> </li>
                                <li class="slide"> <a href="index.html" class="side-menu__item">CRM</a> </li>
                                <li class="slide"> <a href="index-1.html" class="side-menu__item">Ecommerce</a> </li>
                                <li class="slide"> <a href="index-2.html" class="side-menu__item">Crypto</a> </li>
                                <li class="slide"> <a href="index-3.html" class="side-menu__item">Jobs</a> </li>
                                <li class="slide"> <a href="index-4.html" class="side-menu__item">NFT</a> </li>
                                <li class="slide"> <a href="index-5.html" class="side-menu__item">Sales</a> </li>
                                <li class="slide"> <a href="index-6.html" class="side-menu__item">Analytics</a> </li>
                                <li class="slide"> <a href="index-7.html" class="side-menu__item">Projects</a> </li>
                                <li class="slide"> <a href="index-8.html" class="side-menu__item">HRM</a> </li>
                                <li class="slide"> <a href="index-9.html" class="side-menu__item">Stocks</a> </li>
                                <li class="slide"> <a href="index-10.html" class="side-menu__item">Courses</a> </li>
                                <li class="slide"> <a href="index-11.html" class="side-menu__item">Personal</a> </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Pages</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-file-blank side-menu__icon"></i> <span class="side-menu__label">Pages</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Pages</a> </li>
                                <li class="slide"> <a href="about-us.html" class="side-menu__item">About Us</a> </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Blog <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="blog.html" class="side-menu__item">Blog</a> </li>
                                        <li class="slide"> <a href="blog-details.html" class="side-menu__item">Blog
                                                Details</a> </li>
                                        <li class="slide"> <a href="blog-create.html" class="side-menu__item">Create
                                                Blog</a> </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a href="chat.html" class="side-menu__item">Chat</a> </li>
                                <li class="slide"> <a href="contacts.html" class="side-menu__item">Contacts</a> </li>
                                <li class="slide"> <a href="contact-us.html" class="side-menu__item">Contact Us</a>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Ecommerce <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="add-products.html" class="side-menu__item">Add
                                                Products</a> </li>
                                        <li class="slide"> <a href="<?php echo ASSETS_URL_ROOT ?>/cart.html" class="side-menu__item">Cart</a> </li>
                                        <li class="slide"> <a href="<?php echo ASSETS_URL_ROOT ?>/checkout.html" class="side-menu__item">Checkout</a>
                                        </li>
                                        <li class="slide"> <a href="edit-products.html" class="side-menu__item">Edit
                                                Products</a> </li>
                                        <li class="slide"> <a href="order-details.html" class="side-menu__item">Order
                                                Details</a> </li>
                                        <li class="slide"> <a href="orders.html" class="side-menu__item">Orders</a>
                                        </li>
                                        <li class="slide"> <a href="products.html" class="side-menu__item">Products</a>
                                        </li>
                                        <li class="slide"> <a href="product-details.html" class="side-menu__item">Product Details</a> </li>
                                        <li class="slide"> <a href="products-list.html" class="side-menu__item">Products
                                                List</a> </li>
                                        <li class="slide"> <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Email
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="mail.html" class="side-menu__item">Mail App</a>
                                        </li>
                                        <li class="slide"> <a href="mail-settings.html" class="side-menu__item">Mail
                                                Settings</a> </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a href="empty.html" class="side-menu__item">Empty</a> </li>
                                <li class="slide"> <a href="faq's.html" class="side-menu__item">FAQ's</a> </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">File
                                        Manager <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="file-manager.html" class="side-menu__item">File
                                                Manager</a> </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Invoice
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="invoice-create.html" class="side-menu__item">Create
                                                Invoice</a> </li>
                                        <li class="slide"> <a href="invoice-details.html" class="side-menu__item">Invoice Details</a> </li>
                                        <li class="slide"> <a href="invoice-list.html" class="side-menu__item">Invoice
                                                List</a> </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a href="landing.html" class="side-menu__item">Landing</a> </li>
                                <li class="slide"> <a href="notifications.html" class="side-menu__item">Notifications</a> </li>
                                <li class="slide"> <a href="pricing.html" class="side-menu__item">Pricing</a> </li>
                                <li class="slide"> <a href="profile.html" class="side-menu__item">Profile</a> </li>
                                <li class="slide"> <a href="reviews.html" class="side-menu__item">Reviews</a> </li>
                                <li class="slide"> <a href="team.html" class="side-menu__item">Team</a> </li>
                                <li class="slide"> <a href="terms_conditions.html" class="side-menu__item">Terms &
                                        Conditions</a> </li>
                                <li class="slide"> <a href="timeline.html" class="side-menu__item">Timeline</a> </li>
                                <li class="slide"> <a href="to-do-list.html" class="side-menu__item">To Do List</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-fingerprint side-menu__icon"></i> <span class="side-menu__label">Authentication</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Authentication</a>
                                </li>
                                <li class="slide"> <a href="coming-soon.html" class="side-menu__item">Coming Soon</a>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Create
                                        Password <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="create-password-basic.html" class="side-menu__item">Basic</a> </li>
                                        <li class="slide"> <a href="create-password-cover.html" class="side-menu__item">Cover</a> </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Lock
                                        Screen <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="lockscreen-basic.html" class="side-menu__item">Basic</a> </li>
                                        <li class="slide"> <a href="lockscreen-cover.html" class="side-menu__item">Cover</a> </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Reset
                                        Password <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="reset-password-basic.html" class="side-menu__item">Basic</a> </li>
                                        <li class="slide"> <a href="reset-password-cover.html" class="side-menu__item">Cover</a> </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="sign-up-basic.html" class="side-menu__item">Basic</a> </li>
                                        <li class="slide"> <a href="sign-up-cover.html" class="side-menu__item">Cover</a> </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Sign In
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="sign-in-basic.html" class="side-menu__item">Basic</a> </li>
                                        <li class="slide"> <a href="sign-in-cover.html" class="side-menu__item">Cover</a> </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Two
                                        Step Verification <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="two-step-verification-basic.html" class="side-menu__item">Basic</a> </li>
                                        <li class="slide"> <a href="two-step-verification-cover.html" class="side-menu__item">Cover</a> </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a href="under-maintenance.html" class="side-menu__item">Under
                                        Maintenance</a> </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-error side-menu__icon"></i> <span class="side-menu__label">Error</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Error</a> </li>
                                <li class="slide"> <a href="401-error.html" class="side-menu__item">401 - Error</a>
                                </li>
                                <li class="slide"> <a href="404-error.html" class="side-menu__item">404 - Error</a>
                                </li>
                                <li class="slide"> <a href="500-error.html" class="side-menu__item">500 - Error</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-box side-menu__icon"></i> <span class="side-menu__label">Ui
                                    Elements</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Ui Elements</a> </li>
                                <li class="slide"> <a href="alerts.html" class="side-menu__item">Alerts</a> </li>
                                <li class="slide"> <a href="badge.html" class="side-menu__item">Badge</a> </li>
                                <li class="slide"> <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                </li>
                                <li class="slide"> <a href="buttons.html" class="side-menu__item">Buttons</a> </li>
                                <li class="slide"> <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                </li>
                                <li class="slide"> <a href="cards.html" class="side-menu__item">Cards</a> </li>
                                <li class="slide"> <a href="dropdowns.html" class="side-menu__item">Dropdowns</a> </li>
                                <li class="slide"> <a href="images_figures.html" class="side-menu__item">Images &
                                        Figures</a> </li>
                                <li class="slide"> <a href="listgroup.html" class="side-menu__item">List Group</a> </li>
                                <li class="slide"> <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                                </li>
                                <li class="slide"> <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                                <li class="slide"> <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide"> <a href="popovers.html" class="side-menu__item">Popovers</a> </li>
                                <li class="slide"> <a href="progress.html" class="side-menu__item">Progress</a> </li>
                                <li class="slide"> <a href="spinners.html" class="side-menu__item">Spinners</a> </li>
                                <li class="slide"> <a href="toasts.html" class="side-menu__item">Toasts</a> </li>
                                <li class="slide"> <a href="tooltips.html" class="side-menu__item">Tooltips</a> </li>
                                <li class="slide"> <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-medal side-menu__icon"></i> <span class="side-menu__label">Utilities</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Utilities</a> </li>
                                <li class="slide"> <a href="avatars.html" class="side-menu__item">Avatars</a> </li>
                                <li class="slide"> <a href="borders.html" class="side-menu__item">Borders</a> </li>
                                <li class="slide"> <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                </li>
                                <li class="slide"> <a href="colors.html" class="side-menu__item">Colors</a> </li>
                                <li class="slide"> <a href="columns.html" class="side-menu__item">Columns</a> </li>
                                <li class="slide"> <a href="flex.html" class="side-menu__item">Flex</a> </li>
                                <li class="slide"> <a href="gutters.html" class="side-menu__item">Gutters</a> </li>
                                <li class="slide"> <a href="helpers.html" class="side-menu__item">Helpers</a> </li>
                                <li class="slide"> <a href="position.html" class="side-menu__item">Position</a> </li>
                                <li class="slide"> <a href="more.html" class="side-menu__item">Additional Content</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-file side-menu__icon"></i> <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Forms</a> </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Form
                                        Elements <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide"> <a href="form_check_radios.html" class="side-menu__item">Checks & Radios</a> </li>
                                        <li class="slide"> <a href="form_input_group.html" class="side-menu__item">Input
                                                Group</a> </li>
                                        <li class="slide"> <a href="form_select.html" class="side-menu__item">Form
                                                Select</a> </li>
                                        <li class="slide"> <a href="form_range.html" class="side-menu__item">Range
                                                Slider</a> </li>
                                        <li class="slide"> <a href="form_input_masks.html" class="side-menu__item">Input
                                                Masks</a> </li>
                                        <li class="slide"> <a href="form_file_uploads.html" class="side-menu__item">File
                                                Uploads</a> </li>
                                        <li class="slide"> <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a> </li>
                                        <li class="slide"> <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a> </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a href="floating_labels.html" class="side-menu__item">Floating
                                        Labels</a> </li>
                                <li class="slide"> <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Form
                                        Editors <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="quill_editor.html" class="side-menu__item">Quill
                                                Editor</a> </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a href="form_validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide"> <a href="form_select2.html" class="side-menu__item">Select2</a> </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-party side-menu__icon"></i> <span class="side-menu__label">Advanced
                                    Ui</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Advanced Ui</a> </li>
                                <li class="slide"> <a href="accordions_collpase.html" class="side-menu__item">Accordions
                                        & Collapse</a> </li>
                                <li class="slide"> <a href="carousel.html" class="side-menu__item">Carousel</a> </li>
                                <li class="slide"> <a href="draggable-cards.html" class="side-menu__item">Draggable
                                        Cards</a> </li>
                                <li class="slide"> <a href="modals_closes.html" class="side-menu__item">Modals &
                                        Closes</a> </li>
                                <li class="slide"> <a href="navbar.html" class="side-menu__item">Navbar</a> </li>
                                <li class="slide"> <a href="offcanvas.html" class="side-menu__item">Offcanvas</a> </li>
                                <li class="slide"> <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                </li>
                                <li class="slide"> <a href="ratings.html" class="side-menu__item">Ratings</a> </li>
                                <li class="slide"> <a href="scrollspy.html" class="side-menu__item">Scrollspy</a> </li>
                                <li class="slide"> <a href="swiperjs.html" class="side-menu__item">Swiper JS</a> </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide"> <a href="widgets.html" class="side-menu__item"> <i class="bx bx-gift side-menu__icon"></i> <span class="side-menu__label">Widgets<span class="badge bg-danger-transparent ms-2">Hot</span></span> </a> </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-grid-alt side-menu__icon"></i> <span class="side-menu__label">Apps</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Apps</a> </li>
                                <li class="slide"> <a href="full-calendar.html" class="side-menu__item">Full
                                        Calendar</a> </li>
                                <li class="slide"> <a href="gallery.html" class="side-menu__item">Gallery</a> </li>
                                <li class="slide"> <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-layer side-menu__icon"></i> <span class="side-menu__label">Nested
                                    Menu</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Nested Menu</a> </li>
                                <li class="slide"> <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Nested-2 <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a> </li>
                                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Nested-2-2 <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide"> <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a> </li>
                                                <li class="slide"> <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Tables & Charts</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-table side-menu__icon"></i> <span class="side-menu__label">Tables<span class="badge bg-success-transparent ms-2">3</span></span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Tables</a> </li>
                                <li class="slide"> <a href="tables.html" class="side-menu__item">Tables</a> </li>
                                <li class="slide"> <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide"> <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-bar-chart-square side-menu__icon"></i> <span class="side-menu__label">Charts</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Charts</a> </li>
                                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item">Apex
                                        Charts <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"> <a href="apex-line-charts.html" class="side-menu__item">Line
                                                Charts</a> </li>
                                        <li class="slide"> <a href="apex-area-charts.html" class="side-menu__item">Area
                                                Charts</a> </li>
                                        <li class="slide"> <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a> </li>
                                        <li class="slide"> <a href="apex-bar-charts.html" class="side-menu__item">Bar
                                                Charts</a> </li>
                                        <li class="slide"> <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a> </li>
                                        <li class="slide"> <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a> </li>
                                        <li class="slide"> <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a> </li>
                                        <li class="slide"> <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick Charts</a> </li>
                                        <li class="slide"> <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a> </li>
                                        <li class="slide"> <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a> </li>
                                        <li class="slide"> <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a> </li>
                                        <li class="slide"> <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a> </li>
                                        <li class="slide"> <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a> </li>
                                        <li class="slide"> <a href="apex-pie-charts.html" class="side-menu__item">Pie
                                                Charts</a> </li>
                                        <li class="slide"> <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a> </li>
                                        <li class="slide"> <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a> </li>
                                        <li class="slide"> <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a> </li>
                                    </ul>
                                </li>
                                <li class="slide"> <a href="chartjs-charts.html" class="side-menu__item">Chartjs
                                        Charts</a> </li>
                                <li class="slide"> <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Maps & Icons</span></li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-map side-menu__icon"></i> <span class="side-menu__label">Maps</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"> <a href="javascript:void(0)">Maps</a> </li>
                                <li class="slide"> <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                                <li class="slide"> <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide"> <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide"> <a href="icons.html" class="side-menu__item"> <i class="bx bx-store-alt side-menu__icon"></i> <span class="side-menu__label">Icons</span> </a> </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->
            </div>
            <!-- End::main-sidebar -->
        </aside>
        <!-- End::app-sidebar -->
        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Add Product</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-body add-products p-0">
                                <div class="p-4">
                                    <div class="row gx-5">
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12"> <label for="product-name-add" class="form-label">Product Name</label> <input type="text" class="form-control" id="product-name-add" placeholder="Name"> <label for="product-name-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Product
                                                                Name should not exceed 30 characters</label> </div>
                                                        <div class="col-xl-6"> <label for="product-category-add" class="form-label">Category</label> <select class="form-control" data-trigger name="product-category-add" id="product-category-add">
                                                                <option value="">Category</option>
                                                                <option value="Clothing">Clothing</option>
                                                                <option value="Footwear">Footwear</option>
                                                                <option value="Accesories">Accesories</option>
                                                                <option value="Grooming">Grooming</option>
                                                                <option value="Ethnic & Festive">Ethnic & Festive
                                                                </option>
                                                                <option value="Jewellery">Jewellery</option>
                                                                <option value="Toys & Babycare">Toys & Babycare</option>
                                                                <option value="Festive Gifts">Festive Gifts</option>
                                                                <option value="Kitchen">Kitchen</option>
                                                                <option value="Dining">Dining</option>
                                                                <option value="Home Decors">Home Decors</option>
                                                                <option value="Stationery">Stationery</option>
                                                            </select> </div>
                                                        <div class="col-xl-6"> <label for="product-gender-add" class="form-label">Gender</label> <select class="form-control" data-trigger name="product-gender-add" id="product-gender-add">
                                                                <option value="">Select</option>
                                                                <option value="All">All</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Others">Others</option>
                                                            </select> </div>
                                                        <div class="col-xl-6"> <label for="product-size-add" class="form-label">Size</label> <select class="form-control" data-trigger name="product-size-add" id="product-size-add">
                                                                <option value="">Select</option>
                                                                <option value="Extra Small">Extra Small</option>
                                                                <option value="Small">Small</option>
                                                                <option value="Medium">Medium</option>
                                                                <option value="Large">Large</option>
                                                                <option value="Extra Large">Extra Large</option>
                                                            </select> </div>
                                                        <div class="col-xl-6"> <label for="product-brand-add" class="form-label">Brand</label> <select class="form-control" data-trigger name="product-brand-add" id="product-brand-add">
                                                                <option value="">Select</option>
                                                                <option value="Armani">Armani</option>
                                                                <option value="Lacoste">Lacoste</option>
                                                                <option value="Puma">Puma</option>
                                                                <option value="Spykar">Spykar</option>
                                                                <option value="Mufti">Mufti</option>
                                                                <option value="Home Town">Home Town</option>
                                                                <option value="Arrabi">Arrabi</option>
                                                            </select> </div>
                                                        <div class="col-xl-6 color-selection"> <label for="product-color-add" class="form-label">Colors</label> <select class="form-control" name="product-color-add" id="product-color-add" multiple>
                                                                <option value="White">White</option>
                                                                <option value="Black">Black</option>
                                                                <option value="Red">Red</option>
                                                                <option value="Orange">Orange</option>
                                                                <option value="Yellow">Yellow</option>
                                                                <option value="Green">Green</option>
                                                                <option value="Blue">Blue</option>
                                                                <option value="Pink">Pink</option>
                                                                <option value="Purple">Purple</option>
                                                            </select> </div>
                                                        <div class="col-xl-6"> <label for="product-cost-add" class="form-label">Enter Cost</label> <input type="text" class="form-control" id="product-cost-add" placeholder="Cost"> <label for="product-cost-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Mention
                                                                final price of the product</label> </div>
                                                        <div class="col-xl-12"> <label for="product-description-add" class="form-label">Product Description</label> <textarea class="form-control" id="product-description-add" rows="2"></textarea> <label for="product-description-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Description
                                                                should not exceed 500 letters</label> </div>
                                                        <div class="col-xl-12"> <label class="form-label">Product
                                                                Features</label>
                                                            <div id="product-features"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-4">
                                                        <div class="col-xl-4"> <label for="product-actual-price" class="form-label">Actual Price</label> <input type="text" class="form-control" id="product-actual-price" placeholder="Actual Price">
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label for="product-dealer-price" class="form-label">Dealer
                                                                Price</label> <input type="text" class="form-control" id="product-dealer-price" placeholder="Dealer Price">
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label for="product-discount" class="form-label">Discount</label> <input type="text" class="form-control" id="product-discount" placeholder="Discount in %">
                                                        </div>
                                                        <div class="col-xl-6"> <label for="product-type" class="form-label">Product Type</label> <input type="text" class="form-control" id="product-type" placeholder="Type"> </div>
                                                        <div class="col-xl-6"> <label for="product-discount" class="form-label">Item Weight</label> <input type="text" class="form-control" id="product-discount1" placeholder="Weight in gms"> </div>
                                                        <div class="col-xl-12 product-documents-container">
                                                            <p class="fw-semibold mb-2 fs-14">Product Images :</p><input type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                        </div> <label class="form-label op-5 mt-3">Minimum 0f 6 images
                                                            are need to be uploaded,make sure the image size match the
                                                            proper background size and all images should be uniformly
                                                            maintained with width and height to the image
                                                            container,image size should not exceed 2MB,once uploaded to
                                                            change the image you need to wait minimum of 24hrs. </label>
                                                        <div class="col-xl-12 product-documents-container">
                                                            <p class="fw-semibold mb-2 fs-14">Warrenty Documents :</p>
                                                            <input type="file" class="product-documents" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="publish-date" class="form-label">Publish
                                                                Date</label> <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                                        </div>
                                                        <div class="col-xl-6"> <label for="publish-time" class="form-label">Publish Time</label> <input type="text" class="form-control" id="publish-time" placeholder="Choose time"> </div>
                                                        <div class="col-xl-6"> <label for="product-status-add" class="form-label">Published Status</label> <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                                                <option value="">Select</option>
                                                                <option value="Published">Published</option>
                                                                <option value="Scheduled">Scheduled</option>
                                                            </select> </div>
                                                        <div class="col-xl-6"> <label for="product-tags" class="form-label">Product Tags</label> <select class="form-control" name="product-tags" id="product-tags" multiple>
                                                                <option value="Relaxed" selected>Relaxed</option>
                                                                <option value="Solid">Solid</option>
                                                                <option value="Washed">Washed</option>
                                                                <option value="Plain" selected>Plain</option>
                                                            </select> </div>
                                                        <div class="col-xl-12"> <label for="product-status-add1" class="form-label">Availability</label> <select class="form-control" data-trigger name="product-status-add1" id="product-status-add1">
                                                                <option value="">Select</option>
                                                                <option value="In Stock">In Stock</option>
                                                                <option value="Out Of Stock">Out Of Stock</option>
                                                            </select> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                    <button class="btn btn-primary-light m-1">Add Product<i class="bi bi-plus-lg ms-2"></i></button> <button class="btn btn-success-light m-1">Save Product<i class="bi bi-download ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
            </div>
        </div>
        <!-- End::app-content -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group"> <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username"> <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a> <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                                <a href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                                <a href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                            <button class="btn btn-sm btn-primary">Clear Recents</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>. Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All rights
                    reserved </span>
            </div>
        </footer>
        <!-- Footer End -->
    </div>
    <div class="scrollToTop"> <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span> </div>
    <div id="responsive-overlay"></div>
    <!-- Popper JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Defaultmenu JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/defaultmenu.min.js"></script>
    <!-- Node Waves JS-->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/node-waves/waves.min.js"></script>
    <!-- Sticky JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/sticky.js"></script>
    <!-- Simplebar JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/simplebar.js"></script>
    <!-- Color Picker JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
    <!-- Custom-Switcher JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom-switcher.min.js"></script>
    <!-- Date & Time Picker JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- Quill Editor JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/quill/quill.min.js"></script>
    <!-- Filepond JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond/filepond.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>
    <!-- Internal Add Products JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/add-products.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom.js"></script>
</body>

</html>