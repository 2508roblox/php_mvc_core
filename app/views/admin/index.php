<?php
include __DIR__ . '/./inc/header.php';
?>
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
                            <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark"> </a> </div>
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
                                            <div class="text-muted mb-1 fs-12"> <span class="text-dark fw-semibold fs-20 lh-1 vertical-bottom"> 14,732
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
                                                    $28,346.00 </span> </div>
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
                                                    1,29,368 </span> </div>
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
                                            <div class="text-muted mb-1 fs-12"> <span class="text-dark fw-semibold fs-20 lh-1 vertical-bottom"> 35,367
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
                                    <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i class="fe fe-more-vertical"></i> </a>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                                                    <span class="orders-arrow"><i class="ri-arrow-right-s-line fs-18"></i></span>
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
                                    <div class="dropdown"> <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="false"> View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                    <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"> <i class="fe fe-more-vertical"></i> </a>
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
                                    <div class="dropdown"> <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"> View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
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
                                                            <p class="mb-0 text-muted fs-12">15 Purchases<i class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
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
                                                            <p class="mb-0 text-muted fs-12">18 Purchases<i class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
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
                                                            <p class="mb-0 text-muted fs-12">21 Purchases<i class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
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
                                                            <p class="mb-0 text-muted fs-12">24 Purchases<i class="bi bi-patch-check-fill fs-14 text-primary ms-2"></i>
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
                                <div class="dropdown"> <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a>
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