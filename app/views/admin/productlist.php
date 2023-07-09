<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Products List</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title"> Products List </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-4">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col"> <input class="form-check-input check-all" type="checkbox" id="all-products" value="" aria-label="...">
                                        </th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Seller</th>
                                        <th scope="col">Published</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product1" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/1.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> DapZem & Co Blue Hoodie </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Clothing</span> </td>
                                        <td>$1,299</td>
                                        <td>283</td>
                                        <td>Male</td>
                                        <td>Apilla.co.in</td>
                                        <td>24,Nov 2022 - 04:42PM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product2" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/2.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Leather jacket for men </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Clothing</span> </td>
                                        <td>$799</td>
                                        <td>98</td>
                                        <td>Male</td>
                                        <td>Donzo Company</td>
                                        <td>18,Nov 2022 - 06:53AM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product3" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/15.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Orange Smart Watch </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Watches</span> </td>
                                        <td>$349</td>
                                        <td>1,293</td>
                                        <td>Male,Female</td>
                                        <td>SlowTrack Company</td>
                                        <td>21,Oct 2022 - 11:36AM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product4" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/3.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Winter Coat For Women </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Clothing</span> </td>
                                        <td>$189</td>
                                        <td>322</td>
                                        <td>Female</td>
                                        <td>WoodHill.co.in</td>
                                        <td>16,Oct 2022 - 12:45AM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product5" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/4.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Vintage White Full Sleeve Tee-Shirt
                                                </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Clothing</span> </td>
                                        <td>$2,499</td>
                                        <td>194</td>
                                        <td>Male,Female</td>
                                        <td>Watches.co.in</td>
                                        <td>12,Aug 2022 - 11:21AM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product6" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/13.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Orange Watch series (44mm) </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Watches</span> </td>
                                        <td>$899</td>
                                        <td>267</td>
                                        <td>Male,Female</td>
                                        <td>Watches.co.in</td>
                                        <td>05,Sep 2022 - 10:14AM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product7" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/12.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Sweater For Women </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Clothing</span> </td>
                                        <td>$499</td>
                                        <td>143</td>
                                        <td>Female</td>
                                        <td>Louie Philippe</td>
                                        <td>18,Nov 2022 - 14:35PM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product8" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/16.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Ikonic Smart Watch(40mm) </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Watches</span> </td>
                                        <td>$999</td>
                                        <td>365</td>
                                        <td>Female</td>
                                        <td>Kohino.zaps.com</td>
                                        <td>27,Nov 2022 - 05:12AM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                    <tr class="product-list">
                                        <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product9" value="" aria-label="..."></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/23.png" alt="">
                                                    </span> </div>
                                                <div class="fw-semibold"> Appole Watch Series 5 </div>
                                            </div>
                                        </td>
                                        <td> <span class="badge bg-light text-default">Watches</span> </td>
                                        <td>$1,499</td>
                                        <td>257</td>
                                        <td>Male,Female</td>
                                        <td>Appole Corporation</td>
                                        <td>29,Nov 2022 - 16:32PM</td>
                                        <td>
                                            <div class="hstack gap-2 fs-15"> <a href="edit-products.html" class="btn btn-icon btn-sm btn-info-light"><i class="ri-edit-line"></i></a> <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a> </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <nav aria-label="...">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled"> <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page"> <span class="page-link">2</span> </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                </ul>
                            </nav> <button class="btn btn-danger btn-wave m-1">Delete All</button>
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
<!-- Internal Product-Details JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/product-list.js"></script>
<!-- Custom JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom.js"></script>
</body>

</html>