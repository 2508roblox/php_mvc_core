<?php
if (Session::get('admin_login')) {
    redirect('/admin');
}else {
    
}
?>
<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YNEX - Bootstrap 5 Premium Admin & Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/favicon.ico" type="image/x-icon">
    <!-- Main Theme Js -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/authentication-main.js"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style Css -->
    <link href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/css/styles.min.css" rel="stylesheet">
    <!-- Icons Css -->
    <link href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/css/icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/swiper/swiper-bundle.min.css">
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

<body class="bg-white">
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
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-light-theme"> Light </label> <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-dark-theme"> Dark </label> <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-ltr"> LTR </label> <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-rtl"> RTL </label> <input class="form-check-input" type="radio" name="direction" id="switcher-rtl"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-vertical"> Vertical </label> <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-horizontal"> Horizontal </label> <input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Navigation Menu Style:</p>
                        <div class="row switcher-style pb-2">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-click"> Menu Click </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click"> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-hover"> Menu Hover </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover"> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-click"> Icon Click </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click"> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-icon-hover"> Icon Hover </label> <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover"> </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-secondary fs-11"><span class="fw-semibold fs-12 text-dark me-2 d-inline-block">Note:</span>Works same for both
                            Vertical and Horizontal</div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-regular"> Regular </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-classic"> Classic </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-modern"> Modern </label> <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-full-width"> Full Width </label> <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-boxed"> Boxed </label> <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-fixed"> Fixed </label> <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-menu-scroll"> Scrollable </label> <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style">
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-header-fixed"> Fixed </label> <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked> </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check switch-select"> <label class="form-check-label" for="switcher-header-scroll"> Scrollable </label> <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                        <div class="row switcher-style pb-2">
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
                        <div class="px-4 pb-3 text-secondary fs-11"><span class="fw-semibold fs-12 text-dark me-2 d-inline-block">Note:</span>Navigation menu
                            styles won't work here.</div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors" id="switcher-menu-light" checked> </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors" id="switcher-menu-dark">
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
                                <div class="form-check switch-select me-3"> <input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background" checked> </div>
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
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img" checked> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3"> </div>
                                <div class="form-check switch-select m-2"> <input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer"> <a href="#" class="btn btn-primary">Buy
                        Now</a> <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary">Our
                        Portfolio</a> <a href="javascript:void(0);" id="reset-all" class="btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <div class="row authentication mx-0">
        <div class="col-xxl-7 col-xl-7 col-lg-12">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                    <div class="p-5">
                        <div class="mb-3"> <a href="index.html"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/desktop-logo.png" alt="" class="authentication-brand desktop-logo"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/desktop-dark.png" alt="" class="authentication-brand desktop-dark"> </a> </div>
                        <p class="h5 fw-semibold mb-2">Sign In</p>
                        <p class="mb-3 text-muted op-7 fw-normal">Welcome back Jhon !</p>
                        <div class="btn-list"> <button class="btn btn-light"><svg class="google-svg" xmlns="http://www.w3.org/2000/svg" width="2443" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262">
                                    <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" />
                                    <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" />
                                    <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" />
                                    <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" />
                                </svg>Sign In with google</button> <button class="btn btn-icon btn-light"><i class="ri-facebook-fill"></i></button> <button class="btn btn-icon btn-light"><i class="ri-twitter-fill"></i></button> </div>
                        <div class="text-center my-5 authentication-barrier"> <span>OR</span> </div>
                        <form action="" method="POST">
                            <div class="row gy-3">
                                <div class="col-xl-12 mt-0"> <label for="signin-username" class="form-label text-default">User Name</label> <input name="UserName" type="text" class="form-control form-control-lg" id="signin-username" placeholder="user name">
                                </div>
                                <div class="col-xl-12 mb-3"> <label for="signin-password" class="form-label text-default d-block">Password<a href="reset-password-cover.html" class="float-end text-danger">Forget password ?</a></label>
                                    <div class="input-group"> <input name="Password" type="password" class="form-control form-control-lg" id="signin-password" placeholder="password"> <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button> </div>
                                    <div class="mt-2">
                                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> <label class="form-check-label text-muted fw-normal" for="defaultCheck1"> Remember password ? </label> </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 d-grid mt-2"> <input type="submit" class="btn btn-lg btn-primary">Sign
                                    In</input> </div>
                            </div>
                        </form>
                        <div class="text-center">

                            <p class="fs-12 text-muted mt-4">Dont have an account? <a href="sign-up-cover.html" class="text-primary">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5 col-xl-5 col-lg-5 d-xl-block d-none px-0">
            <div class="authentication-cover">
                <div class="aunthentication-cover-content rounded">
                    <div class="swiper keyboard-control">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/authentication/2.png" class="authentication-image" alt=""> </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas
                                            facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto,
                                            quam labore blanditiis at
                                            ratione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/authentication/3.png" class="authentication-image" alt=""> </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas
                                            facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto,
                                            quam labore blanditiis at
                                            ratione.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                    <div>
                                        <div class="mb-5"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/authentication/2.png" class="authentication-image" alt=""> </div>
                                        <h6 class="fw-semibold">Sign In</h6>
                                        <p class="fw-normal fs-14 op-7"> Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Ipsa eligendi expedita aliquam quaerat nulla voluptas
                                            facilis. Porro rem voluptates possimus, ad, autem quae culpa architecto,
                                            quam labore blanditiis at
                                            ratione.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom-switcher.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/authentication.js"></script>
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/show-password.js"></script>
</body>

</html>