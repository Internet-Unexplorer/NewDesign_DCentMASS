<?php
/*
Author name: <Your name>;
E-mail ID:   <Your E-mail ID>
Date:        <dd-mm-yyyy>
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
    <title>Title</title>
    <?php include_once("stylesAndFont.php"); ?>
</head>
<body>
    <!-- Left bar starts -->
     <div class="left-bar">
      <div class="image1">
        <img src="images/dcentmass_png.png" class="img-fluid">
      </div>
      <ul>
        <!-- User class="activeLink" to make links active -->
        <li class="activeLink"><a href="#"><i class="material-icons">home</i><span class="menuText">Home</span></a></li>
        <li><a href="#"><i class="material-icons">language</i><span class="menuText">DCent MASS</span></a></li>
        <li><a href="#"><i class="material-icons">settings_applications</i><span class="menuText">Our Services</span></a></li>
        <li><a href="#"><i class="material-icons">group_work</i><span class="menuText">Student Hub</span></a></li>
        <li><a href="#"><i class="material-icons">library_books</i><span class="menuText">Courses</span></a></li>
        <li><a href="#"><i class="material-icons">event</i><span class="menuText">Events</span></a></li>
        <li><a href="#"><i class="material-icons">perm_media</i><span class="menuText">Media</span></a></li>
        <!-- <li><a href="#">Forum</a></li> -->
        <li><a href="#"><i class="material-icons">contacts</i><span class="menuText">Contact Us</span></a></li>
        <!-- <li style="border-bottom:  2px solid #06f;"><a href="#"></a></li> -->
        <!-- <li style="border-bottom: 2px solid #06f;"><a href="#">FAQs</a></li> -->
      </ul>
     </div>
     <!-- Left bar ends -->
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
     <!-- Right bar starts -->
 
     
<div class="mainContainer" id="mainContainer" style="margin-right: 0px; ">  <!-- DO NOT REMOVE THIS -->
  <div class="container-fluid">
<!-- MAIN CONTENT STARTS -->








<!-- WRITE MAIN CONTENT HERE -->
    <div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-color: #A9E8DC; border-radius: 8px;">
  <div class="container">
    <h1 class="display-7">Contact Us</h1>
  
  </div>
</div>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-6">
 <font color="orange"> <h2>Get In Touch<br> With US</h2></font>
  <h5>Fill the form to get in touch with us</h5>
   <form action="/action_page.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="subject">Messege</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
  <div class="col-md-6">
<h2>Contact US</h2>
<img src="../DCentMASS/images/maktum/64665.png" style="height: 27px; width: 27px;"/>&nbsp;Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  <br>
  <br>
  
  <img src="../DCentMASS/images/maktum/56382-200.png" style="height: 27px; width: 27px;"/>&nbsp;+91 9191000000<br><br>
   <img src="../DCentMASS/images/maktum/56382-200.png" style="height: 27px; width: 27px;"/>&nbsp;+91 9191000000
  <br>
  <br>
   <img src="../DCentMASS/images/maktum/aiga_mail-512.png" style="height: 27px; width: 27px;"/> &nbsp;leoremipsum@gmail.com
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