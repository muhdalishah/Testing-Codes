<?php 
function getconnect(){
$con =  mysqli_connect('localhost' , 'root' , '' ,'db_ipd');
return $con;
}


?>