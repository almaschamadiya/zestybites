<?php
include("connection.php");
$cookieName = "logIn";
session_start();
$sessionName = "orderStatusRedirect";
$_SESSION[$sessionName] = "";
if ($_COOKIE[$cookieName] != "") {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include("head.php"); ?>
        <style>
            /* Colors */
            :root {
                --color-primary: #308D46;
            }

            .myContainer {
                margin: 0px auto;
                margin-top: 100px;
                margin-bottom: 100vh;
                width: 90%;
            }

            .heading {
                display: flex;
                justify-content: center;
                margin-bottom: 10px;
            }

            .note {
                margin: 10px 0px;
                display: none;
            }

            .data {
                box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px,
                    rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            }

            @media (max-width: 768px) {

                .table th:nth-child(1),
                .table td:nth-child(1),
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

                .heading {
                    margin-bottom: 0px;
                }

                .myContainer {
                    width: 100%;
                    padding: 0px 10px;
                }
            }
        </style>
    </head>

    <body>
        <!-- ===== Header Section Start =====  -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <?php include("header2.php"); ?>
        </header>
        <!-- ===== Header Section End  =====  -->

        <!-- ===== Order Status Section Start =====  -->
        <?php
        $statusSql = "select orderStatus,date from orderdetails where name='" . $_COOKIE[$cookieName] . "'";
        $statusResult = $con->query($statusSql);
        $statusRow = $statusResult->fetch_assoc();
        $sql = "select * from orderdetails where name='" . $_COOKIE[$cookieName] . "' order by id desc";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            ?>
            <div class="myContainer">
                <div class="heading" style='color:var(--color-primary)'>
                    <h1>Order History</h1>
                </div>
                <div class="note">
                    <span><small><b>Note: </b>Rotate Device for more Details</small></span>
                </div>
                <div class="data">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Purchased Date</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Total Quantity</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Delivery Time</th>
                                    <th scope="col">Order Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $row["orderId"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["date"] ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["productName"] ?>
                                        </td>
                                        <td>
                                            &#8377;<?php echo $row["productPrice"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["qty"]; ?>
                                        </td>
                                        <td>
                                            &#8377;<?php echo $row["TotalPrice"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["deliveryTime"]; ?>
                                        </td>
                                        <?php
                                        if ($row["orderStatus"] == "pending") {
                                            ?>
                                            <td style='font-size: 25px;font-weight: bolder;color:orange'><i
                                                    class="bi bi-hourglass-split"></i></td>
                                            <?php
                                        } elseif ($row["orderStatus"] == "delivered") {
                                            ?>
                                            <td style='font-size: 25px;font-weight: bolder;color:green'><i
                                                    class="bi bi-check-circle-fill"></i></td>
                                            <?php
                                        } else {
                                            ?>
                                            <td style='font-size: 25px;font-weight: bolder;color:red'><i
                                                    class="bi bi-x-circle-fill"></i></td>
                                            <?php
                                        }
                                        if ($row["orderStatus"] == "pending") {
                                            ?>
                                            <td>
                                                <form action='cancelOrder.php' method='post'>
                                                    <button type="submit" name="cancel" class="btn btn-danger btn-sm">Cancel</button>
                                                    <input type="hidden" name="id" value='<?php echo $row["orderId"] ?>'>
                                                </form>
                                            </td>
                                            <?php
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ===== Order Status Section End =====  -->
            <?php
        } else {
            ?>
            <div style='height: 100vh;
                display:flex;justify-content: center;align-items: center;'>
                <b>Oops! To date, no orders have been placed.</b>
            </div>
            <?php
        }
        ?>
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
    <?php
} else {
    $_SESSION[$sessionName] = "https://uveshaminchamadiya.com/portfolio/ZestyBites/orderStatus.php";
    header("location: logIn.php");
}
?>