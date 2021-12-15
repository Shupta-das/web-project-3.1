<?php 
include "connection.php";
$fId=$_GET['fId'];


$query="SELECT * FROM food WHERE fId = '$fId' ; ";
 $result=mysqli_query($connection,$query);
if(!$result){
    die('query failed' . mysqli_error());
}
$row=mysqli_fetch_assoc($result);
$fcId=$row['fcId'];
$foodName=$row['foodName'];
$foodPrice=$row['foodPrice'];
$foodImage=$row['foodImage'];
$foodStatus=$row['foodStatus'];

if(isset($_POST['update'])){
    $fcId=$_POST['fcId'];
    $foodName=$_POST['foodName'];
    $foodPrice=$_POST['foodPrice'];
    $foodImageName=$_FILES['foodImage']['name'];
    $foodStatus=$_POST['foodStatus'];
    if($foodImageName!=null){
        $foodPhotoTmp=$_FILES['foodImage']['tmp_name'];//The temporary filename of the file in which the uploaded file was stored on the server.
        $targetFile="../foodPhotos/$foodImageName";
        move_uploaded_file($foodPhotoTmp,$targetFile);
        $foodImage= $foodImageName;
    }
    $query2="UPDATE food SET 
    fcId = '$fcId',foodName='$foodName',
    foodPrice='$foodPrice',foodImage='$foodImage',
    foodStatus='$foodStatus' 
    WHERE fId= '$fId';";

    $result2=mysqli_query($connection,$query2);
    if(!$result2){
     die('query failed' . mysqli_error());
    }
    else{
        header("Location:http://localhost/restManage/manager/foodTable.php");
    }

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Table Edit</title>
    <link rel="stylesheet" href="styleManager.css">
</head>
<body>
    <div class="manager-div">
    <div class="manager-div-form">
        <form action="" class="manager-form" method="post" enctype="multipart/form-data">


                <p class= "message2">Food Image-</p>
                <img src="../foodPhotos/<?php echo $foodImage; ?> " alt="profile pic" width="30%">

                <p class="message2">Select a new Image-</p>
                <input type="file" name="foodImage"/><br>
                
                <p class="message2">Food Name-</p>
                <input type="text" name="foodName" value="<?php echo $foodName; ?>"/><br>
                
                <p class="message2">Food Category-</p>
                <input type="text" name="fcId" value="<?php echo $fcId; ?>"/><br>
                
                <p class="message2">Food Price -</p>
                <input type="text" name="foodPrice"  value="<?php echo $foodPrice; ?>"/><br>
                
                <p class="message2">Food Availability-</p>
                <input type="text" name="foodStatus"  value="<?php echo $foodStatus; ?>"/><br>
                
                <button name="update" type="submit" class="manager-button">Update</button>
        </form>

    </div>
    </div>
    
</body>
</html>