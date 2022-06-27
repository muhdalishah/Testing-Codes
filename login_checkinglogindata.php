<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'db_connection.php';
    $con = getconnect();

$input_email = $_POST['lg_email'];
$input_password =  $_POST['lg_password'];

$query = "select * from users";


$result =mysqli_query($con  , $query);
$rows = mysqli_num_rows($result);
$login = false;

if($rows>0)
{
    while($data = mysqli_fetch_array($result)){
        $username  = $data['name'];
        $email  = $data['email'];
        $pass   = $data['password'];
        $role   = $data['role'];
        


        
        if($input_email == $email && $input_password == $pass){
            echo "logged in";
            $login = true;
            session_start();
            $_SESSION['name'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['role'] = $role;
            $_SESSION['loggedin'] = $login;
            
            
            header('Location: http://localhost/IPD%20Codes/WeekEnd/WeekEnd/dashboard.php');
    }
    }
    if($login == false){
        echo "sorry ";
    }
}
}
?>