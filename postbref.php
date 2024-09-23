<?php
     include("dashboard/header.php");
     include_once("config.php");
    
     $id=$_GET['id'];

     $ret=mysqli_query($con,"select * from news where id=$id limit 1");
     $row = mysqli_fetch_array($ret);

    // $id = $row['id'];
    $title = $row['Title'];
    $href = $row['href'];
    $ahref = $row['ahref'];
    $author_name = $row['author_name'];
    $entry_date = $row['entry_date'];
    $formatted_date = date("F j, Y", strtotime($entry_date));
    $views = $row['views'];
    $image_url=$row['image_url'];
    $ohref=$row['ohref'];
    $photo_down_name=$row['photo_down_name'];


            //for visitor count
        $id_new=mysqli_real_escape_string($con,$id);
        $id_new=htmlentities($id_new);
        $sql="select * from news where id=$id_new limit 1";
        $res=mysqli_query($con,$sql);
        if(mysqli_fetch_assoc($res))
        {
            // $views=$x['views'];
            $sql="update news set views=$views+1 where id=$id";
            $res=mysqli_query($con,$sql);
        }

        else{
            header("Location: index.php");
        }




    // echo "ID: $id <br>";
    // echo "Title: $title";
    
    //  while($row=mysqli_fetch_array($ret))
    //  {

    //  }












?>

