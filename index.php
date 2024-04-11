<!DOCTYPE html>
<html lang="en">


<head>
    <?php include("head.php"); ?>
</head>

<body>
    <!-- ===== Header Section Start =====  -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <?php include("header.php"); ?>
    </header>
    <!-- ===== Header Section End  =====  -->

    <!-- ===== Main Section Start =====  -->
    <section id="hero" class="hero d-flex align-items-center">
        <?php include("mainSection.php"); ?>
    </section>
    <!-- ===== Main Section End =====  -->

    <!-- ===== Main Content Start =====  -->
    <main id="main">
            <!-- ===== About Section Start =====  -->
                <?php include("about.php"); ?>
            <!-- ===== About Section End =====  --> 
            
            <!-- ======= Menu Section Start ======= -->
                <?php include("menu.php"); ?>
            <!-- ======= Menu Section End ======= -->

            <!-- ======= Testimonials Section Start ======= -->
            <?php include("testimonials.php"); ?>
            <!-- ======= Testimonials Section End ======= -->

            <!-- ======= Contact Section Start ======= -->
            <?php include("contact.php"); ?>
            <!-- ======= Contact Section End ======= -->
    </main>
    <!-- ===== Main Content End =====  -->

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
    <script src="assets/js/main.js?v=5"></script>
</body>

</html>