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

            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body mt-3">
                        <?php
                        $id = $_GET["id"];
                        $sql = "select * from orderdetails where id=$id";
                        $result = $con->query($sql);
                        $row = $result->fetch_assoc()
                            ?>
                        <form action='updateOrderStatusDetails.php' method='post' enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-lg-3 col-form-label"> Reviver's Name
                                </label>
                                <div class="col-md-8 col-lg-9">
                                    <p style='text-transform: capitalize;'>
                                        <?php echo $row["name"]; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-lg-3 col-form-label"> Reviver's Address
                                </label>
                                <div class="col-md-8 col-lg-9">
                                    <p style='text-transform: capitalize;'>
                                        <?php echo $row["address"]; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date" class="col-md-4 col-lg-3 col-form-label"> Purchased Date
                                </label>
                                <div class="col-md-8 col-lg-9">
                                    <p style='text-transform: capitalize;'>
                                        <?php echo $row["date"]; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status" class="col-md-4 col-lg-3 col-form-label"> Order Status
                                </label>
                                <?php
                                if ($row["orderStatus"] == "pending") {
                                    ?>
                                    <div class="col-md-8 col-lg-9">
                                        <p style='text-transform: capitalize;color:orange;font-weight:bolder;'>
                                            <?php echo $row["orderStatus"]; ?>
                                        </p>
                                    </div>
                                <?php
                                }
                                else if ($row["orderStatus"] == "delivered") {
                                    ?>
                                    <div class="col-md-8 col-lg-9">
                                        <p style='text-transform: capitalize;color:green;font-weight:bolder;'>
                                            <?php echo $row["orderStatus"]; ?>
                                        </p>
                                    </div>
                                <?php
                                }
                                else {
                                    ?>
                                    <div class="col-md-8 col-lg-9">
                                        <p style='text-transform: capitalize;color:red;font-weight:bolder;'>
                                            <?php echo $row["orderStatus"]; ?>
                                        </p>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>

                            <?php
                            if ($row["orderStatus"] == "pending") {
                                ?>
                                <div class="row mb-3">
                                    <label for="date" class="col-md-4 col-lg-3 col-form-label"> Update Status
                                    </label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="radio" name='updateStatus' value="delivered" required> Delivered
                                        <input type="radio" name='updateStatus' value="canceled" required> Canceled
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary submitBtn" name='submit'>Submit</button>
                                </div>
                                <?php
                            }
                            ?>

                        </form>
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