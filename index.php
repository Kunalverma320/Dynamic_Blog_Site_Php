<?php
include("dashboard/header.php");
// error_reporting(0);
include_once("config.php");
// header('Content-Type: image/jpeg');

?>

<div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
    <div class="tdc-content-wrap">
        <div id="tdi_8" class="tdc-row stretch_row_content td-stretch-content">
            <div class="vc_row tdi_9 wpb_row td-pb-row">

                <div class="vc_column tdi_11 wpb_column vc_column_container tdc-column td-pb-span12">

                    <div class="wpb_wrapper">
                        <div class="td_block_wrap td_block_big_grid_fl_5 tdi_12 td-grid-style-1 td-hover-1 td-big-grids-fl td-big-grids-scroll td-big-grids-margin td-pb-border-top td_block_template_2"
                            data-td-block-uid="tdi_12">
                            <style></style>
                            <div id="tdi_12" class="td_block_inner">
                                <?php
                              $ret=mysqli_query($con,"select * from news where status=1 limit 5");
                              while($row=mysqli_fetch_array($ret))
                           
                              {
                              ?>
                                <div class="td-big-grid-wrapper td-posts-5">
                                    <div
                                        class="td_module_mx21 td_module_wrap td-animation-stack td-big-grid-post-0 td-big-grid-post td-mx-17">
                                        <div class="td-module-image">
                                            <div class="td-module-thumb">
                                                <a href="<?php echo $row['href'] . '?id=' . $row['id']; ?>"
                                                    rel="bookmark" class="td-image-wrap"
                                                    title="<?php echo $row['Title']; ?>"><span
                                                        class="entry-thumb td-thumb-css" data-type="css_image"
                                                        data-img-url="<?php echo $row['image_url']; ?>"></span></a>
                                            </div>
                                        </div>
                                        <div class="td-meta-info-container">
                                            <div class="td-meta-align">
                                                <div class="td-big-grid-meta">
                                                    <h3 class="entry-title td-module-title">
                                                        <a href="<?php echo $row['href'] . '?id=' . $row['id']; ?>"
                                                            rel="bookmark"
                                                            title="<?php echo $row['Title']; ?>"><?php echo $row['Title']; ?></a>
                                                    </h3>
                                                </div>
                                                <div class="td-module-meta-info">
                                                    <span class="td-post-author-name"><a
                                                            href="<?php echo $row['ahref']; ?>"><?php echo $row['author_name']; ?></a>
                                                        <span>-</span>
                                                    </span>
                                                    <span class="td-post-date"><time
                                                            class="entry-date updated td-module-date"
                                                            datetime="2017-04-03T13:39:51+00:00"><?php echo date("F j, Y", strtotime($row['entry_date'])); ?></time></span>
                                                    <span class="td-post-author-name" style="color:white"><i
                                                            class="fa fa-eye" style="color:red"></i></i>
                                                        <?php echo $row['views']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php

}
?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tdi_13" class="tdc-row">
        <div class="vc_row tdi_14 td-photography-intro wpb_row td-pb-row">
            <style scoped>

            </style>
            <!-- <div class="vc_column tdi_16 wpb_column vc_column_container tdc-column td-pb-span4">

                <div class="wpb_wrapper">
                    <div class="wpb_wrapper td_block_single_image td_block_wrap td-animation-stack td_block_wrap vc_single_image tdi_17 td-photography-into-image td-single-image- td-pb-border-top td_block_template_2"
                        data-td-block-uid="tdi_17">
                        <span class="td_single_image_bg td-lazy-img" data-type="css_image"
                            data-img-url="https://demo.tagdiv.com/newspaper_photography/wp-content/uploads/2017/04/author-big-1.jpg"></span>

                    </div>
                </div>
            </div>
            <div class="vc_column tdi_19 wpb_column vc_column_container tdc-column td-pb-span8">

                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_text_with_title tdi_20 tagdiv-type td-pb-border-top td_block_template_2"
                        data-td-block-uid="tdi_20">


                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title">
                                <span class="td-pulldown-size">Hi, I&#x27;m Emily Hove</span>
                            </h4>
                        </div>
                        <div class="td_mod_wrap td-fix-index">
                            <p>
                                I’m a P<span data-dobid="hdw">rofessional</span>
                                News Writer who likes to do things differently.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur.
                            </p>
                            <p>
                                Follow me on <a href="#">Facebook</a>,
                                <a href="#">Twitter </a>and <a href="#">Instagram</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div id="tdi_21" class="tdc-row">
        <div class="vc_row tdi_22 wpb_row td-pb-row">
            <style scoped>

            </style>
            <div class="vc_column tdi_24 wpb_column vc_column_container tdc-column td-pb-span12">

                <div class="wpb_wrapper">
                    <div class="td_block_wrap td_block_24 tdi_25 td-pb-border-top td_block_template_2"
                        data-td-block-uid="tdi_25">
                        <style></style>
                        <style></style>
                        <script>

                        </script>
                        <div class="td-block-title-wrap">
                            <h4 class="td-block-title">
                                <span class="td-pulldown-size">Popular News</span>
                            </h4>
                        </div>
                        <div id="tdi_25" class="td_block_inner td-column-3 td-opacity-author">
                            <?php
                              $retnew=mysqli_query($con,"SELECT * FROM news WHERE STATUS=1 AND popular=1 ORDER BY entry_date DESC");
                              while($rownew=mysqli_fetch_array($retnew))
                              {
                              
                              ?>
                            <div class="td_module_19 td_module_wrap td-animation-stack">
                                <div class="meta-info-container">
                                    <div class="td-module-image">
                                        <div class="td-module-thumb">
                                            <a href="<?php echo $rownew['href'] . '?id=' . $rownew['id']. '&title=' . $rownew['Title']; ?>"
                                                rel="bookmark" class="td-image-wrap"
                                                title="<?php echo $rownew['Title']; ?>">
                                                <?php 
                                                    $logonew=$rownew['image_url'];
                                                if (!empty($logonew) && file_exists("Admin/uploads/$logonew")) {

                                                    ?>
                                                <img fetchpriority="high" decoding="async" class="entry-thumb"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhYAAAHOAQMAAAD+DNJPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAADVJREFUeNrtwQENAAAAwiD7p7bHBwwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAICEA3q4AAGK1CNoAAAAAElFTkSuQmCC"
                                                    alt title="<?php echo $rownew['Title']; ?>" data-type="image_tag"
                                                    data-img-url="Admin/uploads/<?php echo $logonew; ?>" width="534"
                                                    height="462" />


                                                <?php
                                                    } else {
                                                    ?>
                                                <img fetchpriority="high" decoding="async" class="entry-thumb"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhYAAAHOAQMAAAD+DNJPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAADVJREFUeNrtwQENAAAAwiD7p7bHBwwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAICEA3q4AAGK1CNoAAAAAElFTkSuQmCC"
                                                    alt title="<?php echo $rownew['Title']; ?>" data-type="image_tag"
                                                    data-img-url="<?php echo $logonew ?>" width="534" height="462" />

                                                <?php
                                                    }
                                                    ?>

                                            </a>
                                        </div>
                                        <a href="<?php echo $rownew['ohref'] . '?id=' . $rownew['photo_down_name']. '&title=' . $rownew['photo_down_name']; ?>"
                                            class="td-post-category"><?php echo $rownew['photo_down_name']; ?></a>
                                    </div>
                                    <div class="td-item-details">
                                        <div class="td-module-meta-info">
                                            <h3 class="entry-title td-module-title">
                                                <a href="<?php echo $rownew['href'] . '?id=' . $rownew['id']; ?>"
                                                    rel="bookmark"
                                                    title="<?php echo $rownew['Title']; ?>"><?php echo $rownew['Title']; ?></a>
                                            </h3>
                                            <span class="td-post-author-name"><a
                                                    href="<?php echo $rownew['ahref']; ?>"><?php echo $rownew['author_name']; ?></a>
                                                <span>-</span>
                                            </span>
                                            <span class="td-post-date"><time class="entry-date updated td-module-date"
                                                    datetime="2017-04-03T13:39:51+00:00">
                                                    <?php echo $rownew['entry_date']; ?></time></span>
                                            <span class="td-post-author-name"><i class="fa fa-eye"></i></i>
                                                <?php echo $rownew['views']; ?></span>
                                        </div>
                                        <div class="td-excerpt">
                                            <?php echo $rownew['comment']; ?>
                                        </div>
                                        <div class="td-read-more">
                                            <a
                                                href="<?php echo $rownew['href'] . '?id=' . $rownew['id'] . '&title=' . $rownew['Title']; ?>">Read
                                                more</a>
                                        </div>
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
    <div id="tdi_26" class="tdc-row">
        <div class="vc_row tdi_27 wpb_row td-pb-row">

            <div class="vc_column tdi_29 wpb_column vc_column_container tdc-column td-pb-span12">
                <style scoped>

                </style>
                <div class="wpb_wrapper">
                    <div
                        class="wpb_wrapper td_block_separator td_block_wrap vc_separator tdi_31 td_separator_solid td_separator_center">
                        <span style="
                        border-color: #ebebeb;
                        border-width: 1px;
                        width: 100%;
                      "></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="td-container td-pb-article-list">
    <div class="td-pb-row">
        <div class="td-pb-span12 td-main-content" role="main">
            <div class="td-ss-main-content td_block_template_2">
                <div class="td-block-title-wrap">
                    <h4 class="td-block-title">
                        <span class="td-pulldown-size">Latest Articles</span>
                    </h4>
                </div>

                <div class="td-block-row">
                    <?php

                    $articles_per_page = 9; // Change this value according to your requirement
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $offset = ($current_page - 1) * $articles_per_page;

                    // Fetch articles for the current page
                    $retartical = mysqli_query($con, "SELECT * FROM articles WHERE STATUS=1 AND popular=1 ORDER BY entry_date DESC LIMIT $offset, $articles_per_page");

                    // Loop through fetched articles
                    while ($rowartical = mysqli_fetch_array($retartical)) {
                    ?>
                    <div class="td-block-span4">
                        <div class="td_module_3 td_module_wrap td-animation-stack">
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
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAADrAQMAAAArGX0KAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACBJREFUaN7twTEBAAAAwiD7pzbEXmAAAAAAAAAAAACQHSaOAAGSp1GBAAAAAElFTkSuQmCC"
                                            alt title="<?php echo $rowartical['Title']; ?>" data-type="image_tag"
                                            data-img-url="Admin/uploads/<?php echo $logonew; ?>" width="324"
                                            height="235" />

                                        <?php
                                                    } else {
                                                    ?>

                                        <img class="entry-thumb"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAADrAQMAAAArGX0KAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACBJREFUaN7twTEBAAAAwiD7pzbEXmAAAAAAAAAAAACQHSaOAAGSp1GBAAAAAElFTkSuQmCC"
                                            alt title="<?php echo $rowartical['Title']; ?>" data-type="image_tag"
                                            data-img-url="<?php echo $logonew ?>" width="324" height="235" />

                                        <?php
                                                    }
                                                    ?>

                                    </a>
                                </div>
                                <a href="<?php echo $rowartical['ohref'] . '?id=' . $rowartical['photo_down_name']; ?>"
                                    class="td-post-category"><?php echo $rowartical['photo_down_name']; ?></a>
                            </div>
                            <h3 class="entry-title td-module-title">
                                <a href="<?php echo $rowartical['href'] . '?id=' . $rowartical['id']; ?>" rel="bookmark"
                                    title="<?php echo $rowartical['Title']; ?>"><?php echo $rowartical['Title']; ?></a>
                            </h3>
                            <div class="td-module-meta-info">
                                <span class="td-post-author-name"><a
                                        href="<?php echo $rowartical['ahref']; ?>"><?php echo $rowartical['author_name']; ?></a>
                                    <span>-</span>
                                </span>
                                <span class="td-post-date"><time class="entry-date updated td-module-date"
                                        datetime="2017-04-03T13:40:04+00:00"><?php echo $rowartical['entry_date']; ?></time></span>
                                <span class="td-post-author-name"><i class="fa fa-eye"></i></i>
                                    <?php echo $rowartical['views']; ?></span>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
                </div>
                <?php
                // Calculate total number of pages
                $total_articles_query = mysqli_query($con, "SELECT COUNT(*) as total FROM articles WHERE STATUS=1 AND popular=1");
                $total_articles = mysqli_fetch_assoc($total_articles_query)['total'];
                $total_pages = ceil($total_articles / $articles_per_page);
                ?>
                <div class="page-nav td-pb-padding-side">
                    <?php
                    for ($i = 1; $i <= $total_pages; $i++) {
                        $active_class = ($current_page == $i) ? 'current' : '';
                        echo '<a href="?page=' . $i . '" class="page ' . $active_class . '" title="' . $i . '">' . $i . '</a>';
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>

            </div>

        </div>

    </div>
</div>


</div>
<?php
     include("dashboard/footer.php");
?>