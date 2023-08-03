<?php
include_once __DIR__ . '/./inc/header.php';
$p_detail = isset($data['p_detail']) ? $data['p_detail'] : null;
$f_ps = isset($data['f_ps']) ? $data['f_ps'] : null;
$fm = new Format();
?>




<!-- End Header -->
<style>
    .axil-product .thumbnail a {
        background-color: #00000000;
    }
</style>
<main class="main-wrapper">
    <!-- Start Shop Area  -->
    <div class="axil-single-product-area axil-section-gap pb--0 bg-color-white">
        <div class="single-product-thumb mb--40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mb--40">
                        <div class="row">
                            <div class="col-lg-10 order-lg-2">
                                <div class="single-product-thumbnail-wrap zoom-gallery">
                                    <div class="single-product-thumbnail product-large-thumbnail-3 axil-product">
                                        <div class="thumbnail">
                                            <a href="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_detail['Image'] ?> " class="popup-zoom">
                                                <img style="  object-fit: cover;" class="zoom_img" class="img-fluid" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_detail['Image'] ?> " alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="thumbnail">
                                            <a href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/images/product/product-big-02.png" class="popup-zoom">
                                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-big-02.png" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="thumbnail">
                                            <a href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/images/product/product-big-03.png" class="popup-zoom">
                                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-big-03.png" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="thumbnail">
                                            <a href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/images/product/product-big-02.png" class="popup-zoom">
                                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-big-02.png" alt="Product Images">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="label-block">
                                        <?php
                                        if ($p_detail['Discount'] != '0') {
                                            $discount = $p_detail['Discount'];


                                            echo  "<div class=\"product-badget\">$discount% Off</div>";
                                        }
                                        ?>
                                    </div>
                                    <div class="product-quick-view position-view">
                                        <a href="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/images/product/product-big-01.png" class="popup-zoom">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                                                <path fill="currentColor" d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 order-lg-1">
                                <div class="product-small-thumb-3 small-thumb-wrapper">
                                    <div class="small-thumb-img">
                                        <img src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_detail['Image'] ?> " alt="thumb image">
                                    </div>
                                    <div class="small-thumb-img">
                                        <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                    </div>
                                    <div class="small-thumb-img">
                                        <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
                                    </div>
                                    <div class="small-thumb-img">
                                        <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb--40">
                        <div class="single-product-content">
                            <form action="<?php echo ASSETS_URL_ROOT ?>/products/addtocard" method="POST" enctype="multipart/form-data">


                                <div class="inner">
                                    <input type="number" hidden name="ProductID" value="<?php echo $p_detail['ProductID'] ?>">
                                    <input type="text" hidden name="Name" value="<?php echo $p_detail['Name'] ?>">
                                    <!--  -->
                                    <div class="inner">
                                        <h2 class="product-title"><?php echo $p_detail['Name']  ?></h2>
                                        <span class="price-amount">
                                            <span class="price-amount">
                                                <?php
                                                if ($p_detail['PromotionPrice']  != '0') {
                                                ?>
                                                    <span style="font-weight: bold; font-size: 4rem;" class="price current-price">$<?php echo number_format($p_detail['PromotionPrice']) ?></span>
                                                    <span style="color: gray; text-decoration-line: line-through;" class="price old-price">$<?php echo number_format($p_detail['Price']) ?></span>
                                                    <input type="number" hidden name="CurrentPrice" value="<?php echo $p_detail['PromotionPrice'] ?>">
                                                <?php
                                                } else {
                                                ?>
                                                    <span style="font-weight: bold; font-size: 4rem;" class="price current-price">$<?php echo number_format($p_detail['Price']) ?></span>
                                                    <input type="number" hidden name="CurrentPrice" value="<?php echo $p_detail['Price'] ?>">


                                                <?php
                                                }
                                                ?>

                                            </span>
                                        </span>
                                        <div class="product-rating">
                                            <div class="star-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="review-link">
                                                <a href="#">(<span>2</span> customer reviews)</a>
                                            </div>
                                        </div>
                                        <ul class="product-meta">
                                            <li>- <?php echo $p_detail['Quantity'] ?> Items in stock</li>
                                            <li>- Free delivery available</li>
                                            <li>- Sales 30% Off Use Code: MOTIVE30</li>
                                        </ul>
                                        <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                        <div class="product-variations-wrapper">

                                            <!-- Start Product Variation  -->
                                            <div class="product-variation">
                                                <h6 class="title">Colors:</h6>
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
                                            </div>
                                            <!-- End Product Variation  -->

                                            <!-- Start Product Variation  -->
                                            <?php echo isset($data['mess']) ? $data['mess'] : '' ?>
                                            <div class="product-variation product-size-variation">
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
                                            <div class="pro-qty mr--20"><input name="Quantity" type="text" value="1"></div>
                                            <!-- End Quentity Action  -->

                                            <!-- Start Product Action  -->
                                            <ul style="display: flex; " class="product-action d-flex-center mb--0">
                                                <button style="width: 60%;" type="submit" name="addproduct" class="axil-btn btn-bg-primary">Add to cart</button>
                                                <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <!-- End Product Action  -->

                                        </div>
                                        <!-- End Product Action Wrapper  -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

            <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white">
                <div class="container">
                    <ul class="nav tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a id="additional-info-tab" data-bs-toggle="tab" href="#additional-info" role="tab" aria-controls="additional-info" aria-selected="false">Additional Information</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-desc-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mb--30">
                                        <div class="single-desc">
                                            <h5 class="title">Specifications:</h5>
                                            <?php
                                            if ($p_detail['Detail'] != '') {
                                                echo $p_detail['Detail'];
                                            } else {
                                                echo "Description is empty";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                    <div class="col-lg-6 mb--30">
                                        <div class="single-desc">
                                            <h5 class="title">Care & Maintenance:</h5>
                                            <p>Use warm water to describe us as a product team that creates amazing UI/UX experiences, by crafting top-notch user experience.</p>
                                        </div>
                                    </div>
                                    <!-- End .col-lg-6 -->
                                </div>
                                <!-- End .row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="pro-des-features">
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/icon-3.png" alt="icon">
                                                </div>
                                                Easy Returns
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/icon-2.png" alt="icon">
                                                </div>
                                                Quality Service
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/icon-1.png" alt="icon">
                                                </div>
                                                Original Product
                                            </li>
                                        </ul>
                                        <!-- End .pro-des-features -->
                                    </div>
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .product-desc-wrapper -->
                        </div>
                        <div class="tab-pane fade" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Stand Up</th>
                                                <td>35″L x 24″W x 37-45″H(front to back wheel)</td>
                                            </tr>
                                            <tr>
                                                <th>Folded (w/o wheels) </th>
                                                <td>32.5″L x 18.5″W x 16.5″H</td>
                                            </tr>
                                            <tr>
                                                <th>Folded (w/ wheels) </th>
                                                <td>32.5″L x 24″W x 18.5″H</td>
                                            </tr>
                                            <tr>
                                                <th>Door Pass Through </th>
                                                <td>24</td>
                                            </tr>
                                            <tr>
                                                <th>Frame </th>
                                                <td>Aluminum</td>
                                            </tr>
                                            <tr>
                                                <th>Weight (w/o wheels) </th>
                                                <td>20 LBS</td>
                                            </tr>
                                            <tr>
                                                <th>Weight Capacity </th>
                                                <td>60 LBS</td>
                                            </tr>
                                            <tr>
                                                <th>Width</th>
                                                <td>24″</td>
                                            </tr>
                                            <tr>
                                                <th>Handle height (ground to handle) </th>
                                                <td>37-45″</td>
                                            </tr>
                                            <tr>
                                                <th>Wheels</th>
                                                <td>Aluminum</td>
                                            </tr>
                                            <tr>
                                                <th>Size</th>
                                                <td>S, M, X, XL</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="reviews-wrapper">
                                <div class="row">
                                    <div class="col-lg-6 mb--40">
                                        <div class="axil-comment-area pro-desc-commnet-area">
                                            <h5 class="title">01 Review for this product</h5>
                                            <ul class="comment-list">
                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/images/blog/author-image-4.png" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Cameron Williamson">Eleanor Pena</span>
                                                                        </span>
                                                                    </a>
                                                                    <span class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star empty-rating"></i></a>
                                                                    </span>
                                                                </h6>
                                                                <div class="comment-text">
                                                                    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ” </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->

                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/images/blog/author-image-4.png" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Rahabi Khan">Courtney Henry</span>
                                                                        </span>
                                                                    </a>
                                                                    <span class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                    </span>
                                                                </h6>
                                                                <div class="comment-text">
                                                                    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ”</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->

                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="<?php echo ASSETS_URL_ROOT . '/public/' ?>fix_assets/images/blog/author-image-5.png" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Rahabi Khan">Devon Lane</span>
                                                                        </span>
                                                                    </a>
                                                                    <span class="commenter-rating ratiing-four-star">
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                        <a href="#"><i class="fas fa-star"></i></a>
                                                                    </span>
                                                                </h6>
                                                                <div class="comment-text">
                                                                    <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ” </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->
                                            </ul>
                                        </div>
                                        <!-- End .axil-commnet-area -->
                                    </div>
                                    <!-- End .col -->
                                    <div class="col-lg-6 mb--40">
                                        <!-- Start Comment Respond  -->
                                        <div class="comment-respond pro-des-commend-respond mt--0">
                                            <h5 class="title mb--30">Add a Review</h5>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <div class="rating-wrapper d-flex-center mb--40">
                                                Your Rating <span class="require">*</span>
                                                <div class="reating-inner ml--20">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <path fill="currentColor" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275L5.825 22Z" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label>Other Notes (optional)</label>
                                                            <textarea name="message" placeholder="Your Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Name <span class="require">*</span></label>
                                                            <input id="name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-12">
                                                        <div class="form-group">
                                                            <label>Email <span class="require">*</span> </label>
                                                            <input id="email" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <button type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Submit Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Comment Respond  -->
                                    </div>
                                    <!-- End .col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- woocommerce-tabs -->

        </div>
        <!-- End Shop Area  -->

        <!-- Start Recently Viewed Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Your Recently</span>
                    <h2 class="title">Familiar Items</h2>
                </div>
                <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <?php
                    if (isset($f_ps)) {
                        while ($f_p  = $f_ps->fetch_assoc()) {

                    ?>
                            <div class="slick-single-layout">
                                <div class="axil-product">
                                    <div class="thumbnail">
                                        <a style="background-color: #00000000;" href="<?php echo ASSETS_URL_ROOT . '/products/productdetail/' .   $f_p['ProductID'] ?>">
                                            <img style="max-height: 300px; object-fit: contain;" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $f_p['Image'] ?>" alt="Product Images">
                                        </a>
                                        <div class="label-block label-right">
                                            <?php
                                            if ($f_p['Discount'] != '0') {
                                                $discount = $f_p['Discount'];
                                                echo '<div class="product-badget">';

                                                echo  "<div class=\"product-badget\">$discount% Off</div>";
                                                echo '</div>';
                                            }
                                            ?>

                                        </div>
                                        <div class="product-hover-action">
                                            <ul class="cart-action">
                                                <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                                <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="inner">
                                            <h5 class="title"><a href="single-product.html"><?php echo $fm->textShorten($f_p['Name'], 100) ?></a></h5>
                                            <div class="product-price-variant">

                                                <?php
                                                if ($f_p['PromotionPrice']  != '0') {
                                                ?>
                                                    <span class="price old-price">$<?php echo number_format($f_p['Price'])  ?></span>
                                                    <span class="price current-price">$<?php echo number_format($f_p['PromotionPrice'])  ?></span>


                                                <?php
                                                } else {
                                                ?>
                                                    <span class="price current-price">$<?php echo number_format($f_p['Price'])  ?></span>



                                                <?php
                                                }
                                                ?>
                                            </div>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo '<h3>No items found in this category.</h3>';
                    }
                    ?>

                    <!-- End .slick-single-layout -->

                    <!-- End .slick-single-layout -->

                </div>
            </div>
        </div>


        <div class="service-area">
            <div class="container">
                <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
                    <div class="col">
                        <div class="service-box service-style-2">
                            <div class="icon">
                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/service1.png" alt="Service">
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
                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/service2.png" alt="Service">
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
                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/service3.png" alt="Service">
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
                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/service4.png" alt="Service">
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
                                            <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/others/qr.png" alt="Axilthemes">
                                        </div>
                                        <div class="app-link">
                                            <a href="#">
                                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/others/app-store.png" alt="App Store">
                                            </a>
                                            <a href="#">
                                                <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/others/play-store.png" alt="Play Store">
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
                                    <li><img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                                    <li><img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                                    <li><img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
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
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-big-01.png" alt="Product Images">
                                                    <div class="label-block label-right">
                                                        <div class="product-badget"> <?php
                                                                                        if ($p_detail['Discount'] != '0') {
                                                                                            $discount = $p_detail['Discount'];
                                                                                            echo '<div class="product-badget">';

                                                                                            echo  "<div class=\"product-badget\">$discount% Off</div>";
                                                                                            echo '</div>';
                                                                                        }
                                                                                        ?></div>
                                                    </div>
                                                    <div class="product-quick-view position-view">
                                                        <a href="<?php echo URL_ROOT ?>/fix_assets/images/product/product-big-01.png" class="popup-zoom">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                                                                <path fill="currentColor" d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-big-02.png" alt="Product Images">
                                                    <div class="label-block label-right">
                                                        <div class="product-badget"> <?php
                                                                                        if ($p_detail['Discount'] != '0') {
                                                                                            $discount = $p_detail['Discount'];
                                                                                            echo '<div class="product-badget">';

                                                                                            echo  "<div class=\"product-badget\">$discount% Off</div>";
                                                                                            echo '</div>';
                                                                                        }
                                                                                        ?></div>
                                                    </div>
                                                    <div class="product-quick-view position-view">
                                                        <a href="<?php echo URL_ROOT ?>/fix_assets/images/product/product-big-02.png" class="popup-zoom">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                                                                <path fill="currentColor" d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="thumbnail">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-big-03.png" alt="Product Images">
                                                    <div class="label-block label-right">
                                                        <div class="product-badget"> <?php
                                                                                        if ($p_detail['Discount'] != '0') {
                                                                                            $discount = $p_detail['Discount'];
                                                                                            echo '<div class="product-badget">';

                                                                                            echo  "<div class=\"product-badget\">$discount% Off</div>";
                                                                                            echo '</div>';
                                                                                        }
                                                                                        ?></div>
                                                    </div>
                                                    <div class="product-quick-view position-view">
                                                        <a href="<?php echo URL_ROOT ?>/fix_assets/images/product/product-big-03.png" class="popup-zoom">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                <path fill="currentColor" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" />
                                                                <path fill="currentColor" d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 order-lg-1">
                                            <div class="product-small-thumb small-thumb-wrapper">
                                                <div class="small-thumb-img">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/thumb-08.png" alt="thumb image">
                                                </div>
                                                <div class="small-thumb-img">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/thumb-07.png" alt="thumb image">
                                                </div>
                                                <div class="small-thumb-img">
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/product-thumb/thumb-09.png" alt="thumb image">
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
                                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/icons/rate.png" alt="Rate Images">
                                                </div>
                                                <div class="review-link">
                                                    <a href="#">(<span>1</span> customer reviews)</a>
                                                </div>
                                            </div>
                                            <h3 class="product-title">Serif Coffee Table</h3>
                                            <span class="price-amount">
                                                <span class="price-amount">
                                                    <?php
                                                    if ($p_detail['PromotionPrice']  != '0') {
                                                    ?>
                                                        <span style="font-weight: bold; font-size: 4rem;" class="price current-price">$<?php echo number_format($p_detail['PromotionPrice']) ?></span>
                                                        <span style="color: gray; text-decoration-line: line-through;" class="price old-price">$<?php echo number_format($p_detail['Price']) ?></span>
                                                        <input type="number" hidden name="CurrentPrice" value="<?php echo $p_detail['PromotionPrice'] ?>">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <span style="font-weight: bold; font-size: 4rem;" class="price current-price">$<?php echo number_format($p_detail['Price']) ?></span>
                                                        <input type="number" hidden name="CurrentPrice" value="<?php echo $p_detail['Price'] ?>">


                                                    <?php
                                                    }
                                                    ?>

                                                </span>
                                            </span>
                                            <ul class="product-meta">
                                                <li>- <?php echo $p_detail['Quantity'] ?> items in stock</li>
                                                <li>- Free delivery available</li>
                                                <li>- Sales 30% Off Use Code: MOTIVE30</li>
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

                    <div class="input-group">
                        <input type="search" class="form-control" name="prod-search" id="prod-search" placeholder="Write Something....">
                        <button type="submit" name="addproduct" class="axil-btn btn-bg-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>

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
                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
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
                                    <img src="<?php echo ASSETS_URL_ROOT ?>/fix_assets/images/product/electric/product-09.png" alt="Yantiti Leather Bags">
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
            const container = document.getElementById("zoom_img");
            const img = document.querySelector(".zoom_img");
            container.addEventListener("mousemove", (e) => {
                const containerRect = container.getBoundingClientRect();
                const x = (e.clientX - containerRect.left) / containerRect.width;
                const y = (e.clientY - containerRect.top) / containerRect.height;

                img.style.transformOrigin = `${x * 100}% ${y * 100}%`;
                img.style.transform = "scale(2)";
            });
            container.addEventListener("mouseleave", () => {
                img.style.transformOrigin = "center";
                img.style.transform = "scale(1)";
            });
        </script>


        <?php include  __DIR__ . '/./inc/cart_.php' ?>

        <!-- JS
============================================ -->
        <!-- Modernizer JS -->
        <?php
        include_once __DIR__ . '/./inc/footer.php';
        ?>