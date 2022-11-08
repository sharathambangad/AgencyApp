<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Buttons</h1>

    <div class="row">

        <div class="col-12  mb-2">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <?php
                        //$query = "SELECT * FROM register";
                        //$query_run = mysqli_query($connection, $query);
                        ?>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Mobile </th>
                                    <th> Service </th>
                                    <th>DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //if(mysqli_num_rows($query_run) > 0)        
                                //{
                                //while($row = mysqli_fetch_assoc($query_run))
                                //{
                                ?>
                                <tr>
                                    <td><?php /* echo $row['id']; ?></td>
                <td><?php  echo $row['username']; ?></td>
                <td><?php  echo $row['email']; ?></td>
                <td><?php  echo $row['password']; ?></td>
                <td><?php  echo $row['usertype']; */ ?></td>
                                    <td>
                                        <form action="register_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php //echo $row['id']; 
                                                                                        ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php //echo $row['id']; 
                                                                                            ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                //} 
                                // }
                                // else {
                                // echo "No Record Found";
                                // }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>