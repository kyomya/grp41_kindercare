<?php
$server='localhost';
$username='root';
$password='';
$dbname='kc';
$table='assignment';

$dbconnect=mysqli_connect($server,$username,$password,$dbname);
?>
<?php
    session_start();
    if(!isset($_SESSION['loggedin'])){
      header('Location: index.php');
      exit;
    }

     ?>
      <?php 
        if(isset($_POST['upload'])){
            $Note=$_POST['more-details'];
            $StartTime=$_POST['starttime'];
            $EndTime=$_POST['endtime'];
            $Char=$_POST['char'];
            $Marks=$_POST['marks'];
            $MarksImplode=implode(",",$_POST['marks']);
            if(!empty($_POST['char'])){
            $char=implode(",",$_POST['char']);
            
             $query=   mysqli_query($dbconnect,"INSERT INTO $table (note,starttime,endtime,characters,assigned_marks) VALUES('$Note','$StartTime','$EndTime','$char','$MarksImplode')");
                if($query==true){
                    header("Location: viewassignments.php"); 
                }
                else {
                    echo mysqli_error($dbconnect);
                }
            
            }
            
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
                <span class="menu-title">Add Assignment</span>
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



             

<!-- html -->



<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Assignments Here</h4>
                    <p class="card-description">Add with a simple click
                    </p>
                    <table class="table table-hover">
                      <thead>
                      
                      <tbody>
                        <tr>
                          
                    <form  name="assign_form"  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="forms-sample">

                      <div class="form-group">
                        <label for="exampleSelectcharacter">Character 1</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>



                      <div class="form-group">
                        <label for="exampleSelectcharacter">Character 2</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>



                     <div class="form-group">
                        <label for="exampleSelectcharacter">Character 3</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>



                     <div class="form-group">
                        <label for="exampleSelectcharacter">Character 4</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>



                      <div class="form-group">
                        <label for="exampleSelectcharacter">Character 5</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>



                      <div class="form-group">
                        <label for="exampleSelectcharacter">Character 6</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>



                      <div class="form-group">
                        <label for="exampleSelectcharacter">Character 7</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>



                      <div class="form-group">
                        <label for="exampleSelectcharacter">Character 8</label>
                        <select class="form-control" name="char[]">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                          <option value="G">G</option>
                          <option value="H">H</option>
                          <option value="I">I</option>
                          <option value="J">J</option>
                          <option value="K">K</option>
                          <option value="L">L</option>
                          <option value="M">M</option>
                          <option value="N">N</option>
                          <option value="O">O</option>
                          <option value="P">P</option>
                          <option value="Q">Q</option>
                          <option value="R">R</option>
                          <option value="S">S</option>
                          <option value="T">T</option>
                          <option value="U">U</option>
                          <option value="V">V</option>
                          <option value="W">W</option>
                          <option value="X">X</option>
                          <option value="Y">Y</option>
                          <option value="Z">Z</option>
                        </select>
                        <input type="number" placeholder="Enter marks" name="marks[]">

                      </div>

        <div>
          <label for="starttime">Start </label>
          <input type="datetime-local" name="starttime" id="starttime" required>
          <label for="endtime"> End</label>
          <input type="datetime-local" name="endtime" id="endtime" required><br>
<br>
          <div class="form-group">
                        <label for="">Add comments here</label>
                        <textarea name="more-details" class="form-control"  rows="4"></textarea>
                      </div>

         <br> <button class="btn btn-secondary" name="upload" type="submit" id="upload">Add Assignment</button>
     </div>




                    </form>
                  </div>
                </div>
              </div>
 




                        </tr>
                      </tbody>
                    </thead>
                    </table>
                  </div>
                </div>
              </div>
              






                </div>
              </div>

              </div>
            </div>
          </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <!--  <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © kinderCare  2022</span>
         
          -->     </div>
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