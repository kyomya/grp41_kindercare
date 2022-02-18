<?php
    session_start();
    if(!isset($_SESSION['loggedin'])){
      header('Location: index.php');
      exit;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KinderCare</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          KinderCare
         <!--  <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
        
      
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
           
          
            <li class="nav-item">
              <a class="nav-link" href="addpupil.php">
                <span class="icon-bg"><i class="mdi mdi-account-plus menu-icon"></i></span>
                <span class="menu-title">Add Pupil</span>
              </a>
            </li>
               <li class="nav-item">
              <a class="nav-link" href="listpupils.php">
                <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                <span class="menu-title">Pupils</span>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addteacher.php">
                <span class="icon-bg"><i class="mdi mdi-account-box-outline menu-icon"></i></span>
                <span class="menu-title">Add Teacher</span>
              </a>
            </li>
                 <li class="nav-item">
              <a class="nav-link" href="listteachers.php">
                <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                <span class="menu-title">List Teachers</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addassignments.php">
                <span class="icon-bg"><i class="mdi mdi-archive menu-icon"></i></span>
                <span class="menu-title">Add assignment</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewassignments.php">
                <span class="icon-bg"><i class="mdi mdi-archive menu-icon"></i></span>
                <span class="menu-title">View Assignment</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="scores.php">
                <span class="icon-bg"><i class="mdi mdi-archive menu-icon"></i></span>
                <span class="menu-title">View Scores</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="requests.php">
                <span class="icon-bg"><i class="mdi mdi-archive menu-icon"></i></span>
                <span class="menu-title">Requests</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reports.php">
                <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                <span class="menu-title">Reports</span>
              </a>
            </li>
         
          
          
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
              <form action="PHP/logout.php" method="POST">
                
           <button type="submit" class="btn btn-secondary btn-icon-text">
                            <i class="mdi mdi-logout"></i> Logout</button>
              </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row" id="proBanner">
         
            </div>
           
            <div class="row">
              <div class="col-md-12">
             

<!-- html -->  <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Register Pupil</h4>
                    
                    <form method="POST" action="PHP/pupilRegister.php" class="pregister_form" class="forms-sample">
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pfname" placeholder="first name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="plname" placeholder="last name" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="ptel" placeholder="mobile number" required>
                        </div>


                      </div>
                      <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Pupil's code</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="pcode" placeholder="assign code" required>
                        </div>
                      </div>

                      <button id="pregbtn" name="pregbtn" type="submit" class="btn btn-light mr-2">Register Pupil</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              


                

                     </div>
            </div>
          </div>
         
        
        </body>


              </div>
            </div>
          </div>
         
              </div>
            </div>
<!--            <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © kinderCare  2022</span>
 -->         
              </div>
            </div>
          </footer>
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>