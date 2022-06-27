<?php
session_start();
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true){
    session_unset();
    session_destroy();
    header('location: http://localhost/IPD%20Codes/WeekEnd/WeekEnd/login.php');
    exit;
}

?>