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
        BLOGS
    </h1>

    <button type="button" class="btn btn-primary mb-3 " data-toggle="modal" data-target="#addblog">
        Add New Blog
    </button>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <?php
                        $query = "SELECT * FROM blogs";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-striped table-hover text-center" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> Id </th>
                                    <th> Blog Title </th>
                                    <th> Blog Image </th>
                                    <th> Blog Date </th>
                                    <th> Description </th>
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
                                            <td><?php echo $row['blog_title']; ?></td>
                                            <td><?php echo '<img src = "' . $image_upload_path . 'blogs/' . $row['blog_db_image'] . '" width = "150px;" height = "70px;" alt = "BLOG IMAGE">' ?></td>
                                            <td><?php echo $row['blog_db_date']; ?></td>
                                            <td style=" text-align: justify;text-justify: inter-word;"><?php echo $row['description']; ?></td>
                                            <td>
                                                <form action="blogs_edit.php" method="post">
                                                    <input type="hidden" name="blog_edit_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="blog_edit_btn" class="btn btn-primary"> <i class="fa fa-edit"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger blog_delete_btn" value="<?php echo $row['id']; ?>"> <i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="12"> No Blogs Found </td>
                                    </tr>
                                <?php
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
    <div class="modal fade" id="addblog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="form-action.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <div class="form-group">
                            <label> Blog Title </label>
                            <input type="text" name="blog_title" class="form-control" placeholder="Enter Title" Required>
                        </div>

                        <div class="form-group">
                            <label> Upload Image (jpg, jpeg & png formats only , 550x500 px) </label>
                            <input type="file" name="blog_image" class="form-control" Required>
                        </div>

                        <div class="form-group">
                            <label> Date </label>
                            <input type="date" name="blog_date" class="form-control" placeholder="Pick a Date" Required>
                        </div>

                        <div class="form-group">
                            <label> Description </label>
                            <textarea name="blog_desc" class="form-control" Required></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="blogs.php">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" name="save_blog_btn" class="btn btn-success">Publish</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>