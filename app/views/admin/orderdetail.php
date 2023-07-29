<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
$result = isset($data['orderdetail']) ? $data['orderdetail'] : [''];
$fm = new Format();
?>

<div class="main-content app-content">
    <?php print_r($result) ?>
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Orders</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body d-flex align-items-center flex-wrap">
                        <div class="flex-fill"> <span class="mb-0 fs-14 text-muted">Total number of orders placed upto now : <span class="fw-semibold text-success">28</span></span>
                        </div>
                        <div class="dropdown"> <button class="btn btn-light dropdown-toggle m-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Sort By </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Date</a></li>
                                <li><a class="dropdown-item" href="#">Price</a></li>
                                <li><a class="dropdown-item" href="#">Category</a></li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center m-1" role="search"> <input class="form-control" type="search" placeholder="Search" aria-label="Search"> <button class="btn btn-light ms-2" type="submit">Search</button> </div>
                    </div>
                </div>
            </div>


            <?php
            if ($result) {
                while ($c_data = $result->fetch_assoc()) {
            ?> <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <div class="card-header d-block">
                                <div class="d-sm-flex d-block align-items-center ">
                                    <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $c_data['image'] ?>" alt=""> </span> </div>
                                    <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold"><?php echo $fm->textShorten($c_data['Name'], 20)  ?> x <?php echo $c_data['Quantity']   ?></span> </a> <span class="d-block text-success">$<?php echo number_format($c_data['Price']) ?></span> </div>
                                    <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id : </span> <span class="d-sm-block">
                                            #<?php echo $c_data['OrderID']   ?>
                                        </span> </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="orders-delivery-address">
                                        <p class="mb-1 fw-semibold">Delivery Address</p>
                                        <p class="text-muted mb-0"> <?php echo $c_data['address'] ?> </p>
                                    </div>
                                    <div class="ms-auto">
                                        <?php
                                        if ($c_data['status'] == 'pending') {
                                        ?>
                                            <span style="color: black !important;" class="badge bg-info text-light">Pending</span>

                                        <?php
                                        } elseif ($c_data['status'] == 'confirmed') {
                                        ?>
                                            <span style="color: black !important;" class="badge bg-success text-light">Confirmed</span>

                                        <?php
                                        } elseif ($c_data['status'] == 'cancle') {
                                        ?>
                                            <span style="color: black !important;" class="badge bg-danger text-light">Cancle</span>

                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-sm-flex d-block justify-content-between align-items-center">
                                <div class="fs-11"> <span>Ordered on:</span> <span class="fw-semibold"><?php echo $c_data['orderdate'] ?></span> </div>
                                <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-primary-light">Rate Product<i class="bi bi-star-fill ms-2 fs-12 text-warning"></i></button> </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <!--End::row-1 -->
        <ul class="pagination justify-content-end">
            <li class="page-item disabled"> <a class="page-link">Previous</a> </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
        </ul>
    </div>
</div>
<!-- End::app-content -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group"> <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username"> <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a> <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"> <i class="bx bx-dots-vertical-rounded"></i> </a>
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
                <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button> <button class="btn btn-sm btn-primary">Clear Recents</button> </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Start -->
<footer class="footer mt-auto py-3 bg-white text-center">
    <div class="container"> <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>. Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All rights reserved </span>
    </div>
</footer>
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
<!-- Apex Charts JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Ecommerce-Dashboard JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/ecommerce-dashboard.js"></script>
<!-- Custom-Switcher JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom-switcher.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom.js"></script>
</body>

</html>