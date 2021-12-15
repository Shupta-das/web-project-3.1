<?php 
include "connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
    <link rel="stylesheet" href="styleManager.css">
</head>
<body>
<h1 style="padding:80px 100px 10px;">Foods</h1>
<div class="add-new-food">
<form action="" method="post" name="addNewFood"></form>
<input type="text" name="newFoodCat" placeholder="New Food category">
<input type="text" name="newFoodName" placeholder="New Food Name"><br>
<input type="text" name="newFoodPrice" placeholder="New Food Price">
<input type="text" name="newFoodStatus" placeholder="Status"><br><br>
<label for="">New Food Image: </label>
<input type="file" name="newFoodImage"><br><br>
<button class="manager-button" type="submit" name="add">Add+</button><br>
</form>
</div>

<table class="manager-tables">
    <thead>
        <tr>
            <th>Food Id</th>
            <th>FC Id</th>
            <th>Food Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query="SELECT * FROM food ";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("query failed " . mysqli_error());
            }
            while($row=mysqli_fetch_assoc($result)){
                $fId=$row['fId'];
                $fcId=$row['fcId'];
                $foodName=$row['foodName'];
                $foodImage=$row['foodImage'];
                $foodPrice=$row['foodPrice'];
                $foodStatus=$row['foodStatus'];

                echo "<tr><td>" . $fId . 
                "</td><td>" . $fcId . 
                "</td><td>" . $foodName . 
                "</td><td>" . $foodImage . 
                "</td><td>" . $foodPrice . 
                "</td><td>" . $foodStatus . 
                "</td><td><button class='manager-button'><a href='foodTableEdit.php?fId=$fId'>Change</a></button>" . 
                "</td></tr>" ;

            }
        ?>
    </tbody>

</table>
<script>
</script>
    
</body>
</html>