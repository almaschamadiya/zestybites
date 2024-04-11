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

            .note{
                display: none;
                margin-bottom: 5px;
            }
            
            @media (max-width: 1600px) {
                .table th:nth-child(3),
                .table td:nth-child(3){
                    display: none;
                }
            }

            @media (max-width: 768px) {

                .table th:nth-child(2),
                .table td:nth-child(2),
                .table th:nth-child(3),
                .table td:nth-child(3),
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
                <h1>Product Details</h1>
            </div>

            <div class="note">
                <span><small><b>Note: </b>Rotate Device for more Details</small></span>
            </div>
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class='card-body pt-3'>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Time</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "select * from product";
                                        $result = $con->query($sql);
                                        while ($row = $result->fetch_array()) {
                                            ?>
                                            <tr>
                                                <td style='text-transform: capitalize;'>
                                                    <?php echo $row[1]; ?>
                                                </td>
                                                <td style='text-transform: capitalize;'>
                                                    <?php $path = "../assets/img/menu/" . $row[2]; ?>
                                                    <img src="<?php echo $path; ?>"
                                                        style='max-width: 100px;border-radius:10px;'>
                                                </td>
                                                <td style='text-transform: capitalize;'>
                                                    <?php echo $row[3]; ?>
                                                </td>
                                                <td style='text-transform: capitalize;'>
                                                    &#8377;
                                                    <?php echo $row[4]; ?>
                                                </td>
                                                <td style='text-transform: capitalize;'>
                                                    <?php echo $row[5]; ?>
                                                </td>
                                                <td style='text-transform: capitalize;'>
                                                    <?php echo $row[6]; ?>
                                                </td>
                                                <td>
                                                    <a href='editProduct.php?id=<?php echo $row[0]; ?>'>
                                                        <button type="button" class="btn btn-primary btn-sm" title='edit'><i
                                                                class="bi bi-pencil-square"></i></button>
                                                    </a>
                                                    <a href='deleteProduct.php?id=<?php echo $row[0]; ?>'>
                                                        <button type="button" class="btn btn-danger btn-sm" title='delete'><i
                                                                class="bi bi-trash3-fill"></i></button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <a href='addProduct.php' class='text-center'>
                                    <button type="button" class="btn btn-success btn-sm" title='add'>Add</button>
                                </a>
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