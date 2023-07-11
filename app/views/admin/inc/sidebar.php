<!-- End Switcher -->

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
                <li class="slide has-sub"> <a href="<?php echo URL_ROOT ?>/admin" class="side-menu__item"> <i class="bx bx-home side-menu__icon"></i> <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2">12</span></span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">

                    </ul>
                </li>
                <!-- End::slide -->
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Handle</span></li>
                <!-- End::slide__category -->
                <!-- Start::slide -->
                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-file-blank side-menu__icon"></i> <span class="side-menu__label">Products</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"> <a href="javascript:void(0)">Pages</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/addproduct" class="side-menu__item">Add Product</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/updateproduct" class="side-menu__item">Update Product</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/productlist" class="side-menu__item">Product List</a> </li>



                    </ul>
                </li>
                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-file-blank side-menu__icon"></i> <span class="side-menu__label">Category</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"> <a href="javascript:void(0)">Category</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/addproduct" class="side-menu__item">Add Category</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/updateproduct" class="side-menu__item">Update Category</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/categorylist" class="side-menu__item">Category List</a> </li>



                    </ul>
                </li>
                <li class="slide has-sub"> <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-file-blank side-menu__icon"></i> <span class="side-menu__label">sub-category</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"> <a href="javascript:void(0)">sub-category</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/addproduct" class="side-menu__item">Add sub-category</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/updateproduct" class="side-menu__item">Update sub-category</a> </li>
                        <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/categorylist" class="side-menu__item">sub-category List</a> </li>



                    </ul>
                </li>



                <!-- Start::slide -->
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/orders" class="side-menu__item"> <i class="bx bx-store-alt side-menu__icon"></i> <span class="side-menu__label">Orders</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/reviews" class="side-menu__item"> <i class="bx bx-store-alt side-menu__icon"></i> <span class="side-menu__label">Reviews</span> </a> </li>
                <li class="slide"> <a href="<?php echo URL_ROOT ?>/admin/login" class="side-menu__item"> <i class="bx bx-store-alt side-menu__icon"></i> <span class="side-menu__label">Logout</span> </a> </li>
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