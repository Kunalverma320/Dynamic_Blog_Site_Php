<?php
     include("dashboard/header.php");
     include_once("config.php");
     error_reporting(0);
?>
<?php
if(isset($_GET['id'])) {
     $down_up_name = urldecode($_GET['id']);
 
 $ret = mysqli_query($con, "(SELECT * FROM news WHERE photo_down_name='$down_up_name' AND STATUS=1)
 UNION
 (SELECT * FROM articles WHERE photo_down_name='$down_up_name' AND STATUS=1)");

$rows = [];
while ($row = mysqli_fetch_array($ret)) {
    $rows[] = $row;
}
?>
<div class="td-category-header td-container-wrap">
    <div class="td-container">
        <div class="td-crumb-container">
            <div class="entry-crumbs">
                <span><a title class="entry-crumb" href="index.php">Home</a></span>
                <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i>
                <span class="td-bred-no-url-last"><?php echo $down_up_name; ?></span>
            </div>
        </div>
        <div class="td-category-title-holder" style="
    display: block;
">
            <h1 class="entry-title td-page-title"><?php echo $down_up_name; ?></h1>
        </div>
        <div class="td-pulldown-container">
            <div class="td-category-pulldown-filter td-wrapper-pulldown-filter">
                <div class="td-pulldown-filter-display-option">
                    <div class="td-subcat-more">
                        Latest <i class="td-icon-menu-down"></i>
                    </div>
                    <!-- <ul class="td-pulldown-filter-list">
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_9" data-td_block_id="tdi_8"
                                href="index.html">Latest</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_10" data-td_block_id="tdi_8"
                                href="index6fdd.html?filter_by=featured">Featured posts</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_11" data-td_block_id="tdi_8"
                                href="index6ca3.html?filter_by=popular">Most popular</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_12" data-td_block_id="tdi_8"
                                href="indexdcac.html?filter_by=popular7">7 days popular</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_13" data-td_block_id="tdi_8"
                                href="index8dd6.html?filter_by=review_high">By review score</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_14" data-td_block_id="tdi_8"
                                href="index5995.html?filter_by=random_posts">Random</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="td-main-content-wrap td-container-wrap">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12 td-main-content">
                <div class="td-ss-main-content">
                    <div class="td-block-row">
                        <?php
                         foreach ($rows as $row) {
                         ?>
                        <div class="td-block-span4">
                            <div class="td_module_3 td_module_wrap td-animation-stack">
                                <div class="td-module-image">
                                    <div class="td-module-thumb">
                                        <a href="<?php echo $row['href']. '?id=' . $row['id']; ?>" rel="bookmark" class="td-image-wrap"
                                            title="<?php echo $row['Title']; ?>"><img class="entry-thumb"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAADrAQMAAAArGX0KAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACBJREFUaN7twTEBAAAAwiD7pzbEXmAAAAAAAAAAAACQHSaOAAGSp1GBAAAAAElFTkSuQmCC"
                                                alt title="<?php echo $row['Title']; ?>" data-type="image_tag"
                                                data-img-url="<?php echo $row['image_url']; ?>" width="324"
                                                height="235" /></a>
                                    </div>
                                    <a href="index.php"
                                        class="td-post-category"><?php echo $row['photo_down_name']; ?></a>
                                </div>
                                <h3 class="entry-title td-module-title">
                                    <a href="<?php echo $row['href']. '?id=' . $row['id']; ?>" rel="bookmark"
                                        title="<?php echo $row['Title']; ?>"><?php echo $row['Title']; ?></a>
                                </h3>
                                <div class="td-module-meta-info">
                                    <span class="td-post-author-name"><a
                                            href="<?php echo $row['ahref']; ?>"><?php echo $row['author_name']; ?></a>
                                        <span>-</span>
                                    </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date"
                                            datetime="2017-04-03T13:39:51+00:00"><?php echo $row['entry_date']; ?></time></span>
                                </div>
                            </div>
                            
                        </div>
                        <?php
                         }
                         ?> 
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
else {
     $ret = mysqli_query($con, "(SELECT * FROM news WHERE STATUS=1)
 UNION
 (SELECT * FROM articles WHERE  STATUS=1)");

$rows = [];
while ($row = mysqli_fetch_array($ret)) {
    $rows[] = $row;
}
?>


<div class="td-category-header td-container-wrap">
    <div class="td-container">
        <div class="td-crumb-container">
            <div class="entry-crumbs">
                <span><a title class="entry-crumb" href="index.php">Home</a></span>
                <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i>
                <span class="td-bred-no-url-last"><?php echo $down_up_name; ?></span>
            </div>
        </div>
        <div class="td-category-title-holder" style="
    display: block;
">
            <h1 class="entry-title td-page-title"><?php echo $down_up_name; ?></h1>
        </div>
        <div class="td-pulldown-container">
            <div class="td-category-pulldown-filter td-wrapper-pulldown-filter">
                <div class="td-pulldown-filter-display-option">
                    <div class="td-subcat-more">
                        Latest <i class="td-icon-menu-down"></i>
                    </div>
                    <!-- <ul class="td-pulldown-filter-list">
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_9" data-td_block_id="tdi_8"
                                href="index.html">Latest</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_10" data-td_block_id="tdi_8"
                                href="index6fdd.html?filter_by=featured">Featured posts</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_11" data-td_block_id="tdi_8"
                                href="index6ca3.html?filter_by=popular">Most popular</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_12" data-td_block_id="tdi_8"
                                href="indexdcac.html?filter_by=popular7">7 days popular</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_13" data-td_block_id="tdi_8"
                                href="index8dd6.html?filter_by=review_high">By review score</a>
                        </li>
                        <li class="td-pulldown-filter-item">
                            <a class="td-pulldown-category-filter-link" id="tdi_14" data-td_block_id="tdi_8"
                                href="index5995.html?filter_by=random_posts">Random</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="td-main-content-wrap td-container-wrap">
    <div class="td-container">
        <div class="td-pb-row">
            <div class="td-pb-span12 td-main-content">
                <div class="td-ss-main-content">
                    <div class="td-block-row">


                        <?php
                         foreach ($rows as $row) {
                         ?>
                        <div class="td-block-span4">
                            <div class="td_module_3 td_module_wrap td-animation-stack">
                                <div class="td-module-image">
                                    <div class="td-module-thumb">
                                        <a href="<?php echo $row['href']. '?id=' . $row['id']; ?>" rel="bookmark" class="td-image-wrap"
                                            title="<?php echo $row['Title']; ?>"><img class="entry-thumb"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAADrAQMAAAArGX0KAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACBJREFUaN7twTEBAAAAwiD7pzbEXmAAAAAAAAAAAACQHSaOAAGSp1GBAAAAAElFTkSuQmCC"
                                                alt title="<?php echo $row['Title']; ?>" data-type="image_tag"
                                                data-img-url="<?php echo $row['image_url']; ?>" width="324"
                                                height="235" /></a>
                                    </div>
                                    <a href="index.php"
                                        class="td-post-category"><?php echo $row['photo_down_name']; ?></a>
                                </div>
                                <h3 class="entry-title td-module-title">
                                    <a href="<?php echo $row['href']. '?id=' . $row['id']; ?>" rel="bookmark"
                                        title="<?php echo $row['Title']; ?>"><?php echo $row['Title']; ?></a>
                                </h3>
                                <div class="td-module-meta-info">
                                    <span class="td-post-author-name"><a
                                            href="<?php echo $row['ahref']; ?>"><?php echo $row['author_name']; ?></a>
                                        <span>-</span>
                                    </span>
                                    <span class="td-post-date"><time class="entry-date updated td-module-date"
                                            datetime="2017-04-03T13:39:51+00:00"><?php echo $row['entry_date']; ?></time></span>
                                </div>
                            </div>
                            
                        </div>
                        <?php
                         }
                         ?> 
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 }
 ?>


<?php
     include("dashboard/footer.php");
?>