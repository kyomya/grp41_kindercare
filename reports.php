<!DOCTYPE html>

    <?php
    session_start();
    if(!isset($_SESSION['loggedin'])){
      header('Location: index.php');
      exit;
    }

     ?>


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
    <link rel="stylesheet" href="assets/vendors/bootstrap-usernamepicker/bootstrap-usernamepicker.min.css">
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
              <a class="nav-link" href="usernames.php">
                <span class="icon-bg"><i class="mdi mdi-archive menu-icon"></i></span>
                <span class="menu-title">View usernames</span>
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
             

<!-- html -->





<div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">usernames</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">5</h2>
                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><canvas width="156" height="156" style="height: 125px; width: 125px;"></canvas><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Completed</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">5</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Students</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">5</h2>
                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><canvas width="156" height="156" style="height: 125px; width: 125px;"></canvas><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increase in performance</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Attempts</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">5</h2>
                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><canvas width="156" height="156" style="height: 125px; width: 125px;"></canvas><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                            <p class="mt-4 mb-0">Increased since yesterday</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                          </div>
                        </div>
                      </div>

 <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data On Performance</h4>                   
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          
                          <th>Student Code</th>
                          <th>Assignment Code</th>
                          <th>Average username</th>
                          <th>Duration(sec)</th>
                          <th>Comment</th>
 

                        </tr>
                      </thead>

                <?php
                require('PHP/connection.php');
                $sql="SELECT * FROM mark;";
                $result=mysqli_query($dbconnect,$sql);
                while ($row=mysqli_fetch_array($result)) {
                  ?>

                      <tbody>

                        <tr>
                          <td><label class="badge badge-light"><?php echo $row['CODE'];?></td>
                          <td><label class="badge badge-light"><?php echo $row['id'];?></td>
                          <td class="text-dark"><?php echo $row['average'];?></td>
                          <td class="text-dark"><?php echo $row['Duration'];?></td>
                          <td class="text-dark"><?php echo $row['comment'];}?></td>



                
                      
                      <?php


$con = mysqli_conn('localhost', 'root','','kindercare',3306);
// getting username column from Table_score table 
$myquery1 = "select username from pupil";
     $query1 = mysqli_query($con, $myquery1);
 
  if ( ! $query1 ) {
    echo mysqli_error();
    die;
  }
  $a1 ="";
  for ($x = 0; $x < mysqli_num_rows($query1); $x++) {
  $data1 = mysqli_fetch_assoc($query1);
   if($a1 != ""){
      $a1 = $a1.",'".$data1['username']."'"; 
   }
else {
    $a1 = "'".$data1['username']."'";
}
}


// getting score column from Table_score table 
 $my1 = "select score from Table_score";
 $qu1 = mysqli_query($con, $my1);
 
  if ( ! $qu1 ) {
    echo mysqli_error();
    die;
  }
  $a2 ="";
  for ($x = 0; $x < mysqli_num_rows($qu1); $x++) {
  $data2 = mysqli_fetch_assoc($qu1);
     if($a2 != ""){
      $a2 = $a2.",".$data2['score']; 
   }
else {
    $a2 = $data2['score'];
}
}

?>
<?php //ploting the graph  ?>
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<script>

var xValues = <?php echo '['.$a1.']'; ?>;
var yValues = <?php echo '['.$a2.']'; ?>;

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    title: {display: true, text: 'Total score'},
    legend: {display: false},
    
                
                

  
}
?>


 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>




                                          </div>






              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © kinderCare  2022</span>
         
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