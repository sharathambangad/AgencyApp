<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
$image_upload_path = "uploads/images/";
?>


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Portfolio Details</h6>
        </div>
    </div>
    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">

                <div class="card-body">

                    <?php
                    if (isset($_POST['portfolio_edit_btn'])) {
                        $id = $_POST['portfolio_edit_id'];
                        $query = "SELECT * FROM portfolio WHERE id = $id ";
                        $query_run = mysqli_query($connection, $query);

                        foreach ($query_run as $row) {
                    ?>
                            <form action="form-action.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="edit_portfolio_id" value="<?php echo $row['id'] ?>">

                                <div class="form-group">
                                    <label> Client Name </label>
                                    <input type="text" name="edit_portfolio_client_name" class="form-control" value="<?php echo $row['client_name'] ?>">
                                </div>

                                <div class="form-group">
                                    <label> Upload Image (jpg, jpeg & png formats only,550x500 px) </label>
                                    <input type="file" name="portfolio_client_image" id="portfolio_client_image" class="form-control" value="<?php echo $row['client_image'] ?>">
                                </div>

                                <button type="submit" name="update_portfolio_btn" class="btn btn-success float-right">Update</button>
                                <a href="portfolios.php" class="btn btn-secondary float-right mr-1"> Cancel </a>

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