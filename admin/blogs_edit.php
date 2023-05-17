<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$image_upload_path = "uploads/images/";
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog Details</h6>
        </div>
    </div>
    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">

                <div class="card-body">

                    <?php
                    if (isset($_POST['blog_edit_btn'])) {
                        $id = $_POST['blog_edit_id'];
                        $query = "SELECT * FROM blogs WHERE id = $id ";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $row) {
                    ?>
                            <form action="form-action.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="edit_blog_id" value="<?php echo $row['id'] ?>">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Blog Title</label>
                                        <input type="text" class="form-control" name="edit_blog_title" value="<?php echo $row['blog_title'] ?>" Required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Blog Date</label>
                                        <input type="date" class="form-control" name="edit_blog_date" value="<?php echo $row['blog_db_date'] ?>" Required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="edit_blog_desc" class="form-control" Required>
                                    <?php
                                    echo $row['description'];
                                    ?>
                                    </textarea>

                                </div>
                                <div class="form-row">
                                    <label> Upload Image (jpg, jpeg & png formats only, 750x450 px) </label>
                                    <input type="file" name="blog_image" id="blog_image" class="form-control" value="<?php echo $row['blog_db_image'] ?>">
                                </div>
                                <div class="modal-footer">
                                    <a href="blogs.php">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </a>
                                    <button type="submit" name="update_blogs_btn" class="btn btn-success">Update</button>
                                </div>
                            </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>