<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$image_upload_path = "uploads/images/";
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Service Details</h6>
        </div>
    </div>
    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">

                <div class="card-body">

                    <?php
                    if (isset($_POST['service_edit_btn'])) {
                        $id = $_POST['service_edit_id'];
                        $query = "SELECT * FROM service WHERE id = $id ";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $row) {
                    ?>
                            <form action="form-action.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="edit_service_id" value="<?php echo $row['id'] ?>">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Service</label>
                                        <input type="text" class="form-control" name="edit_service_name" value="<?php echo $row['service_name'] ?>" Required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Short Description</label>
                                        <input type="text" class="form-control" name="edit_service_short_desc" value="<?php echo $row['short_desc'] ?>" Required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="edit_service_desc" class="form-control" Required>
                                    <?php
                                    echo $row['description'];
                                    ?>
                                    </textarea>

                                </div>
                                <div class="form-group">
                                    <label> ICON SVG </label>
                                    <textarea name="edit_service_svg" class="form-control" Required>
                                    <?php
                                    echo $row['icon_svg'];
                                    ?>
                                    </textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label> Upload Image (jpg, jpeg & png formats only, 750x450 px) </label>
                                        <input type="file" name="service_image" id="service_image" class="form-control" value="<?php echo $row['service_image'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>SEO Keywords</label>
                                        <input type="text" class="form-control" name="edit_service_seo_keys" value="<?php echo $row['seo_keywords'] ?>" Required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="service.php">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                    </a>
                                    <button type="submit" name="update_service_btn" class="btn btn-success">Update</button>
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