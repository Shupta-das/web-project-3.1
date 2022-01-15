<?php 
session_start();

if(!isset($_SESSION['userId'])){
  die("Not logged in!!");
}
include "userSideBar.php";
include "connection.php";
//session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="purchases-body">
    <h1 style="padding:80px 100px 10px;">Purchases~</h1>
    <div>
        <table class="purchase">
            <thead>
                <tr>
                <th>Date</th>
                <th>Food Name</th>
                <th>Amount</th>
                <th>Add Review</th>
                </tr>   
            </thead>
            <tbody>
            <?php 
                    $userId=$_SESSION['userId'];
                    $query="SELECT orderDate,fId,foodName,amount,userId FROM foodorder ";
                    $query .= "WHERE userId = $userId ORDER BY orderDate DESC ";
                    $result=mysqli_query($connection,$query);
                    if(!$result)
                    {
                         die('Query failed' . mysqli_error());
                   }     
                   
                   while($row=mysqli_fetch_assoc($result)){
                       $foodId=$row['fId'];
                       echo "<tr><td>" . $row['orderDate'] . 
                       "</td><td>" . $row['foodName'] . 
                       "</td><td>" . $row['amount'] .
                       "</td><td><button class='addButton' name='addRating'><a href='addRating.php?fId=$foodId '>Add</a></button>" . 
                       "</td></tr>";
                   }             
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>