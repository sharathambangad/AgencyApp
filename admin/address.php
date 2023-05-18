<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$image_upload_path = "uploads/images/flickr/";
?>


<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Recent Works - ClickForDern </h6>
        </div>
    </div>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">

                <div class="card-body">

                    <div class="table-responsive" id="flickr_table">
                        <?php
                        $query = "SELECT * FROM recent_works";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Recent Works </th>
                                    <th> Update (Image 400 x 400 px)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr id="row_id_<?php echo $row['id']; ?>">
                                            <td>
                                                <?php echo $row['id']; ?>
                                            </td>
                                            <td><?php echo '<img src = "' . $image_upload_path . $row['image'] . '" width = "100px;" height = "85px;" alt = "RECENET WORKS">' ?></td>

                                            <td>

                                                <form action="form-action.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="file" name="recent_image" class="form-control" Required>
                                                        <input type="hidden" name="recent_img_id" value="<?php echo $row['id']; ?>">

                                                    </div>
                                                    <button type="submit" name="update_recent_img_btn" class="btn btn-success float-right">Update</button>
                                                    <a href="address.php" class="btn btn-secondary float-right mr-1"> Cancel </a>

                                                </form>

                                            </td>

                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo '<h4 class="bg-info mb-2 mt-2 text-white"> No Record Found </h4>';
                                }
                                ?>
                            </tbody>
                            <tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Footer - ClickForDern</h6>
        </div>
    </div>
    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">

                <div class="card-body">

                    <?php

                    $query = "SELECT * FROM address WHERE id =1";
                    $query_run = mysqli_query($connection, $query);

                    foreach ($query_run as $row) {
                    ?>
                        <form action="form-action.php" method="POST">
                            <div class="form-group">
                                <label> Description </label>
                                <textarea name="about" class="form-control" placeholder="About ClickforDern" required> <?php echo $row['about_desc'] ?></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Mobile 1</label>
                                    <input type="text" class="form-control" name="mobile1" placeholder="Mobile No" value="<?php echo $row['mobile1'] ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mobile 2</label>
                                    <input type="text" class="form-control" name="mobile2" placeholder="Mobile No" value="<?php echo $row['mobile2'] ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control checking_email" name="email" placeholder="Email" value="<?php echo $row['email'] ?>" required>
                                <small class="error_email" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="1234 Main St" value="<?php echo $row['address'] ?>" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="<?php echo $row['twitter'] ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="<?php echo $row['facebook'] ?>" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>linkedin</label>
                                    <input type="text" class="form-control" name="linkedin" value="<?php echo $row['linkedin'] ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Pinterest</label>
                                    <input type="text" class="form-control" name="pintrest" value="<?php echo $row['pintrest'] ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Discord</label>
                                    <input type="text" class="form-control" name="discord" value="<?php echo $row['discord'] ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Google+</label>
                                    <input type="text" class="form-control" name="google" value="<?php echo $row['google'] ?>" required>
                                </div>
                            </div>


                            <button type="submit" name="update_address_btn" class="btn btn-success float-right">Update</button>
                            <a href="index-admin.php" class="btn btn-secondary float-right mr-1"> Cancel </a>
                        </form>

                    <?php
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