<article id="post-317"
    class="td-post-template-7 post-317 post type-post status-publish format-standard has-post-thumbnail category-featured category-photo-of-the-day td-container-wrap"
    itemscope itemtype="https://schema.org/Article">
    <div class="td-full-screen-header-image-wrap">
        <div class="td-container td-post-header">
            <div class="td-crumb-container">
                <div class="entry-crumbs">
                    <span><a title class="entry-crumb" href="index.php">Home</a></span>
                    <i class="td-icon-right td-bread-sep"></i>
                    <span><a title="View all posts in Photo Of The Day" class="entry-crumb"
                            href="<?php echo $ohref ?>"><?php echo $photo_down_name ?></a></span>
                    <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i>
                    <span class="td-bred-no-url-last"><?php echo $title ?></span>
                </div>
            </div>
            <div class="td-post-header-holder">
                <div class="td-parallax-header">
                    <header class="td-post-title">
                        <ul class="td-category">
                            <li class="entry-category">
                                <a href="<?php echo $ohref ?>"><?php echo $photo_down_name ?></a>
                            </li>
                        </ul>
                        <h1 class="entry-title"><?php echo $title ?></h1>
                        <div class="td-module-meta-info">
                            <div class="td-post-author-name">
                                <div class="td-author-by">By</div>
                                <a href="<?php echo $ahref ?>"><?php echo $author_name ?></a>
                                <div class="td-author-line">-</div>
                            </div>
                            <span class="td-post-date"><time class="entry-date updated td-module-date"
                                    datetime="2017-04-03T13:39:51+00:00"><?php echo $formatted_date ?></time></span>
                            <div class="td-post-views">
                                <i class="td-icon-views"></i><span class="td-nr-views-317"><?php echo $views ?></span>
                            </div>
                            <div class="td-post-comments">
                                <a href="index.html#respond"><i class="td-icon-comments"></i>0</a>
                            </div>
                        </div>
                    </header>
                    <div class="td-read-down">
                        <a href="#"><i class="td-icon-read-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="td-full-screen-header-image" class="td-image-gradient-style7">
            <?php 
                                                    // $logonew=$rowartical['image_url'];
                                                if (!empty($image_url) && file_exists("Admin/uploads/$image_url")) {

                                                    ?>
            <img class="td-backstretch td-stretch-width td-animation-stack-type0-2" src="Admin/uploads/<?php echo $image_url ?>"
                style="opacity: 1; left: 50%; transform: translate3d(-50%, -5px, 0px) scale(1.02, 1.02);" />
            

            <?php
                                                    } else {
                                                    ?>
            <img class="td-backstretch td-stretch-width td-animation-stack-type0-2" src="<?php echo $image_url ?>"
                style="opacity: 1; left: 50%; transform: translate3d(-50%, -5px, 0px) scale(1.02, 1.02);" />

            <?php
                                                    }
                                                    ?>
           
        </div>
    </div>
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12 td-main-content" role="main">
                <div class="td-ss-main-content">
                    <div class="td-post-sharing-top">
                        <div id="td_social_sharing_article_top"
                            class="td-post-sharing td-ps-border td-ps-border-colored td-ps-icon-bg td-ps-text-color td-post-sharing-style20">
                            <style>
                            .td-post-sharing-classic {
                                position: relative;
                                height: 20px;
                            }

                            .td-post-sharing {
                                margin-left: -3px;
                                margin-right: -3px;
                                font-family: "Open Sans", "Open Sans Regular",
                                    sans-serif;
                                z-index: 2;
                                white-space: nowrap;
                                opacity: 0;
                            }

                            .td-post-sharing.td-social-show-all {
                                white-space: normal;
                            }

                            .td-js-loaded .td-post-sharing {
                                -webkit-transition: opacity 0.3s;
                                transition: opacity 0.3s;
                                opacity: 1;
                            }

                            .td-post-sharing-classic+.td-post-sharing {
                                margin-top: 15px;
                            }

                            @media (max-width: 767px) {
                                .td-post-sharing-classic+.td-post-sharing {
                                    margin-top: 8px;
                                }
                            }

                            .td-post-sharing-top {
                                margin-bottom: 30px;
                            }

                            @media (max-width: 767px) {
                                .td-post-sharing-top {
                                    margin-bottom: 20px;
                                }
                            }

                            .td-post-sharing-bottom {
                                border-style: solid;
                                border-color: #ededed;
                                border-width: 1px 0;
                                padding: 21px 0;
                                margin-bottom: 42px;
                            }

                            .td-post-sharing-bottom .td-post-sharing {
                                margin-bottom: -7px;
                            }

                            .td-post-sharing-visible,
                            .td-social-sharing-hidden {
                                display: inline-block;
                            }

                            .td-social-sharing-hidden ul {
                                display: none;
                            }

                            .td-social-show-all .td-pulldown-filter-list {
                                display: inline-block;
                            }

                            .td-social-network,
                            .td-social-handler {
                                position: relative;
                                display: inline-block;
                                margin: 0 3px 7px;
                                height: 40px;
                                min-width: 40px;
                                font-size: 11px;
                                text-align: center;
                                vertical-align: middle;
                            }

                            .td-ps-notext .td-social-network .td-social-but-icon,
                            .td-ps-notext .td-social-handler .td-social-but-icon {
                                border-top-right-radius: 2px;
                                border-bottom-right-radius: 2px;
                            }

                            .td-social-network {
                                color: #000;
                                overflow: hidden;
                            }

                            .td-social-network .td-social-but-icon {
                                border-top-left-radius: 2px;
                                border-bottom-left-radius: 2px;
                            }

                            .td-social-network .td-social-but-text {
                                border-top-right-radius: 2px;
                                border-bottom-right-radius: 2px;
                            }

                            .td-social-network:hover {
                                opacity: 0.8 !important;
                            }

                            .td-social-handler {
                                color: #444;
                                border: 1px solid #e9e9e9;
                                border-radius: 2px;
                            }

                            .td-social-handler .td-social-but-text {
                                font-weight: 700;
                            }

                            .td-social-handler .td-social-but-text:before {
                                background-color: #000;
                                opacity: 0.08;
                            }

                            .td-social-share-text {
                                margin-right: 18px;
                            }

                            .td-social-share-text:before,
                            .td-social-share-text:after {
                                content: "";
                                position: absolute;
                                top: 50%;
                                -webkit-transform: translateY(-50%);
                                transform: translateY(-50%);
                                left: 100%;
                                width: 0;
                                height: 0;
                                border-style: solid;
                            }

                            .td-social-share-text:before {
                                border-width: 9px 0 9px 11px;
                                border-color: transparent transparent transparent #e9e9e9;
                            }

                            .td-social-share-text:after {
                                border-width: 8px 0 8px 10px;
                                border-color: transparent transparent transparent #fff;
                            }

                            .td-social-but-text,
                            .td-social-but-icon {
                                display: inline-block;
                                position: relative;
                            }

                            .td-social-but-icon {
                                padding-left: 13px;
                                padding-right: 13px;
                                line-height: 40px;
                                z-index: 1;
                            }

                            .td-social-but-icon i {
                                position: relative;
                                top: -1px;
                                vertical-align: middle;
                            }

                            .td-social-but-text {
                                margin-left: -6px;
                                padding-left: 12px;
                                padding-right: 17px;
                                line-height: 40px;
                            }

                            .td-social-but-text:before {
                                content: "";
                                position: absolute;
                                top: 12px;
                                left: 0;
                                width: 1px;
                                height: 16px;
                                background-color: #fff;
                                opacity: 0.2;
                                z-index: 1;
                            }

                            .td-social-handler i,
                            .td-social-facebook i,
                            .td-social-reddit i,
                            .td-social-linkedin i,
                            .td-social-tumblr i,
                            .td-social-stumbleupon i,
                            .td-social-vk i,
                            .td-social-viber i,
                            .td-social-flipboard i,
                            .td-social-koo i {
                                font-size: 14px;
                            }

                            .td-social-telegram i {
                                font-size: 16px;
                            }

                            .td-social-mail i,
                            .td-social-line i,
                            .td-social-print i {
                                font-size: 15px;
                            }

                            .td-social-handler .td-icon-share {
                                top: -1px;
                                left: -1px;
                            }

                            .td-social-twitter .td-icon-twitter {
                                font-size: 14px;
                            }

                            .td-social-pinterest .td-icon-pinterest {
                                font-size: 13px;
                            }

                            .td-social-whatsapp .td-icon-whatsapp,
                            .td-social-kakao .td-icon-kakao {
                                font-size: 18px;
                            }

                            .td-social-kakao .td-icon-kakao:before {
                                color: #3c1b1d;
                            }

                            .td-social-reddit .td-social-but-icon {
                                padding-right: 12px;
                            }

                            .td-social-reddit .td-icon-reddit {
                                left: -1px;
                            }

                            .td-social-telegram .td-social-but-icon {
                                padding-right: 12px;
                            }

                            .td-social-telegram .td-icon-telegram {
                                left: -1px;
                            }

                            .td-social-stumbleupon .td-social-but-icon {
                                padding-right: 11px;
                            }

                            .td-social-stumbleupon .td-icon-stumbleupon {
                                left: -2px;
                            }

                            .td-social-digg .td-social-but-icon {
                                padding-right: 11px;
                            }

                            .td-social-digg .td-icon-digg {
                                left: -2px;
                                font-size: 17px;
                            }

                            .td-social-vk .td-social-but-icon {
                                padding-right: 11px;
                            }

                            .td-social-vk .td-icon-vk {
                                left: -2px;
                            }

                            .td-social-naver .td-icon-naver {
                                left: -1px;
                                font-size: 16px;
                            }

                            .td-social-gettr .td-icon-gettr {
                                font-size: 25px;
                            }

                            .td-ps-notext .td-social-gettr .td-icon-gettr {
                                left: -5px;
                            }

                            .td-social-copy_url {
                                position: relative;
                            }

                            .td-social-copy_url-check {
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                color: #fff;
                                opacity: 0;
                                pointer-events: none;
                                transition: opacity 0.2s ease-in-out;
                                z-index: 11;
                            }

                            .td-social-copy_url .td-icon-copy_url {
                                left: -1px;
                                font-size: 17px;
                            }

                            .td-social-copy_url-disabled {
                                pointer-events: none;
                            }

                            .td-social-copy_url-disabled .td-icon-copy_url {
                                opacity: 0;
                            }

                            .td-social-copy_url-copied .td-social-copy_url-check {
                                opacity: 1;
                            }

                            @keyframes social_copy_url_loader {
                                0% {
                                    -webkit-transform: rotate(0);
                                    transform: rotate(0);
                                }

                                100% {
                                    -webkit-transform: rotate(360deg);
                                    transform: rotate(360deg);
                                }
                            }

                            .td-social-expand-tabs i {
                                top: -2px;
                                left: -1px;
                                font-size: 16px;
                            }

                            @media (min-width: 767px) {

                                .td-social-line,
                                .td-social-viber {
                                    display: none;
                                }
                            }

                            .td-ps-bg .td-social-network {
                                color: #fff;
                            }

                            .td-ps-bg .td-social-facebook .td-social-but-icon,
                            .td-ps-bg .td-social-facebook .td-social-but-text {
                                background-color: #516eab;
                            }

                            .td-ps-bg .td-social-twitter .td-social-but-icon,
                            .td-ps-bg .td-social-twitter .td-social-but-text {
                                background-color: #29c5f6;
                            }

                            .td-ps-bg .td-social-pinterest .td-social-but-icon,
                            .td-ps-bg .td-social-pinterest .td-social-but-text {
                                background-color: #ca212a;
                            }

                            .td-ps-bg .td-social-whatsapp .td-social-but-icon,
                            .td-ps-bg .td-social-whatsapp .td-social-but-text {
                                background-color: #7bbf6a;
                            }

                            .td-ps-bg .td-social-reddit .td-social-but-icon,
                            .td-ps-bg .td-social-reddit .td-social-but-text {
                                background-color: #f54200;
                            }

                            .td-ps-bg .td-social-mail .td-social-but-icon,
                            .td-ps-bg .td-social-digg .td-social-but-icon,
                            .td-ps-bg .td-social-copy_url .td-social-but-icon,
                            .td-ps-bg .td-social-mail .td-social-but-text,
                            .td-ps-bg .td-social-digg .td-social-but-text,
                            .td-ps-bg .td-social-copy_url .td-social-but-text {
                                background-color: #000;
                            }

                            .td-ps-bg .td-social-print .td-social-but-icon,
                            .td-ps-bg .td-social-print .td-social-but-text {
                                background-color: #333;
                            }

                            .td-ps-bg .td-social-linkedin .td-social-but-icon,
                            .td-ps-bg .td-social-linkedin .td-social-but-text {
                                background-color: #0266a0;
                            }

                            .td-ps-bg .td-social-tumblr .td-social-but-icon,
                            .td-ps-bg .td-social-tumblr .td-social-but-text {
                                background-color: #3e5a70;
                            }

                            .td-ps-bg .td-social-telegram .td-social-but-icon,
                            .td-ps-bg .td-social-telegram .td-social-but-text {
                                background-color: #179cde;
                            }

                            .td-ps-bg .td-social-stumbleupon .td-social-but-icon,
                            .td-ps-bg .td-social-stumbleupon .td-social-but-text {
                                background-color: #ee4813;
                            }

                            .td-ps-bg .td-social-vk .td-social-but-icon,
                            .td-ps-bg .td-social-vk .td-social-but-text {
                                background-color: #4c75a3;
                            }

                            .td-ps-bg .td-social-line .td-social-but-icon,
                            .td-ps-bg .td-social-line .td-social-but-text {
                                background-color: #00b900;
                            }

                            .td-ps-bg .td-social-viber .td-social-but-icon,
                            .td-ps-bg .td-social-viber .td-social-but-text {
                                background-color: #5d54a4;
                            }

                            .td-ps-bg .td-social-naver .td-social-but-icon,
                            .td-ps-bg .td-social-naver .td-social-but-text {
                                background-color: #3ec729;
                            }

                            .td-ps-bg .td-social-flipboard .td-social-but-icon,
                            .td-ps-bg .td-social-flipboard .td-social-but-text {
                                background-color: #f42827;
                            }

                            .td-ps-bg .td-social-kakao .td-social-but-icon,
                            .td-ps-bg .td-social-kakao .td-social-but-text {
                                background-color: #f9e000;
                            }

                            .td-ps-bg .td-social-gettr .td-social-but-icon,
                            .td-ps-bg .td-social-gettr .td-social-but-text {
                                background-color: #fc223b;
                            }

                            .td-ps-bg .td-social-koo .td-social-but-icon,
                            .td-ps-bg .td-social-koo .td-social-but-text {
                                background-color: #facd00;
                            }

                            .td-ps-dark-bg .td-social-network {
                                color: #fff;
                            }

                            .td-ps-dark-bg .td-social-network .td-social-but-icon,
                            .td-ps-dark-bg .td-social-network .td-social-but-text {
                                background-color: #000;
                            }

                            .td-ps-border .td-social-network .td-social-but-icon,
                            .td-ps-border .td-social-network .td-social-but-text {
                                line-height: 38px;
                                border-width: 1px;
                                border-style: solid;
                            }

                            .td-ps-border .td-social-network .td-social-but-text {
                                border-left-width: 0;
                            }

                            .td-ps-border .td-social-network .td-social-but-text:before {
                                background-color: #000;
                                opacity: 0.08;
                            }

                            .td-ps-border.td-ps-padding .td-social-network .td-social-but-icon {
                                border-right-width: 0;
                            }

                            .td-ps-border.td-ps-padding .td-social-network.td-social-expand-tabs .td-social-but-icon {
                                border-right-width: 1px;
                            }

                            .td-ps-border-grey .td-social-but-icon,
                            .td-ps-border-grey .td-social-but-text {
                                border-color: #e9e9e9;
                            }

                            .td-ps-border-colored .td-social-facebook .td-social-but-icon,
                            .td-ps-border-colored .td-social-facebook .td-social-but-text {
                                border-color: #516eab;
                            }

                            .td-ps-border-colored .td-social-twitter .td-social-but-icon,
                            div.td-ps-border-colored .td-social-twitter .td-social-but-text {
                                border-color: #29c5f6;
                                color: #29c5f6;
                            }

                            .td-ps-border-colored .td-social-pinterest .td-social-but-icon,
                            .td-ps-border-colored .td-social-pinterest .td-social-but-text {
                                border-color: #ca212a;
                            }

                            .td-ps-border-colored .td-social-whatsapp .td-social-but-icon,
                            .td-ps-border-colored .td-social-whatsapp .td-social-but-text {
                                border-color: #7bbf6a;
                            }

                            .td-ps-border-colored .td-social-reddit .td-social-but-icon,
                            .td-ps-border-colored .td-social-reddit .td-social-but-text {
                                border-color: #f54200;
                            }

                            .td-ps-border-colored .td-social-mail .td-social-but-icon,
                            .td-ps-border-colored .td-social-digg .td-social-but-icon,
                            .td-ps-border-colored .td-social-copy_url .td-social-but-icon,
                            .td-ps-border-colored .td-social-mail .td-social-but-text,
                            .td-ps-border-colored .td-social-digg .td-social-but-text,
                            .td-ps-border-colored .td-social-copy_url .td-social-but-text {
                                border-color: #000;
                            }

                            .td-ps-border-colored .td-social-print .td-social-but-icon,
                            .td-ps-border-colored .td-social-print .td-social-but-text {
                                border-color: #333;
                            }

                            .td-ps-border-colored .td-social-linkedin .td-social-but-icon,
                            .td-ps-border-colored .td-social-linkedin .td-social-but-text {
                                border-color: #0266a0;
                            }

                            .td-ps-border-colored .td-social-tumblr .td-social-but-icon,
                            .td-ps-border-colored .td-social-tumblr .td-social-but-text {
                                border-color: #3e5a70;
                            }

                            .td-ps-border-colored .td-social-telegram .td-social-but-icon,
                            .td-ps-border-colored .td-social-telegram .td-social-but-text {
                                border-color: #179cde;
                            }

                            .td-ps-border-colored .td-social-stumbleupon .td-social-but-icon,
                            .td-ps-border-colored .td-social-stumbleupon .td-social-but-text {
                                border-color: #ee4813;
                            }

                            .td-ps-border-colored .td-social-vk .td-social-but-icon,
                            .td-ps-border-colored .td-social-vk .td-social-but-text {
                                border-color: #4c75a3;
                            }

                            .td-ps-border-colored .td-social-line .td-social-but-icon,
                            .td-ps-border-colored .td-social-line .td-social-but-text {
                                border-color: #00b900;
                            }

                            .td-ps-border-colored .td-social-viber .td-social-but-icon,
                            .td-ps-border-colored .td-social-viber .td-social-but-text {
                                border-color: #5d54a4;
                            }

                            .td-ps-border-colored .td-social-naver .td-social-but-icon,
                            .td-ps-border-colored .td-social-naver .td-social-but-text {
                                border-color: #3ec729;
                            }

                            .td-ps-border-colored .td-social-flipboard .td-social-but-icon,
                            .td-ps-border-colored .td-social-flipboard .td-social-but-text {
                                border-color: #f42827;
                            }

                            .td-ps-border-colored .td-social-kakao .td-social-but-icon,
                            .td-ps-border-colored .td-social-kakao .td-social-but-text {
                                border-color: #f9e000;
                            }

                            .td-ps-border-colored .td-social-gettr .td-social-but-icon,
                            .td-ps-border-colored .td-social-gettr .td-social-but-text {
                                border-color: #fc223b;
                            }

                            .td-ps-border-colored .td-social-koo .td-social-but-icon,
                            .td-ps-border-colored .td-social-koo .td-social-but-text {
                                border-color: #facd00;
                            }

                            .td-ps-icon-bg .td-social-but-icon {
                                height: 100%;
                                border-color: transparent !important;
                            }

                            .td-ps-icon-bg .td-social-network .td-social-but-icon {
                                color: #fff;
                            }

                            .td-ps-icon-bg .td-social-facebook .td-social-but-icon {
                                background-color: #516eab;
                            }

                            .td-ps-icon-bg .td-social-twitter .td-social-but-icon {
                                background-color: #29c5f6;
                            }

                            .td-ps-icon-bg .td-social-pinterest .td-social-but-icon {
                                background-color: #ca212a;
                            }

                            .td-ps-icon-bg .td-social-whatsapp .td-social-but-icon {
                                background-color: #7bbf6a;
                            }

                            .td-ps-icon-bg .td-social-reddit .td-social-but-icon {
                                background-color: #f54200;
                            }

                            .td-ps-icon-bg .td-social-mail .td-social-but-icon,
                            .td-ps-icon-bg .td-social-digg .td-social-but-icon,
                            .td-ps-icon-bg .td-social-copy_url .td-social-but-icon {
                                background-color: #000;
                            }

                            .td-ps-icon-bg .td-social-print .td-social-but-icon {
                                background-color: #333;
                            }

                            .td-ps-icon-bg .td-social-linkedin .td-social-but-icon {
                                background-color: #0266a0;
                            }

                            .td-ps-icon-bg .td-social-tumblr .td-social-but-icon {
                                background-color: #3e5a70;
                            }

                            .td-ps-icon-bg .td-social-telegram .td-social-but-icon {
                                background-color: #179cde;
                            }

                            .td-ps-icon-bg .td-social-stumbleupon .td-social-but-icon {
                                background-color: #ee4813;
                            }

                            .td-ps-icon-bg .td-social-vk .td-social-but-icon {
                                background-color: #4c75a3;
                            }

                            .td-ps-icon-bg .td-social-line .td-social-but-icon {
                                background-color: #00b900;
                            }

                            .td-ps-icon-bg .td-social-viber .td-social-but-icon {
                                background-color: #5d54a4;
                            }

                            .td-ps-icon-bg .td-social-naver .td-social-but-icon {
                                background-color: #3ec729;
                            }

                            .td-ps-icon-bg .td-social-flipboard .td-social-but-icon {
                                background-color: #f42827;
                            }

                            .td-ps-icon-bg .td-social-kakao .td-social-but-icon {
                                background-color: #f9e000;
                            }

                            .td-ps-icon-bg .td-social-gettr .td-social-but-icon {
                                background-color: #fc223b;
                            }

                            .td-ps-icon-bg .td-social-koo .td-social-but-icon {
                                background-color: #facd00;
                            }

                            .td-ps-icon-bg .td-social-but-text {
                                margin-left: -3px;
                            }

                            .td-ps-icon-bg .td-social-network .td-social-but-text:before {
                                display: none;
                            }

                            .td-ps-icon-arrow .td-social-network .td-social-but-icon:after {
                                content: "";
                                position: absolute;
                                top: 50%;
                                -webkit-transform: translateY(-50%);
                                transform: translateY(-50%);
                                left: calc(100% + 1px);
                                width: 0;
                                height: 0;
                                border-style: solid;
                                border-width: 9px 0 9px 11px;
                                border-color: transparent transparent transparent #000;
                            }

                            .td-ps-icon-arrow .td-social-network .td-social-but-text {
                                padding-left: 20px;
                            }

                            .td-ps-icon-arrow .td-social-network .td-social-but-text:before {
                                display: none;
                            }

                            .td-ps-icon-arrow.td-ps-padding .td-social-network .td-social-but-icon:after {
                                left: 100%;
                            }

                            .td-ps-icon-arrow .td-social-facebook .td-social-but-icon:after {
                                border-left-color: #516eab;
                            }

                            .td-ps-icon-arrow .td-social-twitter .td-social-but-icon:after {
                                border-left-color: #29c5f6;
                            }

                            .td-ps-icon-arrow .td-social-pinterest .td-social-but-icon:after {
                                border-left-color: #ca212a;
                            }

                            .td-ps-icon-arrow .td-social-whatsapp .td-social-but-icon:after {
                                border-left-color: #7bbf6a;
                            }

                            .td-ps-icon-arrow .td-social-reddit .td-social-but-icon:after {
                                border-left-color: #f54200;
                            }

                            .td-ps-icon-arrow .td-social-mail .td-social-but-icon:after,
                            .td-ps-icon-arrow .td-social-digg .td-social-but-icon:after,
                            .td-ps-icon-arrow .td-social-copy_url .td-social-but-icon:after {
                                border-left-color: #000;
                            }

                            .td-ps-icon-arrow .td-social-print .td-social-but-icon:after {
                                border-left-color: #333;
                            }

                            .td-ps-icon-arrow .td-social-linkedin .td-social-but-icon:after {
                                border-left-color: #0266a0;
                            }

                            .td-ps-icon-arrow .td-social-tumblr .td-social-but-icon:after {
                                border-left-color: #3e5a70;
                            }

                            .td-ps-icon-arrow .td-social-telegram .td-social-but-icon:after {
                                border-left-color: #179cde;
                            }

                            .td-ps-icon-arrow .td-social-stumbleupon .td-social-but-icon:after {
                                border-left-color: #ee4813;
                            }

                            .td-ps-icon-arrow .td-social-vk .td-social-but-icon:after {
                                border-left-color: #4c75a3;
                            }

                            .td-ps-icon-arrow .td-social-line .td-social-but-icon:after {
                                border-left-color: #00b900;
                            }

                            .td-ps-icon-arrow .td-social-viber .td-social-but-icon:after {
                                border-left-color: #5d54a4;
                            }

                            .td-ps-icon-arrow .td-social-naver .td-social-but-icon:after {
                                border-left-color: #3ec729;
                            }

                            .td-ps-icon-arrow .td-social-flipboard .td-social-but-icon:after {
                                border-left-color: #f42827;
                            }

                            .td-ps-icon-arrow .td-social-kakao .td-social-but-icon:after {
                                border-left-color: #f9e000;
                            }

                            .td-ps-icon-arrow .td-social-gettr .td-social-but-icon:after {
                                border-left-color: #fc223b;
                            }

                            .td-ps-icon-arrow .td-social-koo .td-social-but-icon:after {
                                border-left-color: #facd00;
                            }

                            .td-ps-icon-arrow .td-social-expand-tabs .td-social-but-icon:after {
                                display: none;
                            }

                            .td-ps-icon-color .td-social-facebook .td-social-but-icon {
                                color: #516eab;
                            }

                            .td-ps-icon-color .td-social-pinterest .td-social-but-icon {
                                color: #ca212a;
                            }

                            .td-ps-icon-color .td-social-whatsapp .td-social-but-icon {
                                color: #7bbf6a;
                            }

                            .td-ps-icon-color .td-social-reddit .td-social-but-icon {
                                color: #f54200;
                            }

                            .td-ps-icon-color .td-social-mail .td-social-but-icon,
                            .td-ps-icon-color .td-social-digg .td-social-but-icon,
                            .td-ps-icon-color .td-social-copy_url .td-social-but-icon,
                            .td-ps-icon-color .td-social-copy_url-check,
                            .td-ps-icon-color .td-social-twitter .td-social-but-icon {
                                color: #000;
                            }

                            .td-ps-icon-color .td-social-print .td-social-but-icon {
                                color: #333;
                            }

                            .td-ps-icon-color .td-social-linkedin .td-social-but-icon {
                                color: #0266a0;
                            }

                            .td-ps-icon-color .td-social-tumblr .td-social-but-icon {
                                color: #3e5a70;
                            }

                            .td-ps-icon-color .td-social-telegram .td-social-but-icon {
                                color: #179cde;
                            }

                            .td-ps-icon-color .td-social-stumbleupon .td-social-but-icon {
                                color: #ee4813;
                            }

                            .td-ps-icon-color .td-social-vk .td-social-but-icon {
                                color: #4c75a3;
                            }

                            .td-ps-icon-color .td-social-line .td-social-but-icon {
                                color: #00b900;
                            }

                            .td-ps-icon-color .td-social-viber .td-social-but-icon {
                                color: #5d54a4;
                            }

                            .td-ps-icon-color .td-social-naver .td-social-but-icon {
                                color: #3ec729;
                            }

                            .td-ps-icon-color .td-social-flipboard .td-social-but-icon {
                                color: #f42827;
                            }

                            .td-ps-icon-color .td-social-kakao .td-social-but-icon {
                                color: #f9e000;
                            }

                            .td-ps-icon-color .td-social-gettr .td-social-but-icon {
                                color: #fc223b;
                            }

                            .td-ps-icon-color .td-social-koo .td-social-but-icon {
                                color: #facd00;
                            }

                            .td-ps-text-color .td-social-but-text {
                                font-weight: 700;
                            }

                            .td-ps-text-color .td-social-facebook .td-social-but-text {
                                color: #516eab;
                            }

                            .td-ps-text-color .td-social-twitter .td-social-but-text {
                                color: #29c5f6;
                            }

                            .td-ps-text-color .td-social-pinterest .td-social-but-text {
                                color: #ca212a;
                            }

                            .td-ps-text-color .td-social-whatsapp .td-social-but-text {
                                color: #7bbf6a;
                            }

                            .td-ps-text-color .td-social-reddit .td-social-but-text {
                                color: #f54200;
                            }

                            .td-ps-text-color .td-social-mail .td-social-but-text,
                            .td-ps-text-color .td-social-digg .td-social-but-text,
                            .td-ps-text-color .td-social-copy_url .td-social-but-text {
                                color: #000;
                            }

                            .td-ps-text-color .td-social-print .td-social-but-text {
                                color: #333;
                            }

                            .td-ps-text-color .td-social-linkedin .td-social-but-text {
                                color: #0266a0;
                            }

                            .td-ps-text-color .td-social-tumblr .td-social-but-text {
                                color: #3e5a70;
                            }

                            .td-ps-text-color .td-social-telegram .td-social-but-text {
                                color: #179cde;
                            }

                            .td-ps-text-color .td-social-stumbleupon .td-social-but-text {
                                color: #ee4813;
                            }

                            .td-ps-text-color .td-social-vk .td-social-but-text {
                                color: #4c75a3;
                            }

                            .td-ps-text-color .td-social-line .td-social-but-text {
                                color: #00b900;
                            }

                            .td-ps-text-color .td-social-viber .td-social-but-text {
                                color: #5d54a4;
                            }

                            .td-ps-text-color .td-social-naver .td-social-but-text {
                                color: #3ec729;
                            }

                            .td-ps-text-color .td-social-flipboard .td-social-but-text {
                                color: #f42827;
                            }

                            .td-ps-text-color .td-social-kakao .td-social-but-text {
                                color: #f9e000;
                            }

                            .td-ps-text-color .td-social-gettr .td-social-but-text {
                                color: #fc223b;
                            }

                            .td-ps-text-color .td-social-koo .td-social-but-text {
                                color: #facd00;
                            }

                            .td-ps-text-color .td-social-expand-tabs .td-social-but-text {
                                color: #b1b1b1;
                            }

                            .td-ps-notext .td-social-but-icon {
                                width: 40px;
                            }

                            .td-ps-notext .td-social-network .td-social-but-text {
                                display: none;
                            }

                            .td-ps-padding .td-social-network .td-social-but-icon {
                                padding-left: 17px;
                                padding-right: 17px;
                            }

                            .td-ps-padding .td-social-handler .td-social-but-icon {
                                width: 40px;
                            }

                            .td-ps-padding .td-social-reddit .td-social-but-icon,
                            .td-ps-padding .td-social-telegram .td-social-but-icon {
                                padding-right: 16px;
                            }

                            .td-ps-padding .td-social-stumbleupon .td-social-but-icon,
                            .td-ps-padding .td-social-digg .td-social-but-icon,
                            .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
                                padding-right: 13px;
                            }

                            .td-ps-padding .td-social-vk .td-social-but-icon {
                                padding-right: 14px;
                            }

                            .td-ps-padding .td-social-expand-tabs .td-social-but-icon {
                                padding-left: 13px;
                            }

                            .td-ps-rounded .td-social-network .td-social-but-icon {
                                border-top-left-radius: 100px;
                                border-bottom-left-radius: 100px;
                            }

                            .td-ps-rounded .td-social-network .td-social-but-text {
                                border-top-right-radius: 100px;
                                border-bottom-right-radius: 100px;
                            }

                            .td-ps-rounded.td-ps-notext .td-social-network .td-social-but-icon {
                                border-top-right-radius: 100px;
                                border-bottom-right-radius: 100px;
                            }

                            .td-ps-rounded .td-social-expand-tabs {
                                border-radius: 100px;
                            }

                            .td-ps-bar .td-social-network .td-social-but-icon,
                            .td-ps-bar .td-social-network .td-social-but-text {
                                -webkit-box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31);
                                box-shadow: inset 0px -3px 0px 0px rgba(0, 0, 0, 0.31);
                            }

                            .td-ps-bar .td-social-mail .td-social-but-icon,
                            .td-ps-bar .td-social-digg .td-social-but-icon,
                            .td-ps-bar .td-social-copy_url .td-social-but-icon,
                            .td-ps-bar .td-social-mail .td-social-but-text,
                            .td-ps-bar .td-social-digg .td-social-but-text,
                            .td-ps-bar .td-social-copy_url .td-social-but-text {
                                -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28);
                                box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.28);
                            }

                            .td-ps-bar .td-social-print .td-social-but-icon,
                            .td-ps-bar .td-social-print .td-social-but-text {
                                -webkit-box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2);
                                box-shadow: inset 0px -3px 0px 0px rgba(255, 255, 255, 0.2);
                            }

                            .td-ps-big .td-social-but-icon {
                                display: block;
                                line-height: 60px;
                            }

                            .td-ps-big .td-social-but-icon .td-icon-share {
                                width: auto;
                            }

                            .td-ps-big .td-social-handler .td-social-but-text:before {
                                display: none;
                            }

                            .td-ps-big .td-social-share-text .td-social-but-icon {
                                width: 90px;
                            }

                            .td-ps-big .td-social-expand-tabs .td-social-but-icon {
                                width: 60px;
                            }

                            @media (max-width: 767px) {
                                .td-ps-big .td-social-share-text {
                                    display: none;
                                }
                            }

                            .td-ps-big .td-social-facebook i,
                            .td-ps-big .td-social-reddit i,
                            .td-ps-big .td-social-mail i,
                            .td-ps-big .td-social-linkedin i,
                            .td-ps-big .td-social-tumblr i,
                            .td-ps-big .td-social-stumbleupon i {
                                margin-top: -2px;
                            }

                            .td-ps-big .td-social-facebook i,
                            .td-ps-big .td-social-reddit i,
                            .td-ps-big .td-social-linkedin i,
                            .td-ps-big .td-social-tumblr i,
                            .td-ps-big .td-social-stumbleupon i,
                            .td-ps-big .td-social-vk i,
                            .td-ps-big .td-social-viber i,
                            .td-ps-big .td-social-fliboard i,
                            .td-ps-big .td-social-koo i,
                            .td-ps-big .td-social-share-text i {
                                font-size: 22px;
                            }

                            .td-ps-big .td-social-telegram i {
                                font-size: 24px;
                            }

                            .td-ps-big .td-social-mail i,
                            .td-ps-big .td-social-line i,
                            .td-ps-big .td-social-print i {
                                font-size: 23px;
                            }

                            .td-ps-big .td-social-twitter i,
                            .td-ps-big .td-social-expand-tabs i {
                                font-size: 20px;
                            }

                            .td-ps-big .td-social-whatsapp i,
                            .td-ps-big .td-social-naver i,
                            .td-ps-big .td-social-flipboard i,
                            .td-ps-big .td-social-kakao i {
                                font-size: 26px;
                            }

                            .td-ps-big .td-social-pinterest .td-icon-pinterest {
                                font-size: 21px;
                            }

                            .td-ps-big .td-social-telegram .td-icon-telegram {
                                left: 1px;
                            }

                            .td-ps-big .td-social-stumbleupon .td-icon-stumbleupon {
                                left: -2px;
                            }

                            .td-ps-big .td-social-digg .td-icon-digg {
                                left: -1px;
                                font-size: 25px;
                            }

                            .td-ps-big .td-social-vk .td-icon-vk {
                                left: -1px;
                            }

                            .td-ps-big .td-social-naver .td-icon-naver {
                                left: 0;
                            }

                            .td-ps-big .td-social-gettr .td-icon-gettr {
                                left: -1px;
                            }

                            .td-ps-big .td-social-copy_url .td-icon-copy_url {
                                left: 0;
                                font-size: 25px;
                            }

                            .td-ps-big .td-social-copy_url-check {
                                font-size: 18px;
                            }

                            .td-ps-big .td-social-but-text {
                                margin-left: 0;
                                padding-top: 0;
                                padding-left: 17px;
                            }

                            .td-ps-big.td-ps-notext .td-social-network,
                            .td-ps-big.td-ps-notext .td-social-handler {
                                height: 60px;
                            }

                            .td-ps-big.td-ps-notext .td-social-network {
                                width: 60px;
                            }

                            .td-ps-big.td-ps-notext .td-social-network .td-social-but-icon {
                                width: 60px;
                            }

                            .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-icon {
                                line-height: 40px;
                            }

                            .td-ps-big.td-ps-notext .td-social-share-text .td-social-but-text {
                                display: block;
                                line-height: 1;
                            }

                            .td-ps-big.td-ps-padding .td-social-network,
                            .td-ps-big.td-ps-padding .td-social-handler {
                                height: 90px;
                                font-size: 13px;
                            }

                            .td-ps-big.td-ps-padding .td-social-network {
                                min-width: 60px;
                            }

                            .td-ps-big.td-ps-padding .td-social-but-icon {
                                border-bottom-left-radius: 0;
                                border-top-right-radius: 2px;
                            }

                            .td-ps-big.td-ps-padding.td-ps-bar .td-social-but-icon {
                                -webkit-box-shadow: none;
                                box-shadow: none;
                            }

                            .td-ps-big.td-ps-padding .td-social-but-text {
                                display: block;
                                padding-bottom: 17px;
                                line-height: 1;
                                border-top-left-radius: 0;
                                border-top-right-radius: 0;
                                border-bottom-left-radius: 2px;
                            }

                            .td-ps-big.td-ps-padding .td-social-but-text:before {
                                display: none;
                            }

                            .td-ps-big.td-ps-padding .td-social-expand-tabs i {
                                line-height: 90px;
                            }

                            .td-ps-nogap {
                                margin-left: 0;
                                margin-right: 0;
                            }

                            .td-ps-nogap .td-social-network,
                            .td-ps-nogap .td-social-handler {
                                margin-left: 0;
                                margin-right: 0;
                                border-radius: 0;
                            }

                            .td-ps-nogap .td-social-network .td-social-but-icon,
                            .td-ps-nogap .td-social-network .td-social-but-text {
                                border-radius: 0;
                            }

                            .td-ps-nogap .td-social-expand-tabs {
                                border-radius: 0;
                            }

                            .td-post-sharing-style7 .td-social-network .td-social-but-icon {
                                height: 100%;
                            }

                            .td-post-sharing-style7 .td-social-network .td-social-but-icon:before {
                                content: "";
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(0, 0, 0, 0.31);
                            }

                            .td-post-sharing-style7 .td-social-network .td-social-but-text {
                                padding-left: 17px;
                            }

                            .td-post-sharing-style7 .td-social-network .td-social-but-text:before {
                                display: none;
                            }

                            .td-post-sharing-style7 .td-social-mail .td-social-but-icon:before,
                            .td-post-sharing-style7 .td-social-digg .td-social-but-icon:before,
                            .td-post-sharing-style7 .td-social-copy_url .td-social-but-icon:before {
                                background-color: rgba(255, 255, 255, 0.2);
                            }

                            .td-post-sharing-style7 .td-social-print .td-social-but-icon:before {
                                background-color: rgba(255, 255, 255, 0.1);
                            }

                            @media (max-width: 767px) {

                                .td-post-sharing-style1 .td-social-share-text .td-social-but-text,
                                .td-post-sharing-style3 .td-social-share-text .td-social-but-text,
                                .td-post-sharing-style5 .td-social-share-text .td-social-but-text,
                                .td-post-sharing-style14 .td-social-share-text .td-social-but-text,
                                .td-post-sharing-style16 .td-social-share-text .td-social-but-text {
                                    display: none !important;
                                }
                            }

                            @media (max-width: 767px) {

                                .td-post-sharing-style2 .td-social-share-text,
                                .td-post-sharing-style4 .td-social-share-text,
                                .td-post-sharing-style6 .td-social-share-text,
                                .td-post-sharing-style7 .td-social-share-text,
                                .td-post-sharing-style15 .td-social-share-text,
                                .td-post-sharing-style17 .td-social-share-text,
                                .td-post-sharing-style18 .td-social-share-text,
                                .td-post-sharing-style19 .td-social-share-text,
                                .td-post-sharing-style20 .td-social-share-text {
                                    display: none !important;
                                }
                            }
                            </style>
                            <div class="td-post-sharing-visible">
                                <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                    href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_photography%2Ftd-post-a-vision-in-green%2F"
                                    title="Facebook">
                                    <div class="td-social-but-icon">
                                        <i class="td-icon-facebook"></i>
                                    </div>
                                    <div class="td-social-but-text">Facebook</div>
                                </a><a
                                    class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                    href="https://twitter.com/intent/tweet?text=A+Vision+in+Green&amp;url=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_photography%2Ftd-post-a-vision-in-green%2F&amp;via=Newspaper+Photography+Demo"
                                    title="Twitter">
                                    <div class="td-social-but-icon">
                                        <i class="td-icon-twitter"></i>
                                    </div>
                                    <div class="td-social-but-text">Twitter</div>
                                </a><a
                                    class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest"
                                    href="https://pinterest.com/pin/create/button/?url=https://demo.tagdiv.com/newspaper_photography/td-post-a-vision-in-green/&amp;media=https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/30.jpg&amp;description=A+Vision+in+Green"
                                    title="Pinterest">
                                    <div class="td-social-but-icon">
                                        <i class="td-icon-pinterest"></i>
                                    </div>
                                    <div class="td-social-but-text">Pinterest</div>
                                </a><a
                                    class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp"
                                    href="https://api.whatsapp.com/send?text=A+Vision+in+Green%20%0A%0A%20https://demo.tagdiv.com/newspaper_photography/td-post-a-vision-in-green/"
                                    title="WhatsApp">
                                    <div class="td-social-but-icon">
                                        <i class="td-icon-whatsapp"></i>
                                    </div>
                                    <div class="td-social-but-text">WhatsApp</div>
                                </a>
                            </div>
                            <div class="td-social-sharing-hidden">
                                <ul class="td-pulldown-filter-list"></ul>
                                <a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#"
                                    data-block-uid="td_social_sharing_article_top" title="More">
                                    <div class="td-social-but-icon">
                                        <i class="td-icon-plus td-social-expand-tabs-icon"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="td-post-content tagdiv-type">
                        <p>
                            Last month, some friends and I rented a 30&#8242; camper van
                            and drove to an area in the Angeles National Forest known as
                            Devil&#8217;s Punchbowl.
                        </p>
                        <p>
                            We met up Friday evening after everyone got off work, loaded
                            up the camper, and headed on our way. It was a pretty smooth
                            ride until we hit the inclines on Highway 14 where our
                            humongous camper van struggled to maintain a 30mph pace.
                        </p>
                        <p>
                            <a href="../wp-content/uploads/2017/04/p1-1.jpg"><img fetchpriority="high" decoding="async"
                                    class="aligncenter size-full wp-image-371"
                                    src="../wp-content/uploads/2017/04/p1-1.jpg" alt width="1068" height="710" srcset="
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p1-1.jpg          1068w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p1-1-300x199.jpg   300w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p1-1-768x511.jpg   768w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p1-1-1024x681.jpg 1024w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p1-1-696x463.jpg   696w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p1-1-632x420.jpg   632w
                        " sizes="(max-width: 1068px) 100vw, 1068px" /></a>
                        </p>
                        <p>
                            The morning after we arrived, we made coffee and breakfast
                            inside of the RV before heading out to explore the area. It
                            was awesome being in the camper and having a nice,
                            comfortable place to hang out, cook, and eat before starting
                            our hike along the Punchbowl Loop Trail.
                        </p>
                        <p>
                            <a href="../wp-content/uploads/2017/04/p2.jpg"><img decoding="async"
                                    class="size-full wp-image-373 aligncenter"
                                    src="../wp-content/uploads/2017/04/p2.jpg" alt width="1068" height="712" srcset="
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p2.jpg          1068w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p2-300x200.jpg   300w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p2-768x512.jpg   768w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p2-1024x683.jpg 1024w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p2-696x464.jpg   696w,
                          https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p2-630x420.jpg   630w
                        " sizes="(max-width: 1068px) 100vw, 1068px" /></a>
                        </p>
                        <style type="text/css">
                        #tdi_8 .td-doubleSlider-2 .td-item1 {
                            background: url(../wp-content/uploads/2017/04/p5-80x60.jpg) 0 0 no-repeat;
                        }

                        #tdi_8 .td-doubleSlider-2 .td-item2 {
                            background: url(../wp-content/uploads/2017/04/p4-1-80x60.jpg) 0 0 no-repeat;
                        }

                        #tdi_8 .td-doubleSlider-2 .td-item3 {
                            background: url(../wp-content/uploads/2017/04/p3-1-80x60.jpg) 0 0 no-repeat;
                        }

                        #tdi_8 .td-doubleSlider-2 .td-item4 {
                            background: url(../wp-content/uploads/2017/04/p4-80x60.jpg) 0 0 no-repeat;
                        }

                        #tdi_8 .td-doubleSlider-2 .td-item5 {
                            background: url(../wp-content/uploads/2017/04/12-80x60.jpg) 0 0 no-repeat;
                        }

                        #tdi_8 .td-doubleSlider-2 .td-item6 {
                            background: url(../wp-content/uploads/2017/04/11-80x60.jpg) 0 0 no-repeat;
                        }
                        </style>
                        <div id="tdi_8" class="td-gallery td-slide-on-3-columns">
                            <div class="post_td_gallery">
                                <div class="td-gallery-slide-top">
                                    <div class="td-gallery-title"></div>
                                    <div class="td-gallery-controls-wrapper">
                                        <div class="td-gallery-slide-count">
                                            <span class="td-gallery-slide-item-focus">1</span>
                                            of 6
                                        </div>
                                        <div class="td-gallery-slide-prev-next-but">
                                            <i class="td-icon-left doubleSliderPrevButton"></i>
                                            <i class="td-icon-right doubleSliderNextButton"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="td-doubleSlider-1">
                                    <div class="td-slider">
                                        <div class="td-slide-item td-item1">
                                            <figure class="td-slide-galery-figure td-slide-popup-gallery">
                                                <a class="slide-gallery-image-link"
                                                    href="../wp-content/uploads/2017/04/p5.jpg" title="p5" data-caption
                                                    data-description>
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2017/04/p5-1068x528.jpg" srcset="
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p5.jpg          1068w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p5-300x148.jpg   300w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p5-768x380.jpg   768w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p5-1024x506.jpg 1024w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p5-324x160.jpg   324w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p5-696x344.jpg   696w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p5-850x420.jpg   850w
                                  " sizes="(max-width: 1068px) 100vw, 1068px" alt />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="td-slide-item td-item2">
                                            <figure class="td-slide-galery-figure td-slide-popup-gallery">
                                                <a class="slide-gallery-image-link"
                                                    href="../wp-content/uploads/2017/04/p4-1.jpg" title="p4"
                                                    data-caption data-description>
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2017/04/p4-1-1068x1000.jpg" srcset="
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-1.jpg          1068w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-1-300x281.jpg   300w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-1-768x719.jpg   768w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-1-1024x959.jpg 1024w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-1-696x652.jpg   696w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-1-449x420.jpg   449w
                                  " sizes="(max-width: 1068px) 100vw, 1068px" alt />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="td-slide-item td-item3">
                                            <figure class="td-slide-galery-figure td-slide-popup-gallery">
                                                <a class="slide-gallery-image-link"
                                                    href="../wp-content/uploads/2017/04/p3-1.jpg" title="p3"
                                                    data-caption data-description>
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2017/04/p3-1-1068x1000.jpg" srcset="
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p3-1.jpg          1068w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p3-1-300x281.jpg   300w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p3-1-768x719.jpg   768w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p3-1-1024x959.jpg 1024w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p3-1-696x652.jpg   696w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p3-1-449x420.jpg   449w
                                  " sizes="(max-width: 1068px) 100vw, 1068px" alt />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="td-slide-item td-item4">
                                            <figure class="td-slide-galery-figure td-slide-popup-gallery">
                                                <a class="slide-gallery-image-link"
                                                    href="../wp-content/uploads/2017/04/p4.jpg" title="p4" data-caption
                                                    data-description>
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2017/04/p4-1068x1554.jpg" srcset="
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4.jpg          1068w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-206x300.jpg   206w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-768x1117.jpg  768w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-704x1024.jpg  704w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-696x1013.jpg  696w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/p4-289x420.jpg   289w
                                  " sizes="(max-width: 1068px) 100vw, 1068px" alt />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="td-slide-item td-item5">
                                            <figure class="td-slide-galery-figure td-slide-popup-gallery">
                                                <a class="slide-gallery-image-link"
                                                    href="../wp-content/uploads/2017/04/12.jpg" title="12" data-caption
                                                    data-description>
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2017/04/12-1068x712.jpg" srcset="
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/12.jpg          1068w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/12-300x200.jpg   300w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/12-768x512.jpg   768w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/12-1024x683.jpg 1024w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/12-696x464.jpg   696w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/12-630x420.jpg   630w
                                  " sizes="(max-width: 1068px) 100vw, 1068px" alt />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="td-slide-item td-item6">
                                            <figure class="td-slide-galery-figure td-slide-popup-gallery">
                                                <a class="slide-gallery-image-link"
                                                    href="../wp-content/uploads/2017/04/11.jpg" title="11" data-caption
                                                    data-description>
                                                    <img decoding="async"
                                                        src="../wp-content/uploads/2017/04/11-1068x601.jpg" srcset="
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/11.jpg          1068w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/11-300x169.jpg   300w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/11-768x432.jpg   768w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/11-1024x576.jpg 1024w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/11-696x392.jpg   696w,
                                    https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/11-746x420.jpg   746w
                                  " sizes="(max-width: 1068px) 100vw, 1068px" alt />
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="td-doubleSlider-2">
                                    <div class="td-slider">
                                        <div class="td-button td-item1">
                                            <div class="td-border"></div>
                                        </div>
                                        <div class="td-button td-item2">
                                            <div class="td-border"></div>
                                        </div>
                                        <div class="td-button td-item3">
                                            <div class="td-border"></div>
                                        </div>
                                        <div class="td-button td-item4">
                                            <div class="td-border"></div>
                                        </div>
                                        <div class="td-button td-item5">
                                            <div class="td-border"></div>
                                        </div>
                                        <div class="td-button td-item6">
                                            <div class="td-border"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                            Towards the end of the day a storm began rolling in so after
                            having dinner in the camper (spaghetti bolognese!) we
                            decided to get ourselves a little closer home so we can cut
                            down on the driving the next day. We stopped in a town with
                            a Walmart and asked them if we could park overnight there.
                            After we parked we realized that our grey water tank was
                            overflowing and the water was backing up into the sink (not
                            cool). We headed out to a local dump station and figured out
                            how to dump the grey and black water from the RV before
                            spending the night playing games and hanging out at the
                            Walmart parking lot.
                        </p>
                        <p>
                            It was a lot of fun hanging out in the RV with everyone and
                            getting out into nature to shoot some photos!
                        </p>
                    </div>
                    <footer>
                        <div class="td-post-source-tags"></div>
                        <div class="td-post-sharing-bottom">
                            <div id="td_social_sharing_article_bottom"
                                class="td-post-sharing td-ps-border td-ps-border-colored td-ps-icon-bg td-ps-text-color td-post-sharing-style20">
                                <div class="td-post-sharing-visible">
                                    <div
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-handler td-social-share-text">
                                        <div class="td-social-but-icon">
                                            <i class="td-icon-share"></i>
                                        </div>
                                        <div class="td-social-but-text">Share</div>
                                    </div>
                                    <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook"
                                        href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_photography%2Ftd-post-a-vision-in-green%2F"
                                        title="Facebook">
                                        <div class="td-social-but-icon">
                                            <i class="td-icon-facebook"></i>
                                        </div>
                                        <div class="td-social-but-text">Facebook</div>
                                    </a><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-twitter"
                                        href="https://twitter.com/intent/tweet?text=A+Vision+in+Green&amp;url=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_photography%2Ftd-post-a-vision-in-green%2F&amp;via=Newspaper+Photography+Demo"
                                        title="Twitter">
                                        <div class="td-social-but-icon">
                                            <i class="td-icon-twitter"></i>
                                        </div>
                                        <div class="td-social-but-text">Twitter</div>
                                    </a><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-pinterest"
                                        href="https://pinterest.com/pin/create/button/?url=https://demo.tagdiv.com/newspaper_photography/td-post-a-vision-in-green/&amp;media=https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/30.jpg&amp;description=A+Vision+in+Green"
                                        title="Pinterest">
                                        <div class="td-social-but-icon">
                                            <i class="td-icon-pinterest"></i>
                                        </div>
                                        <div class="td-social-but-text">Pinterest</div>
                                    </a><a
                                        class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-whatsapp"
                                        href="https://api.whatsapp.com/send?text=A+Vision+in+Green%20%0A%0A%20https://demo.tagdiv.com/newspaper_photography/td-post-a-vision-in-green/"
                                        title="WhatsApp">
                                        <div class="td-social-but-icon">
                                            <i class="td-icon-whatsapp"></i>
                                        </div>
                                        <div class="td-social-but-text">WhatsApp</div>
                                    </a>
                                </div>
                                <div class="td-social-sharing-hidden">
                                    <ul class="td-pulldown-filter-list"></ul>
                                    <a class="td-social-sharing-button td-social-handler td-social-expand-tabs" href="#"
                                        data-block-uid="td_social_sharing_article_bottom" title="More">
                                        <div class="td-social-but-icon">
                                            <i class="td-icon-plus td-social-expand-tabs-icon"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="td-block-row td-post-next-prev">
                            <div class="td-block-span6 td-post-prev-post">
                                <div class="td-post-next-prev-content">
                                    <span>Previous article</span><a
                                        href="../td-post-calling-all-hands/index.html">Calling All Hands</a>
                                </div>
                            </div>
                            <div class="td-next-prev-separator"></div>
                            <div class="td-block-span6 td-post-next-post">
                                <div class="td-post-next-prev-content">
                                    <span>Next article</span><a
                                        href="../td-post-miniature-photography/index.html">Miniature Photography</a>
                                </div>
                            </div>
                        </div>
                        <div class="td-author-name vcard author" style="display: none">
                            <span class="fn"><a href="../author/admin/index.html">Emily Hove</a></span>
                        </div>
                        <span class="td-page-meta" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <meta itemprop="name" content="Emily Hove" />
                            <meta itemprop="url" content="../author/admin/index.html" />
                        </span>
                        <meta itemprop="datePublished" content="2017-04-03T13:39:51+00:00" />
                        <meta itemprop="dateModified" content="2017-04-06T07:01:39+00:00" />
                        <meta itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage"
                            itemid="index.html" /><span class="td-page-meta" itemprop="publisher" itemscope
                            itemtype="https://schema.org/Organization"><span class="td-page-meta" itemprop="logo"
                                itemscope itemtype="https://schema.org/ImageObject">
                                <meta itemprop="url" content="../wp-content/uploads/2017/04/logo-header.png" />
                            </span>
                            <meta itemprop="name" content="Newspaper Photography Demo" />
                        </span>
                        <meta itemprop="headline " content="A Vision in Green" /><span class="td-page-meta"
                            itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                            <meta itemprop="url" content="wp-content/uploads/2017/04/30.jpg" />
                            <meta itemprop="width" content="1068" />
                            <meta itemprop="height" content="712" />
                        </span>
                    </footer>
                    <div class="td_block_wrap td_block_related_posts td-related-full-width tdi_10 td_with_ajax_pagination td-pb-border-top td_block_template_2"
                        data-td-block-uid="tdi_10">
                        <script>
                        var block_tdi_10 = new tdBlock();
                        block_tdi_10.id = "tdi_10";
                        block_tdi_10.atts =
                            '{"limit":5,"ajax_pagination":"next_prev","live_filter":"cur_post_same_categories","td_ajax_filter_type":"td_custom_related","class":"td-related-full-width tdi_10","td_column_number":5,"block_type":"td_block_related_posts","live_filter_cur_post_id":317,"live_filter_cur_post_author":"1","block_template_id":"","header_color":"","ajax_pagination_infinite_stop":"","offset":"","td_ajax_preloading":"","td_filter_default_txt":"","td_ajax_filter_ids":"","el_class":"","color_preset":"","ajax_pagination_next_prev_swipe":"","border_top":"","css":"","tdc_css":"","tdc_css_class":"tdi_10","tdc_css_class_style":"tdi_10_rand_style"}';
                        block_tdi_10.td_column_number = "5";
                        block_tdi_10.block_type = "td_block_related_posts";
                        block_tdi_10.post_count = "5";
                        block_tdi_10.found_posts = "11";
                        block_tdi_10.header_color = "";
                        block_tdi_10.ajax_pagination_infinite_stop = "";
                        block_tdi_10.max_num_pages = "3";
                        tdBlocksArray.push(block_tdi_10);
                        </script>
                        <h4 class="td-related-title td-block-title">
                            <a id="tdi_11" class="td-related-left td-cur-simple-item" data-td_filter_value
                                data-td_block_id="tdi_10" href="#">Related Articles</a><a id="tdi_12"
                                class="td-related-right" data-td_filter_value="td_related_more_from_author"
                                data-td_block_id="tdi_10" href="#">More From Author</a>
                        </h4>

                        <div id="tdi_10" class="td_block_inner">
                            <div class="td-related-row">

                                <?php
                      $retartical = mysqli_query($con, "SELECT * FROM news WHERE STATUS=1 AND popular=1 ORDER BY entry_date DESC LIMIT 5");
                      while ($rowartical = mysqli_fetch_array($retartical)) {
                    ?>

                                <div class="td-related-span4">
                                    <div class="td_module_related_posts td-animation-stack td_mod_related_posts">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb">
                                                <a href="<?php echo $rowartical['href'] . '?id=' . $rowartical['id']; ?>"
                                                    rel="bookmark" class="td-image-wrap"
                                                    title="<?php echo $rowartical['Title']; ?>">



                                                    <?php 
                                                    $logonew=$rowartical['image_url'];
                                                if (!empty($logonew) && file_exists("Admin/uploads/$logonew")) {

                                                    ?>
                                                    <img class="entry-thumb"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC"
                                                        alt title="<?php echo $rowartical['Title']; ?>"
                                                        data-type="image_tag"
                                                        data-img-url="Admin/uploads/<?php echo $logonew; ?>" width="218"
                                                        height="150" />

                                                    <?php
                                                    } else {
                                                    ?>

                                                    <img class="entry-thumb"
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANoAAACWAQMAAACCSQSPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABpJREFUWMPtwQENAAAAwiD7p7bHBwwAAAAg7RD+AAGXD7BoAAAAAElFTkSuQmCC"
                                                        alt title="<?php echo $rowartical['Title']; ?>"
                                                        data-type="image_tag" data-img-url="<?php echo $logonew ?>"
                                                        width="218" height="150" />



                                                    <?php
                                                    }
                                                    ?>







                                                </a>
                                            </div>
                                            <a href="<?php echo $rowartical['ohref'] . '?id=' . $rowartical['photo_down_name']; ?>"
                                                class="td-post-category"><?php echo $rowartical['photo_down_name']; ?></a>
                                        </div>
                                        <div class="item-details">
                                            <h3 class="entry-title td-module-title">
                                                <a href="<?php echo $rowartical['href'] . '?id=' . $rowartical['id']; ?>"
                                                    rel="bookmark"
                                                    title="<?php echo $rowartical['Title']; ?>"><?php echo $rowartical['Title']; ?></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div class="td-next-prev-wrap">
                            <a href="#" class="td-ajax-prev-page ajax-page-disabled" aria-label="prev-page"
                                id="prev-page-tdi_10" data-td_block_id="tdi_10"><i
                                    class="td-next-prev-icon td-icon-font td-icon-menu-left"></i></a><a href="#"
                                class="td-ajax-next-page" aria-label="next-page" id="next-page-tdi_10"
                                data-td_block_id="tdi_10"><i
                                    class="td-next-prev-icon td-icon-font td-icon-menu-right"></i></a>
                        </div>
                    </div>
                    <div class="comments" id="comments">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">
                                Leave A Reply
                                <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond"
                                        style="display: none">Cancel reply</a></small>
                            </h3>
                            <form action="https://demo.tagdiv.com/newspaper_photography/wp-comments-post.php"
                                method="post" id="commentform" class="comment-form" novalidate>
                                <div class="clearfix"></div>
                                <div class="comment-form-input-wrap td-form-comment">
                                    <textarea placeholder="Comment:" id="comment" name="comment" cols="45" rows="8"
                                        aria-required="true"></textarea>
                                    <div class="td-warning-comment">
                                        Please enter your comment!
                                    </div>
                                </div>
                                <div class="comment-form-input-wrap td-form-author">
                                    <input class id="author" name="author" placeholder="Name:*" type="text" value
                                        size="30" aria-required="true" />
                                    <div class="td-warning-author">
                                        Please enter your name here
                                    </div>
                                </div>
                                <div class="comment-form-input-wrap td-form-email">
                                    <input class id="email" name="email" placeholder="Email:*" type="text" value
                                        size="30" aria-required="true" />
                                    <div class="td-warning-email-error">
                                        You have entered an incorrect email address!
                                    </div>
                                    <div class="td-warning-email">
                                        Please enter your email address here
                                    </div>
                                </div>
                                <div class="comment-form-input-wrap td-form-url">
                                    <input class id="url" name="url" placeholder="Website:" type="text" value
                                        size="30" />
                                </div>
                                <p class="comment-form-cookies-consent">
                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                        type="checkbox" value="yes" /><label for="wp-comment-cookies-consent">Save my
                                        name, email, and website in this browser for
                                        the next time I comment.</label>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit"
                                        value="Post Comment" />
                                    <input type="hidden" name="comment_post_ID" value="317" id="comment_post_ID" />
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>


<?php
     include("dashboard/footer.php");
?>