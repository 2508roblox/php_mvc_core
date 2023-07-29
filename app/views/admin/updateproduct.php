<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
$product_data = isset($data['product_data']) ? $data['product_data'] : [''];
$b_data = isset($data['b_data']) ? $data['b_data'] : '';
$c_data = isset($data['c_data']) ? $data['c_data'] : '';
$mess = isset($data['mess']) ? $data['mess'] : '';
?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">



            <h1 class="page-title fw-semibold fs-18 mb-0">Add Product</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <form action="" method="POST" enctype="multipart/form-data">
            <?php echo $mess ?>

            <?php echo isset($data['result']) ? $data['result'] : '' ?>
            <input type="text" hidden name="id" value="<?php echo $product_data['ProductID'] ?>">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body add-products p-0">
                            <div class="p-4">
                                <div class="row gx-5">
                                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                        <div class="card custom-card shadow-none mb-0 border-0">
                                            <div class="card-body p-0">
                                                <div class="row gy-3">
                                                    <div class="col-xl-12"> <label for="product-name-add" class="form-label">Product Name</label> <input name="Name" value="<?php echo $product_data['Name'] ?>" type="text" class="form-control" id="product-name-add" placeholder="Name"> <label for="product-name-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Product
                                                            Name should not exceed 30 characters</label> </div>
                                                    <div class="col-xl-6"> <label for="product-category-add" class="form-label">Category</label> <select class="form-control" data-trigger name="CateID" id="product-category-add">
                                                            <?php
                                                            if (isset($c_data) && $c_data != '') {

                                                                while ($c = $c_data->fetch_assoc()) {

                                                            ?>
                                                                    <option <?php echo $c['CateID'] ==  $product_data['CateID'] ? 'selected' : '' ?> value="<?php echo $c['CateID'] ?>"><?php echo $c['Name'] ?></option>


                                                            <?php
                                                                }
                                                            }
                                                            ?>


                                                        </select> </div>
                                                    <div class="col-xl-6"> <label for="product-gender-add" class="form-label">Brand</label> <select class="form-control" data-trigger name="BrandID" id="product-gender-add">
                                                            <option value="">Select</option>
                                                            <?php
                                                            if (isset($b_data) && $b_data != '') {

                                                                print_r($b_data);
                                                                while ($b = $b_data->fetch_assoc()) {

                                                            ?>
                                                                    <option <?php echo ($b['BrandID'] == $product_data['BrandID'] ?  'selected' : '') ?> value="<?php echo $b['BrandID'] ?>"><?php echo $b['Name'] ?></option>


                                                            <?php
                                                                }
                                                            }
                                                            ?>

                                                        </select> </div>

                                                    <div class="col-xl-6"> <label for="product-brand-add" class="form-label">VAT</label> <select class="form-control" data-trigger name="VAT" id="product-brand-add">
                                                            <option value="">Select</option>
                                                            <option <?php echo $product_data['VAT'] == '0' ? 'selected' : '' ?> value="0">0</option>
                                                            <option <?php echo $product_data['VAT'] == '5' ? 'selected' : '' ?> value="5">5%</option>
                                                            <option <?php echo $product_data['VAT'] == '10' ? 'selected' : '' ?> value="10">10%</option>
                                                            <option <?php echo $product_data['VAT'] == '15' ? 'selected' : '' ?> value="15">15%</option>
                                                            <option <?php echo $product_data['VAT'] == '20' ? 'selected' : '' ?> value="20">20%</option>

                                                        </select> </div>
                                                    <div class="col-xl-6 color-selection"> <label for="product-color-add" class="form-label">#Tag</label> <select class="form-control" name="Tag[]" id="product-color-add" multiple>


                                                            <option <?php
                                                                    echo    str_contains($product_data['Tag'], 'Laptop') ? 'selected' : ''
                                                                    ?> value="Laptop">#Laptop</option>
                                                            <option <?php
                                                                    echo    str_contains($product_data['Tag'], 'Pc') ? 'selected' : ''
                                                                    ?> value="Pc">#Pc</option>
                                                            <option <?php
                                                                    echo    str_contains($product_data['Tag'], 'Phone') ? 'selected' : ''
                                                                    ?> value="Phone">#Phone</option>
                                                            <option <?php
                                                                    echo    str_contains($product_data['Tag'], 'Mouse') ? 'selected' : ''
                                                                    ?> value="Mouse">#Mouse</option>
                                                            <option <?php
                                                                    echo    str_contains($product_data['Tag'], 'Keyboard') ? 'selected' : ''
                                                                    ?> value="Keyboard">#Keyboard</option>
                                                        </select> </div>

                                                    <div class="col-xl-12"> <label for="product-description-add" class="form-label">Product Description</label> <textarea name="Description" class="form-control" id="product-description-add" rows="2"><?php echo $product_data['Description'] ?></textarea> <label for="product-description-add" class="form-label mt-1 fs-12 op-5 text-muted mb-0">*Description
                                                            should not exceed 500 letters</label> </div>
                                                    <div class="col-xl-12"> <label class="form-label">Product
                                                            Features</label>
                                                        <div id="product-features"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                        <div class="card custom-card shadow-none mb-0 border-0">
                                            <div class="card-body p-0">
                                                <div class="row gy-4">
                                                    <div class="col-xl-4"> <label for="product-actual-price" class="form-label">Actual Price</label> <input value="<?php echo $product_data['Price'] ?>" name="Price" type="number" class="form-control" id="product-actual-price" placeholder="Actual Price">
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <label for="product-dealer-price" class="form-label">Promotion
                                                            Price</label> <input value="<?php echo $product_data['PromotionPrice'] ?>" name="PromotionPrice" type="number" class="form-control" id="product-dealer-price" placeholder="Dealer Price">
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <label for="product-discount" class="form-label">Discount</label> <input value="<?php echo $product_data['Discount'] ?>" name=" Discount" type="number" class="form-control" id="product-discount" placeholder="Discount in %">
                                                    </div>
                                                    <div class="col-xl-6"> <label for="product-type" class="form-label">Quantity</label> <input value="<?php echo $product_data['Quantity'] ?>" name="Quantity" type="number" class="form-control" id="product-type" placeholder="Type"> </div>
                                                    <div class="col-xl-6"> <label for="product-discount" class="form-label">Warranty</label> <input value="<?php echo $product_data['Warranty'] ?>" name="Warranty" type="number" class="form-control" id="product-discount1" placeholder="Weight in gms"> </div>
                                                    <div class="col-xl-12 product-documents-container">
                                                        <p class="fw-semibold mb-2 fs-14">Product Images :</p>
                                                        <input type="file" class="" name="filepond[]" data-allow-reorder="true" data-max-file-size="3M" data-max-files="6" multiple>
                                                    </div>
                                                    <label class="form-label op-5 ">
                                                        <?php
                                                        if (isset($product_data['Image'])) {
                                                            # code...
                                                        ?>
                                                            <img width="200px" src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $product_data['Image'] ?>" alt="">
                                                        <?php
                                                        }
                                                        ?>
                                                    </label>

                                                    <div class="col-xl-6 mt-2">
                                                        <label for="publish-date" class="form-label">Publish
                                                            Date</label> <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                                    </div>
                                                    <div class="col-xl-6"> <label for="publish-time" class="form-label">Publish Time</label> <input type="text" class="form-control" id="publish-time" placeholder="Choose time"> </div>
                                                    <div class="col-xl-6"> <label for="product-status-add" class="form-label">Published Status</label> <select class="form-control" data-trigger name="Status" id="product-status-add">
                                                            <option value="">Select</option>
                                                            <option <?php echo $product_data['Status'] == 'Published' ? 'selected' : '' ?> value="Published">Published</option>
                                                            <option <?php echo $product_data['Status'] == 'UnPublished' ? 'selected' : '' ?> value="UnPublished">UnPublished</option>
                                                        </select> </div>
                                                    <div class="col-xl-6"> <label for="product-status-add1" class="form-label">Availability</label> <select class="form-control" data-trigger name="product-status-add1" id="product-status-add1">
                                                            <option value="">Select</option>
                                                            <option value="In Stock">In Stock</option>
                                                            <option value="Out Of Stock">Out Of Stock</option>
                                                        </select> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-end">
                                <i class="btn btn-primary-light m-1">Add Product<i class="bx bx-plus"></i></i>
                                <button class="btn btn-success-light m-1">Save Product<i class="bx bxs-download"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--End::row-1 -->
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
<!-- Custom-Switcher JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom-switcher.min.js"></script>
<!-- Date & Time Picker JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/flatpickr/flatpickr.min.js"></script>
<!-- Quill Editor JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/quill/quill.min.js"></script>
<!-- Filepond JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond/filepond.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>
<!-- Internal Add Products JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/add-products.js"></script>
<!-- Custom JS -->
<script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom.js"></script>
</body>

</html>