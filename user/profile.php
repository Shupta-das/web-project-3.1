<?php 
session_start();

if(!isset($_SESSION['userId'])){
  die("Not logged in!!");
}
include "connection.php";
include "userSideBar.php";
session_start();
$userId=$_SESSION['userId'];
//echo $userId;
$userName=null;
$userMobileNumber=null;
$userAddress=null;
$userPhoto=null;
$userEmail=null;
$password=null;

$query="SELECT * FROM user where userId = '$userId' ; ";
$result=mysqli_query($connection,$query);
if(!$result){
    die('query failed' . mysqli_error());
}
$row=mysqli_fetch_assoc($result);
$userName=$row['userName'];
//$userMobileNumber=null;
//$userAddress=null;
$userPhoto=$row['userPhoto'];
$userEmail=$row['userEmail'];
$password=$row['password'];

if(isset($_POST['update'])){
    $userName=$_POST['userName'];
    $userEmail=$_POST['userEmail'];
    $userAddress=$_POST['userAddress'];
    $userMobileNumber=$_POST['userMobileNumber'];
    $userPhotoName=$_FILES['userPhoto']['name'];
    if($userPhotoName!=null){
        $userPhotoTmp=$_FILES['userPhoto']['tmp_name'];//The temporary filename of the file in which the uploaded file was stored on the server.
        $targetFile="../photos/$userPhotoName";
        move_uploaded_file($userPhotoTmp,$targetFile);
        $userPhoto="../photos/$userPhotoName";
    }

    $query = "UPDATE user SET ";
    $query .= "userName = '$userName',";
    $query .= "userEmail = '$userEmail', ";
    $query .= "userAddress = '$userAddress', ";
    $query .= "userMobileNumber = '$userMobileNumber', ";
    $query .= "userPhoto = '$userPhoto' ";
    $query .= "WHERE userId = '$userId' ; ";

    $result2=mysqli_query($connection,$query);
    if(!$result2){
        die('query failed' . mysqli_error());
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body class="profile-page-body">

    <div class="profile-page">
        <div class="profile-form-div">
            <form action="" class="profile-form" method="post" enctype="multipart/form-data" >
                
                <p class= "message2">Your Profile Picture-</p>
                <img src="<?php echo $userPhoto; ?> " alt="profile pic" width="30%">
                
                <p class="message2">Select a new profile picture-</p>
                <input type="file" name="userPhoto"/><br>
                
                <p class="message2">User Name-</p>
                <input type="text" name="userName" value="<?php echo $userName; ?>"/><br>
                
                <p class="message2">User Email-</p>
                <input type="text" name="userEmail" value="<?php echo $userEmail ; ?>"/><br>
                
                <p class="message2">User Password-</p>
                <input type="text" name="password" value="<?php echo $password; ?>"/><br>
                
                <p class="message2">User Mobile Number-</p>
                <input type="text" name="userMobileNumber" placeholder="Update Mobile Number" value="<?php echo $userMobileNumber; ?>"/><br>
                
                <p class="message2">User Address-</p>
                <input type="text" name="userAddress" placeholder="Update Address" value="<?php echo $userAddress; ?>"/><br>
                
                <button name="update" type="submit">Update</button>

             </form>
        </div>
    </div>
    
</body>
</html>