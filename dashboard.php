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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
                    <!-- admin dashboad -->
                    <?php
           
               if($_SESSION['role'] == 'admin')
                {
                 ?>
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                           </div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><a href="notfication.php" class="text-white">Notfications</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                         
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><a href="courses.php" class="text-white">Our Courses</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                                      </div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><a href="timetable.php" class="text-white">TimeTable</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><a href="blog.php" class="text-white">Blog Posts</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                                                                          </div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><a href="team.php" class="text-white">Our Team</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                            <!-- <h6 class="text-white"> <span> <a class="text-white" href="#" data-bs-target="#team" data-bs-toggle="modal">Add</a> </span> <span><a class="text-white" href="team.php">View</a></span> </h6>                                                 -->
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><a class="text-white" href="students.php ">Students</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-white"><a class="text-white" href="Feedbacks.php">FeedBacks</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary border-right-primary shadow h-100 py-2 bg-success">
                                <div class="card-body bg-success">
                                    <div class="row no-gutters align-items-center bg-success">
                                        <div class="col mr-2 bg-success">
                                            <div class="text-xs font-weight-bold   text-uppercase mb-1">
                                            <!-- <h6 class="text-white"> <span> <a class="text-white" href="#" data-bs-target="#team" data-bs-toggle="modal">Add</a> </span> <span><a class="text-white" href="team.php">View</a></span> </h6>                                                 -->
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-white" ><a data-bs-target="#logoutModal" class="text-white"  data-bs-toggle="modal" href="#">Logout</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>








                    
                    
               

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
                    <a class="btn btn-primary" href="logout.php" >Logout</a>
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
