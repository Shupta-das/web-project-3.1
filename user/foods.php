<?php 
include "userSideBar.php";
include "connection.php";
session_start();
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

    <?php 
        //session_start();
        $query="SELECT * FROM foodcategory ; ";
        $result=mysqli_query($connection,$query);
        if(!$result){
         die('query failed' . mysqli_error());
        }
        while($row=mysqli_fetch_assoc($result)){
           // echo $row['fcId'];
           $fc=$row['fcId'];
           //$fcn=$row['fcName'];
           $query2 = "SELECT fcName , fId , foodName , foodImage , foodPrice , foodStatus ";
           $query2 .= "FROM foodcategory , food ";
           $query2 .= "WHERE food.fcId = foodcategory.fcId AND ";
           $query2 .= "foodcategory.fcId = '$fc' ;";

           $result2=mysqli_query($connection,$query2);
           if(!$result2){
             die('query failed' . mysqli_error());
           }
           echo "<div class='food-category-header'>". $row['fcName'] . " Items: </div>";
           echo "<div class='food-category'>";
           /*echo "<p class='category-name'>" . $row['fcName'] . " Items :</p>";*/
           while($row2=mysqli_fetch_assoc($result2)){
                $foodId=$row2['fId'];
                echo "<div class='food-items'> ";
                echo "<img class='food-image' src='../foodphotos/" . $row2['foodImage'] . "' alt='' >";
                echo "<p class='food-text'>" . $row2['foodName'];
                echo "<br>";
                echo "Price : " . $row2['foodPrice'] . "TK </p>";

                echo "<button class='food-order-button' name='foodsMorebtn'><a href='foodsMore.php?fId=$foodId'>More...</a></button></div>";
           }
           echo "</div>";
        }
    ?>
    
</body>
</html>
    
</body>
</html>