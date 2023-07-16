<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL_ROOT ?> /fix_assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/sal.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/vendor/base.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/css/style.min.css">


</head>



<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="<?php echo URL_ROOT ?>/" class="site-logo"><img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/logo/logo.png" alt="logo"></a>
                </div>
                <div class="col-md-6">
                    <div class="singin-header-btn">
                        <p>Already a member?</p>
                        <a href="<?php echo ASSETS_URL_ROOT ?>/user/signin" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--10">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">I'm New Here</h3>
                        <p class="b2 mb--55">Enter your detail below</p>
                        <form class="singin-form" action="" method="POST">
                            <div style="display: flex; gap: 1rem;" class="">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="Firstname" value="anniemario">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="Lastname" value="anniemario">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="Username" value="anniemario">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="Email" value="annie@example.com">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="Password" value="123456789">
                            </div>
                            <div class="form-group">
                                <button name="signup" type="submit" class="axil-btn btn-bg-primary submit-btn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <?php
    include_once __DIR__ . '/./inc/footer.php';
    ?>