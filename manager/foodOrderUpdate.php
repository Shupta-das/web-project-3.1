<?php 
    include "connection.php";
    $foId= $_GET['foId'];
    $checkboxStatus=$_GET['checkboxStatus'];
    $orderStatus=NULL;
    if($checkboxStatus=='false'){
        $orderStatus=0;
    }
    else{
        $orderStatus=1;
    }
    echo $foId . " " . $checkboxStatus . " " . $orderStatus;
     $query= "UPDATE foodorder SET orderStatus='$orderStatus' WHERE foId = '$foId' ;";
     $result=mysqli_query($connection,$query);
     if(!$result){
         die("query failed" . mysqli_error());
     }
     else{
        header("Location:http://localhost/restManage/manager/foodOrder.php");
     }
  
    
?>