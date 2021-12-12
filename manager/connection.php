<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "restManage";

$connection=mysqli_connect($serverName,$userName,$password,$dbName);
if(!$connection){
    die("database connection failed");
}

?>