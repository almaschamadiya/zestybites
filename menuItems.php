<?php

include("connection.php");
$sql = "select * from productcategory";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array()) {
        $imgpath = "assets/img/menu/" . $row[2];
        ?>
        <div class="col-lg-4 menu-item" style='padding:0px; text-align:center;'>
            <a href="subCategory.php?category=<?php echo $row[1]; ?>"><img src="<?php echo $imgpath; ?>"
                    class="menu-img img-fluid" alt="" style='border-radius : 50%;'>
                <h4 style="text-transform: capitalize;color:#308D46">
                    <?php echo $row[1]; ?>
                </h4>
            </a>
        </div>
        <?php
    }
}
?>