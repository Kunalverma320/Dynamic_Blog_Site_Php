<?php session_start();
include_once('../config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{


$sql = "SELECT * FROM articles order by entry_date desc";
$result = $con->query($sql);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Title=$_POST['Title'];
    $comment = $_POST["comment"];
    $href = $_POST["href"];
    $ahref = $_POST["ahref"];
    $author_name = $_POST["author_name"];
    $entry_date = $_POST["entry_date"];
    $ohref = $_POST["ohref"];
    $photo_down_name = $_POST["photo_down_name"];
    $popular = $_POST["popular"];
    $status=$_POST['status'];
    
   
   if(isset($_FILES["image_url"]) && $_FILES["image_url"]["error"] == 0) {
    $image_url = $_FILES["image_url"]["name"];
    $uploadFolder = "uploads/";
    $uploadFilePath = $uploadFolder . basename($_FILES["image_url"]["name"]);

    // Move uploaded file to a folder
    move_uploaded_file($_FILES["image_url"]["tmp_name"], $uploadFilePath);
} else {
    // Handle the case where the logo file is not uploaded
    $image_url = "";
}

    $status = $_POST["status"];

    //Move uploaded file to a folder (you need to create this folder)
    $uploadFolder = "uploads/";
    $uploadFilePath = $uploadFolder . basename($_FILES["image_url"]["name"]);
    move_uploaded_file($_FILES["image_url"]["tmp_name"], $uploadFilePath);

    // Prepare and execute the SQL query
    $sqlarticles = "INSERT INTO articles (Title, comment, href, image_url, ahref, author_name, 
entry_date, ohref, photo_down_name, popular, status) 
        VALUES ('$Title','$comment','$href', '$image_url', '$ahref', '$author_name', '$entry_date', '$ohref', '$photo_down_name','$popular' ,'$status')";


    if ($con->query($sqlarticles) === TRUE) {
        echo "<script>alert('Articles Add successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'articles.php'; </script>";
    } else {
        echo "Error: " . $sqlarticles . "<br>" . $con->error;
    }
    $con->close();
}
    
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
    <title>Articles Upload</title>
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

            <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
                <!-- <h3 class="mb-sm-0 mb-1 fs-18">Articles Upload</h3> -->
                <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
                    <li>
                        <a href="index.html" class="text-decoration-none">
                            <i class="ri-home-2-line" style="position: relative; top: -1px"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Articles Upload</span>
                    </li>
                </ul>
            </div>



            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div
                        class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20 text-center">
                        <ul class="nav nav-tabs border-0 courses-tab justify-content-center justify-content-sm-start mb-3 mb-sm-0"
                            id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fs-18 fw-semibold border-0 active" id="enrolled-tab"
                                    data-bs-toggle="tab" data-bs-target="#enrolled-tab-pane" type="button" role="tab"
                                    aria-controls="enrolled-tab-pane" aria-selected="true">Articles</button>
                            </li>

                        </ul>
                        <button
                            class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Add Articles</span>
                            </span>
                        </button>
                    </div>

                    <style>
                    /* td.Comment__row {
                        min-width: 325px;
                    } */

                    .Title__row {
                        min-width: 200px;
                    }
                    </style>


                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="enrolled-tab-pane" role="tabpanel"
                            aria-labelledby="enrolled-tab" tabindex="0">
                            <div class="default-table-area course-list">
                                <div class="table-responsive">
                                    <table class="table align-middle" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Title</th>
                                                <th class="text-primary">Comment</th>
                                                <th scope="col">Href</th>
                                                <th scope="col">Image Url</th>
                                                <th scope="col">Author href</th>
                                                <th scope="col">Author Name</th>
                                                <th scope="col">Entry Date</th>
                                                <th scope="col">Other Href</th>
                                                <th scope="col">Other Name</th>
                                                <th scope="col">Popular</th>
                                                <th scope="col">Views</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                        // Iterate through fetched data and generate table rows
                        if ($result->num_rows > 0) {
                            $cnt=1;
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                            <tr>
                                                <td><span class="text-gray-light"><?php echo $cnt; ?></span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- <div class="form-check pe-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault2">
                                                        </div> -->
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 lh-1">
                                                                <?php 
                                                    $logonew=$row['image_url'];
                                                if (!empty($logonew) && file_exists("uploads/$logonew")) {

                                                    ?>
                                                                <img class="rounded-circle wh-54"
                                                                    src="uploads/<?php echo $logonew; ?>" alt="admin">
                                                                <?php
                                                    } else {

                                                    ?>
                                                                <img class="rounded-circle wh-54"
                                                                    src="<?php echo $logonew ?>" alt="admin">
                                                                <?php
                                                    }
                                                    ?>
                                                                <!-- <img src="assets/images/user-1.jpg" class="wh-44 rounded-circle" alt="user"> -->
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <h4 class="fw-semibold fs-16 mb-0">
                                                                    <?php echo $row['Title']; ?></h4>
                                                                <span class="text-gray-light"> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <span><?php echo $row['comment']; ?></span>

                                                </td>
                                                <td>
                                                    <span><?php echo $row['href']; ?></span>
                                                </td>

                                                <td>
                                                    <span><?php echo $row['image_url']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['ahref']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['author_name']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['entry_date']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['ohref']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['photo_down_name']; ?></span>
                                                </td>
                                                <td>
                                                    <?php 
                                    $popular=$row['popular'];
                                    if ($popular==1) {

                                        ?>
                                                    <span
                                                        class="bg-success bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Yes</span>
                                                    <?php
                                        } else if($popular==0){

                                        ?>
                                                    <span
                                                        class="bg-danger bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">No</span>

                                                    <?php
                                        }
                                        else{
                                            ?>
                                                    <span
                                                        class="bg-danger bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Null</span>
                                                    <?php
                                        }
                                        ?>

                                                </td>
                                                <td>
                                                    <span><?php echo $row['views']; ?></span>
                                                </td>

                                                <td>
                                                    <?php 
                                    $status=$row['status'];
                                    if ($status==1) {

                                        ?>
                                                    <span
                                                        class="bg-success bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Active</span>
                                                    <?php
                                        } else if($status==0){

                                        ?>
                                                    <span
                                                        class="bg-danger bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Inactive</span>

                                                    <?php
                                        }
                                        else{
                                            ?>
                                                    <span
                                                        class="bg-danger bg-opacity-10 text-success fs-13 fw-semibold py-1 px-2 rounded-1">Inactive</span>
                                                    <?php
                                        }
                                        ?>

                                                </td>
                                                <td>
                                                    <div class="dropdown action-opt">
                                                        <button class="btn bg p-0" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i data-feather="more-horizontal"></i>
                                                        </button>
                                                        <ul
                                                            class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                            <!-- <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="share-2"></i>
                                                                    Share
                                                                </a>
                                                            </li> -->
                                                            <li>
                                                                <a class="dropdown-item" href="articlesedit.php?id=<?php echo $row['id']; ?>">
                                                                    <i data-feather="edit-3"></i>
                                                                    Rename
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="download"></i>
                                                                    Download
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="trash-2"></i>
                                                                    Remove
                                                                </a>
                                                            </li>
                                                            <!-- Add more actions here if needed -->
                                                        </ul>
                                                    </div>
                                                </td>



                                            </tr>
                                            <?php $cnt=$cnt+1; ?>
                                            <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>






                </div>
            </div>

            <div class="flex-grow-1"></div>

            <?php include('includes/footer.php')  ?>

        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom p-4">
            <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Add Articles</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <form method="post" name="addarticles" enctype="multipart/form-data">
                <div class="form-group mb-4">
                    <label class="label">Image Logo</label>
                    <input type="file" name="image_url" class="form-control text-dark file">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Title Name</label>
                    <input type="text" name="Title" class="form-control text-dark" placeholder="Title Name">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Articles Comment</label>
                    <div id="standalone-container">
                        <div id="toolbar-container">
                            <span class="ql-formats">
                                <select class="ql-font"></select>
                                <select class="ql-size"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                                <button class="ql-strike"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-blockquote"></button>
                                <button class="ql-code-block"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-list" value="ordered"></button>
                                <button class="ql-list" value="bullet"></button>
                                <button class="ql-indent" value="-1"></button>
                                <button class="ql-indent" value="+1"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-link"></button>
                                <button class="ql-image"></button>
                                <button class="ql-video"></button>
                            </span>
                        </div>
                        <div id="editor-container" name="comment" style="height: 250px;"></div>
                    </div>
                    <!-- <textarea class="form-control" name="comment" placeholder="Articles Comment" cols="30"
                        rows="5"></textarea> -->
                </div>
                <div class="form-group mb-4">
                    <label class="label">Articles Href</label>
                    <input type="text" name="href" class="form-control text-dark" placeholder="Articles Href">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Author Href</label>
                    <input type="text" name="ahref" class="form-control text-dark" placeholder="Author Name">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Author Name</label>
                    <input type="text" name="author_name" class="form-control text-dark" placeholder="Author Name">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Entry Date</label>
                    <input type="date" name="entry_date" class="form-control text-dark">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Other Href</label>
                    <input type="text" name="ohref" class="form-control text-dark" placeholder="Other Href">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Other Name</label>
                    <input type="text" name="photo_down_name" class="form-control text-dark" placeholder="Other Name">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Popular</label>
                    <select class="form-select form-control text-dark" name="popular"
                        aria-label="Default select example">
                        <option value="1" selected>Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label class="label">Status</label>
                    <select class="form-select form-control text-dark" name="status"
                        aria-label="Default select example">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="form-group d-flex gap-3">
                    <button class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3" type="submit"
                        name="addarticles">
                        <span class="py-sm-1 d-block">
                            <i class="ri-add-line text-white"></i>
                            <span>Create Articles</span>
                        </span>
                    </button>
                </div>
            </form>
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