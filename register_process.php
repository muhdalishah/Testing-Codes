<?php
include 'db_connection.php';
$con =  getconnect();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$name=   $_POST['rg_name'];
$email  =   $_POST['rg_email'];
$password =    $_POST['rg_password'];
$reppass =    $_POST['rgr_password'];
if($reppass == $password){
            $emailexist = false;

            $query2 ="INSERT INTO `users` (`name`, `email`, `password`,`cpassword`, `role`) VALUES ('$name', '$email', '$password','$reppass', 'student');";
            $result2 =mysqli_query($con , $query2); 

            if($result2){
                echo "registered successfullly....";
            }
}


}
else{
    echo "plesae correct the input ";
}




?>