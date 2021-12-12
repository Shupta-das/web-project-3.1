<?php 
include "connection.php";
$newFcName=$_GET['newFcName'];
$query="INSERT INTO foodcategory (fcName) 
        VALUES('$newFcName')";
$result=mysqli_query($connection,$query);
if(!$result){
    die('query failed' . mysqli_error());
  }
  else{
      header("Location:http://localhost/restManage/manager/foodCategory.php");
      exit();
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food Category</title>
    <link rel="stylesheet" href="styleManager.css">

</head>
<body>

</body>
</html>