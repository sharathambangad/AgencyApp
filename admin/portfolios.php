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
        PORTFOLIOS
    </h1>

    <button type="button" class="btn btn-primary mb-3 " data-toggle="modal" data-target="#addportfolio">
        Add Portfolio
    </button>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <?php
                        $query = "SELECT * FROM portfolio";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Client Name </th>
                                    <th> Client Image </th>
                                    <th>EDIT</th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr id="row_id_<?php echo $row['id']; ?>">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['client_name']; ?></td>
                                            <td><?php echo '<img src = "' . $image_upload_path . 'portfolio/' . $row['client_image'] . '" width = "200px;" height = "50px;" alt = "PORTFOLIO IMAGE">' ?></td>
                                            <td>
                                                <form action="portfolios_edit.php" method="post">
                                                    <input type="hidden" name="portfolio_edit_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="portfolio_edit_btn" class="btn btn-primary"> <i class="fa fa-edit"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger portfolio_delete_btn" value="<?php echo $row['id']; ?>"> <i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo '<h4 class="bg-info mb-2 mt-2 text-white"> No Record Found </h4>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
    </div>
    <div class="modal fade" id="addportfolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label> Client Name </label>
                            <input type="text" name="portfolio_client_name" class="form-control" placeholder="Enter Name" Required>
                        </div>

                        <div class="form-group">
                            <label> Upload Image (jpg, jpeg & png formats only , 550x500 px) </label>
                            <input type="file" name="portfolio_client_image" class="form-control" Required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="portfolios.php">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" name="save_portfolio_btn" class="btn btn-success">Publish</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>