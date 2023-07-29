<!-- End Switcher -->

<!-- /app-header -->
<!-- Start::app-sidebar -->
<style>
    .n_pd>a {
        padding: 0 0 0 1rem !important;
    }
</style>
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
                <li style=" display: flex;
        align-items: center;
        justify-content: space-between;" class="slide has-sub"> <a href="<?php echo URL_ROOT ?>/admin" class="side-menu__item"> <i class="bx bx-home side-menu__icon"></i> <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2">12</span></span> </a>
                    <i class="bx bxs-chevron-right"></i>
                    <ul class="slide-menu child1">

                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Handle</span></li>
                <!-- End::slide__category -->
                <!-- Start::slide -->
                <li style=" display: flex;
        align-items: center;
        justify-content: space-between;" class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-package side-menu__icon"></i> <span class="side-menu__label">Products</span> </a>
                    <i class='bx bxs-chevron-right'></i>

                </li>
                <li class="slide n_pd"> <a href="<?php echo URL_ROOT ?>/admin/addproduct" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M176 128a48 48 0 1 1-48-48a48 48 0 0 1 48 48Z" opacity=".2" />
                                <path d="M140 128a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
                            </g>
                        </svg>
                        Add Product</a> </li>
                <li class="slide n_pd"> <a href="<?php echo URL_ROOT ?>/admin/productlist" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M176 128a48 48 0 1 1-48-48a48 48 0 0 1 48 48Z" opacity=".2" />
                                <path d="M140 128a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
                            </g>
                        </svg>
                        Product List</a> </li>
                <li style=" display: flex;
        align-items: center;
        justify-content: space-between;" class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-category side-menu__icon"></i> <span class="side-menu__label">Category</span> </a>
                    <i class="bx bxs-chevron-right"></i>
                <li class="slide n_pd"> <a href="<?php echo URL_ROOT ?>/admin/addcategory" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M176 128a48 48 0 1 1-48-48a48 48 0 0 1 48 48Z" opacity=".2" />
                                <path d="M140 128a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
                            </g>
                        </svg>
                        Add Category</a> </li>

                <li class="slide n_pd"> <a href="<?php echo URL_ROOT ?>/admin/categorylist" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M176 128a48 48 0 1 1-48-48a48 48 0 0 1 48 48Z" opacity=".2" />
                                <path d="M140 128a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
                            </g>
                        </svg>
                        Category List</a> </li>
                </li>
                <li style=" display: flex;
        align-items: center;
        justify-content: space-between;" class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-layer side-menu__icon"></i> <span class="side-menu__label">Brand</span> </a>
                    <i class="bx bxs-chevron-right"></i>


                <li class="slide n_pd"> <a href="<?php echo URL_ROOT ?>/admin/addbrand" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M176 128a48 48 0 1 1-48-48a48 48 0 0 1 48 48Z" opacity=".2" />
                                <path d="M140 128a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
                            </g>
                        </svg>Add Brand</a> </li>
                <li class="slide n_pd"> <a href="<?php echo URL_ROOT ?>/admin/brandlist" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256">
                            <g fill="currentColor">
                                <path d="M176 128a48 48 0 1 1-48-48a48 48 0 0 1 48 48Z" opacity=".2" />
                                <path d="M140 128a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
                            </g>
                        </svg>Brand List</a> </li>




                </li>



                <!-- Start::slide -->
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/customerlist" class="side-menu__item"> <i class="bx bx-bar-chart side-menu__icon"></i> <span class="side-menu__label">Customers</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/orders" class="side-menu__item"> <i class="bx bx-battery side-menu__icon"></i> <span class="side-menu__label">Orders</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/orderdetail" class="side-menu__item"> <i class="bx bx-bitcoin side-menu__icon"></i> <span class="side-menu__label">Order Details</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/orders" class="side-menu__item"> <i class="bx bx-abacus side-menu__icon"></i> <span class="side-menu__label">Blog</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/orders" class="side-menu__item"> <i class="bx bx-analyse side-menu__icon"></i> <span class="side-menu__label">Blog Comments</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/slidelist" class="side-menu__item"> <i class="bx bx-aperture side-menu__icon"></i> <span class="side-menu__label">Slide</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/feedbacks" class="side-menu__item"> <i class="bx bx-area side-menu__icon"></i> <span class="side-menu__label">Feedbacks</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/contacts" class="side-menu__item"> <i class="bx bx-area side-menu__icon"></i> <span class="side-menu__label">Contacts</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/feedbacks" class="side-menu__item"> <i class="bx bx-atom side-menu__icon"></i> <span class="side-menu__label">Setting</span> </a> </li>
                <li class="slide">

                    <a href="<?php echo URL_ROOT ?>/admin/logout" class="side-menu__item"> <i class="bx bx-log-out side-menu__icon"></i> <span class="side-menu__label">Logout</span> </a>

                </li>
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