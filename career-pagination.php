<?php

include('admin/config/dbconfig.php');
$career_image_path = "admin/uploads/images/career/";

$sql = "SELECT * FROM careers";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $rowsPerPage = 1;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $startIndex = ($currentPage - 1) * $rowsPerPage;

    $sql .= " LIMIT $startIndex, $rowsPerPage";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

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
        }
    }
}
?>