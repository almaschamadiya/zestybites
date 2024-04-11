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
                <h1>User Details</h1>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class='card-body pt-3'>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $_SESSION[$sessionName]; ?>
                                            </td>
                                            <td>
                                                <a href='profile.php'>
                                                    <button type="button" class="btn btn-primary btn-sm" title='view'><i
                                                            class="bi bi-person-fill"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $sql = "select * from adminuser";
                                        $result = $con->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            if ($row["name"] == $_SESSION[$sessionName]) {
                                                continue;
                                            }
                                            ?>
                                            <tr>
                                                <td style='text-transform: capitalize;'>
                                                    <?php echo $row["name"]; ?>
                                                </td>
                                                <td>
                                                    <a href='deleteUser.php?id=<?php echo $row["id"] ?>'>
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
                                <a href='createUser.php' class='text-center'>
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