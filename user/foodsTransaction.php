<?php 
  // echo "aaaa";
  include "connection.php";
   $transId=$_GET["transId"];
   $amount=$_GET["portion"];
   $price=$_GET["price"];
   $fId=$_GET["fId"];
   $foodName=$_GET["foodName"];
   $orderStatus=0;
   $orderDate=date("Y/m/d");
 /* echo $transId;echo "<br>";
   echo $fId;echo "<br>";
   echo $price;echo "<br>";
  //echo $portion;echo "<br>";
  echo $foodName;*/
  session_start();
  $userId=$_SESSION['userId'];
  echo $userId;
  $query = "INSERT INTO foodorder (userId,fId,foodName,amount,totalPrice,transactionId,orderStatus,orderDate ) ";
  $query .= "VALUES ('$userId','$fId','$foodName','$amount','$price','$transId','$orderStatus','$orderDate') ";
  $result=mysqli_query($connection,$query);
  if(!$result){
    die('query failed' . mysqli_error());
  }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="food-order-right2">
    <p>Order Placed.Contact with the webside to verify.</p>
    <button class="food-order-button"><a href="homePage.php">Back to home Page </a></button>
  </div>

    
</body>
</html>