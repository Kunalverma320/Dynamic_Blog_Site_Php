<?php session_start();
include_once('../config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

    $userid=$_GET['id'];

    if(isset($_POST['editnews']))
{
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

    if(isset($_FILES['image_url']['tmp_name'])) {
        $image_url = $_FILES["image_url"]["name"];
        $uploadFolder = "uploads/";
        $uploadFilePath = $uploadFolder . basename($_FILES["image_url"]["name"]);
    
        // Move uploaded file to a folder
        move_uploaded_file($_FILES["image_url"]["tmp_name"], $uploadFilePath);
    } else {
  
        $image_url = $_FILES["image_url"]["name"];
    }

    $msg=mysqli_query($con,"update articles set Title='$Title',comment='$comment',href='$href',ahref='$ahref',author_name='$author_name',entry_date='$entry_date',ohref='$ohref',photo_down_name='$photo_down_name',popular='$popular',status='$status',image_url='$image_url' where id='$userid'");

if($msg)
{
    echo "<script>alert('Articles Post updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'articles.php'; </script>";
}
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
    <title>Edit Articles</title>
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



            <div class="offcanvas-header border-bottom p-4">
                <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Add Articles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-4">
                <form method="post" name="addnews" enctype="multipart/form-data">
                    <?php 

$query=mysqli_query($con,"select * from articles where id='$userid'");
while($result=mysqli_fetch_array($query))

{?>


                    <?php
                            if($result['image_url'] != "") { ?>
                    <div class="form-group mb-4">
                        <label for="title">Featured Image</label>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <img src="uploads/<?php echo $result['image_url']; ?>"
                                    class="border-3 border-color-white" alt="user">
                            </div>
                        </div>

                    </div>
                    <?php
                            } ?>


                    <div class="form-group mb-4">
                        <label class="label">Image Logo</label>
                        <input type="file" name="image_url" class="form-control text-dark file">
                    </div>

                    <div class="form-group mb-4">
                        <label class="label">Title Name</label>
                        <input type="text" name="Title" value="<?php echo $result['Title'];?>"
                            class="form-control text-dark" placeholder="Title Name">
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

                            <div id="editor-container" name="comment" style="height: 250px;">
                                <textarea name="" id=""
                                    value="<?php echo isset($result['comment']) ? $result['comment'] : ''; ?>" cols="30"
                                    rows="10"><?php echo isset($result['comment']) ? $result['comment'] : ''; ?></textarea>
                            </div>

                        </div>
                    </div>


                    <div class="form-group mb-4">
                        <label class="label">Articles Href</label>
                        <input type="text" name="href" value="<?php echo isset($result['href']) ? $result['href']:'';?>"
                            class="form-control text-dark" placeholder="Articles Href">
                    </div>
                    <div class="form-group mb-4">
                        <label class="label">Author Href</label>
                        <input type="text" name="ahref"
                            value="<?php echo isset($result['ahref']) ? $result['ahref']:'';?>"
                            class="form-control text-dark" placeholder="Author Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="label">Author Name</label>
                        <input type="text" name="author_name" value="<?php echo $result['author_name'];?>"
                            class="form-control text-dark" placeholder="Author Name">
                    </div>
                    <div class="form-group mb-4">
                        <label class="label">Entry Date</label>
                        <input type="date" name="entry_date" value="<?php echo $result['entry_date'];?>"
                            class="form-control text-dark">
                    </div>
                    <div class="form-group mb-4">
                        <label class="label">Other Href</label>
                        <input type="text" name="ohref" value="<?php echo $result['ohref'];?>"
                            class="form-control text-dark" placeholder="Other Href">
                    </div>
                    <div class="form-group mb-4">
                        <label class="label">Other Name</label>
                        <input type="text" name="photo_down_name" value="<?php echo $result['photo_down_name'];?>"
                            class="form-control text-dark" placeholder="Other Name">
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
                            name="editnews">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create Articles</span>
                            </span>
                        </button>
                    </div>
                    <?php } ?>
                </form>
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