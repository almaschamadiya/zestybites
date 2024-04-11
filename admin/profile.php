<?php
include("connection.php");
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

            .moveTop:hover{
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
                <h1>Profile</h1>
            </div>
            <!-- End Page Title -->

            <section class="section profile">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="card">
                            <div class="card-body pt-3">
                                <!-- Bordered Tabs -->
                                <ul class="nav nav-tabs nav-tabs-bordered">

                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Details</button>
                                    </li>

                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                            Profile</button>
                                    </li>

                                </ul>
                                <div class="tab-content pt-2">

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                        <h5 class="card-title">Profile Details</h5>

                                        <?php 
                                            $sql = "select * from adminuser where name='".$_SESSION[$sessionName]."'";
                                            $result = $con->query($sql);
                                            $row = $result->fetch_assoc();
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Profile Photo</div>
                                            <div class="col-lg-9 col-md-8">
                                                <?php $path = "../assets/img/admin/".$row["photo"]; ?>
                                                <img style="border-radius: 10px;max-width: 120px;"
                                                    src="<?php echo $path ?>" alt="<?php echo $row["name"]; ?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row["name"]; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Job</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row["job"]; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Address</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row["address"]; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Phone</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row["phone"]; ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 label">Email</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $row["email"]; ?></div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                        <h5 class="card-title">Edit Profile Details</h5>

                                        <!-- Profile Edit Form -->
                                        <form action='editProfile.php' method='post' enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $row["id"] ?>" >
                                            <div class="row mb-3">
                                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Current
                                                    Photo</label>
                                                <div class="col-md-8 col-lg-9">
                                                <?php $path = "../assets/img/admin/".$row["photo"]; ?>
                                                    <img style="border-radius: 10px;"
                                                        src="<?php echo $path; ?>" alt="<?php echo $row["name"]; ?>">
                                                        <input type="hidden" name="oldPhoto" value='<?php echo $row["photo"]; ?>' >
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Change Photo</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input type="file" name='photo' class="form-control" id="Job"
                                                       >
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                                    Name</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="name" type="text" class="form-control" id="fullName"
                                                        value="<?php echo $row["name"]; ?>">
                                                </div>
                                            </div>
                                            

                                            <div class="row mb-3">
                                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="job" type="text" class="form-control" id="Job"
                                                        value="<?php echo $row["job"]; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Address"
                                                    class="col-md-4 col-lg-3 col-form-label">Address</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="address" type="text" class="form-control" id="Address"
                                                        value="<?php echo $row["address"]; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="phone" type="text" class="form-control" id="Phone"
                                                        value="<?php echo $row["phone"]; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="email" type="email" class="form-control" id="Email"
                                                        value="<?php echo $row["email"]; ?>">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="currentUsername"
                                                    class="col-md-4 col-lg-3 col-form-label">Current Username</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="username" type="text" class="form-control"
                                                        id="currentUsername" value='<?php echo $row["username"]; ?>'>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newUsername" class="col-md-4 col-lg-3 col-form-label">New
                                                    Username</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newUsername" type="text" class="form-control"
                                                        id="newUsername" placeholder="enter new username">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="currentPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="text" class="form-control"
                                                        id="currentPassword" value='<?php echo $row["password"]; ?>'>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                    Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newPassword" type="password" class="form-control"
                                                        id="newPassword" placeholder="enter new password">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" name="submit" class="btn btn-primary submitBtn">Save
                                                    Changes</button>
                                            </div>
                                        </form>
                                        <!-- End Profile Edit Form -->
                                    </div>
                                </div>
                                <!-- End Bordered Tabs -->
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
        <script src="assets/js/main.js"></script>
    </body>

    </html>
    <?php
} else {
    header("location: login.php");
}
?>