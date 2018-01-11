<?php
/*
Author name: SRIDHAR K NAYAK
E-mail ID:   sridharsourceus@gmail.com
Date:        01-01-2018
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
    <title>Carrer Counselling</title>
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





<!-- WRITE MAIN CONTENT HERE -->
<div class="jumbotron jumbotron-fluid" style="margin-top: 10px; background-image: url('images/stock/career counseling.png');
 background-size: 100%;");">
  <div class="container">
    <span class="main-heading"><font color="white"><center>Career Counselling</center></span></font>
  </div>
</div>  
 
   
<div class="container-fluid">
<div class="row">
<hr>
<div class="col-md-3">
   <center> <img src="images/cc12.png" class="img-fluid"><br><br>
<span class=text3> Stream Selector </span><br>
<span class=text3>What to do after 10th?</span><br> <br>
  <!-- Button to Open the Modal -->
  <button class="sridhar-text3" type="button" class=" btn-primary" data-toggle="modal" data-target="#myModal">
    For 10th Class
  </button> </center>
</div>

<div class="col-md-3">
  <center> <img src="images/cc13.png" class="img-fluid"><br><br>
  <span class=.text>Engineering Branch Selector</span>
  <span class=.text>Which engg. branch is right?</span><br><br>
  <!-- Button to Open the Modal -->
  <button class="sridhar-text3"type="button" class="btn-primary" data-toggle="modal" data-target="#myModal1">
    For 11th & 12th Class
  </button></center>
</div>

<div class="col-md-3">
  <center> <img src="images/cc14.png" class="img-fluid"><br><br>
  <span class=.text>Ideal Career Test</span><br>
  <span class=.text>What career is right for me?</span><br><br>
  <!-- Button to Open the Modal -->
  <button class="sridhar-text3" type="button" class="btn-primary" data-toggle="modal" data-target="#myModal2">
    For all age groups
  </button></center>
</div>

<div class="col-md-3">
 <center><img src="images/cc15.png" class="img-fluid"> <br><br>
 <span class=.text>Skill Based Career</span><br>    
 <span class=.text>What is my true skills?</span> <br><br>
  <!-- Button to Open the Modal -->
  <button class="sridhar-text3" type="button" class=" btn-primary" data-toggle="modal" data-target="#myModal3">
    For all age groups
  </button></center>
</div>
</div>
 
</div>



  <!-- The Modal -->
<div class="container">
<div class="row">
<div class="col-md-3">




  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <span class=.text class="modal-title">What to do after 10th?</span> 
          <button class="sridhar-text3" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</div>

<div class="container">
 <div class="col-md-3">
  
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <span class=.text class="modal-title">Why engineering branch is right for me?</span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</div>

  <div class="container"> 
  <div class="col-md-3">
  
 

  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        <span class.text class="modal-title">What career is right for me?</span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</div>

 <div class="container">
<div class="col-md-3">
 

  <!-- The Modal -->
  <div class="modal fade" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <span class.text class="modal-title">What is my true skills?</span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
</div>
</div>
<br>
<!--  modal ends -->

<div class="container-fluid">
<div class="row">
  <div class="col-md-6">
<!-- Videos -->
 <iframe width="450" height="200" src="https://www.youtube.com/embed/tqvSHqR7pjU?autoplay=0">
</iframe>
</div>
<div class="col-md-6">

<span class="para-heading">Lorem Ipsum is simply dummy</span><br>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially .
</p><br><br><br>
</div>


<div class="row">
  <div class="col-md-6">
<!-- Videos -->
 <iframe width="450" height="200" src="https://www.youtube.com/embed/tqvSHqR7pjU?autoplay=0">
</iframe>
</div>
<div class="col-md-6">

<span class="para-heading">Lorem Ipsum is simply dummy</span><br>

<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ev  er since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially .
</p>
</div>



<!--   </div> -->

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
