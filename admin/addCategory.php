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

            .form-control:focus {
                box-shadow: none;
                outline: none;
                border-color: var(--color-primary);
            }

            .submitBtn {
                background-color: var(--color-primary);
            }

            .submitBtn:hover {
                background-color: var(--color-hover);
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
                <h1>Add Category</h1>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class='card-body pt-3'>
                                <form action='addCategoryData.php' method='post' enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Category Image
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="image" type="file" class="form-control" id="image" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label"> Category Name
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="name" required>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary submitBtn" name='add'>Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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