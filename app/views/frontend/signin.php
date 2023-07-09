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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL_ROOT ?> /client_assets/assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/vendor/base.css">
    <link rel="stylesheet" href="<?php echo ASSETS_URL_ROOT . '/public/' ?>client_assets/assets/css/style.min.css">


</head>

<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <a href="<?php echo URL_ROOT ?>/" class="site-logo"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/logo/logo.png" alt="logo"></a>
                </div>
                <div class="col-sm-8">
                    <div class="singin-header-btn">
                        <p>Not a member?</p>
                        <a href="user/signup" class="axil-btn btn-bg-secondary sign-up-btn">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--9">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">Sign in to eTrade.</h3>
                        <p class="b2 mb--55">Enter your detail below</p>
                        <form class="singin-form">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="annie@example.com">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="123456789">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Sign In</button>
                                <a href="forgot-password.html" class="forgot-btn">Forget password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->
    <?php
    include_once __DIR__ . '/./inc/footer.php';
    ?>