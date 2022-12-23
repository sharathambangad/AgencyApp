<?php

include('admin/config/dbconfig.php');
$career_image_path = "admin/uploads/images/career/";

$limit = 2;

if (isset($_GET["page"])) {
    $page_number  = $_GET["page"];
} else {
    $page_number = 1;
};

$initial_page = ($page_number - 1) * $limit;

$sql = "SELECT * FROM careers ORDER BY post_date DESC LIMIT $initial_page, $limit";

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
            <!-- <img src="images/blog/blog1.jpg" class="img-responsive" alt="" /> -->
            <?php echo '<img src = "' . $career_image_path . $row['post_image'] . '" class="img-responsive-career" alt="">' ?>
            <?php
                $date=date_create($row['post_date']);
            ?>
            <span class="blog-date"><?php echo date_format($date, "d M Y"); ?></span>
        </div>
        <!-- career image end -->

    </div>


<?php
};
?>