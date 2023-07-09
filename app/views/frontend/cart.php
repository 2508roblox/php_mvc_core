<?php
include_once __DIR__ . '/./inc/header.php';
?>




<!-- End Header -->

<main class="main-wrapper">

    <!-- Start Cart Area  -->
    <div class="axil-product-cart-area axil-section-gap">
        <div class="container">
            <div class="axil-product-cart-wrap">
                <div class="product-table-heading">
                    <h4 class="title">Your Cart</h4>
                    <a href="#" class="cart-clear">Clear Shoping Cart</a>
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-cart-table mb--40">
                        <thead>
                            <tr>
                                <th scope="col" class="product-remove"></th>
                                <th scope="col" class="product-thumbnail">Product</th>
                                <th scope="col" class="product-title"></th>
                                <th scope="col" class="product-price">Price</th>
                                <th scope="col" class="product-quantity">Quantity</th>
                                <th scope="col" class="product-subtotal">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fa-solid fa-xmark"></i></a></td>
                                <td class="product-thumbnail"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-01.png" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Wireless PS Handler</a></td>
                                <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                <td class="product-quantity" data-title="Qty">
                                    <div class="pro-qty">
                                        <input type="number" class="quantity-input" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                            </tr>
                            <tr>
                                <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fa-solid fa-xmark"></i></a></td>
                                <td class="product-thumbnail"><a href="single-product-2.html"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-02.png" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="single-product-2.html">Gradient Light
                                        Keyboard</a></td>
                                <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                <td class="product-quantity" data-title="Qty">
                                    <div class="pro-qty">
                                        <input type="number" class="quantity-input" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                            </tr>
                            <tr>
                                <td class="product-remove"><a href="#" class="remove-wishlist"><i class="fa-solid fa-xmark"></i></a></td>
                                <td class="product-thumbnail"><a href="single-product-3.html"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-03.png" alt="Digital Product"></a></td>
                                <td class="product-title"><a href="single-product-3.html">HD CC Camera</a></td>
                                <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>124.00</td>
                                <td class="product-quantity" data-title="Qty">
                                    <div class="pro-qty">
                                        <input type="number" class="quantity-input" value="1">
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>275.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart-update-btn-area">
                    <div class="input-group product-cupon">
                        <input placeholder="Enter coupon code" type="text">
                        <div class="product-cupon-btn">
                            <button type="submit" class="axil-btn btn-outline">Apply</button>
                        </div>
                    </div>
                    <div class="update-btn">
                        <a href="#" class="axil-btn btn-outline">Update Cart</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                        <div class="axil-order-summery mt--80">
                            <h5 class="title mb--20">Order Summary</h5>
                            <div class="summery-table-wrap">
                                <table class="table summery-table mb--30">
                                    <tbody>
                                        <tr class="order-subtotal">
                                            <td>Subtotal</td>
                                            <td>$117.00</td>
                                        </tr>
                                        <tr class="order-shipping">
                                            <td>Shipping</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" id="radio1" name="shipping" checked>
                                                    <label for="radio1">Free Shippping</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="radio" id="radio2" name="shipping">
                                                    <label for="radio2">Local: $35.00</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="radio" id="radio3" name="shipping">
                                                    <label for="radio3">Flat rate: $12.00</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="order-tax">
                                            <td>State Tax</td>
                                            <td>$8.00</td>
                                        </tr>
                                        <tr class="order-total">
                                            <td>Total</td>
                                            <td class="order-total-amount">$125.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?php echo ASSETS_URL_ROOT ?>/checkout" class="axil-btn btn-bg-primary checkout-btn">Process to
                                Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart Area  -->

</main>


<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service1.png" alt="Service">
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
                        <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service2.png" alt="Service">
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
                        <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service3.png" alt="Service">
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
                        <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service4.png" alt="Service">
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
                                <img class="light-logo" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/logo/logo.png" alt="Logo Images">
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
                                <li><a href="wishlist">Wishlist</a></li>
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
                                    <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/qr.png" alt="Axilthemes">
                                </div>
                                <div class="app-link">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/app-store.png" alt="App Store">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/play-store.png" alt="Play Store">
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
                            <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                            <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                            <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
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
                <div class="single-product-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
                                        <div class="thumbnail">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-big-01.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo URL_ROOT ?> /client_assets/assets/images/product/product-big-01.png" class="popup-zoom">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-big-02.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo URL_ROOT ?> /client_assets/assets/images/product/product-big-02.png" class="popup-zoom">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-big-03.png" alt="Product Images">
                                            <div class="label-block label-right">
                                                <div class="product-badget">20% OFF</div>
                                            </div>
                                            <div class="product-quick-view position-view">
                                                <a href="<?php echo URL_ROOT ?> /client_assets/assets/images/product/product-big-03.png" class="popup-zoom">
                                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <div class="product-small-thumb small-thumb-wrapper">
                                        <div class="small-thumb-img">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/rate.png" alt="Rate Images">
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
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
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
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
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



<div class="cart-dropdown" id="cart-dropdown">
    <div class="cart-content-wrap">
        <div class="cart-header">
            <h2 class="header-title">Cart review</h2>
            <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="cart-body">
            <ul class="cart-item-list">
                <li class="cart-item">
                    <div class="item-img">
                        <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-01.png" alt="Commodo Blown Lamp"></a>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-content">
                        <div class="product-rating">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number">(64)</span>
                        </div>
                        <h3 class="item-title"><a href="single-product-3.html">Wireless PS Handler</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="15">
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="item-img">
                        <a href="single-product-2.html"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-02.png" alt="Commodo Blown Lamp"></a>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-content">
                        <div class="product-rating">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number">(4)</span>
                        </div>
                        <h3 class="item-title"><a href="single-product-2.html">Gradient Light Keyboard</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="5">
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="item-img">
                        <a href="single-product-3.html"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-03.png" alt="Commodo Blown Lamp"></a>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="item-content">
                        <div class="product-rating">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <span class="rating-number">(6)</span>
                        </div>
                        <h3 class="item-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">HD CC Camera</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>200.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="100">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="cart-footer">
            <h3 class="cart-subtotal">
                <span class="subtotal-title">Subtotal:</span>
                <span class="subtotal-amount">$610.00</span>
            </h3>
            <div class="group-btn">
                <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                <a href="<?php echo ASSETS_URL_ROOT ?>/checkout" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
            </div>
        </div>
    </div>
</div>

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<?php
include_once __DIR__ . '/./inc/footer.php';
?>