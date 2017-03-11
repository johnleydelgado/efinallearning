<?php

	//starting session
	session_start();

	//getting login type
	$role = $_GET["roleID3"];

    //including database coonection file
    include 'dbc.php';

    //declaring message
    $msg = "";

	// $sql = "INSERT INTO users(username,name,lastname,password,role) VALUES('$username','$fname','$lname','$password','$role')";
	
    //when login attempt is made
    if(isset($_POST['submit'])){

    	//getting user entered username
    	$username = $_POST['username'];

        //getting user entered password  
        $fname = $_POST['fname'];
		$lname = $_POST['lname'];
		//getting user entered password  
        $password = $_POST['password'];
        //checking user details with database  
       
		 $sql = "INSERT INTO users(username,name,lastname,password,role) VALUES('$username','$fname','$lname','$password','$role')";
        $result = $conn->query($sql);
		 
		    //making cookies
            $_SESSION['user']= $username;
            $_SESSION["role"]= $role;   
           echo("<script>window.location = '../index.html'</script>");
            exit();


		//if login is valid
       
        
    }

?>




<!DOCTYPE html>

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
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../css/custom.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery2.1.1.min.js"></script>
  <script src="js/site.js"></script>
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
          <li class="navbar-item "><a class="navbar-link" href="../index2.php">Home</a></li>
          <li class="navbar-item"><a class="navbar-link" href="../lesson.php">Lessons</a></li>
          <li class="navbar-item active"><a class="navbar-link" href="viewaccount.php">Your Account</a></li>
<li class="navbar-item"><a class="navbar-link" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
<!-- navbar -->
<!-- content 1 -->

 
<div class="content-1">
  <div class="container">
   <h4 class="margin-top-max">Profile</h4>
		    <p class="grey">Edit you Profile</p>
		    <div class="row">
		    	<div class="columns six offset-by-three">
		    		<span class="red" style="font-size:12px;"><?php echo $msg."<br><br>" ?></span>
					<?php
					$name=$_SESSION['login_user'];
					$lname=$_SESSION['lastname_user'];
					$email=$_SESSION['email_user'];
				  echo'  <form class="form" method="post" action="">';
					echo'<label for="name">Name</label>';
					echo'	<input class="u-full-width" type="name" id="lname" name="lname" value="'.$lname.'">';
					echo'	<label for="fname">Full Name</label>';
					echo'	<input class="u-full-width" type="fname" id="fname" name="fname"  value="'.$name.' '.$lname.'">';
					echo'	<label for="email">Email</label>';
					echo'	<input class="u-full-width" type="email" id="email" name="username"  value="'.$email.'">';
					echo'	<label for="password">Password</label>';
					echo'	<input class="u-full-width" type="password" id="password" name="password">';
				
					
					
						
					echo'	<br>';
					echo'	<br>';
					echo'	<a href="../index2.php" style="font-size:12px;">&lt;&lt; Home</a>	';
					echo'</form>';?>
				</div>	
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
