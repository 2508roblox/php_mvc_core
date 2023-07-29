<?php
include __DIR__ . '/./inc/header.php';
include __DIR__ . '/./inc/sidebar.php';
$result = isset($data['orders']) ? $data['orders'] : [''];
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
                        <div class="card-title">Category List</div>
                    </div>
                    <div class="card-body">
                        <table id="file-export" class="table table-bordered text-nowrap" style="width:100%">
                            <thead>


                                <tr>
                                    <th>OrderID</th>
                                    <th>CustomerID</th>
                                    <th>OrderDate</th>
                                    <th>Status</th>
                                    <th>PaymentMethod</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>TotalPrice</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result) {
                                    while ($c_data = $result->fetch_assoc()) {
                                ?>

                                        <tr>
                                            <td>
                                                <?php echo $c_data['OrderID'] ?>
                                            </td>
                                            <td>
                                                <?php echo $c_data['CustomerID'] ?>

                                            </td>
                                            <td>
                                                <?php echo $c_data['OrderDate'] ?>

                                            </td>


                                            <td>
                                                <?php
                                                if ($c_data['Status'] == 'pending') {
                                                ?>
                                                    <span style="color: black !important;" class="badge bg-info text-light">Pending</span>

                                                <?php
                                                } elseif ($c_data['Status'] == 'confirmed') {
                                                ?>
                                                    <span style="color: black !important;" class="badge bg-success text-light">Confirmed</span>

                                                <?php
                                                } elseif ($c_data['Status'] == 'cancle') {
                                                ?>
                                                    <span style="color: black !important;" class="badge bg-danger text-light">Cancle</span>

                                                <?php
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php echo $c_data['PaymentMethod'] ?>


                                            </td>

                                            <td>
                                                <?php echo $c_data['Phone'] ?>


                                            </td>

                                            <td>
                                                <?php echo $c_data['Address'] ?>


                                            </td>
                                            <td>
                                                $<?php echo number_format($c_data['TotalPrice']) ?>



                                            </td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a href="<?php echo ASSETS_URL_ROOT . '/admin/orderdetail' . '?id=' . $c_data['OrderID'] ?>" class="btn btn-icon btn-sm btn-info-light"><i class="bx bxs-folder-open"></i> </a>
                                                    <a href="<?php echo ASSETS_URL_ROOT . '/admin/ordersconfirm' . '?id=' . $c_data['OrderID'] ?>" class="btn btn-icon btn-sm btn-success-light"><i class="bx bx-check"></i> </a>
                                                    <a style="display: flex;" onclick="return confirm('Are you sure about that?')" href="<?php echo ASSETS_URL_ROOT . '/admin/orderscancle' . '?id=' . $c_data['OrderID'] ?>" class="btn btn-icon btn-sm btn-danger-light product-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 1200 1200">
                                                            <path fill="currentColor" d="M1024.263 175.738c-234.317-234.317-614.192-234.317-848.525 0c-234.317 234.317-234.317 614.192 0 848.525c234.317 234.316 614.192 234.316 848.525 0c234.316-234.318 234.316-614.193 0-848.525zm-163.489 57.44L233.193 860.743c-125.257-175.737-109.044-421.274 48.624-578.942s403.219-173.881 578.942-48.624h.015zm106.064 106.048c125.248 175.738 109.031 421.29-48.654 578.942c-157.652 157.683-403.205 173.911-578.942 48.639l627.581-627.581h.015z" />
                                                        </svg>


                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>



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