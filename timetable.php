<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true ){

    header("location: http://localhost/IPD%20Codes/WeekEnd/WeekEnd/login.php" );
    exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <!-- Sidebar -->
         <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            <?php include 'navbar.php'; ?>
                <!-- End of Topbar -->

                
                <!-- Begin Page Content -->
                <div class="container-fluid">                
                    
  
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-lg-10 col-sm-12">
                        <h4 class="text-center">Time Table</h4>
                        </div>
                        <div class="col">
                            <h6><a href="timetable_add.php">Add New TimeTable</a></h6>
                        </div>
                    </div>
                </div>
 <!-- timetable  -->
 <?php

$query = "SELECT * FROM `timetable`";

$result = mysqli_query($con , $query);
$rows = mysqli_num_rows($result);
if($rows>0)
{
   ?>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Start Date Time</th>
      <th scope="col">Ending Date Time</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
<?php  while($data = mysqli_fetch_assoc($result)){
        ?>
        <tr>
      <td><?php echo $data['t_coursename'] ?></td>
      <td><?php echo $data['t_start'] ?></td>
      <td><?php echo $data['t_end'] ?></td>
      <td><?php echo $data['t_location']  ?></td>
      <td>
        <a name='deletedd' href="timetable.php?del=<?php echo $data['t_id'] ?> ">Delete</a>
      </td>
     
    </tr>
    <?php }} ?> 
  </tbody>
</table>
           </div>

           <?php 
           if($_SERVER['REQUEST_METHOD'] = 'GET' && isset($_GET['del'])){
            $id = $_GET['del'];
            $quuery = "delete from timetable where t_id='$id'";
            $resullt = mysqli_query($con , $quuery);
            if($resullt){
                echo "Deleted...";
            }
        
        }
           ?>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;  IPD Test Website</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>







    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>