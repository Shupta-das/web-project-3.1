<?php 
include "connection.php";
$warningMsg=NULL;
if(isset($_POST['add'])){
    $fcId=$_POST['fcId'];
    $foodName=$_POST['newFoodName'];
    $foodPrice=$_POST['newFoodPrice'];
    $foodStatus=$_POST['newFoodStatus'];
    $foodImage=$_FILES['newFoodImage']['name'];
    if($fcId==NULL || $foodName==NULL||$foodPrice==NULL||$foodImage==NULL||$foodStatus==NULL){
        $warningMsg="Please fill up all sections.";
    }
    else{
        $foodPhotoTemp=$_FILES['newFoodImage']['tmp_name'];
        $targetFile="../foodPhotos/$foodImage";
        move_uploaded_file($foodPhotoTemp,$targetFile);
    }

    $query2="INSERT INTO food (fcId,foodName,foodPrice,foodImage,foodStatus) 
    VALUES('$fcId','$foodName','$foodPrice','$foodImage','$foodStatus')";
    $result2=mysqli_query($connection,$query2);
    if(!$result2){
        die("query Failed" . mysqli_error());
    }

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods</title>
    <link rel="stylesheet" href="styleManager.css">
</head>
<body class="manager-home-body2">
<button style="margin:80px 100px 2px;" class='manager-button'><a href="managerHome.php">Back</a></button>
<h1 style="padding:2px 100px 10px;">Foods</h1>
<div class="add-new-food">
<form action="" method="post" enctype="multipart/form-data">
<label for="foodCategory">Select the Category:</label>
<select name="fcId" id="foodCategory">
    <?php 
        $queryf="SELECT * FROM foodCategory ";
        $result=mysqli_query($connection,$queryf);
        if(!$result){
            die("query failed" . mysqli_error());
        }
        while($rowf=mysqli_fetch_assoc($result)){
            $fcId=$rowf['fcId'];
            $fcName=$rowf['fcName'];
            echo "<option value='" . $fcId . "'>". $fcName . "</option>";
        }
    ?>
</select>
<input type="text" name="newFoodName" placeholder="New Food Name"><br>
<input type="text" name="newFoodPrice" placeholder="New Food Price">
<input type="text" name="newFoodStatus" placeholder="Status"><br><br>
<label for="">New Food Image: </label>
<input type="file" name="newFoodImage"><br><br>
<button class="manager-button" type="submit" name="add">Add+</button><br>
<p style="color:red;font-weight:bold;"><?php echo $warningMsg; ?></p>
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
            $query="SELECT * FROM food ORDER BY fId DESC ";
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
                "</td><td><img src='../foodPhotos/". $foodImage . "' alt='' width='40px' height='40px'>" .
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