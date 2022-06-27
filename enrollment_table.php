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
            
                <h4 class="text-center">
                <?php
             

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
$id =  $_POST['appid'];
$approval= $_POST['coursefee'];
$queryx = "update  `student_enrollement` set `appliant_approval`='$approval' 
where applicant_id=$id;";

$result = mysqli_query($con, $queryx);
                if($result){
                    echo "updated";
                      echo  'user id is ' . $id;
                }
        
                }
        ?>
                <!-- Begin Page Content -->
                
                <h4 class="text-center">List Of Unapproved Students</h4>
                
                <?php 
            
                $query = "select * from student_enrollement where appliant_approval='unpaid'";
                $result = mysqli_query($con , $query);
            $rows  =    mysqli_num_rows($result);
            if($rows >0)
            {
                ?>

<div class="container-fluid"> 
<link rel="stylesheet" type="text/css" 
href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
<table id="tblUser">
    <thead>
        <th>Fullname</th>
        <th>Fathername</th>
        <th>Courses</th>
        <th>Bank Challan</th>
        <th>Status</th>
        <th>Approval</th>
    </thead>
    
    <tbody>
    <?php  
    while($data = mysqli_fetch_array($result)){ ?>
                <tr>
                <form action="enrollment_table.php" method="POST">
                    <td>
                 <input type="number" 
                    value="<?php echo $data['applicant_id']; ?>"
                    name="appid" hidden></td>
                    <td><?php echo $data['applicant_name']; ?></td>
                    <td><?php echo $data['applicant_fathername']; ?></td>
                    <td><?php echo $data['applicant_select_course']; ?></td>
                    <td><?php echo $data['applicant_challan']; ?></td>
                    <td><?php echo $data['appliant_approval']; ?></td>
                    <td>
                    


                    
                    <Select name="coursefee">
                        <option value="">Please Choose</option>
                        <option value="unpaid">unpaid</option>
                        <option value="paid">paid</option>
                    </Select>
                    <button type="submit">Update</button>
                    </form>   
                   

                    </td>
                </tr>

                <?php } }?>
        <?php  ?>
    </tbody>
</table>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>
<h4><a href="students.php ">Approved Students</a></h4> 
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
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>


</body>

</html>







       