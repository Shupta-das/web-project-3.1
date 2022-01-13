<?php 
session_start();

if(!isset($_SESSION['userId'])){
  die("Not logged in!!");
}
include "connection.php";
//include "userSideBar.php";
$foodId=$_GET['fId'];
//echo $foodId;
//fId , foodName , foodImage , foodPrice , foodStatus 
$query = "SELECT * FROM food ";
$query .= "WHERE fId = '$foodId' ";

$result=mysqli_query($connection,$query);
if(!$result){
  die('query failed' . mysqli_error());
}

$row=mysqli_fetch_assoc($result);

$fId=$foodId;
$foodName=$row['foodName'];
$foodImage=$row['foodImage'];
$foodPrice=$row['foodPrice'];
$foodStatus=$row['foodStatus'];

/*if(isset($_POST['confirm'])){
  $portion=$_POST['portion'];
  echo $portion;
}
if(isset($_POST['transaction'])){
  // $transId= "<script>document.writeln(transactionId);</script>";
  // echo $transId;
  echo "11234";
 }*/

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

       <button class="back-to-food-menu"><a href="foods.php">Back to Food Menu</a></button>
       <div class="food-order-container">
        <div class="food-order-left">
          <img src="../foodPhotos/<?php echo $foodImage; ?>" alt="" class="food-order-image">
          <p>Food Name: <?php echo $foodName; ?></p>
          <p>Price: <?php echo $foodPrice; ?> TK per portion.</p>
          <p style="color:red;font-weight:bold;"><?php if($foodStatus){echo "Available";} else{echo "Not Available!!!";} ?></p>
        </div>
        <div class="food-order-right" method="post">
          <p style="color:red;font-weight:bold;">Only bKash is available for online payment!!!</p> 
          <p class="food-order-text"> How Many Portions?</p>
          <input type="text" id="portion"></br></br>
          <button class="food-order-button" name="confirm" onclick="orderConfirm()">Confirm</button>
          <p class="food-order-text">Total Price(TK): </p>
          <p id="totalPrice" class="food-order-total-price"></p>
          <p> Your Transaction Id :</p>
          <input type="text" id="transactionId"></br></br>
          <button type="submit" class="food-order-button" name="transaction" onclick="transaction()">Send Transaction Id</button>
        </div>

     </div>  

     <script>
       var val;
       var price;
       var fId;
       var foodName;
       function orderConfirm(){
         var av = <?php echo $foodStatus; ?>;
         
          if(av){
           val=document.getElementById("portion").value;
            //document.getElementById("portion").value ="45";
            price= <?php echo $foodPrice; ?>;
            price=price*val;
            //var taka=" TK";
            //taka=price.concat(taka);
            document.getElementById("totalPrice").innerHTML = price;
          }
          else{
            document.getElementById("totalPrice").innerHTML = "Not Available,try another item.";
          }
         

       }
       function transaction(){
         if(<?php echo $foodStatus; ?>){
          fId=<?php echo $fId; ?>;
         foodName="<?php echo $foodName; ?>" ;
            var transactionId=document.getElementById("transactionId").value;
            //document.getElementById("totalPrice").innerHTML=transactionId;
            window.location.href="foodsTransaction.php?fId="+fId+"&foodName="+foodName+"&transId="+transactionId+"&portion="+val+"&price="+price;
         }
        
       }
     </script>

          
     
</body>
</html>