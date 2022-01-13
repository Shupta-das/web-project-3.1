<?php 
    session_start();

    if(!isset($_SESSION['userId'])){
      die("Not logged in!!");
    }
    //session_start();
    session_destroy();
    header("Location: userLogin.php");
?>