<!DOCTYPE html>
<?php

session_start();	
?>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>E-learning</title>

  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='css/font.css' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery2.1.1.min.js"></script>
  <script src="js/site.js"></script>
  <script src="script.js"></script>
</head>
<body>

<header>
	    	<div class="container">
	    		<div class="row">
					<div class="nine columns">
						<h5 style="font-weight:bold;"><span style="color:#35bcf2;"><i class="fa fa-users"></i></span> Student Management Portal</h5>
					</div>
			    </div>	
			</div>    	
	    </header>
<!-- navbar -->
<nav class="navbar">
      <div class="container">
        <ul class="navbar-list">
          <li class="navbar-item active"><a class="navbar-link" href="index.html">Home</a></li>
          <li class="navbar-item"><a class="navbar-link" href="lesson.php">Lessons</a></li>
          <li class="navbar-item"><a class="navbar-link" onclick="roleID3=1; UpdateRedirect(roleID3)">Your Account</a></li>
<li class="navbar-item"><a class="navbar-link" href="secure/logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
<!-- navbar -->
<!-- content 1 -->
<div class="content-1">
  <div class="container">
   <?php 
 $login_session=$_SESSION['login_user'];
   echo '<h2>Welcome : '.$login_session.'</h2>';
   ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <h2>Learn for today video </h2>
	 <div class="vdo-log margin_bottom">
            <div class="video-player"><object width="800" height="600" data="https://www.youtube.com/v/oB1v-wh7EGU" type="application/x-shockwave-flash"><param name="src" value="https://www.youtube.com/v/oB1v-wh7EGU" /></object></div>
            
        </div>
	

  </div>
</div>
<!-- content 1 -->

<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="row text-center">
       <div class="four columns">
        <p>e-learning</p>
       </div>
       <div class="four columns">
        <p>Copyright 2017</p>
       </div>
       <div class="four columns">
        <p>facebook.com</p>
       </div>
    </div>
  </div>
</div>
<!-- footer -->
</body>
</html>
