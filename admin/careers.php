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
        JOB VACCANCIES
    </h1>

    <button type="button" class="btn btn-primary mb-3 " data-toggle="modal" data-target="#addjobs">
        Add New Job
    </button>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <?php
                        $query = "SELECT * FROM careers";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Vaccancy </th>
                                    <th> Poster </th>
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
                                            <td><?php echo $row['post']; ?></td>
                                            <td><?php echo '<img src = "' . $image_upload_path . 'career/' . $row['post_image'] . '" width = "200px;" height = "60px;" alt = "VACCANCY POSTER">' ?></td>
                                            <td>
                                                <form action=" careers_edit.php" method="post">
                                                    <input type="hidden" name="careers_edit_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="careers_edit_btn" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger careers_delete_btn" value="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
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
    <div class="modal fade" id="addjobs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label> Vaccancy Post </label>
                            <input type="text" name="careers_vaccancy_name" class="form-control" placeholder="Enter Post" Required>
                        </div>

                        <div class="form-group">
                            <label> Upload Image (jpg, jpeg & png formats only, 750x450 px) </label>
                            <input type="file" name="careers_poster_image" class="form-control" Required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="careers.php">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" name="save_careers_btn" class="btn btn-success">Publish</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>