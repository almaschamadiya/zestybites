<div class="row">
    <!-- Left side columns -->
    <div class="col-lg-12">
        <div class="row">
            <!-- Product Category Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Product Category</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-card-list"></i>
                            </div>
                            <div class="ps-3">
                                <?php
                                $sql = "select id from productcategory";
                                $result = $con->query($sql);
                                $rowCounter = mysqli_num_rows($result);
                                ?>
                                <h6>
                                    <?php echo $rowCounter; ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Category Card -->

            <!-- Total Product Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Total Product</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-receipt" style="color: #ff771d"></i>
                            </div>
                            <div class="ps-3">
                                <?php
                                $sql = "select id from product";
                                $result = $con->query($sql);
                                $rowCounter = mysqli_num_rows($result);
                                ?>
                                <h6>
                                    <?php echo $rowCounter; ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Total Product Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Revenue</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-rupee"></i>
                            </div>
                            <div class="ps-3">
                                <?php
                                $revenueCounter = 9876;
                                $sql = "select orderStatus,totalPrice from orderdetails";
                                $result = $con->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    if ($row["orderStatus"] == "delivered") {
                                        $revenueCounter += $row["totalPrice"];
                                    }
                                }
                                ?>
                                <h6>
                                    <?php echo $revenueCounter ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-3 col-md-6">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people" style="color: fuchsia"></i>
                            </div>
                            <div class="ps-3">
                                <?php
                                $rowCounter = 126;
                                $sql = "select id from user";
                                $result = $con->query($sql);
                                $rowCounter += mysqli_num_rows($result);
                                ?>
                                <h6>
                                    <?php echo $rowCounter ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Customers Card -->

            <div class="note">
                <span><small><b>Note: </b>Rotate Device for more Details</small></span>
            </div>
            <!-- Recent Sales -->
            <div class="col-12 test">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Recent Sales</h5>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Quantity</th>
                                    <th scope="col">Purchased Date</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Order Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "select * from orderdetails order by id desc limit 10";
                                $result = $con->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["productName"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["qty"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            <?php echo $row["date"]; ?>
                                        </td>
                                        <td style='text-transform: capitalize;'>
                                            &#8377;
                                            <?php echo $row["TotalPrice"]; ?>
                                        </td>
                                        <?php
                                        if ($row["orderStatus"] == "pending") {
                                            ?>
                                            <td style='font-size: 25px;color:orange;font-weight: bolder;'>
                                                <i class="bi bi-hourglass-split"></i>
                                            </td>
                                            <?php
                                        } else if ($row["orderStatus"] == "delivered") {
                                            ?>
                                                <td style='font-size: 25px;color:green;font-weight: bolder;'>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                </td>
                                            <?php
                                        } else {
                                            ?>
                                                <td style='font-size: 25px;color:red;font-weight: bolder;'>
                                                    <i class="bi bi-x-circle-fill"></i>
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
            <!-- End Recent Sales -->
        </div>
    </div>
    <!-- End Left side columns -->
</div>