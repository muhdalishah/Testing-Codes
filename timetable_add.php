

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
        
                <!-- normal php  -->
                                <!-- Begin Page Content -->
                                <div class="container-fluid">                
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-lg-10 col-sm-12">
                        <h4 class="text-center">Our Courses </h4>
                        </div>
                        <div class="col">
                            <h6><a href="timetable.php">View TimeTable</a></h6>
                        </div>
                    </div>


              <?php
         
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       
 
       $coursename =  $_POST['coursename'];
       $start =  $_POST['start'];
       $end =  $_POST['end'];
       $location =  $_POST['location'];
            $query2 = "INSERT INTO `timetable` (`t_coursename`, `t_start`, `t_end`,`t_location`) VALUES ('$coursename', '$start', '$end' , '$location');";
            $result2 = mysqli_query($con , $query2);
            if($result2){
                echo "saved successfully.";
            }

    }   ?>

                

<!-- add team -->

<div class="container">
<form action="timetable_add.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Course Name </label>
    <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Starting Time  </label>
    <input type="datetime-local" name="start" class="form-control" >
     </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ending Time  </label>
    <input type="datetime-local" name="end" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
  <div class="mb-3">1`1
    <label for="exampleInputEmail1" class="form-label">Location  </label>
    <input type="text" class="form-control" name="location" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

 
            </div>
 
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



