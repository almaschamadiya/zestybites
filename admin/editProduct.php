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
                <h1>Edit Product</h1>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class='card-body pt-3'>
                                <form action='editProductData.php' method='post' enctype="multipart/form-data">
                                    <?php
                                    $id = $_GET["id"];
                                    $sql = "select * from product where id='$id'";
                                    $result = $con->query($sql);
                                    $row = $result->fetch_array();
                                    ?>
                                    <input type="hidden" name='id' value="<?php echo $row[0] ?>">
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label"> Current Image
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <?php $path = "../assets/img/menu/" . $row[2]; ?>
                                            <img src="<?php echo $path; ?>" style='max-width: 100px;border-radius:10px;'>
                                            <input type="hidden" name='oldImage' value="<?php echo $row[2] ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="image" class="col-md-4 col-lg-3 col-form-label"> Change Image
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="image" type="file" class="form-control" id="image">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-lg-3 col-form-label"> Product Name
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="name" type="text" class="form-control" id="name"
                                                value="<?php echo $row[1]; ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="description" class="col-md-4 col-lg-3 col-form-label"> Product Description
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="description" type="text" class="form-control" id="description"
                                                value="<?php echo $row[3]; ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="price" class="col-md-4 col-lg-3 col-form-label"> Product Price
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="price" type="text" class="form-control" id="price"
                                                value="<?php echo $row[4]; ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="category" class="col-md-4 col-lg-3 col-form-label"> Product Category
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="oldCategory" type="hidden" class="form-control" id="oldCategory"
                                                value="<?php echo $row[5]; ?>" required>
                                            <select style='text-transform: capitalize;' name='category' id='category'>
                                                <?php
                                                $sqlc = "select categoryName from productcategory";
                                                $resultc = $con->query($sqlc);
                                                while ($rowc = $resultc->fetch_array()) {
                                                    ?>
                                                    <option value="<?php echo $rowc[0]; ?>"><?php echo $rowc[0]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="time" class="col-md-4 col-lg-3 col-form-label"> Product Time
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="time" type="text" class="form-control" id="time"
                                                value="<?php echo $row[6]; ?>" required>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary submitBtn" name='add'>Edit</button>
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
        
        <script>
            var selectedValue = document.getElementById("oldCategory").value;
            var dropdown = document.getElementById("category");
            for (var i = 0; i < dropdown.options.length; i++) {
                if (dropdown.options[i].value === selectedValue) {
                    dropdown.options[i].selected = true;
                    break; 
                }
            }

        </script>

        <!-- Main JS File -->
        <script src="assets/js/main.js?v=2"></script>
    </body>

    </html>
    <?php
} else {
    header("location: login.php");
}
?>