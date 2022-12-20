<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');


?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">ENQUIRIES</h1>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <?php
                        $query = "SELECT * FROM contact_form where view_status ='0' ORDER BY id DESC";
                        $query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Mobile </th>
                                    <th> Service </th>
                                    <th> Message </th>
                                    <th> Mark as Viewed </th>
                                    <th> Move to Trash</th>

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
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['service']; ?></td>
                                            <td><?php echo $row['message']; ?></td>

                                            <td>
                                                <form action="form-action.php" method="post">
                                                    <input type="hidden" name="enq_id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" class="btn btn-primary" name="enq_viewed_btn" value="<?php echo $row['id']; ?>"> <i class="fa fa-eye"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="form-action.php" method="post">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                    <button type="button" class="btn btn-danger enq_delete_btn" value="<?php echo $row['id']; ?>"> <i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                } else { ?>
                                    <tr><td colspan = "12" > No Messages Found </td></tr>
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
    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>