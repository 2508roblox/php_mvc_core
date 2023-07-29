<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
$s_data = isset($data['slide']) ? $data['slide'] : [''];
$fm = new Format();
?>

<div class="page">

    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <h1 class="page-title fw-semibold fs-18 mb-0">Slide</h1>
                <?php
                ?>
                <div class="ms-md-1 ms-0">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Advanced Ui</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Swiper</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Page Header Close -->
            <!-- Start::row-1 -->
            <div class="row">
                <?php
                if ($s_data) {
                    while ($s_f_data = $s_data->fetch_assoc()) {
                ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card custom-card">
                                <div class="card-header" style="display: flex; justify-content: space-between;">
                                    <div class="card-title"> Basic Swiper
                                    </div>
                                    <a href="<?php echo ASSETS_URL_ROOT . '/admin/delslide' . '?delid=' . $s_f_data['SlideID'] ?>" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="bx bx-x-circle"></i></a>
                                </div>
                                <div class="card-body">
                                    <div class="swiper swiper-basic">
                                        <div class="swiper-wrapper">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5 style="font-size: 1.2rem;"><?php echo  $s_f_data['Name'] ?></h5>

                                            </div>

                                            <div class="swiper-slide"><img src="<?php echo ASSETS_URL_ROOT . '/public/' . 'imgs/' . $s_f_data['Image'] ?>" alt=""></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- Footer Start -->

        <!-- Footer End -->
    </div>
    <div class="scrollToTop"> <span class="arrow"><i class="bx bxs-upvote"></i></span> </div>
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
    <!-- Swiper JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/swiper/swiper-bundle.min.js"></script>
    <!-- Internal Swiper JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/swiper.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom.js"></script>
    </body>

    </html>