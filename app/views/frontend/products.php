<?php
include_once __DIR__ . '/./inc/header.php';
$p_data  = isset($data['products']) ? $data['products'] : null;
?>



<!-- End Header -->
<style>
    .axil-breadcrumb-area {
        background-color: #00000000;
    }
</style>
<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="<?php echo URL_ROOT ?>/">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                        </ul>
                        <h1 class="title">Explore All Products</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/product-45.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start Shop Area  -->
    <div class="axil-shop-area axil-section-gap bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="axil-shop-sidebar">
                        <div class="d-lg-none">
                            <button class="sidebar-close filter-close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="toggle-list product-categories active">
                            <h6 class="title">CATEGORIES</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="current-cat"><a href="#">Sun Care</a></li>
                                    <li><a href="#">Night Care</a></li>
                                    <li><a href="#">Treatments</a></li>
                                    <li><a href="#">Moisturizers</a></li>
                                    <li><a href="#">Eye Care</a></li>
                                    <li><a href="#">Masks</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">On Sale</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="toggle-list product-categories product-gender active">
                            <h6 class="title">GENDER</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="#">Men (40)</a></li>
                                    <li><a href="#">Women (56)</a></li>
                                    <li><a href="#">Unisex (18)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="toggle-list product-color active">
                            <h6 class="title">COLORS</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="#" class="color-extra-01"></a></li>
                                    <li><a href="#" class="color-extra-02"></a></li>
                                    <li><a href="#" class="color-extra-03"></a></li>
                                    <li><a href="#" class="color-extra-04"></a></li>
                                    <li><a href="#" class="color-extra-05"></a></li>
                                    <li><a href="#" class="color-extra-06"></a></li>
                                    <li><a href="#" class="color-extra-07"></a></li>
                                    <li><a href="#" class="color-extra-08"></a></li>
                                    <li><a href="#" class="color-extra-09"></a></li>
                                    <li><a href="#" class="color-extra-10"></a></li>
                                    <li><a href="#" class="color-extra-11"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="toggle-list product-size active">
                            <h6 class="title">SIZE</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="#">XS</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                    <li><a href="#">3XL</a></li>
                                    <li><a href="#">4XL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="toggle-list product-price-range active">
                            <h6 class="title">PRICE</h6>
                            <div class="shop-submenu">
                                <ul>
                                    <li class="chosen"><a href="#">30</a></li>
                                    <li><a href="#">5000</a></li>
                                </ul>
                                <form action="#" class="mt--25">
                                    <div id="slider-range"></div>
                                    <div class="flex-center mt--20">
                                        <span class="input-range">Price: </span>
                                        <input type="text" id="amount" class="amount-range" readonly>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <button class="axil-btn btn-bg-primary">All Reset</button>
                    </div>
                    <!-- End .axil-shop-sidebar -->
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="axil-shop-top mb--40">
                                <div class="category-select align-items-center justify-content-lg-end justify-content-between">
                                    <!-- Start Single Select  -->
                                    <span class="filter-results">Showing 1-12 of 84 results</span>
                                    <select class="single-select">
                                        <option>Short by Latest</option>
                                        <option>Short by Oldest</option>
                                        <option>Short by Name</option>
                                        <option>Short by Price</option>
                                    </select>
                                    <!-- End Single Select  -->
                                </div>
                                <div class="d-lg-none">
                                    <button class="product-filter-mobile filter-toggle"><i class="fas fa-filter"></i> FILTER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .row -->
                    <div class="row row--15">
                        <?php
                        if (isset($p_data)) {
                            while ($p_single_data  = $p_data->fetch_assoc()) {

                        ?>
                                <div class="col-xl-4 col-sm-6">
                                    <form id="add-to-cart-form" action="<?php echo ASSETS_URL_ROOT ?>/products/addtocard" method="POST" enctype="multipart/form-data">


                                        <input type="number" hidden name="ProductID" value="<?php echo $p_single_data['ProductID'] ?>">
                                        <input type="text" hidden name="Name" value="<?php echo $p_single_data['Name'] ?>">
                                        <input type="text" hidden name="Quantity" value="1">
                                        <div class="axil-product product-style-one mb--30">

                                            <div class="thumbnail">
                                                <a style="background-color: #00000000;" href="<?php echo ASSETS_URL_ROOT . '/products/productdetail/' .   $p_single_data['ProductID'] ?>">
                                                    <img style="max-height: 300px; object-fit: contain;" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_single_data['Image'] ?>" alt="Product Images">
                                                </a>
                                                <div class="label-block label-right">
                                                    <?php
                                                    if ($p_single_data['Discount'] != '0') {
                                                        $discount = $p_single_data['Discount'];
                                                        echo '<div class="product-badget">';

                                                        echo  "<div class=\"product-badget\">$discount% Off</div>";
                                                        echo '</div>';
                                                    }
                                                    ?>

                                                </div>
                                                <div class="product-hover-action">
                                                    <ul class="cart-action">
                                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                        <li class="select-option"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Add to Cart</a>
                                                        </li>
                                                        <li class="wishlist"><a href="wishlist"><i class="far fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="inner">
                                                    <h5 class="title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail"><?php echo $p_single_data['Name'] ?></a>
                                                    </h5>
                                                    <div class="product-price-variant">
                                                        <?php
                                                        if ($p_single_data['PromotionPrice']  != '0') {
                                                        ?>
                                                            <span class="price current-price">$<?php echo number_format($p_single_data['PromotionPrice'])  ?></span>
                                                            <span class="price old-price">$<?php echo number_format($p_single_data['Price'])  ?></span>
                                                            <input type="number" hidden name="CurrentPrice" value="<?php echo number_format($p_single_data['PromotionPrice']) ?>">

                                                        <?php
                                                        } else {
                                                        ?>
                                                            <span class="price current-price">$<?php echo number_format($p_single_data['Price']) ?></span>
                                                            <input type="number" hidden name="CurrentPrice" value="<?php echo number_format($p_single_data['Price']) ?>">


                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Single Product  -->
                        <?php
                            }
                        } else {
                            echo '<h3>No items found in this category.</h3>';
                        }
                        ?>
                    </div>
                    <div class="text-center pt--20">
                        <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Shop Area  -->

    <!-- Start Axil Newsletter Area  -->
    <div class="axil-newsletter-area axil-section-gap pt--0">
        <div class="container">
            <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                <div class="newsletter-content">
                    <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                    <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                    <div class="input-group newsletter-form">
                        <div class="position-relative newsletter-inner mb--15">
                            <input placeholder="example@gmail.com" type="text">
                        </div>
                        <button type="submit" class="axil-btn mb--15">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End Axil Newsletter Area  -->
</main>


<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/service1.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Fast &amp; Secure Delivery</h6>
                        <p>Tell about your service.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/service2.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Money Back Guarantee</h6>
                        <p>Within 10 days.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/service3.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">24 Hour Return Policy</h6>
                        <p>No question ask.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/service4.png" alt="Service">
                    </div>
                    <div class="content">
                        <h6 class="title">Pro Quality Support</h6>
                        <p>24/7 Live support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Footer Area  -->
<footer class="axil-footer-area footer-style-2">
    <!-- Start Footer Top Area  -->
    <div class="footer-top separator-top">
        <div class="container">
            <div class="row">
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Support</h5>
                        <!-- <div class="logo mb--30">
                            <a href="<?php echo URL_ROOT ?>/">
                                <img class="light-logo" src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
                        <div class="inner">
                            <p>685 Market Street, <br>
                                Las Vegas, LA 95820, <br>
                                United States.
                            </p>
                            <ul class="support-list-item">
                                <li><a href="mailto:example@domain.com"><i class="fal fa-envelope-open"></i>
                                        example@domain.com</a></li>
                                <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> (+01)
                                        850-315-5862</a></li>
                                <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Account</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="user">My Account</a></li>
                                <li><a href="user/signup">Login / Register</a></li>
                                <li><a href="<?php echo ASSETS_URL_ROOT ?>/cart">Cart</a></li>
                                <li><a href="wishlist">wishlist</a></li>
                                <li><a href="products">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Quick Link</h5>
                        <div class="inner">
                            <ul>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-of-service.html">Terms Of Use</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
                <!-- Start Single Widget  -->
                <div class="col-lg-3 col-sm-6">
                    <div class="axil-footer-widget">
                        <h5 class="widget-title">Download App</h5>
                        <div class="inner">
                            <span>Save $3 With App & New User only</span>
                            <div class="download-btn-group">
                                <div class="qr-code">
                                    <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/others/qr.png" alt="Axilthemes">
                                </div>
                                <div class="app-link">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/others/app-store.png" alt="App Store">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/others/play-store.png" alt="Play Store">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget  -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area  -->
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-default separator-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="social-share">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="copyright-left d-flex flex-wrap justify-content-center">
                        <ul class="quick-link">
                            <li>© 2023. All rights reserved by <a target="_blank" href="https://axilthemes.com/">Axilthemes</a>.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                        <span class="card-text">Accept For</span>
                        <ul class="payment-icons-bottom quick-link">
                            <li><img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                            <li><img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                            <li><img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area  -->

<!-- Product Quick View Modal Start -->
<div class="modal fade quick-view-product" id="quick-view-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div class="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                        <div class="thumbnail">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/product-big-01.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo URL_ROOT ?> /fix_assets/images/product/product-big-01.png" class="popup-zoom">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/product-big-02.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo URL_ROOT ?> /fix_assets/images/product/product-big-02.png" class="popup-zoom">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/product-big-03.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo URL_ROOT ?> /fix_assets/images/product/product-big-03.png" class="popup-zoom">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb small-thumb-wrapper">
                                        <div class="small-thumb-img">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-content">
                                <div class="inner">
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/icons/rate.png" alt="Rate Images">
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>1</span> customer reviews)</a>
                                        </div>
                                    </div>
                                    <h3 class="product-title">Serif Coffee Table</h3>
                                    <span class="price-amount">$155.00 - $255.00</span>
                                    <ul class="product-meta">
                                        <li><i class="fal fa-check"></i>In stock</li>
                                        <li><i class="fal fa-check"></i>Free delivery available</li>
                                        <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                    </ul>
                                    <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi
                                        pretium. Integer ante est, elementum eget magna. Pellentesque sagittis
                                        dictum libero, eu dignissim tellus.</p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                        <!-- End Product Variation  -->

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                            <li class="wishlist"><a href="wishlist" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a>
                                            </li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Quick View Modal End -->

