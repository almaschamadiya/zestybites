<?php
include("connection.php");
$category = $_GET['category'];
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <?php include("head.php"); ?>
</head>

<body>
    <!-- ===== Header Section Start =====  -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <?php include("header2.php"); ?>
    </header>
    <!-- ===== Header Section End  =====  -->

    <!-- ===== SubCategory Section Start =====  -->
    <section class="menu" style="margin-top: 10px;">
        <div class="container" data-aos="fade-up">
            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="menu-starters">

                    <div class="tab-header text-center">
                        <h3 style="text-transform: capitalize;">
                            <?php echo $category; ?>
                        </h3>
                    </div>

                    <div class="row gy-5">

                        <?php
                        $sql = "select * from product where productCategory='" . $category . "'";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_array()) {
                                $imgpath = "assets/img/menu/" . $row[2];
                                ?>
                                <div class="col-lg-4 menu-item">
                                    <a><img src="<?php echo $imgpath ?>" class="menu-img img-fluid" alt=""
                                            style='border-radius : 5%; padding:0px;'></a>
                                    <h4>
                                        <?php echo $row[1] ?>
                                    </h4>
                                    <p class="ingredients">
                                        <?php echo $row[3] ?>
                                    </p>
                                    <div style='display:flex;justify-content: space-between;'>
                                        <p class="price">
                                            &#8377;
                                            <?php echo $row[4] ?>
                                        </p>
                                        <b><?php echo $row[6] ?></b>
                                    </div>
                                    <div>
                                        <a href='order.php?product=<?php echo $row[1]; ?>'><button type="button"
                                                class="btn btn-primary orderBtn">Order Now</button></a>
                                        <!-- <button type="button" class="btn btn-primary"><i class="bi bi-cart"></i></button> -->
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ===== SubCategory Section End =====  -->

    <!-- ===== Footer Start =====  -->
    <footer id="footer" class="footer">
        <?php include("footer.php"); ?>
    </footer>
    <!-- ===== Footer End =====  -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- Main JS File -->
    <script src="assets/js/main.js?v=4"></script>

</body>

</html>