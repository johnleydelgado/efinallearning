<?php
//starting session
	session_start();

?>
<?php

	

	//getting login type
	$role = $_GET["roleID"];

    //including database coonection file
    include 'dbc.php';

    //declaring message
    $msg = "";

    //when login attempt is made
    if(isset($_POST['submit'])){

    	//getting user entered username
    	$username = $_POST['username'];

        //getting user entered password  
        $password = $_POST['password'];

        //checking user details with database  
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role ='$role'";
        $result = $conn->query($sql);
		While($row =mysqli_fetch_array($result,MYSQL_ASSOC)){
	
			$Name= $row['name'];
			$email= $row['username'];
			$lname= $row['lastname'];
			$_SESSION['login_user']=$Name;
			$_SESSION['email_user']=$email;
			$_SESSION['lastname_user']=$lname;
	
		}
		
		//if login is valid
        if ($result->num_rows > 0) {
		    
		    //making cookies
            $_SESSION['user']= $username;
            $_SESSION["role"]= $role;   
			$_SESSION['login_user']=$Name;
            echo("<script>window.location = '../index2.php'</script>");
            exit();


		}
		//if login is invalid
		else {
		    
		    $msg = "Invalid Login (Username or Password is Invalid)";
		}
		
		
        
    }
	
	

?>
<!--html-->
<!doctype html>
<html lang="en">
	<!--meta information-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="icon" type="image/png" href="images/logo.png">
		<title>PHP Based Student Management Portal</title>
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/skeleton.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="script.js"></script>
		<script src="pdfscript.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<!--content-->
	<body>
		<!--header-->
	    <header>
	    	<div class="container">
	    		<div class="row">
					<div class="nine columns">
						<h5 style="font-weight:bold;"><span style="color:#35bcf2;"><i class="fa fa-users"></i></span> Student Management Portal</h5>
					</div>
			    </div>	
			</div>    	
	    </header>
	    <!--main wrapper-->
	    <div class="wrapper">
		    <h4 class="margin-top-max">Login</h4>asc
		    <p class="grey">enter your credentials below to login to your account</p>
		    <div class="row">
		    	<div class="columns six offset-by-three" >
		    		<span class="red" style="font-size:12px;"><?php echo $msg."<br><br>" ?></span>
				    <form class="form" method="post" action="">
						<label for="email">Email</label>
						<input class="u-full-width" type="email" id="email" name="username">
						<label for="password">Password</label>
						<input class="u-full-width" type="password" id="password" name="password">
						<input class="button-primary" type="submit" value="Submit" name="submit">
						<a href="#" onclick="roleID2=1; signupRedirect(roleID2)" style="font-size:12px;"> Sign Up ?!</a>	
							
						<br>
						<br>
					<a href="../index.html" style="font-size:12px;">&lt;&lt; Back to Homepage</a>
						
					</form>
				</div>	
			</div>	
		</div>			
	</body>
</html>