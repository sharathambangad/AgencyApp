<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$image_upload_path = "uploads/images/";
?>

<!-- Begin Page Content -->

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        TEAM PROFILES <i class="fas fa-fw fa-users"></i>
    </h1>

    <button type="button" class="btn btn-primary mb-3 " data-toggle="modal" data-target="#addteamprofile">
        Add New Member
    </button>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive" id="team_table">
                        <?php
                        $query = "SELECT * FROM about_us";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Designation </th>
                                    <th> Image </th>
                                    <!-- <th> Email </th>
                                    <th> Facebook </th>
                                    <th> Instagram </th>
                                    <th> LinkedIn </th>
                                    <th> twitter </th> -->
                                    <th>Update</th>
                                    <th>Move to Trash</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr id="row_id_<?php echo $row['id']; ?>">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['designation']; ?></td>
                                            <td><?php echo '<img src = "' . $image_upload_path . 'team/' . $row['image'] . '" width = "100px;" height = "85px;" alt = "IMAGE">' ?></td>
                                            <!-- <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['fb_url']; ?></td>
                                            <td><?php echo $row['ig_url']; ?></td>
                                            <td><?php echo $row['linkedin']; ?></td>
                                            <td><?php echo $row['twitter']; ?></td> -->
                                            <td>
                                                <form action="about_us_edit.php" method="post">
                                                    <input type="hidden" name="team_edit_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="team_edit_btn" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger team_delete_btn" value="<?php echo $row['id']; ?>"> <i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="12"> No Profiles Found </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /.container-fluid -->


    <div class="modal fade" id="addteamprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="form-action.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="team_member_name" class="form-control" placeholder="Enter Name" Required>
                        </div>
                        <div class="form-group">
                            <label> Designation </label>
                            <input type="text" name="team_member_desg" class="form-control" placeholder="Enter Designation" Required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="team_member_email" class="form-control checking_email" placeholder="Enter Email" Required>
                            <small class="error_email" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label> Facebook </label>
                            <input type="text" name="team_member_facebook" class="form-control" placeholder="Enter Facebook profile" Required>
                        </div>
                        <div class="form-group">
                            <label> Instagram </label>
                            <input type="text" name="team_member_instagram" class="form-control" placeholder="Enter Instagram profile" Required>
                        </div>
                        <div class="form-group">
                            <label> LinkedIn </label>
                            <input type="text" name="team_member_linkedin" class="form-control" placeholder="Enter LinkedIn Profile" Required>
                        </div>
                        <div class="form-group">
                            <label> Twitter </label>
                            <input type="text" name="team_member_twitter" class="form-control" placeholder="Enter twitter profile" Required>
                        </div>

                        <div class="form-group">
                            <label> Upload Image (jpg, jpeg & png formats only. 260x260) </label>
                            <input type="file" name="team_member_image" class="form-control" Required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="about_us.php">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" name="save_team_btn" class="btn btn-success">Publish</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>