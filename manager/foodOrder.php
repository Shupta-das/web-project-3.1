<?php 
include "connection.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food orders</title>
    <link rel="stylesheet" href="styleManager.css">
</head>
<body>
<h1 style="padding:80px 100px 10px;">Food Orders</h1>
<table class="manager-tables">
    <thead>
        <tr>
            <th>Order No. </th>
            <th>User Id</th>
            <th>Food Id</th>
            <th>Food Name</th>
            <th>Amount</th>
            <th>Total Price</th>
            <th>Transaction Id</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query="SELECT * FROM foodorder ";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("query failed " . mysqli_error());
            }
            while($row=mysqli_fetch_assoc($result)){
                $foId=$row['foId'];
                $userId=$row['userId'];
                $amount=$row['amount'];
                $transactionId=$row['transactionId'];
                $orderDate=$row['orderDate'];
                $fId=$row['fId'];
                $foodName=$row['foodName'];
                $totalPrice=$row['totalPrice'];
                $orderStatus=$row['orderStatus'];

                echo "<tr><td>" . $foId . 
                "</td><td>" . $userId . 
                "</td><td>" . $fId . 
                "</td><td>" . $foodName . 
                "</td><td>" . $amount . 
                "</td><td>" . $totalPrice . 
                "</td><td>" . $transactionId . 
                "</td><td>" . $orderDate . 
                "</td><td>" . $orderStatus . 
                "</td></tr>" ;

            }
        ?>
    </tbody>

</table>
    
</body>
</html>