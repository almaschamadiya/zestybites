<?php
session_start();
$sessionName = "adminLogin";
if ($_SESSION[$sessionName] != "") {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- ===== Head Section Start ===== -->
        <?php include("head.php"); ?>
        <!-- ===== Head Section End ===== -->
        <style>
            /* Colors */
            :root {
                --color-primary: #308D46;
                --color-hover: #46b861;
            }

            .moveTop:hover {
                background-color: var(--color-hover);
            }

            .note {
                display: none;
                margin-bottom: 5px;
            }

            @media (max-width: 768px) {

                .table th:nth-child(1),
                .table td:nth-child(1),
                .table th:nth-child(2),
                .table td:nth-child(2),
                .table th:nth-child(4),
                .table td:nth-child(4),
                .table th:nth-child(5),
                .table td:nth-child(5),
                .table th:nth-child(6),
                .table td:nth-child(6) {
                    display: none;
                }

                .note {
                    display: block;
                }
            }
        </style>
    </head>

    <body>
        <!-- ===== Header Section Start ===== -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <?php include("header.php"); ?>
        </header>
        <!-- ===== Header Section End ===== -->

        <!-- ===== Sidebar ===== -->
        <?php include("sidebar.php"); ?>
        <!-- ===== Sidebar ===== -->

        <!-- ===== Main Section Start ===== -->
        <main id="main" class="main">
            <div class="pagetitle">
                <h1>Order Details</h1>
            </div>
            <div class="note">
                <span><small><b>Note: </b>Rotate Device for more Details</small></span>
            </div>
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body mt-3">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Purchased Date</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Product Quantity</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Update Status</th>
                                    <th scope="col">Delvivery Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select * from orderdetails order by id desc";
                                $result = $con->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["orderId"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["date"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["productName"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            &#8377;
                                            <?php echo $row["productPrice"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["qty"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            &#8377;
                                            <?php echo $row["TotalPrice"]; ?>
                                        </td>
                                        <?php
                                        if ($row["orderStatus"] == "pending") {
                                            ?>
                                            <td style='font-size: 25px;color:orange;font-weight: bolder;'>
                                                <i class="bi bi-hourglass-split"></i>
                                            </td>
                                            <?php
                                        } else if ($row["orderStatus"] == "delivered") {
                                            ?>
                                                <td style='font-size: 25px;color:green;font-weight: bolder;'>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </td>
                                            <?php
                                        } else {
                                            ?>
                                                <td style='font-size: 25px;color:red;font-weight: bolder;'>
                                                    <i class="bi bi-x-circle-fill"></i>
                                                </td>
                                            <?php
                                        }
                                        ?>

                                        <td>
                                            <a href='updateOrderStatus.php?id=<?php echo $row["id"]; ?>'>
                                                <button type="button" class="btn btn-success btn-sm"
                                                    title='update status'>view</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <!-- ===== Main Section End ===== -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center moveTop"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/chart.js/chart.umd.js"></script>
        <script src="assets/vendor/echarts/echarts.min.js"></script>
        <script src="assets/vendor/quill/quill.min.js"></script>
        <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js?v=2"></script>
    </body>

    </html>
    <?php
} else {
    header("location: login.php");
}
?>