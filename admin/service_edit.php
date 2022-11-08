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
                    // if (isset($_POST['careers_edit_btn'])) {
                    //     $id = $_POST['careers_edit_id'];
                    //     $query = "SELECT * FROM careers WHERE id = $id ";
                    //     $query_run = mysqli_query($connection, $query);

                    //     foreach ($query_run as $row) {
                    ?>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary float-right">Sign in</button>
                            </form>

                    <?php
                    //     }
                    // }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>