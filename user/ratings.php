<?php 
include "userSideBar.php";
include "connection.php";

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
    
    $query="SELECT * FROM rating ORDER BY date DESC ";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die('query failed' . mysqli_error());
      }
      echo "<p style='text-align:center;font-weight:bold;font-size:20px;'>Food Reviews and Ratings by Users </p> ";
      echo "<div class='review-container'>";
    while($row=mysqli_fetch_assoc($result)){
        $fId=$row['fId'];
        $userId=$row['userId'];
        $query2="SELECT foodName FROM food WHERE fId='$fId' ";
        $result2=mysqli_query($connection,$query2);
        if(!$result2){
            die('query failed' . mysqli_error());
          }
        $row2=mysqli_fetch_assoc($result2);
        $foodName=$row2['foodName'];

        $query3="SELECT userName FROM user WHERE userId='$userId' ";
        $result3=mysqli_query($connection,$query3);
        if(!$result3){
            die('query failed' . mysqli_error());
          }
        $row3=mysqli_fetch_assoc($result3);
        $userName=$row3['userName'];
        echo "<div class='review-item'> ";
        echo "<p style='font-weight:bold;'>Food Name : " . $foodName . "</p>";
        echo "<p>" . $row['date'] . "</p>";
        echo "<p>Rating : " . $row['rating'] . "</p>";
        echo "<p>Review : " . $row['reviews'] . "<br>by ". $userName ."</p></div>";
        


        //echo $row['rating'];
        //echo $row['reviews'];
    }
    echo "</div>";
    ?>
    
</body>
</html>