<!-- Header Search Modal End -->
<div class="header-search-modal" id="header-search-modal">
    <button class="card-close sidebar-close"><i class="fas fa-times"></i></button>
    <div class="header-search-wrap">
        <div class="card-header">
            <form action="#">
                <div class="input-group">
                    <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                    <button type="submit" class="axil-btn btn-bg-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="search-result-header">
                <h6 class="title">24 Result Found</h6>
                <a href="products" class="view-all">View All</a>
            </div>
            <div class="psearch-results">
                <div class="axil-product-list">
                    <div class="thumbnail">
                        <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                            <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number"><span>100+</span> Reviews</span>
                        </div>
                        <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Media Remote</a></h6>
                        <div class="product-price-variant">
                            <span class="price current-price">$29.99</span>
                            <span class="price old-price">$49.99</span>
                        </div>
                        <div class="product-cart">
                            <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                            <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                </div>
                <div class="axil-product-list">
                    <div class="thumbnail">
                        <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /fix_assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="product-rating">
                            <span class="rating-icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number"><span>100+</span> Reviews</span>
                        </div>
                        <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Media Remote</a></h6>
                        <div class="product-price-variant">
                            <span class="price current-price">$29.99</span>
                            <span class="price old-price">$49.99</span>
                        </div>
                        <div class="product-cart">
                            <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                            <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Search Modal End -->

<script>
    // Lấy đối tượng form và nút "Add to Cart"
    const addToCartForm = document.querySelectorAll('#add-to-cart-form');
    const addToCartBtn = document.querySelectorAll('.select-option');
    console.log(addToCartForm, addToCartBtn)

    // Thêm sự kiện click cho nút "Add to Cart"
    addToCartBtn.forEach((btn, index) => {
        btn.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của nút "Add to Cart"
            console.log(btn)
            addToCartForm[index].submit(); // Submit form tương ứng
        });
    });
</script>

<?php include  __DIR__ . '/./inc/cart_.php' ?>

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<?php
include_once __DIR__ . '/./inc/footer.php';
?>