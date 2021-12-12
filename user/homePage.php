<?php 
include "userSideBar.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>
    <p style="font-size:larger;font-weight:bold;text-align:center;">Welcome to Khai Dai </p>
    <div style="text-align:center;">
    <button class="aboutUsButton"><a href="#about" ><i class="fas fa-info-circle"></i>About Us</a></button></div>
    <div id="homepage" class="homepage-slide">
    <img class="home-slide" src="../foodPhotos/home1.jpg" alt=""style="height:80%;width: 90%;">
    <img class="home-slide" src="../foodPhotos/home3.jpg" alt=""style="height:80%;width: 90%;">
    <img class="home-slide" src="../foodPhotos/home9.jpg" alt=""style="height:80%;width: 90%;">
    <img class="home-slide" src="../foodPhotos/home5.jpeg" alt=""style="height:80%;width: 90%;">
    <img class="home-slide" src="../foodPhotos/home6.jpg" alt=""style="height:80%;width: 90%;">
    <img class="home-slide" src="../foodPhotos/home7.jpg" alt=""style="height:80%;width: 90%;">
    <img class="home-slide" src="../foodPhotos/home8.jpg" alt=""style="height:80%;width: 90%;">
    <img class="home-slide" src="../foodPhotos/home10.jpg" alt=""style="height:80%;width: 90%;">
    </div>
    
    <div id="about" class="aboutUs">
    <p style="font-size:larger;font-weight:bold;text-align:center;">About Us </p>
    <p>RestManage Team</p>
    <p>We welcome you to sit back, unwind and appreciate the lovely sights and hints of the ocean while our best gourmet expert sets you up a scrumptious dinner utilizing the best and freshest ingredients.’Company Name’s legacy comes from The parent  Restaurant which was built up in 1963.</p>
    <p>Organization’s story</p>
    <p>Organizer, Craig Stephen, opened the first ‘Organization Name’ Restaurant in Los Alamitos, California on September 27, 1977. Today, there are 37 areas all through Arizona, California, Illinois, Louisiana, Nevada, Oregon, Tennessee, and Washington.</p>

    </div>
    
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("home-slide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>