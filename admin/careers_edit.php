<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$image_upload_path = "uploads/images/";
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vaccancy Details</h6>
        </div>
    </div>
    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">

                <div class="card-body">

                    <?php
                    if (isset($_POST['careers_edit_btn'])) {
                        $id = $_POST['careers_edit_id'];
                        $query = "SELECT * FROM careers WHERE id = $id ";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $row) {
                    ?>
                            <form action="form-action.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="edit_careers_id" value="<?php echo $row['id'] ?>">

                                <div class="form-group">
                                    <label> Vaccancy Post </label>
                                    <input type="text" name="edit_careers_vaccancy_name" class="form-control" value="<?php echo $row['post'] ?>">
                                </div>

                                <div class="form-group">
                                    <label> Upload Image (jpg, jpeg & png formats only, 750x450 px) </label>
                                    <input type="file" name="careers_poster_image" id="careers_poster_image" class="form-control" value="<?php echo $row['post_image'] ?>">
                                </div>

                                <button type="submit" name="update_careers_btn" class="btn btn-success float-right">Update</button>
                                <a href="careers.php" class="btn btn-secondary float-right mr-1"> Cancel </a>


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