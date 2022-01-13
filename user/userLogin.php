<?php 
//connect to database
include "connection.php";
$userEmail=  NULL;
$password=NULL;
$userId=NULL;

//registration form to database
if(isset($_POST['register'])){
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    if(strlen($password) < 6)
    {
        echo "<script>alert('Passward is short!');</script>";

    }
    else{
    $userEmail=$_POST['userEmail'];
    $userPhoto="../photos/userPhotoLogo.png";

    $query="INSERT INTO user (userName,userEmail,password,userPhoto) ";
    $query .="VALUES ('$userName','$userEmail','$password','$userPhoto')";

    $result=mysqli_query($connection,$query);

    if(!$result){
        die('query failed' . mysqli_error());
    }
}

}

//login
if(isset($_POST['login'])){
    session_start();
    $password = $_POST['password'];
    $userEmail = $_POST['userEmail'];
    $query = "SELECT * FROM user WHERE userEmail = '$userEmail' ; ";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die('query failed' . mysqli_error());
    }
    while($row=mysqli_fetch_assoc($result)){
        if($row['password']==$password)
        {
           // $_SESSION['userEmail']=$userEmail;
            $_SESSION['userId']=$row['userId'];
            
            //echo "password matched"; echo "<br>";

            header("Location: http://localhost/restManage/user/homePage.php");
            exit();
             //break;
        }
        else{
            echo "wrong pass"; echo "<br>";

        }

        
    }
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    <title>Welcome to ABC Hotel and Restaurant </title>
</head>
<body class= "login-and-reg-body">
    <div class="login-reg-page">
        <p class="welcomeText"> Khai Dai Restaurant</p>
        <div class="login-reg-form">
            <form action="" class="register-form" method ="post" >
                <input type="text" name = "userName" placeholder="User Name "/>
                <input type="password" name = "password" placeholder="Password (length is at least 6 )"/>
                <input type="email" name = "userEmail" placeholder="Email Id "/>
                <button name = "register" type="submit">Register</button>
                <p class="message">Already Registered? <a href="#">Login</a></p>
            </form>

            <form action="" method="post" class="login-form">
                <input type="text" name ="userEmail" placeholder="Enter Your Email"/>
                <input type="password" name="password" placeholder="Enter Your Password "/>
                <button name="login" type ="submit" >Login</button>
                <p class="message">Not Registered? <a href="#">Register</a></p>
            </form>

        </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>