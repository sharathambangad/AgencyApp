<?php

include('admin/config/dbconfig.php');

$limit = 2;

if (isset($_GET["page"])) {
    $page_number  = $_GET["page"];
} else {
    $page_number = 1;
};

$initial_page = ($page_number - 1) * $limit;

$sql = "SELECT * FROM careers LIMIT $initial_page, $limit";

$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_array($result)) {

?>
    <div class="post">
        <div class="post-header clearfix">
            <h2 class="post-title">
                <?php echo $row['post']; ?>
            </h2>
        </div>
        <!-- career image start -->
        <div class="post-image-wrapper">
            <img src="images/blog/blog1.jpg" class="img-responsive" alt="" />
            <!--<?php echo '<img src = "' . $career_image_path . $row['post_image'] . '" class="img-responsive-career" alt="">' ?> -->
            <span class="blog-date"><a href="#"> May 03, 2015</a></span>
        </div>
        <!-- career image end -->

    </div>


<?php
};
?>