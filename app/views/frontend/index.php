<?php
include_once __DIR__ . '/./inc/header.php';
$p_first =  $data['products_first'];
$p_second =  $data['products_second'];
$cat =  $data['cate'];
$latest_product =  $data['latest_product'];
$fm = new Format();

?>



<main class="main-wrapper">
    <div class="axil-main-slider-area main-slider-style-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-6">
                    <div class="main-slider-content">
                        <div class="slider-content-activation-one">
                            <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                                <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                <h1 class="title">Roco Wireless Headphone</h1>
                                <div class="slide-action">
                                    <div class="shop-btn">
                                        <a href="products" class="axil-btn btn-bg-white d-flex">
                                            <img style="object-fit: contain;" width="20px" height="20px" src="<?php echo ASSETS_URL_ROOT ?>/public/client_assets/assets/images/fire-icon.gif" alt="">
                                            Shop Now</a>
                                        <!-- <i class="fa-brands fa-slack"></i> -->
                                    </div>
                                    <div class="item-rating">
                                        <div class="thumb">
                                            <ul>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author1.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author2.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author3.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author4.png" alt="Author"></li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <span class="rating-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="review-text">
                                                <span>100+</span> Reviews
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide slick-slide">
                                <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                <h1 class="title">Smart Digital Watch</h1>
                                <div class="slide-action">
                                    <div class="shop-btn">
                                        <a href="products" class="axil-btn btn-bg-white"><i class="fa-solid fa-cart-shopping"></i>Shop Now</a>
                                    </div>
                                    <div class="item-rating">
                                        <div class="thumb">
                                            <ul>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author1.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author2.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author3.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author4.png" alt="Author"></li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <span class="rating-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="review-text">
                                                <span>100+</span> Reviews
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide slick-slide">
                                <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                <h1 class="title">Roco Wireless Headphone</h1>
                                <div class="slide-action">
                                    <div class="shop-btn">
                                        <a href="products" class="axil-btn btn-bg-white"><i class="fa-solid fa-cart-shopping"></i>Shop Now</a>
                                    </div>
                                    <div class="item-rating">
                                        <div class="thumb">
                                            <ul>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author1.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author2.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author3.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author4.png" alt="Author"></li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <span class="rating-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="review-text">
                                                <span>100+</span> Reviews
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide slick-slide">
                                <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                                <h1 class="title">Smart Digital Watch</h1>
                                <div class="slide-action">
                                    <div class="shop-btn">
                                        <a href="products" class="axil-btn btn-bg-white"><i class="fa-solid fa-cart-shopping"></i>Shop Now</a>
                                    </div>
                                    <div class="item-rating">
                                        <div class="thumb">
                                            <ul>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author1.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author2.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author3.png" alt="Author"></li>
                                                <li><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/author4.png" alt="Author"></li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <span class="rating-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </span>
                                            <span class="review-text">
                                                <span>100+</span> Reviews
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="main-slider-large-thumb">
                        <div class="slider-thumb-activation-one axil-slick-dots">
                            <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600" data-sal-duration="1500">
                                <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-38.png" alt="Product">
                                <div class="product-price">
                                    <span class="text">From</span>
                                    <span class="price-amount">$49.00</span>
                                </div>
                            </div>
                            <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600" data-sal-duration="1500">
                                <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-39.png" alt="Product">
                                <div class="product-price">
                                    <span class="text">From</span>
                                    <span class="price-amount">$49.00</span>
                                </div>
                            </div>
                            <div class="single-slide slick-slide">
                                <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-38.png" alt="Product">
                                <div class="product-price">
                                    <span class="text">From</span>
                                    <span class="price-amount">$49.00</span>
                                </div>
                            </div>
                            <div class="single-slide slick-slide">
                                <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/product-39.png" alt="Product">
                                <div class="product-price">
                                    <span class="text">From</span>
                                    <span class="price-amount">$49.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group">
            <li class="shape-1"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/shape-1.png" alt="Shape"></li>
            <li class="shape-2"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/others/shape-2.png" alt="Shape"></li>
        </ul>
    </div>

    <!-- Start Categorie Area  -->
    <div class="axil-categorie-area bg-color-white axil-section-gapcommon">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-secondary"> <i class="fa-solid fa-tags"></i>
                    Categories</span>
                <h2 class="title">Browse by Category</h2>
            </div>
            <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
                <?php
                if (isset($cat)) {
                    while ($cat_data  = $cat->fetch_assoc()) {

                ?>
                        <div class="slick-single-layout">
                            <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                                <a href="#">
                                    <img class="img-fluid" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $cat_data['Image'] ?> " alt="product categorie">
                                    <h6 class="cat-title"><?php echo $cat_data['Name'] ?></h6>
                                </a>
                            </div>
                            <!-- End .categrie-product -->
                        </div>
                        <!-- End .slick-single-layout -->
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- End Categorie Area  -->

    <!-- Poster Countdown Area  -->
    <div class="axil-poster-countdown">
        <div class="container">
            <div class="poster-countdown-wrap bg-lighter">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="poster-countdown-content">
                            <div class="section-title-wrapper">
                                <span class="title-highlighter highlighter-secondary"> <i class="fa-solid fa-headphones"></i> Don’t Miss!!</span>
                                <h2 class="title">Enhance Your Music Experience</h2>
                            </div>
                            <div class="poster-countdown countdown mb--40"></div>
                            <a href="#" class="axil-btn btn-bg-primary">Check it Out!</a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="poster-countdown-thumbnail">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/poster/poster-03.png" alt="Poster Product">
                            <div class="music-singnal">
                                <div class="item-circle circle-1"></div>
                                <div class="item-circle circle-2"></div>
                                <div class="item-circle circle-3"></div>
                                <div class="item-circle circle-4"></div>
                                <div class="item-circle circle-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Poster Countdown Area  -->

    <!-- Start Expolre Product Area  -->
    <div class="axil-product-area bg-color-white axil-section-gap">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-primary"> <i class="fa-solid fa-cart-shopping"></i> Our
                    Products</span>
                <h2 class="title">Explore our Products</h2>
            </div>
            <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                <!-- first 8 product -->
                <div class="slick-single-layout">
                    <div class="row row--15">
                        <?php
                        if (isset($p_first)) {
                            $count = 0;
                            while ($p_assoc = $p_first->fetch_assoc()) {
                        ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="<?php echo ASSETS_URL_ROOT . '/products/productdetail/' .   $p_assoc['ProductID'] ?>">
                                                <img style="height: 300px; object-fit: contain;" data-sal="zoom-out" width="300px" height="300px" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['Image'] ?>" alt="Product Images">
                                                <img class="hover-img" width="300px" height="300px" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_assoc['Image'] ?>" alt="Product Images">
                                            </a>
                                            <div class="label-block label-right">
                                                <?php
                                                if ($p_assoc['Discount'] != '0') {
                                                    $discount = $p_assoc['Discount'];
                                                    echo  "<div class=\"product-badget\">$discount% Off</div>";
                                                }
                                                ?>
                                            </div>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                    <li class="select-option">
                                                        <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                                            Add to Cart
                                                        </a>
                                                    </li>
                                                    <li class="wishlist"><a href="wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
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
                                                <h5 class="title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail"><?php echo $fm->textShorten($p_assoc['Name'], 50) ?></a></h5>
                                                <div class="product-price-variant">
                                                    <?php
                                                    if ($p_assoc['PromotionPrice']  != '0') {
                                                    ?>
                                                        <span class="price current-price">$<?php echo $p_assoc['PromotionPrice'] ?></span>
                                                        <span class="price old-price">$<?php echo $p_assoc['Price'] ?></span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="price current-price">$<?php echo $p_assoc['Price'] ?></span>

                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }

                        ?>
                        <!-- End Single Product  -->

                        <!-- End Single Product  -->
                    </div>
                </div>
                <!-- second 8 End .slick-single-layout -->
                <div class="slick-single-layout">
                    <div class="row row--15">
                        <?php
                        if (isset($p_second)) {
                            while ($p_s_data  = $p_second->fetch_assoc()) {
                                # code...
                        ?>
                                <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                                    <div class="axil-product product-style-one">
                                        <div class="thumbnail">
                                            <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                                <img style="height: 300px; object-fit: contain;" data-sal="zoom-out" width="300px" height="300px" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_s_data['Image'] ?>" alt="Product Images">
                                                <img class="hover-img" width="300px" height="300px" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_s_data['Image'] ?>" alt="Product Images">
                                            </a>
                                            </a>
                                            <div class="label-block label-right">

                                                <?php
                                                if ($p_s_data['Discount'] != '0') {
                                                    $discount = $p_s_data['Discount'];
                                                    echo  "<div class=\"product-badget\">$discount% Off</div>";
                                                }
                                                ?>
                                            </div>
                                            <div class="product-hover-action">
                                                <ul class="cart-action">
                                                    <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                                    <li class="select-option"><a href="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_s_data['Image'] ?>">Select Option</a>
                                                    </li>
                                                    <li class="wishlist"><a href="wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="inner">
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
                                                <h5 class="title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail"><?php echo $p_s_data['Name'] ?></a></h5>
                                                <div class="product-price-variant">
                                                    <?php
                                                    if ($p_s_data['PromotionPrice']  != '0') {
                                                    ?>
                                                        <span class="price current-price">$<?php echo $p_s_data['PromotionPrice'] ?></span>
                                                        <span class="price old-price">$<?php echo $p_s_data['Price'] ?></span>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span class="price current-price">$<?php echo $p_s_data['Price'] ?></span>

                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>


                        <!-- End Single Product  -->

                        <!-- End Single Product  -->

                    </div>
                </div>
                <!-- End .slick-single-layout -->
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt--20 mt_sm--0">
                    <a href="products" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a>
                </div>
            </div>

        </div>
    </div>

    <!-- End Expolre Product Area  -->

    <!-- Start Testimonila Area Users Feedback  -->
    <div class="axil-testimoial-area axil-section-gap bg-vista-white">
        <div class="container">
            <div class="section-title-wrapper">
                <span class="title-highlighter highlighter-secondary"> <i class="fa-solid fa-quote-left"></i>Testimonials</span>
                <h2 class="title">Users Feedback</h2>
            </div>
            <!-- End .section-title -->
            <div class="testimonial-slick-activation testimonial-style-one-wrapper slick-layout-wrapper--20 axil-slick-arrow arrow-top-slide">
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to meet new people and create instantly non
                            connections. I have the exact same personal the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/testimonial/image-1.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to meet new people and create instantly non
                            connections. I have the exact same personal the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/testimonial/image-2.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to meet new people and create instantly non
                            connections. I have the exact same personal the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/testimonial/image-3.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->
                <div class="slick-single-layout testimonial-style-one">
                    <div class="review-speech">
                        <p>“ It’s amazing how much easier it has been to meet new people and create instantly non
                            connections. I have the exact same personal the only thing that has changed is my mind
                            set and a few behaviors. “</p>
                    </div>
                    <div class="media">
                        <div class="thumbnail">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/testimonial/image-2.png" alt="testimonial image">
                        </div>
                        <div class="media-body">
                            <span class="designation">Head Of Idea</span>
                            <h6 class="title">James C. Anderson</h6>
                        </div>
                    </div>
                    <!-- End .thumbnail -->
                </div>
                <!-- End .slick-single-layout -->

            </div>
        </div>
    </div>

    <!-- End Testimonila Area  -->

    <!-- Start New Arrivals Product Area  -->
    <div class="axil-new-arrivals-product-area bg-color-white axil-section-gap pb--0">
        <div class="container">
            <div class="product-area pb--50">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="fa-solid fa-cart-shopping"></i>This
                        Week’s</span>
                    <h2 class="title">New Arrivals</h2>
                </div>
                <div class="new-arrivals-product-activation slick-layout-wrapper--30 axil-slick-arrow  arrow-top-slide">
                    <?php
                    if (isset($latest_product)) {
                        while ($l_data  = $latest_product->fetch_assoc()) {

                    ?>
                            <div class="slick-single-layout">
                                <div class="axil-product product-style-two">
                                    <div class="thumbnail">
                                        <a href="<?php echo ASSETS_URL_ROOT . '/products/productdetail/' .   $l_data['ProductID'] ?>">
                                            <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $l_data['Image'] ?>" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <?php
                                            if ($l_data['Discount'] != '0') {
                                                $discount = $l_data['Discount'];
                                                echo  "<div class=\"product-badget\">$discount% Off</div>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail"><?php echo $fm->textShorten($l_data['Name'], 50) ?></a></h5>
                                            <div class="product-price-variant">
                                                <?php
                                                if ($l_data['PromotionPrice']  != '0') {
                                                ?>
                                                    <span class="price current-price">$<?php echo $l_data['PromotionPrice'] ?></span>
                                                    <span class="price old-price">$<?php echo $l_data['Price'] ?></span>
                                                <?php
                                                } else {
                                                ?>
                                                    <span class="price current-price">$<?php echo $l_data['Price'] ?></span>

                                                <?php
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
                                    </div>
                                </div>
                            </div>
                            <!-- End .slick-single-layout -->
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End New Arrivals Product Area  -->

    <!-- Start Most Sold Product Area  -->
    <div class="axil-most-sold-product axil-section-gap">
        <div class="container">
            <div class="product-area pb--50">
                <div class="section-title-wrapper section-title-center">
                    <span class="title-highlighter highlighter-primary"><i class="fas fa-star"></i> Most
                        Sold</span>
                    <h2 class="title">Most Sold in eTrade Store</h2>
                </div>
                <div class="row row-cols-xl-2 row-cols-1 row--15">
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="100" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
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
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="200" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-10.png" alt="Yantiti Leather Bags">
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
                                    <span class="rating-number"><span>50+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">HD Camera</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$49.99</span>
                                </div>
                                <div class="product-cart">
                                    <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="300" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-11.png" alt="Yantiti Leather Bags">
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
                                    <span class="rating-number"><span>120+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Gaming Controller</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$50.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="400" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-12.png" alt="Yantiti Leather Bags">
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
                                    <span class="rating-number"><span>30+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Wall Mount </a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$19.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="500" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-13.png" alt="Yantiti Leather Bags">
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
                                    <span class="rating-number"><span>700+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Lenevo Laptop</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$999.99</span>
                                </div>
                                <div class="product-cart">
                                    <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="600" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-14.png" alt="Yantiti Leather Bags">
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
                                    <span class="rating-number"><span>300+</span> Reviews</span>
                                </div>
                                <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Juice Grinder Machine</a>
                                </h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$99.00</span>
                                </div>
                                <div class="product-cart">
                                    <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="400" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-15.png" alt="Yantiti Leather Bags">
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
                                <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Wireless Headphone</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$59.99</span>
                                </div>
                                <div class="product-cart">
                                    <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></a>
                                    <a href="wishlist" class="cart-btn"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="axil-product-list">
                            <div class="thumbnail">
                                <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">
                                    <img data-sal="zoom-in" data-sal-delay="500" data-sal-duration="1500" src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-16.png" alt="Yantiti Leather Bags">
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
                                <h6 class="product-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail">Asus Zenbook Laptop</a></h6>
                                <div class="product-price-variant">
                                    <span class="price current-price">$899.00</span>
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
    </div>
    <!-- End Most Sold Product Area  -->

    <!-- Start Why Choose Area  -->
    <div class="axil-why-choose-area pb--50 pb_sm--30">
        <div class="container">
            <div class="section-title-wrapper section-title-center">
                <span class="title-highlighter highlighter-secondary"><i class=" fa-regular fa-thumbs-up"></i>Why
                    Us</span>
                <h2 class="title">Why People Choose Us</h2>
            </div>
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 row--20">
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service6.png" alt="Service">
                        </div>
                        <h6 class="title">Fast &amp; Secure Delivery</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service7.png" alt="Service">
                        </div>
                        <h6 class="title">100% Guarantee On Product</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service8.png" alt="Service">
                        </div>
                        <h6 class="title">24 Hour Return Policy</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service9.png" alt="Service">
                        </div>
                        <h6 class="title">24 Hour Return Policy</h6>
                    </div>
                </div>
                <div class="col">
                    <div class="service-box">
                        <div class="icon">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/icons/service10.png" alt="Service">
                        </div>
                        <h6 class="title">Next Level Pro Quality</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Area  -->


    <!-- Start Axil Product Poster Area  -->
    <div class="axil-poster">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb--30">
                    <div class="single-poster">
                        <a href="products">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/poster/poster-01.png" alt="eTrade promotion poster">
                            <div class="poster-content">
                                <div class="inner">
                                    <h3 class="title">Rich sound, <br> for less.</h3>
                                    <span class="sub-title">Collections <i class="fa-solid fa-arrow-right-long"></i></span>
                                </div>
                            </div>
                            <!-- End .poster-content -->
                        </a>
                    </div>
                    <!-- End .single-poster -->
                </div>
                <div class="col-lg-6 mb--30">
                    <div class="single-poster">
                        <a href="shop-sidebar.html">
                            <img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/poster/poster-02.png" alt="eTrade promotion poster">
                            <div class="poster-content content-left">
                                <div class="inner">
                                    <span class="sub-title">50% Offer In Winter</span>
                                    <h3 class="title">Get VR <br> Reality Glass</h3>
                                </div>
                            </div>
                            <!-- End .poster-content -->
                        </a>
                    </div>
                    <!-- End .single-poster -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Axil Product Poster Area  -->

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
                            <p>685 Market Street, <br> Las Vegas, LA 95820, <br> United States.
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
                <div class="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-thumb">
                    <div class="row">
                        <div class="col-lg-7 mb--40">
                            <div class="row">
                                <div class="col-lg-10 order-lg-2">
                                    <div class="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-thumbnail product-large-thumbnail axil-product thumbnail-badge zoom-gallery">
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
                            <div class="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-content">
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
                        <h3 class="item-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-3.html">Wireless PS Handler</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>155.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="15">
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="item-img">
                        <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-2.html"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-02.png" alt="Commodo Blown Lamp"></a>
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
                        <h3 class="item-title"><a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-2.html">Gradient Light Keyboard</a></h3>
                        <div class="item-price"><span class="currency-symbol">$</span>255.00</div>
                        <div class="pro-qty item-quantity">
                            <input type="number" class="quantity-input" value="5">
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="item-img">
                        <a href="<?php echo ASSETS_URL_ROOT ?>/products/productdetail-3.html"><img src="<?php echo ASSETS_URL_ROOT ?> /client_assets/assets/images/product/electric/product-03.png" alt="Commodo Blown Lamp"></a>
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

<!-- Offer Modal Start -->
<div class="offer-popup-modal" id="offer-popup-modal">
    <div class="offer-popup-wrap">
        <div class="card-body">
            <button class="popup-close"><i class="fas fa-times"></i></button>
            <div class="content">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"> <i class="fa-solid fa-cart-shopping"></i>
                        Don’t Miss!!</span>
                    <h3 class="title">Best Sales Offer<br> Grab Yours</h3>
                </div>
                <div class="poster-countdown countdown"></div>
                <a href="products" class="axil-btn btn-bg-primary">Shop Now <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="closeMask"></div>
<?php
include_once __DIR__ . '/./inc/footer.php';
?>