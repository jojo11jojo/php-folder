<?php
$host="localhost";
$user="root";
$pass="";
$db="gim";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    echo "Connection Successfully";
}
else{
    die("Connection Failed".mysqli_connect_error($con));
}
?>