<?php
/*
Author name: Nadeem
E-mail ID:   nadeem566sourceus@gmail.com
Date:        30/12/17
*/
/////////////////////////////////////////////////////////
//include_once("variables.php");
//include_once("checkLoginStatus.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dcent MASS</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
<!-- Mobile bar starts here -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul> <!-- User class="activeLink" to make links active -->
        <li><a href="#">Home</a></li>
        <li><a href="#">DCent MASS</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Student Hub</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Media</a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li style="border-bottom:  2px solid #06f;"><a href="#">Contact Us</a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#">FAQs</a></li> -->
  </ul>
</div>

<span id="openNavID" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<!-- Mobile bar ends here -->
     
<div class="mainContainer" id="mainContainer">  <!-- DO NOT REMOVE THIS -->
	<div class="container-fluid">
<!-- MAIN CONTENT STARTS -->
<!-- <span class="bgtext">Dcent MASS</span> -->
<div class="jumbotron jumbotron-fluid nad-jumbodm" style="margin-top: 10px; background-image: url('' ); ">
  <div class="container">
    <center><h2>Dcent MASS</h2></center>
  </div>
</div>






<!-- WRITE MAIN CONTENT HERE -->

<div class="container-fluid">

<div class="row">
<div class="col-md-3">
<h3> Our Mission </h3>
</div>
<div class="col-md-9">
<span class="para">
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ducimus similique laboriosam recusandae delectus. Ratione, adipisci in ipsum cupiditate aliquid nesciunt explicabo nihil suscipit iste dicta velit sint sapiente? Voluptatum!
</span>
</div>
</div>

<div class="row">
<div class="col-md-9">
<span class="para">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Est totam natus temporibus nulla reprehenderit tempore blanditiis sunt nisi autem dolore, eaque perspiciatis odit quas minima! Dignissimos dolores quo expedita dicta.
</span>
</div>
<div class="col-md-3">
<h3> Our Vision </h3>
</div>
</div>

<div class="row">
<div class="col-md-3">
<h3> Our Values</h3>
</div>
<div class="col-md-9">
<span class="para">
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ducimus similique laboriosam recusandae delectus. Ratione, adipisci in ipsum cupiditate aliquid nesciunt explicabo nihil suscipit iste dicta velit sint sapiente? Voluptatum!
</span>
</div>
</div>

</div>

 <!-- OUR TEAM -->

 <div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-image:url(../DCentMASS/images/maktum/online2.png); ">
  <div class="container">
    <center><h2>Our Team</h2></center>
  </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<div class="jumbotron nad-jumbodm1">
<center><a href="#"><h5>Trainers </h5></a></center>
</div>
</div>
<div class="col-md-3">
<div class="jumbotron nad-jumbodm2">
<center><a href="#"><h5>Management </h5></a></center>
</div>
</div>
<div class="col-md-3">
<div class="jumbotron nad-jumbodm3">
<center><a href="#"><h5>HR </h5></a></center>
</div>
</div>
<div class="col-md-3">
<div class="jumbotron nad-jumbodm4">
<center><a href="#"><h5>Technical </h5></a></center>
</div>
</div>
</div>
</div>

  <!-- OUR LOCATION -->
  <div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-image:url(../DCentMASS/images/maktum/online2.png); ">
  <div class="container">
    <center><h2>Our Location</h2></center>
  </div>
</div>

<div class="container-fluid">
<div class="row">

<div class="col-md-9">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.764563338022!2d74.97137751485046!3d15.44325338927029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d2ae9fed4273%3A0x20f20410c5688ced!2sSourceus+Corporation!5e0!3m2!1sen!2sin!4v1514803865842" class="embed-responsive" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
</iframe>
<br/>
<span class="para">
Lorem ipsum dolor sit amet consectetur .<br/> 
Aspernatur delectus necessitatibus <br/> 
saepe dolor voluptates. Numquam qu 
</span>
</div>

<div class="col-md-3">
<div class="list-group">
<ol>
<a href="#"><li class="nad-dmlink">   Location A    </li></a>
<a href="#"><li class="nad-dmlink">   Location B       </li></a>
<a href="#"><li class="nad-dmlink">    Location C      </li></a>
<a href="#"><li class="nad-dmlink">    Location D     </li></a>
<a href="#"><li class="nad-dmlink">    Location E     </li></a>
</ol>
</div>
</div>

</div>
</div>




<!-- NOTE: Please keep your code clean + readable and add comments -->










<!-- MAIN CONTENT ENDS -->
	</div>
</div>
<?php include_once("script.php"); ?>
</body>
</html>
