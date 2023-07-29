<?php
$d_data = isset($data) ? $data  :  [''];

include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
?>

<!-- Start::app-content -->
<div class="main-content app-content">

    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Ecommerce</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->

        <div class="row">
            <div class="col-xxl-6 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon px-0">
                                        <span class="rounded p-3 bg-primary-transparent"> <svg xmlns="http://www.w3.org/2000/svg" class="svg-white primary" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <g>
                                                    <rect fill="none" height="24" width="24" />
                                                    <path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z" />
                                                </g>
                                            </svg> </span>
                                    </div>
                                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0">
                                        <div class="mb-2">Total Sales</div>
                                        <div class="text-muted mb-1 fs-12"> <span class="text-dark fw-semibold fs-20 lh-1 vertical-bottom"> <?php echo number_format($d_data['total_sales']) ?>
                                            </span> </div>
                                        <div> <span class="fs-12 mb-0">Increase by <span class="badge bg-success-transparent text-success mx-1">+4.2%</span>
                                                this month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon secondary  px-0">
                                        <span class="rounded p-3 bg-secondary-transparent"> <svg xmlns="http://www.w3.org/2000/svg" class="svg-white secondary" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0,0h24v24H0V0z" fill="none" />
                                                <g>
                                                    <path d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z" />
                                                    <rect height="2" width="6" x="9" y="7" />
                                                    <rect height="2" width="2" x="16" y="7" />
                                                    <rect height="2" width="6" x="9" y="10" />
                                                    <rect height="2" width="2" x="16" y="10" />
                                                </g>
                                            </svg> </span>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0">
                                        <div class="mb-2">Total Expenses</div>
                                        <div class="text-muted mb-1 fs-12"> <span class="text-dark fw-semibold fs-20 lh-1 vertical-bottom">
                                                $<?php echo number_format($d_data['total_price']) ?> </span> </div>
                                        <div> <span class="fs-12 mb-0">Increase by <span class="badge bg-success-transparent text-success mx-1">+12.0%</span>
                                                this month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon success px-0">
                                        <span class="rounded p-3 bg-success-transparent"> <svg xmlns="http://www.w3.org/2000/svg" class="svg-white success" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                            </svg> </span>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0">
                                        <div class="mb-2">Total Visitors</div>
                                        <div class="text-muted mb-1 fs-12"> <span class="text-dark fw-semibold fs-20 lh-1 vertical-bottom">
                                                <?php echo number_format($d_data['total_customer']) ?>
                                            </span> </div>
                                        <div> <span class="fs-12 mb-0">Decreased by <span class="badge bg-danger-transparent text-danger mx-1">-7.6%</span>
                                                this month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center ecommerce-icon warning px-0">
                                        <span class="rounded p-3 bg-warning-transparent"> <svg xmlns="http://www.w3.org/2000/svg" class="svg-white warning" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none" />
                                                <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                            </svg> </span>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 ps-0">
                                        <div class="mb-2">Total Orders</div>
                                        <div class="text-muted mb-1 fs-12"> <span class="text-dark fw-semibold fs-20 lh-1 vertical-bottom"> <?php echo number_format($d_data['total_orders']) ?>
                                            </span> </div>
                                        <div> <span class="fs-12 mb-0">Increased by <span class="badge bg-success-transparent text-success mx-1">+2.5%</span>
                                                this month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="ecommerce-sale-image"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/35.png" class="card-img-top" alt="...">
                                <div class="card-img-overlay d-flex flex-column p-4 text-fixed-white">
                                    <p class="mb-1 op-7 fs-12">Spruko Official.Inc</p>
                                    <h6 class="fw-semibold mb-4">BIG SAVING DAYS</h6>
                                    <p class="ecommerce-bankoffer-details">Bank Offer 10% off on Aches Bank
                                        Credit Cards, up to $10. On orders of $500 and above <a href="javascript:void(0);" class="text-decoration-underline text-fixed-white">T&amp;C</a></p>
                                    <p class="ecommerce-sale-days mb-0">15, Jan 2022 - 19, Jan 2022</p>
                                    <p class="ecommerce-sales-calendar text-center mb-0"> <span>15</span> <span class="d-block fs-15 lh-1 fw-semibold">Jan</span> </p>
                                </div>
                            </div>
                            <div class="card-body"> <a href="#" class="text-primary fs-15 fw-semibold">Biggest
                                    sale is back.</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                                    harum accusamus eum dolorum sapiente. Saepe</p><button type="button" class="btn btn-primary btn-wave me-2">Notify Me</button> <button type="button" class="btn btn-outline-primary btn-wave">Offers</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Recent Orders </div>
                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i class="bx bx-dots-vertical-rounded"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex algn-items-center">
                                                <div class="lh-1"> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/1.jpg" alt="">
                                                    </span> </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-semibold mb-0">Smart Phone</p>
                                                    <p class="fs-12 text-muted mb-0">Mobiles</p>
                                                </div>
                                                <div> <span class="text-success fw-semibold">$199.99</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex algn-items-center">
                                                <div class="lh-1"> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/2.jpg" alt="">
                                                    </span> </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-semibold mb-0">White Headphones</p>
                                                    <p class="fs-12 text-muted mb-0">Music</p>
                                                </div>
                                                <div> <span class="text-success fw-semibold">$79.49</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex algn-items-center">
                                                <div class="lh-1"> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/3.jpg" alt="">
                                                    </span> </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-semibold mb-0">Stop Watch</p>
                                                    <p class="fs-12 text-muted mb-0">Electronics</p>
                                                </div>
                                                <div> <span class="text-success fw-semibold">$49.29</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex algn-items-center">
                                                <div class="lh-1"> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/4.jpg" alt="">
                                                    </span> </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-semibold mb-0">Kikon Camera</p>
                                                    <p class="fs-12 text-muted mb-0">Electronics</p>
                                                </div>
                                                <div> <span class="text-success fw-semibold">$1,699.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex algn-items-center">
                                                <div class="lh-1"> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/5.jpg" alt="">
                                                    </span> </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-semibold mb-0">Photo Frame</p>
                                                    <p class="fs-12 text-muted mb-0">Furniture</p>
                                                </div>
                                                <div> <span class="text-success fw-semibold">$29.99</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex algn-items-center">
                                                <div class="lh-1"> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/jpg/6.jpg" alt="">
                                                    </span> </div>
                                                <div class="flex-fill ms-2">
                                                    <p class="fw-semibold mb-0">Canvas Shoes</p>
                                                    <p class="fs-12 text-muted mb-0">Footwear</p>
                                                </div>
                                                <div> <span class="text-success fw-semibold">$89.99</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between d-sm-flex d-block">
                                <div class="card-title"> Orders </div>
                                <div>
                                    <ul class="nav nav-tabs justify-content-end nav-tabs-header mb-0 d-sm-flex d-block mt-sm-0 mt-2" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#active-orders" aria-selected="true">Active Orders</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#completed-orders" aria-selected="true">Completed</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#cancelled-orders" aria-selected="true">Cancelled</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content">
                                    <div class="tab-pane show active text-muted border-0 p-0" id="active-orders" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table card-table table-vcenter text-nowrap mb-0">
                                                <tbody class="active-tab">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/4.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Amanda Nanes</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$229.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Delivery
                                                                    Date</span>
                                                                <p class="mb-0">24 May 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/1.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/10.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Peter Parkour</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$135.29</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Delivery
                                                                    Date</span>
                                                                <p class="mb-0">18 May 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/2.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md offline avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/12.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Jackie Chen</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$1,299.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Delivery
                                                                    Date</span>
                                                                <p class="mb-0">29 May 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/3.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/5.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Ryan Gercia</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$249.29</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Delivery
                                                                    Date</span>
                                                                <p class="mb-0">05 Jun 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/4.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md offline avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/14.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Hugh Jackma</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$499.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Delivery
                                                                    Date</span>
                                                                <p class="mb-0">15 May 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/5.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane text-muted border-0 p-0" id="completed-orders" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table card-table table-vcenter text-nowrap mb-0">
                                                <tbody class="active-tab">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md offline avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/2.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Lisa Rebecca</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$1,199.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-success">Delivered
                                                                    On</span>
                                                                <p class="mb-0">24 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/6.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md offline avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/13.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Matt Martin</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$799.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-success">Delived On</span>
                                                                <p class="mb-0">18 Nov 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/7.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/7.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Mitchell Osama</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$279.00</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-success">Delivery
                                                                    On</span>
                                                                <p class="mb-0">29 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/8.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/12.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Cornor Mcgood</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$79.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-success">Delivered
                                                                    On</span>
                                                                <p class="mb-0">05 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/9.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/15.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Kishan Patel</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$1449.29</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-success">Delivered
                                                                    On</span>
                                                                <p class="mb-0">20 Nov 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/10.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane text-muted border-0 p-0" id="cancelled-orders" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table card-table table-vcenter text-nowrap mb-0">
                                                <tbody class="active-tab">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/6.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Hailey Bobber</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$199.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-danger">Cancelled
                                                                    Date</span>
                                                                <p class="mb-0">09 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/11.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md offline avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/14.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Anthony Mansion</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$179.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-danger">Cancelled
                                                                    Date</span>
                                                                <p class="mb-0">28 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/12.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/16.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Simon Carter</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$149.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-danger">Cancelled
                                                                    Date</span>
                                                                <p class="mb-0">30 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/13.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md online avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/3.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Sofia Sekh</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$1439.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-danger">Cancelled
                                                                    Date</span>
                                                                <p class="mb-0">03 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/14.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="lh-1"> <span class="avatar avatar-md offline avatar-rounded me-2">
                                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/9.jpg" alt=""> </span> </div>
                                                                <div class="align-items-center"> <span class="fs-12 text-muted">Name</span>
                                                                    <p class="mb-0">Kimura Kai</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-muted">Price</span>
                                                                <p class="mb-0 fw-semibold">$1092.99</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="align-items-center"> <span class="fs-12 text-danger">Cancelled
                                                                    Date</span>
                                                                <p class="mb-0">02 Dec 2022</p>
                                                            </div>
                                                        </td>
                                                        <td> <span class="avatar avatar-md"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/15.png" alt=""> </span> </td>
                                                        <td> <a aria-label="anchor" href="javascript:void(0);">
                                                                <span class="orders-arrow"><i class="bx bxs-chevron-right"></i></span>
                                                            </a> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Earnings</div>
                                <div class="dropdown"> <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false"> View All<i class="bx bxs-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row ps-lg-5 mb-4 pb-4 gy-sm-0 gy-3">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                        <div class="mb-1 earning first-half ms-3">First Half</div>
                                        <div class="mb-0"> <span class="mt-1 fs-16 fw-semibold">$51.94k</span>
                                            <span class="text-success"><i class="fa fa-caret-up mx-1"></i> <span class="badge bg-success-transparent text-success px-1 py-2 fs-10">+0.9%</span></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                        <div class="mb-1 earning top-gross ms-3">Top Gross</div>
                                        <div class="mb-0"> <span class="mt-1 fs-16 fw-semibold">$18.32k</span>
                                            <span class="text-success"><i class="fa fa-caret-up mx-1"></i> <span class="badge bg-success-transparent text-success px-1 py-2 fs-10">+0.39%</span></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                        <div class="mb-1 earning second-half ms-3">Second Half</div>
                                        <div class="mb-0"> <span class="mt-1 fs-16 fw-semibold">$38k</span>
                                            <span class="text-danger"><i class="fa fa-caret-up mx-1"></i> <span class="badge bg-danger-transparent text-danger px-1 py-2 fs-10">-0.15%</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="earnings"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Top Selling Products</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center">S.no</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Stock</th>
                                                <th scope="col">Total Sales</th>
                                            </tr>
                                        </thead>
                                        <tbody class="top-selling">
                                            <tr>
                                                <td class="text-center lh-1"> <span class="avatar avatar-md">
                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/36.png" class="p-2 rounded-pill bg-light" alt=""> </span>
                                                </td>
                                                <td>Ethnic School bag for children (24L)</td>
                                                <td>Bags</td>
                                                <td><span class="badge badge-sm bg-success-transparent text-success">In
                                                        Stock</span></td>
                                                <td> <span class="fw-semibold">5,093</span> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center lh-1"> <span class="avatar avatar-md">
                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/38.png" class="p-2 rounded-pill bg-light" alt=""> </span>
                                                </td>
                                                <td>Leather jacket for men (S,M,L,XL)</td>
                                                <td>Clothing</td>
                                                <td><span class="badge badge-sm bg-success-transparent text-success">In
                                                        Stock</span></td>
                                                <td> <span class="fw-semibold">6,890</span> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center lh-1"> <span class="avatar avatar-md">
                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/39.png" class="p-2 rounded-pill bg-light" alt=""> </span>
                                                </td>
                                                <td>Childrens Teddy toy of high quality</td>
                                                <td>Toys</td>
                                                <td><span class="badge badge-sm bg-danger-transparent text-danger">Out
                                                        Of Stock</span></td>
                                                <td> <span class="fw-semibold">5,423</span> </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center lh-1"> <span class="avatar avatar-md">
                                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/40.png" class="p-2 rounded-pill bg-light" alt=""> </span>
                                                </td>
                                                <td>Orange smart watch with square dial (24mm)</td>
                                                <td>Fashion</td>
                                                <td><span class="badge badge-sm bg-danger-transparent text-danger">Out
                                                        Of Stock</span></td>
                                                <td> <span class="fw-semibold">10,234</span> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Top Countries By Sales </div>
                                <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i class="bx bx-dots-vertical-rounded"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Another
                                                action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                                here</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0 lh-1">38,256</h4>
                                    </div>
                                    <div><span class="badge bg-primary-transparent mx-1">12.24%</span><span class="text-muted fs-11">Since last week</span></div>
                                </div>
                                <ul class="mb-0 pt-3 list-unstyled">
                                    <li class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1"> <span class="avatar avatar-xs me-2 avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/french_flag.jpg" alt="">
                                                </span> <span class="top-country-name">France</span> </div>
                                            <div> <i class="ti ti-trending-up fs-16 text-success"></i> </div>
                                            <div class="fs-14">5,932</div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1"> <span class="avatar avatar-xs me-2 avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/spain_flag.jpg" alt="">
                                                </span> <span class="top-country-name">spain</span> </div>
                                            <div> <i class="ti ti-trending-down fs-16 text-danger"></i> </div>
                                            <div class="fs-14">5,383</div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1"> <span class="avatar avatar-xs me-2 avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/argentina_flag.jpg" alt="">
                                                </span> <span class="top-country-name">Argentina</span> </div>
                                            <div> <i class="ti ti-trending-up fs-16 text-success"></i> </div>
                                            <div class="fs-14">4,825</div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1"> <span class="avatar avatar-xs me-2 avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/uae_flag.jpg" alt="">
                                                </span> <span class="top-country-name">Uae</span> </div>
                                            <div> <i class="ti ti-trending-up fs-16 text-success"></i> </div>
                                            <div class="fs-14">4,527</div>
                                        </div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center lh-1"> <span class="avatar avatar-xs me-2 avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/flags/germany_flag.jpg" alt="">
                                                </span> <span class="top-country-name">Germany</span> </div>
                                            <div> <i class="ti ti-trending-down fs-16 text-danger"></i> </div>
                                            <div class="fs-14">4,501</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title"> Top Customers </div>
                                <div class="dropdown"> <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"> View All<i class="bx bxs-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Download</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Import</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Export</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/4.jpg" alt="">
                                                        </span> </div>
                                                    <div>
                                                        <p class="mb-0 fw-semibold">Emma Wilson</p>
                                                        <p class="mb-0 text-muted fs-12">15 Purchases<i class="bx bxs-badge-check"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div> <span class="fs-14">$1,835</span> </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/15.jpg" alt="">
                                                        </span> </div>
                                                    <div>
                                                        <p class="mb-0 fw-semibold">Robert Lewis</p>
                                                        <p class="mb-0 text-muted fs-12">18 Purchases<i class="bx bxs-badge-check"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div> <span class="fs-14">$2,415</span> </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/5.jpg" alt="">
                                                        </span> </div>
                                                    <div>
                                                        <p class="mb-0 fw-semibold">Angelina Hose</p>
                                                        <p class="mb-0 text-muted fs-12">21 Purchases<i class="bx bxs-badge-check"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div> <span class="fs-14">$2,341</span> </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="javascript:void(0);">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-top justify-content-center">
                                                    <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/faces/2.jpg" alt="">
                                                        </span> </div>
                                                    <div>
                                                        <p class="mb-0 fw-semibold">Samantha Sam</p>
                                                        <p class="mb-0 text-muted fs-12">24 Purchases<i class="bx bxs-badge-check"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div> <span class="fs-14">2,624</span> </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
        <!-- Start:: row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title"> Products Overview </div>
                        <div class="d-flex">
                            <div class="me-3"> <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label=".form-control-sm example"> </div>
                            <div class="dropdown"> <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="bx bxs-chevron-down"></i> </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Product Id</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Sales</th>
                                        <th scope="col">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/36.png" alt="">
                                                    </span> </div>
                                                <div class="fs-14">Niker College Bag</div>
                                            </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1734-9743</span> </td>
                                        <td> $199.99 </td>
                                        <td> <span class="badge bg-success-transparent">Available</span> </td>
                                        <td> <span class="">3,903</span> </td>
                                        <td> <span class="">$67,899.24</span> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/37.png" alt="">
                                                    </span> </div>
                                                <div class="fs-14">Dslr Camera (50mm f/1.9 HRM Lens)</div>
                                            </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1234-4567</span> </td>
                                        <td> $1,299.99 </td>
                                        <td> <span class="badge bg-success-transparent">Available</span> </td>
                                        <td> <span class="">12,435</span> </td>
                                        <td> <span class="">$3,24,781.92</span> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/38.png" alt="">
                                                    </span> </div>
                                                <div class="fs-14">Outdoor Bomber Jacket</div>
                                            </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1902-9883</span> </td>
                                        <td> $99.99 </td>
                                        <td> <span class="badge bg-danger-transparent">Not Available</span>
                                        </td>
                                        <td> <span class="">5,143</span> </td>
                                        <td> <span class="">$76,102.76</span> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/39.png" alt="">
                                                    </span> </div>
                                                <div class="fs-14">Light Blue Teddy</div>
                                            </div>
                                        </td>
                                        <td> <span class="fw-semibold">#8745-1232</span> </td>
                                        <td> $79.00 </td>
                                        <td> <span class="badge bg-warning-transparent">Limited Deal</span>
                                        </td>
                                        <td> <span class=""> 7,183</span> </td>
                                        <td> <span class="">$78,211.83</span> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/ecommerce/png/40.png" alt="">
                                                    </span> </div>
                                                <div class="fs-14">Orange Smart Watch (24mm)</div>
                                            </div>
                                        </td>
                                        <td> <span class="fw-semibold">#1962-9033</span> </td>
                                        <td> $199.99 </td>
                                        <td> <span class="badge bg-primary-transparent">In Offer</span> </td>
                                        <td> <span class="">10,287</span> </td>
                                        <td> <span class="">$2,32,982.99</span> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center">
                            <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-2 -->
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

<!-- All cdn for TableData -->
<!-- table data -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<div class="scrollToTop"> <span class="arrow"><i class="bx bxs-upvote"></i></span> </div>
<div id="responsive-overlay"></div>
<!-- Datatables Cdn -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<!-- Internal Datatables JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/datatables.js"></script>
<!-- box icon -->
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>



</body>

</html>