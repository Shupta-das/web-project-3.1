<?php 
    include "connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Home Page</title>
    <link rel="stylesheet" href="styleManager.css">
</head>
<body class="manager-home-body">
    <h1 class="manager-header">Manager Section ~</h1>
    <div class="manager-home-container">
        <div class="manager-home-left">
            <h4>Notifications-</h4>
            <?php 
                $query="SELECT * FROM foodorder ORDER BY orderDate ASC LIMIT 5;";
                $result=mysqli_query($connection,$query);
                if(!$result){
                    dic("query failed" . mysqli_error());
                }
                while($row=mysqli_fetch_assoc($result)){
                    $userId=$row['userId'];
                    $fId=$row['fId'];
                    $amount=$row['amount'];
                    echo ">>>User Id : ". $userId . " ordered for food no. : " . $fId . " amount : " . $amount . "<br>";
                }

            ?>

        </div>
        <div class="manager-home-right">
            <h4>Menu-</h4>
            <button class="manager-button"><a href="foodTable.php">Food</a></button><br><br>
            <button class="manager-button"><a href="foodCategory.php">Food Category</a> </button><br><br>
            <button class="manager-button"><a href="foodOrder.php">Food Orders</a></button>

        </div>
        
    </div>
     
</body>
</html> 