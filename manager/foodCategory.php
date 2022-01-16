<?php 
include "connection.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Categories</title>
    <link rel="stylesheet" href="styleManager.css">
</head>
<body class="manager-food-category-body">
<button style="margin:80px 100px 2px;" class='manager-button'><a href="managerHome.php">Back</a></button>
<h1 style="padding:2px 100px 10px;">Food Categories</h1>

<input style="margin-left:45px;" type="text" id="newFcN" placeholder="New Food Category">
<button style="margin-left:30px;" class="manager-button" type="button" name="addfc" onclick="addfc();">Add+</button>
<p id="fcWarning" style="color:red;font-weight:bold;"></p>
<table class="manager-tables">
    <thead>
        <tr>
            <th>FC Id</th>
            <th>FC Name</th>
            <th>Total Item</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            /*$query="SELECT foodcategory.fcId,foodcategory.fcName,
            COUNT(food.fId) FROM foodcategory , food 
            WHERE foodcategory.fcId=food.fcId 
            GROUP BY foodcategory.fcId ; " ;*/
            $query="SELECT * FROM foodcategory ";
            $result=mysqli_query($connection,$query);
            if(!$result)
            {
                die("query failed " .mysqli_error());
            }
            while($row=mysqli_fetch_assoc($result)){
                $fcId=$row['fcId'];
                $fcName=$row['fcName'];
                
                //getting total foods in each category
                $query2="SELECT COUNT(fId) FROM food 
                WHERE fcId='$fcId'; ";
                $result2=mysqli_query($connection,$query2);
                if(!$result2)
                {
                    die("query failed " .mysqli_error());
                }
                $row2=mysqli_fetch_assoc($result2);
                
                $totalItem=$row2['COUNT(fId)'];
                echo "<tr><td>" . $fcId . 
                "</td><td>" . $fcName . 
                "</td><td>" . $totalItem . 
                "</td></tr>";
            }
        ?>
    </tbody>

</table>
<script>
    var newfcName;
    function addfc(){
        newfcName=document.getElementById("newFcN").value;
        //alert(newfcName);
        if(newfcName){
            window.location.href="addfoodCategory.php?newFcName="+newfcName;
           //document.getElementById("fcWarning").innerHTML = newfcName;
        }
        else{
            document.getElementById("fcWarning").innerHTML="Enter a category name then click the 'Add+' .";
        }
        
    }
</script>
    
</body>
</html>