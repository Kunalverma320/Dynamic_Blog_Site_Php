<?php session_start();
include_once('../config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    $id=$_SESSION['adminid'];
    $adminUsername = $_SESSION['login']; 
    $name = $_SESSION['firstname']; 
    $logo = $_SESSION['logo']; 


    $ret=mysqli_query($con,"select * from admin where id=$id limit 1");
     $row = mysqli_fetch_array($ret);

    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $dob = $row['dob'];

    


    
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="assets/css/simplebar.css">
    <link rel="stylesheet" href="assets/css/apexcharts.css">
    <link rel="stylesheet" href="assets/css/prism.css">
    <link rel="stylesheet" href="assets/css/rangeslider.css">
    <link rel="stylesheet" href="assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="assets/css/quill.snow.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">F</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">L</span>
            </div>
        </div>
    </div>



    <?php include('includes/sidebar.php')  ?>

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">

            <?php include('includes/header.php')  ?>


            <div class="welcome-farol card bg-primary border-0 rounded-0 rounded-top-3 position-relative">
                        <div class="card-body p-4 pb-5 my-2">
                            <div class="mw-350">
                                <h3 class="text-white fw-semibold fs-20 mb-2">
                                    Welcome to  Dashboard !
                                </h3>
                                <!-- <p class="text-white fs-15">
                                    You have done 68% 😎 more sales today. Check your new badge
                                    in your profile.
                                </p> -->
                            </div>
                        </div>
                        
                        <img src="assets/images/welcome-shape.png" class="position-absolute bottom-0 end-0"
                            style="right: 10px !important; bottom: 10px !important" alt="welcome-shape" />
                    </div>
                    <div class="stats-box style-eight bg-white card border-0 rounded-0 rounded-bottom-3 mb-4">
                        <div class="card-body p-4 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="profile-img">
                                        <?php

                                        if (!empty($logo) && file_exists("uploads/$logo")) {

                                            ?>
                                            
                                            <img src="uploads/<?php echo $logo; ?>"
                                                                                class="rounded-circle border border-2 border-white wh-57 mb-4" alt="user" />
                                            <?php
                                        } else {

                                            ?>
                                            <img src="assets/images/admin.jpg"
                                                                                class="rounded-circle border border-2 border-white wh-57 mb-4" alt="user" />
                                            
                                            <?php
                                        }
                                        ?>
                                   

                                    <h4 class="fs-16 fw-semibold mb-1"><?php echo $adminUsername; ?></h4>
                                    <!-- <span class="fs-14">Programmer</span> -->
                                </div>
                                <div class="text-end">
                                    <div id="impression_share"></div>
                                    <span class="fs-14 fw-semibold mt-minus d-block">Impression Share</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                <h4 class="fw-semibold fs-18 mb-0">Personal Information</h4>
                                <div class="dropdown action-opt">
                                    <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    
                                </div>
                            </div>
                            <!-- <h4 class="fs-15 fw-semibold">About Me:</h4>
                            <p class="mb-4">
                                Hi I'm Andrew Burns,has been the industry's standard dummy
                                text ever since the 1500s, when an unknown printer took.
                            </p> -->
                            <ul class="ps-0 mb-0 list-unstyled">
                                <li class="border-bottom border-color-gray mb-3 pb-3">
                                    <span class="fw-semibold text-dark w-130 d-inline-block">Full Name :</span>
                                    <span><?php echo $firstname." ".$lastname ; ?></span>
                                </li>
                                <li class="border-bottom border-color-gray mb-3 pb-3">
                                    <span class="fw-semibold text-dark w-130 d-inline-block">Mobile :</span>
                                    <a href="tel:(123)1231234" class="text-decoration-none"><?php echo $phone; ?></a>
                                </li>
                                <li class="border-bottom border-color-gray mb-3 pb-3">
                                    <span class="fw-semibold text-dark w-130 d-inline-block">Email :</span>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#e78689839582908592958994a7818695888bc984888a"
                                        class="text-decoration-none"><span class="__cf_email__"
                                            data-cfemail="ed8c83899f889a8f989f839ead8b8c9f8281c38e8280"><?php echo $email; ?></span></a>
                                </li>
                                <li class="border-bottom border-color-gray mb-3 pb-3">
                                    <span class="fw-semibold text-dark w-130 d-inline-block">Location :</span>
                                    <span><?php echo $address; ?></span>
                                </li>
                                <li>
                                    <span class="fw-semibold text-dark w-130 d-inline-block">Date Of Birth :</span>
                                    <span><?php echo $dob; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>


            <div class="flex-grow-1"></div>

            <?php include('includes/footer.php')  ?>

        </div>
    </div>

    <?php include('includes/button.php')  ?>



    <!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/dragdrop.js"></script>
    <script src="assets/js/rangeslider.min.js"></script>
    <script src="assets/js/sweetalert.js"></script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/data-table.js"></script>
    <script src="assets/js/prism.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/amcharts.js"></script>
    <script src="assets/js/custom/ecommerce-chart.js"></script>
    <script src="assets/js/custom/custom.js"></script>
</body>

</html>
<?php } ?>