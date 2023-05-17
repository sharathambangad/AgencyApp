<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="export_enquiry.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Enquiries</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

                <?php
                $query = "SELECT * FROM admin_login;";
                $query_run = mysqli_query($connection, $query);
                $rowcount = mysqli_num_rows($query_run);
                ?>
                <h4>Total Admin: <?php echo  $rowcount ?> </h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Enquiries</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT * FROM contact_form;";
                $query_run = mysqli_query($connection, $query);
                $rowcount = mysqli_num_rows($query_run);

                $query2 = "SELECT * FROM contact_form where view_status = '1';";
                $query_run2 = mysqli_query($connection, $query2);
                $rowcount2 = mysqli_num_rows($query_run2);

                ?>
                <h4><?php echo  $rowcount ?> </h4>
                <div class="text-xs font-weight-bold text-uppercase mb-1">Viewed : <?php echo  $rowcount2 ?></div>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-question-circle fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Team</div>
              <div class="row no-gutters align-items-center">
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                  <?php
                  $query = "SELECT * FROM about_us;";
                  $query_run = mysqli_query($connection, $query);
                  $rowcount = mysqli_num_rows($query_run);
                  ?>
                  <h4>Profiles: <?php echo  $rowcount ?> </h4>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Portfolios</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT * FROM portfolio;";
                $query_run = mysqli_query($connection, $query);
                $rowcount = mysqli_num_rows($query_run);
                ?>
                <h4> <?php echo  $rowcount ?> </h4>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Careers</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT * FROM careers;";
                $query_run = mysqli_query($connection, $query);
                $rowcount = mysqli_num_rows($query_run);
                ?>
                <h4>Vaccancies: <?php echo  $rowcount ?> </h4>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Services</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT * FROM service;";
                $query_run = mysqli_query($connection, $query);
                $rowcount = mysqli_num_rows($query_run);
                ?>
                <h4>Services: <?php echo  $rowcount ?> </h4>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-cogs fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Blogs</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php
                $query = "SELECT * FROM blogs;";
                $query_run = mysqli_query($connection, $query);
                $rowcount = mysqli_num_rows($query_run);
                ?>
                <h4>Blogs: <?php echo  $rowcount ?> </h4>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-fw fa-blog fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<!-- Content Row -->




<?php
include('includes/scripts.php');
include('includes/footer.php');
?>