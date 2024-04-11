<form action='orderDetails.php' method='post'>
    <div class="container order-container">
        <div class="main-heading">
            <h1>Place Your Order</h1>
        </div>
        <!-- ===== Delivery Address Section Start -->
        <section class="mt-4">
            <div class="delivery-address">
                <h2>Delivery Address</h2>
                <div class="receiver-info">
                    <?php
                    $cookieName = "logIn";
                    $sql = "select address,name from user where name='$_COOKIE[$cookieName]'";
                    $result = $con->query($sql);
                    $row = $result->fetch_array();
                    ?>
                    <p style='margin-bottom: 0px;'>
                        <?php echo $row[1]; ?>
                    </p>
                    <input type="hidden" name="name" value="<?php echo $row[1]; ?>" />
                    <address>
                        <span id="addressText">
                            <?php echo $row[0]; ?>
                        </span>
                    </address>
                    <input type="hidden" name="address" value="<?php echo $row[0]; ?>" />
                </div>
                <div class="width">
                    <input type="button" value="Change" class="btn change-address-btn mt-3" id="changeAddressBtn"
                        style="width: 50%">
                    <input type="button" value="Save" class="btn change-address-btn mt-3" id="saveAddressBtn"
                        style="display: none;width: 50%;">
                </div>
            </div>
            <div class="address-form" id="addressForm">
                <center><textarea id="newAddressTextarea" placeholder="Enter new address"></textarea></center>
                <input type="hidden" name="newAddress" id='newAddress' value="" />
            </div>
        </section>
        <!-- ===== Delivery Address Section End -->

        <!-- ===== Payment Method Section Start -->
        <section class="mt-4">
            <div class="payment-method">
                <h2>Payment Method</h2>
                <div class="payment-option">
                    <input type="radio" id="cashOnDelivery" name="paymentMethod" value="cash" checked />
                    <label for="cashOnDelivery">Cash on Delivery</label>
                </div>
                <div class="width selected">
                    <input type="label" value="Selected" class="width" style="width: 50%; padding: 0px 16px" disabled />
                </div>
            </div>
        </section>
        <!-- ===== Payment Method Section End -->

        <!-- ===== Review Item and Delivery Section Start -->
        <section class="mt-4">
            <div class="review-item">
                <h2>Review Item</h2>
                <div class="product-details">
                    <?php
                    $productSql = "select name,image,price,time from product where name='$product'";
                    $productResult = $con->query($productSql);
                    $productRow = $productResult->fetch_array();
                    $imgPath = "./assets/img/menu/" . $productRow[1];
                    $price = $productRow[2];
                    ?>
                    <h4 style='text-transform: capitalize;'>
                        <?php echo $productRow[0]; ?>
                    </h4>
                    <input type="hidden" name='productName' value='<?php echo $productRow[0]; ?>'>
                    <img src="<?php echo $imgPath; ?>" />
                </div>
                <div class="delivery-details width">
                    <p><b>Delivery Time:</b> <?php echo $productRow[3]; ?></p>
                    <input type="hidden" name='time' value='<?php echo $productRow[3]; ?>'>
                    <p>
                        <b>Qty:</b>
                        <span>
                            <select id="quantitySelect">
                                <?php
                                for ($i = 1; $i <= 99; $i++) {
                                    ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </span>
                    </p>
                    <input type="hidden" name='qty' id='qty' value=''>
                    <p><b>Total Price:</b> &#8377;<span id="productPrice">
                            <?php echo $price ?>
                        </span></p>
                        <input type="hidden" name='productPriceTotal' id='productPriceValue' value=''>
                        <input type="hidden" name='productPrice' value='<?php echo $price; ?>'>
                    <button type="submit" class="btn btn-success order-btn">
                        Order
                    </button>
                </div>
            </div>
        </section>
        <!-- ===== Review Item and Delivery Section End -->
    </div>
</form>