<?php
include("connection.php");
$cookieName = "logIn";
$product = $_GET["product"];
session_start();
$sessionName = "orderRedirect";
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
                --color-default: #212529;
                --color-primary: #308d46;
                --color-secondary: #37373f;
                --color-hover: #46b861;
            }

            section {
                padding: 0px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            }

            .order-container {
                padding: 20px;
                padding-top: 100px;
                padding-bottom: 100px;
            }

            .width {
                width: 200px;
            }

            .main-heading {
                display: flex;
                justify-content: center;
                color: var(--color-primary);
            }

            .delivery-address {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                justify-content: center;
            }

            .delivery-address h2 {
                color: var(--color-default);
                margin-bottom: 10px;
                font-size: 24px;
                width: 30%;
                display: flex;
            }

            .receiver-info {
                flex: 1;
                margin-right: 20px;
            }

            .receiver-info p,
            address {
                color: var(--color-secondary);
            }

            .change-address-btn {
                background-color: var(--color-primary);
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 5px 20px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .change-address-btn:hover {
                background-color: var(--color-hover);
                color: #fff;
            }

            #newAddressTextarea {
                padding: 10px;
            }

            .address-form {
                display: none;
                padding-top: 20px;
                transition: opacity 0.5s ease, height 0.3s ease;
            }

            .address-form.active {
                display: block;
            }

            .address-form textarea {
                width: 98%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 10px;
            }


            .payment-method {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
            }

            .payment-method h2 {
                color: var(--color-default);
                margin-bottom: 10px;
                font-size: 24px;
                width: 30%;
                display: flex;
            }

            .payment-method .payment-option {
                flex: 1;
            }

            .payment-method .payment-option label {
                color: var(--color-secondary);
            }

            .review-item {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
            }

            .review-item h2 {
                color: var(--color-default);
                margin-bottom: 10px;
                font-size: 24px;
                width: 30%;
                display: flex;
            }

            .product-details {
                flex: 1;
                margin-right: 20px;
            }

            .product-details img {
                width: 150px;
                border-radius: 10%;
                margin-top: 5px;
            }

            .delivery-details p {
                color: var(--color-secondary);
            }

            .order-btn {
                background-color: var(--color-primary);
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 5px 20px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .order-btn:hover {
                background-color: var(--color-hover);
                color: #fff;
            }

            @media only screen and (max-width: 1000px) {
                .order-container {
                    padding-top: 40px;
                }

                .delivery-address {
                    display: flex;
                    flex-direction: column;
                }

                .delivery-address h2 {
                    width: 100%;
                }

                .receiver-info {
                    width: 100%;
                    margin-right: 0px;
                }

                .payment-method h2 {
                    width: 100%;
                }

                .payment-option {
                    width: 100%;
                }

                .selected {
                    display: none;
                }

                .review-item h2 {
                    width: 100%;
                }

                .product-details {
                    margin-right: 0px;
                    width: 100%;
                }

                .product-details h4 {
                    font-size: 1rem;
                }

                .product-details img {
                    width: 100px;
                    margin-top: 0px;
                    margin-bottom: 10px;
                }

                .delivery-details {
                    width: 100%;
                }
            }

            @media only screen and (max-width: 700px) {
                .order-container {
                    padding-top: 10px;
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

        <!-- ===== Order Section Start =====  -->
        <?php include("orderContainer.php"); ?>
        <!-- ===== Order Section End =====  -->

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
        <script>
            // JavaScript to handle the address change and save functionality
            document.addEventListener("DOMContentLoaded", function () {
                const changeAddressBtn = document.getElementById("changeAddressBtn");
                const saveAddressBtn = document.getElementById("saveAddressBtn");
                const addressText = document.getElementById("addressText");
                const newAddressValue = document.getElementById("newAddress");
                const addressForm = document.getElementById("addressForm");
                const newAddressTextarea =
                    document.getElementById("newAddressTextarea");

                changeAddressBtn.addEventListener("click", function () {
                    addressText.style.display = "none";
                    addressForm.style.display = "block";
                    changeAddressBtn.style.display = "none";
                    saveAddressBtn.style.display = "inline-block";
                });

                saveAddressBtn.addEventListener("click", function () {
                    const newAddress = newAddressTextarea.value;
                    if (newAddress.trim() !== "") {
                        addressText.textContent = newAddress;
                        newAddressValue.value = newAddress;
                        addressText.style.display = "block";
                        addressForm.style.display = "none";
                        changeAddressBtn.style.display = "inline-block";
                        saveAddressBtn.style.display = "none";
                    }
                });
            });

            // Get references to the DOM elements
            const quantitySelect = document.getElementById("quantitySelect");
            const productPriceElement = document.getElementById("productPrice");
            const productPriceValue = document.getElementById("productPriceValue");
            const qty = document.getElementById("qty");
            qty.value = 1;

            // Initial product price and quantity
            let productPrice = parseFloat(productPriceElement.textContent);
            let quantity = 1;

            // Function to update the total price
            function updateTotalPrice() {
                const total = productPrice * quantity;
                productPriceElement.textContent = total;
                productPriceValue.value = total;
            }

            // Add an event listener to the quantity select
            quantitySelect.addEventListener("change", () => {
                quantity = parseInt(quantitySelect.value);
                qty.value = quantity;
                updateTotalPrice();
            });

            // Initial update of the total price
            updateTotalPrice();

        </script>
        <!-- Main JS File -->
        <script src="assets/js/main.js?v=4"></script>

    </body>

    </html>
    <?php
} else {
    $_SESSION[$sessionName] = "https://uveshaminchamadiya.com/portfolio/ZestyBites/order.php?product=$product";
    header("location: logIn.php");
}
?>