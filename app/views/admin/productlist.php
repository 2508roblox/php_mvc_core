<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
$result = isset($data['products']) ? $data['products'] : [''];
$fm = new Format();
?>


<!-- End::app-sidebar -->
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Products List</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Products List</div>
                    </div>
                    <div class="card-body">
                        <table id="file-export" class="table table-bordered text-nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Sub - Category</th>
                                    <th>Status</th>
                                    <th>Vat</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Sold</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result != '') {
                                    # code...
                                    while ($p_data = $result->fetch_assoc()) {


                                ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2"> <span class="avatar avatar-md avatar-rounded"> <img src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $p_data['Image'] ?>" alt=""> </span> </div>
                                                    <div class="fw-semibold"> <?php echo $fm->textShorten($p_data['Name'], 30)  ?> </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-light text-default">Clothing</span>
                                            </td>
                                            <td>
                                                <span class="badge bg-light text-default">T-shirt</span>
                                            </td>
                                            <td>
                                                <?php if (strtotime(date("Y-m-d")) > strtotime($p_data['Hot'])) {
                                                    echo "<span class=\"badge bg-danger text-light\">" . "Non - Featured";
                                                } elseif (strtotime(date("Y-m-d")) < strtotime($p_data['Hot'])) {
                                                    echo "<span class=\"badge bg-success text-light\">" . "Featured";
                                                } ?>


                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge bg-info text-light">
                                                    <?php
                                                    if ($p_data['VAT'] == '0') {
                                                        echo "10%";
                                                    } else {
                                                        echo "0%";
                                                    }
                                                    ?>
                                                </span>
                                            </td>

                                            <td>$<?php echo number_format($p_data['Price']) ?></td>
                                            <td><?php echo $p_data['Quantity'] ?></td>
                                            <td><?php echo $p_data['Sold'] ?></td>
                                            <td>
                                                <?php
                                                if ($p_data['Status'] == 'Published') {
                                                ?>
                                                    <span class="badge bg-success text-light">Published</span>


                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge bg-danger text-light">UnPublished</span>

                                                <?php
                                                }
                                                ?>

                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="<?php echo ASSETS_URL_ROOT . '/admin/updateproduct' . '?id=' . $p_data['ProductID'] ?>" class="btn btn-icon btn-sm btn-info-light"><i class="bx bx-edit"></i></a>
                                                    <a href="<?php echo ASSETS_URL_ROOT . '/admin/delproduct' . '?delid=' . $p_data['ProductID'] ?>" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="bx bx-x-circle"></i></a>
                                                    <a style="display: flex; align-items: center; justify-content: center;" href="<?php echo ASSETS_URL_ROOT . '/admin/addslide' . '?id=' . $p_data['ProductID'] ?>" class="btn btn-icon btn-sm btn-success-light product-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 48 48">
                                                            <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                                                                <path d="M41 5.5H7v28h34v-28Z" />
                                                                <path stroke-linecap="round" d="m16 41.5l8-8l8 8M13.924 24.663l5.642-5.508l4.442 4.345l9.959-9.98M4 5.5h40" />
                                                            </g>
                                                        </svg></a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
        <!-- Start:: row-2 -->

        <!-- End:: row-3 -->
        <!-- Start:: row-4 -->

        <!-- End:: row-4 -->
        <!-- Start:: row-5 -->

        <!-- End:: row-7 -->
        <!-- Start:: row-8 -->

        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year"></span> <a href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>. Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All
                    rights
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
    <!-- Jquery Cdn -->
    <!-- table data -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
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
    <!-- Custom JS -->
    <script src="<?php echo ASSETS_URL_ROOT . '/public/' ?>admin_assets/assets/js/custom.js"></script>

    </body>

    </html>