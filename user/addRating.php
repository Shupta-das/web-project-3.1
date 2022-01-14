<?php 
session_start();

if(!isset($_SESSION['userId'])){
  die("Not logged in!!");
}
    include "connection.php";
    $fId=$_GET['fId'];
   // echo $fId;
    //session_start();
    $userId=$_SESSION['userId'];
   // echo $userId;
   $query="SELECT foodName FROM food WHERE fId ='$fId' ";
   $result=mysqli_query($connection,$query);
   if(!$result){
       die("query Failed" . mysqli_error());
   }
   $row=mysqli_fetch_assoc($result);
   $foodName=$row['foodName'];

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >

</head>
<body>
    <div class="addRatingReview">
        <form action="" class="addrrForm" method="post">

       
        <p>Food Name : <?php echo $foodName;  ?></p>
        <p>Rating:</p>
        <input type="text" placeholder="out of 10" name="rating" required ><br>
        <p>Review:</p>
        <textarea placeholder="something about the food and service." name="review" cols="40" rows="10" required></textarea>
        <br><br>
        <button name="send" type="submit">Send</button>
        </form>
    </div>

    <?php 
        if(isset($_POST['send'])){
            $rating=$_POST['rating'];
            $review=$_POST['review'];
            $date=date("Y/m/d");
            //echo $rating;
            //echo $review;
            if($rating<=10 && $rating>=0){
                $query="INSERT INTO rating (fId,userId,rating,reviews,date ) ";
                $query .= "VALUES ('$fId','$userId','$rating','$review','$date')";
                $result=mysqli_query($connection,$query);
                if(!$result){
                  die("query Failed" . mysqli_error());
                 }
                 else{
                    header("Location: http://localhost/restManage/user/homePage.php");
                    exit();
                 }
                
            }
            else{
                echo "<script>alert('Please enter a proper rating!'); </script>";
            }

        }
    ?>
    
</body>
</html>