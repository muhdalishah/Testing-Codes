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
                
                                <!-- Begin Page Content -->
                                <div class="container-fluid">                
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-lg-10 col-sm-12">
                        <h4 class="text-center">Profile Detail </h4>
                        </div>
                        <div class="col">
                            <h6><a href="team.php">View Team Members</a></h6>
                        </div>
                    </div>
                

<!-- profile detail  -->
                    
<?php 

$useremail = $_SESSION['email'];

  
  $query = "select * from users where email='$useremail'";
  $result = mysqli_query($con , $query);
  $row = mysqli_num_rows($result);
  if($row> 0){
    while($data = mysqli_fetch_assoc($result)){
       $id =  $data['id'];

       if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $iid = $_POST['id'];
        $nname = $_POST['name'];
        $eemail =  $_POST['email'];
        $pphonenum =  $_POST['phonenum'];
         $llocation = $_POST['location'];
         $bbirthday = $_POST['birthday'];
         $ppassword = $_POST['password'];
    
        
         $addquery = "update  users set `name`='$nname' , `email`='$eemail' ,
          `password`='$ppassword', `phonenum` ='$pphonenum', `location`='$llocation', `birthday` ='$bbirthday' 
             where id='$iid'";
   
          $resultt = mysqli_query($con , $addquery);
          if($resultt){
             echo "data saved succesfully";
            
          }
    
     }
 
  }
  }
?>
 
   
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




