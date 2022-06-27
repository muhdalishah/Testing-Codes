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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body{
    background-color:#eee;
}

.height-100{
    height:50vh;
}

.card{
    width:380px;
    border:none;
}

.dots {
    height: 20px;
    width: 20px;
    margin-top:4px;
    margin-left:4px;
    background-color:#dc3545;
    border-radius: 50%;
    border: 2px solid #fff;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-size:10px;
}

.list li{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:13px;
    border-top:1px solid #eee;
    cursor:pointer;
}

.list li:hover{
    background-color:#dc3545;
    color:#fff;
}
    </style>

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

                <?php 
                include 'db_connection.php';
                $con = getconnect();
                
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $name = $_POST['name'];
                    $password = $_POST['password'];
                    
                $email = $_SESSION['email'];
                $query = "select * from users where users.email ='$email'  ";
                $result = mysqli_query($con , $query);
                $rows = mysqli_num_rows($result);
                if($rows>0){
                    while($data = mysqli_fetch_array($result)){
                    $userid =     $data['id'];
                
                $query2 = "INSERT INTO `users`( `name`, `password`, `cpassword`)
                 VALUES ('$name', '$password', '$password')  where id='$userid'";

                 $result2 = mysqli_query($con , $query2);
                
                
                            if($result2){
                                echo "Successfully Submittted....";
                            }
                        }}                
                }
                ?>


<!--  notfication for both students and teachers  -->
<div class="row">
<div class="col-xl-6 col-md-5 mx-5">
<div class="card text-center">
  <div class="card-header bg-white">
    Update Profile
  </div>
  <div class="card-body">
  <form action="profile.php" method="POST">
  <div class="mb-3">   
    <label class="form-label">Change Username</label>
    <input type="text" class="form-control" name="name" placeholder="choose username" required>
  </div>
  <div class="mb-3">
    <label  class="form-label">Change Password</label>
    <input type="text" class="form-control" name="password" placeholder="choose  password" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>
<div class="col-xl-4 col-md-5 ">
<div class="card text-center">
  <div class="card-header bg-white">
    Your  Profile
  </div>


  <div class="card-body">

  <div class="container height-100 d-flex justify-content-center align-items-center">
    
    <div class="card text-center">
        <div class="py-4 p-2">

            
            <div>
            <img src="https://image.shutterstock.com/image-vector/male-default-avatar-profile-icon-600w-1725062341.jpg" class="rounded" width="100">
        </div>

        <div class="mt-3 d-flex flex-row justify-content-center">
            <h5> <?php  echo $_SESSION['name'] ?> </h5>
            <span class="dots"><i class="fa fa-check"></i></span>
        </div>
         
        
            
        </div>
        
        <div>
            <ul class="list-unstyled list">
                
                <li>
                    <span class="font-weight-bold">Contact:</span>
                    <div>
                        <span class="mr-1">03434343434</span>
                    </div>
                </li>
                
                <li>
                    <span class="font-weight-bold">Email:</span>
                    <div>
                        <span class="mr-1"> <?php echo $_SESSION['email'] ?> </span>
                    </div>
                </li>
            </ul>
         </div>   

    </div>
</div>
</div>
</div>
</div>
</div>
