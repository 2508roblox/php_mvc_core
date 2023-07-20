<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
?>

<div class="main-content app-content">
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
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/1.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Denim Zep.Co Sweat Shirt</span> </a> <span class="d-block text-success">$1,299</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1203</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="delivery-date text-center ms-auto"> <span class="fs-18 text-primary fw-bold">13</span> <span class="fw-semibold">Dec</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                        <div><span class="text-muted me-2">Status:</span><span class="badge bg-success-transparent">Shipped</span></div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-danger-light">Cancel Order</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/2.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Jimmy Lolfiger Jacket</span> </a> <span class="d-block text-success">$499</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-2936</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="delivery-date text-center ms-auto"> <span class="fs-18 text-primary fw-bold">25</span> <span class="fw-semibold">Nov</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                        <div> <span class="text-muted me-2">Status:</span> <span class="badge bg-primary-transparent">Confirmed</span> </div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-danger-light">Cancel Order</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/3.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Louie Phillippe Coat</span> </a> <span class="d-block text-success">$1,899</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1855</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="ms-auto"> <span class="badge bg-success">Delivered</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block justify-content-between align-items-center">
                        <div class="fs-11"> <span>Delivered on:</span> <span class="fw-semibold">29,Oct 2022 - 12:47PM</span> </div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-primary-light">Rate Product<i class="bi bi-star-fill ms-2 fs-12 text-warning"></i></button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/4.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Denim Corp</span> </a> <span class="d-block text-success">$2,499</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1234</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="ms-auto"> <span class="badge bg-danger">Cancelled</span> </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-end"> <button class="btn btn-sm btn-light">Buy Now</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/13.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Orange Watch</span> </a> <span class="d-block text-success">$249</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1645</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="ms-auto"> <span class="badge bg-success">Delivered</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block justify-content-between align-items-center">
                        <div class="fs-11"> <span>Delivered on:</span> <span class="fw-semibold">4,Nov 2022 - 10:24AM</span> </div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-primary-light">Rate Product<i class="bi bi-star-fill ms-2 fs-12 text-warning"></i></button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/8.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Pufa Sweat Shirt</span> </a> <span class="d-block text-success">$2,399</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1346</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="delivery-date text-center ms-auto"> <span class="fs-18 text-primary fw-bold">16</span> <span class="fw-semibold">Jan</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                        <div><span class="text-muted me-2">Status:</span><span class="badge bg-success-transparent">Shipped</span></div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-danger-light">Cancel Order</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/9.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Bluberry Co.In</span> </a> <span class="d-block text-success">$499</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-2936</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="delivery-date text-center ms-auto"> <span class="fs-18 text-primary fw-bold">19</span> <span class="fw-semibold">Dec</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                        <div><span class="text-muted me-2">Status:</span><span class="badge bg-warning-transparent">Out For Delivery</span></div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-danger-light">Cancel Order</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/11.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Garage & Co</span> </a> <span class="d-block text-success">$499</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1376</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="delivery-date text-center ms-auto"> <span class="fs-18 text-primary fw-bold">24</span> <span class="fw-semibold">Dec</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                        <div><span class="text-muted me-2">Status:</span><span class="badge bg-success-transparent">Shipped</span></div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-danger-light">Cancel Order</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/14.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Hadimo Smart Watch(44mm)</span> </a> <span class="d-block text-success">$499</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-2903</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="delivery-date text-center ms-auto"> <span class="fs-18 text-primary fw-bold">16</span> <span class="fw-semibold">Nov</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                        <div> <span class="text-muted me-2">Status:</span> <span class="badge bg-primary-transparent">Confirmed</span> </div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-danger-light">Cancel Order</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/7.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">BMW Denim JAcket</span> </a> <span class="d-block text-success">$1,899</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1976</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="ms-auto"> <span class="badge bg-success">Delivered</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block justify-content-between align-items-center">
                        <div class="fs-11"> <span>Delivered on:</span> <span class="fw-semibold">04,Nov 2022 - 03:12PM</span> </div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-primary-light">Rate Product<i class="bi bi-star-fill ms-2 fs-12 text-warning"></i></button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/16.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Totoya Watch For Kids</span> </a> <span class="d-block text-success">$799</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-8765</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="ms-auto"> <span class="badge bg-danger">Cancelled</span> </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-end"> <button class="btn btn-sm btn-light">Buy Now</button> </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex align-items-center ">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img src="<?php echo ASSETS_URL_ROOT ?>/public/admin_assets/assets/images/ecommerce/png/10.png" alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span class="fs-14 fw-semibold">Garage & Co</span> </a> <span class="d-block text-success">$249</span> </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Order Id :</span> <span class="d-sm-block">#SPK-1645</span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold">Delivery Address</p>
                                <p class="text-muted mb-0"> mig-1-11,monroe street,georgetown,Washington D.C </p>
                            </div>
                            <div class="ms-auto"> <span class="badge bg-success">Delivered</span> </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block justify-content-between align-items-center">
                        <div class="fs-11"> <span>Delivered on:</span> <span class="fw-semibold">22,Oct 2022 - 05:15PM</span> </div>
                        <div class="mt-sm-0 mt-2"> <button class="btn btn-sm btn-primary-light">Rate Product<i class="bi bi-star-fill ms-2 fs-12 text-warning"></i></button> </div>
                    </div>
                </div>
            </div>
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