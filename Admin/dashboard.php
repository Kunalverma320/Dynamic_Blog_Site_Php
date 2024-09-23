<?php session_start();
include_once('../config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
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
                <span class="d-inline-block">K</span>
                <span class="d-inline-block">U</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">L</span>
            </div>
        </div>
    </div>



    <?php include('includes/sidebar.php')  ?>

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">

            <?php include('includes/header.php')  ?>

            <div class="row justify-content-center">
                <div class="col-xxl-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="stats-box card bg-white border-0 rounded-10 mb-4">
                                <div class="card-body p-4">
                                    <?php
                                $query=mysqli_query($con,"select id from admin");
                                $totalusers=mysqli_num_rows($query);
                                ?>
                                    <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <div class="flex-grow-1 me-3">
                                            <h3 class="body-font fw-bold fs-3 mb-2"><?php echo $totalusers;?></h3>
                                            <span>Total Admin</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="icon transition">
                                                <i class="flaticon-donut-chart"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="svg-success me-2">
                                            <i data-feather="trending-up"></i>
                                        </div>
                                        <p class="fw-semibold"><span class="text-success">1.3%</span> Up from past week
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="stats-box card bg-white border-0 rounded-10 mb-4">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <?php
                                    $query=mysqli_query($con,"select id from news");
                                    $totalusers=mysqli_num_rows($query);
                                    ?>
                                        <div class="flex-grow-1 me-3">
                                            <h3 class="body-font fw-bold fs-3 mb-2"><?php echo $totalusers;?></h3>
                                            <span>Total News Post</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="icon transition">
                                                <i class="flaticon-goal"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="svg-danger me-2">
                                            <i data-feather="trending-down"></i>
                                        </div>
                                        <p class="fw-semibold"><span class="text-danger">1.3%</span> Down from past week
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="stats-box card bg-white border-0 rounded-10 mb-4">
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3 pb-1">
                                        <?php
                                    $query=mysqli_query($con,"select id from articles");
                                    $totalusers=mysqli_num_rows($query);
                                    ?>
                                        <div class="flex-grow-1 me-3">
                                            <h3 class="body-font fw-bold fs-3 mb-2"><?php echo $totalusers;?></h3>
                                            <span>Total Articals Post</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <div class="icon transition">
                                                <i class="flaticon-award"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="svg-success me-2">
                                            <i data-feather="trending-up"></i>
                                        </div>
                                        <p class="fw-semibold"><span class="text-success">1.3%</span> Up from past week
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-white border-0 rounded-10 mb-4">

                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card bg-white border-0 rounded-10 mb-4">
                                <div class="card-body p-4">
                                    <div
                                        class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                        <h4 class="fw-semibold fs-18 mb-0">Visits by Year</h4>
                                        <?php
                                    $query = mysqli_query($con, "SELECT SUM(total_views) AS total_views
                                    FROM (
                                        SELECT SUM(views) AS total_views FROM news
                                        UNION ALL
                                        SELECT SUM(views) AS total_views FROM articles
                                    ) AS combined_views;;");
                                    $row = mysqli_fetch_assoc($query);
                                    $total_views = $row['total_views'];
                                    ?>
                                        <span>Total <?php echo $total_views;?> Visits</span>
                                    </div>
                                    
                                    <div id="visits_by_day"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card bg-white border-0 rounded-10 mb-4">

                    </div>
                </div>
                <div class="col-xxl-4">
                    <div class="stats-box ratings card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div class="flex-grow-1 mb-3 mb-sm-0">
                                    <?php
                                    $query = mysqli_query($con, "SELECT SUM(total_views) AS total_views
                                    FROM (
                                        SELECT SUM(views) AS total_views FROM news
                                        UNION ALL
                                        SELECT SUM(views) AS total_views FROM articles
                                    ) AS combined_views;;");
                                    $row = mysqli_fetch_assoc($query);
                                    $total_views = $row['total_views'];
                                    ?>

                                    <h4 class="fs-18 fw-semibold mb-2">Total View</h4>
                                    <span class="fw-semibold d-block mb-3 text-gray-light">YEAR OF 2024</span>
                                    <h3 class="body-font fw-bold fs-24 mb-3"><?php echo $total_views;?> <sub
                                            class="text-gray-light fw-normal">views</sub></h3>
                                    <div class="d-flex align-items-center">
                                        <div class="svg-warning me-2">
                                            <i data-feather="star" style="width: 20px; height: 20px;"></i>
                                        </div>
                                        <p class="fw-semibold"><span class="text-body me-1">4.5</span> <span
                                                class="text-primary">+15.6%</span> From previous period</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <div id="ratings_chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                <h4 class="fw-bold fs-18 mb-0">Live Visits on Our Site</h4>
                                <div class="dropdown action-opt">
                                    <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="clock"></i>
                                                Today
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="pie-chart"></i>
                                                Last 7 Days
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="rotate-cw"></i>
                                                Last Month
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="calendar"></i>
                                                Last 1 Year
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="bar-chart"></i>
                                                All Time
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="eye"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="trash"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="live_visits_on_our_site"></div>
                        </div>
                    </div>
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                <h4 class="fw-bold fs-18 mb-0">Sales By Locations</h4>
                                <div class="dropdown action-opt">
                                    <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="clock"></i>
                                                Today
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="pie-chart"></i>
                                                Last 7 Days
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="rotate-cw"></i>
                                                Last Month
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="calendar"></i>
                                                Last 1 Year
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="bar-chart"></i>
                                                All Time
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="eye"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="trash"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="sales_by_locations"></div>

                        </div>
                    </div>
                    <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                                <h4 class="fw-semibold fs-18 mb-0">Terminals</h4>
                                <div class="dropdown action-opt">
                                    <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="clock"></i>
                                                Today
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="pie-chart"></i>
                                                Last 7 Days
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="rotate-cw"></i>
                                                Last Month
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="calendar"></i>
                                                Last 1 Year
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="bar-chart"></i>
                                                All Time
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="eye"></i>
                                                View
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="javascript:;">
                                                <i data-feather="trash"></i>
                                                Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="ps-0 mb-0 list-unstyled terminals-chart position-relative text-center">
                                <li class="earning position-relative">
                                    <div class="content position-absolute top-50 start-50 translate-middle">
                                        <h3 class="text-white body-font fs-3 mb-0">$27632</h3>
                                        <span class="text-white fs-14">Monthly Earning</span>
                                    </div>
                                </li>
                                <li class="users position-absolute bottom-0 start-0">
                                    <div class="content position-absolute top-50 start-50 translate-middle">
                                        <h3 class="text-white body-font fs-3 mb-0">82.9k</h3>
                                        <span class="text-white fs-14">Users</span>
                                    </div>
                                </li>
                                <li class="inactive position-absolute bottom-0 start-50 translate-middle-x">
                                    <div class="content position-absolute top-50 start-50 translate-middle">
                                        <h3 class="text-white body-font fs-3 mb-0">0.9k</h3>
                                        <span class="text-white">Inactive</span>
                                    </div>
                                </li>
                            </ul>
                            <ul
                                class="ps-0 mb-0 list-unstyled d-flex justify-content-center align-items-center terminals-legend">
                                <li>Monthly Earning</li>
                                <li>Users</li>
                                <li>Inactive</li>
                            </ul>
                        </div>
                    </div>
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