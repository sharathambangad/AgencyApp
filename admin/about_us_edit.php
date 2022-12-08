<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$image_upload_path = "uploads/images/";
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profile Details</h6>
        </div>
    </div>
    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">

                <div class="card-body">

                    <?php
                    if (isset($_POST['team_edit_btn'])) {
                        $id = $_POST['team_edit_id'];
                        $query = "SELECT * FROM about_us WHERE id = $id ";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $row) {
                    ?>
                            <form action="form-action.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="edit_team_id" value="<?php echo $row['id'] ?>">

                                <div class="form-group">
                                    <label> Name </label>
                                    <input type="text" name="edit_team_member_name" class="form-control" value="<?php echo $row['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label> Designation </label>
                                    <input type="text" name="edit_team_member_desg" class="form-control" value="<?php echo $row['designation'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="edit_team_member_email" class="form-control checking_email" value="<?php echo $row['email'] ?>">
                                    <small class="error_email" style="color: red;"></small>
                                </div>
                                <div class="form-group">
                                    <label> Facebook </label>
                                    <input type="text" name="edit_team_member_facebook" class="form-control" value="<?php echo $row['fb_url'] ?>">
                                </div>
                                <div class="form-group">
                                    <label> Instagram </label>
                                    <input type="text" name="edit_team_member_instagram" class="form-control" value="<?php echo $row['ig_url'] ?>">
                                </div>

                                <div class="form-group">
                                    <label> Upload Image (jpg, jpeg & png formats only) </label>
                                    <input type="file" name="team_member_image" id="team_member_image" class="form-control" value="<?php echo $row['image'] ?>">
                                </div>

                                <button type="submit" name="update_team_btn" class="btn btn-success float-right">Update</button>
                                <a href="about_us.php" class="btn btn-secondary float-right mr-1"> Cancel </a>

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