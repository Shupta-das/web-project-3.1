<?php 
$cookieName="user";
$cookieValue="shupta";
setcookie($cookieName,$cookieValue,time()+ 86400, "/","",0);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookieName]))
    {
        echo "not set";
    }
    else{
        $cookieValue="shupta das";
        setcookie($cookieName,$cookieValue,time()+86400,"/","",0);
        echo "value : " . $_COOKIE["user"];
    }
    ?>
</body>
</html>