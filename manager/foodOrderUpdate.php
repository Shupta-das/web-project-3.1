<?php 
    include "connection.php";
    $foId= $_GET['foId'];
    $checkboxStatus=$_GET['checkboxStatus'];
    $orderStatus=NULL;
    if($checkboxStatus){
        $orderStatus=1;
    }
    else{
        $orderStatus=0;
    }
    //echo $foId . " " . $checkboxStatus;
     $query= "UPDATE foodorder SET orderStatus='$orderStatus' WHERE foId = '$foId' ;";
     $result=mysqli_query($connection,$query);
     if(!$result){
         die("query failed" . mysqli_error());
     }
     else{
         header("Location:http://localhost/restManage/manager/foodOrder.php");
     }
  
    
?>