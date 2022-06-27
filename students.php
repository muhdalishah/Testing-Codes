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
                <div class="container-fluid">
            
                
                <div class="container">
                    <div class="row">
                        <div class="col col-md-10 col-lg-10 col-sm-12">
                        <h4 class="text-center">Approved Students</h4>
                        </div>
                        <div class="col">
                            <h6><a href="enrollment_table.php">Check Unapproved List</a></h6>
                        </div>
                    </div>
                </div>

            
                <?php 

                
                $query = "select * from student_enrollement where appliant_approval='paid'";
                $result = mysqli_query($con , $query);
            $rows  =    mysqli_num_rows($result);
            if($rows >0)
            {
                ?>

<div class="container-fluid">                
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      
      <th scope="col">CNIC</th>
      <th scope="col">Father Name</th>
      <th scope="col">Course Name</th>

      <th scope="col">Approval</th>

    </tr>
  </thead>
  <tbody>

<?php 
  while($data = mysqli_fetch_assoc($result)){
    
?>

  <tr>
  <td> <?php echo $data['applicant_name'] ?> </td> 
  <td> <?php echo $data['applicant_cnic'] ?> </td> 
  <td> <?php echo $data['applicant_fathername'] ?> </td> 
  <td> <?php echo $data['applicant_select_course'] ?> </td> 
  <td> <?php echo $data['appliant_approval'] ?> </td> 
  <?php }}?>

  </tbody>
</table>
 
            </div>
 

                </div>


    <!-- update user modal  -->
    <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Update Team Member</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
          </div>
        </div>
      </div>


      <!-- delete user modal  -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              
                <form>
                    <h4>Are Your Sure</h4>

                  </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary">Yes Save changes</button>
              </div>
          </div>
        </div>
      </div>

      <!-- view all students  -->
      <div class="modal fade" id="viewall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Complete List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>  
            <div class="modal-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Course</th>
                        <th scope="col">Course Duration</th>
                        <th scope="col">Test Marks</th>
                        <th scope="col">Attempt Quizs</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td >Sudair Ahmad</td>
                        <td >Jamal Ahmad</td>
                        <td >0343434377</td>
                        <td>Graphic Design</td>
                        <td >6 months</td>
                        <td >980</td>
                        <td >4</td>
                      </tr>
                    </tbody>
                  </table>

            </div>
          </div>
        </div>
      </div>



</div>
<!-- /.container-fluid -->

 
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







       