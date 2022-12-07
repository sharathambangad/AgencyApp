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
        SERVICES
    </h1>

    <button type="button" class="btn btn-primary mb-3 " data-toggle="modal" data-target="#addteamprofile">
        Add New Service
    </button>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <?php
                        $query = "SELECT * FROM service";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-striped table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Service</th>
                                    <th> Service Image</th>
                                    <th> Icon</th>
                                    <th> Short Description </th>
                                    <th> Description</th>
                                    <th> SEO Keyword</th>
                                    <th> EDIT</th>
                                    <th> DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    while ($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                        <tr id="row_id_<?php echo $row['id']; ?>">
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['service_name']; ?></td>
                                            <td><?php echo '<img src = "' . $image_upload_path . 'services/' . $row['service_image'] . '" width = "200px;" height = "50px;" alt = "SERVICE IMAGE">' ?></td>
                                            <td><?php echo $row['icon_svg']; ?></td>
                                            <td><?php echo $row['short_desc']; ?></td>
                                            <td class="fulljustify">

                                                <?php echo $row['description']; ?>
                                            </td>
                                            <td><?php echo $row['seo_keywords']; ?></td>
                                            <td>
                                                <form action=" service_edit.php" method="post">
                                                    <input type="hidden" name="service_edit_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="service_edit_btn" class="btn btn-primary"> <i class="fa fa-edit"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger service_delete_btn" value="<?php echo $row['id']; ?>"> <i class="fa fa-trash"></i></button>
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

        </div>
    </div>
    <!-- /.container-fluid -->


    <div class="modal fade" id="addteamprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="form-action.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <div class="form-group">
                            <label> Service Name </label>
                            <input type="text" name="service_name" class="form-control" Required>
                        </div>
                        <div class="form-group">
                            <label> Short Description </label>
                            <input type="text" name="service_short_desc" class="form-control" Required>
                        </div>
                        <div class="form-group">
                            <label> Description </label>
                            <textarea name="service_desc" class="form-control" Required></textarea>
                        </div>
                        <div class="form-group">
                            <label> SEO Keywords </label>
                            <input type="text" name="service_seo_keys" class="form-control" placeholder="Add comma separated like HTML, Python" Required>
                        </div>

                        <div class="form-group">
                            <label> Icon SVG </label>
                            <input type="text" name="service_icon" class="form-control" placeholder="SVG tag for icon" Required>
                        </div>

                        <div class="form-group">
                            <label> Upload Image (jpg, jpeg & png formats only) </label>
                            <input type="file" name="service_image" class="form-control" Required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="about_us.php">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" name="save_service_btn" class="btn btn-success">Publish</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>