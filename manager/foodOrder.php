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
<body class="manager-home-body4">
<button style="margin:80px 100px 2px;" class='manager-button'><a href="managerHome.php">Back</a></button>
<h1 style="padding:2px 100px 10px;">Food Orders</h1>
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
            <th>Update</th>
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
                $orderStatus=$row['orderStatus'];
                if($orderStatus==0){
                $foId=$row['foId'];
                $userId=$row['userId'];
                $amount=$row['amount'];
                $transactionId=$row['transactionId'];
                $orderDate=$row['orderDate'];
                $fId=$row['fId'];
                $foodName=$row['foodName'];
                $totalPrice=$row['totalPrice'];
                $checkboxStatusName = "st" . $foId ;
                echo "<tr><td>" . $foId . 
                "</td><td>" . $userId . 
                "</td><td>" . $fId . 
                "</td><td>" . $foodName . 
                "</td><td>" . $amount . 
                "</td><td>" . $totalPrice . 
                "</td><td>" . $transactionId . 
                "</td><td>" . $orderDate ;
                 echo "</td><td><input type='checkbox' name='$checkboxStatusName' id='$checkboxStatusName'>";
                // echo " checked>" ;
                 echo "</td><td><button type='submit' class='manager-button' onclick='updateOrder($foId,$checkboxStatusName);'>Update</button></td></tr>" ;

                }

            }
            $query="SELECT * FROM foodorder ";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("query failed " . mysqli_error());
            }
            while($row=mysqli_fetch_assoc($result)){
                $orderStatus=$row['orderStatus'];
                if($orderStatus==1){
                $foId=$row['foId'];
                $userId=$row['userId'];
                $amount=$row['amount'];
                $transactionId=$row['transactionId'];
                $orderDate=$row['orderDate'];
                $fId=$row['fId'];
                $foodName=$row['foodName'];
                $totalPrice=$row['totalPrice'];
                $checkboxStatusName = "st" . $foId ;
                echo "<tr><td>" . $foId . 
                "</td><td>" . $userId . 
                "</td><td>" . $fId . 
                "</td><td>" . $foodName . 
                "</td><td>" . $amount . 
                "</td><td>" . $totalPrice . 
                "</td><td>" . $transactionId . 
                "</td><td>" . $orderDate ;
                 echo "</td><td><input type='checkbox' name='$checkboxStatusName' id='$checkboxStatusName'";
                 echo " checked>" ;
                 echo "</td><td><button type='submit' class='manager-button' onclick='updateOrder($foId,$checkboxStatusName);'>Update</button></td></tr>" ;

                }

            }
        ?>
    </tbody>

</table>
<!---<p id='statusOrder'>hhhhh</p>-->
<script>
    function updateOrder(foId,checkboxStatusName){
        var checkboxStatus=checkboxStatusName.checked;
        window.location.href="foodOrderUpdate.php?foId="+foId+"&checkboxStatus="+checkboxStatus;
        //var stt = document.getElementById('st');
        //var st=stt.checked;
        //console.log(st);
        //document.getElementById('statusOrder').innerHTML = checkValue + " " + price + " "+ st.checked;
    }
</script>
    
</body>
</html>