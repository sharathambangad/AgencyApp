<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">About Us - ClickForDern</h6>
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