<!DOCTYPE html>
<?php
session_start();
 $login_session=$_SESSION['login_user'];																																																																								
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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Javascript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="js/jquery2.1.1.min.js"></script>
  <script src="js/site.js"></script>
  <script src="pdfscript.js"></script>
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
          <li class="navbar-item"><a class="navbar-link" href="index2.php">Home</a></li>
          <li class="navbar-item active"><a class="navbar-link" href="lesson.php">Lessons</a></li>
           <li class="navbar-item"><a class="navbar-link" onclick="roleID3=1; UpdateRedirect(roleID3)">Your Account</a></li>
<li class="navbar-item"><a class="navbar-link" href="secure/logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
<!-- navbar -->
<!-- content 1 -->
<div class="container">
  <h2>Lessons</h2>
  

    <div class="panel panel-primary">
    
    </div>
<!-- Second Panel -->
    <div class="panel panel-primary">
        <div class="panel-heading">
             <h4 class="panel-title" 
                 data-toggle="collapse" 
                 data-target="#collapseTwo">
                 Chapter 1 : Introduction to Electricity
             </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body"  >
             
     <ul class="list-group">
          <li class="list-group-item"> <a href="#" onclick="pdfname='pdf/modue_1_1.pdf'; pdfRidirect(pdfname)" style="font-size:12px;"> Module 1</a></li>
		  <li class="list-group-item"> <a href="#" onclick="pdfname='pdf/modue_2_1.pdf'; pdfRidirect(pdfname)" style="font-size:12px;">Module 2</a></li>
		  <li class="list-group-item"> <a href="#" onclick="pdfname='pdf/modue_3_1.pdf'; pdfRidirect(pdfname)" style="font-size:12px;">Module 3</a></li>
		   
        </ul>
            </div>
        </div>
    </div>
	<!-- Second Panel -->
      <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title" 
                 data-toggle="collapse" 
                 data-target="#collapseThree">
                 Chapter 2 : Parallel and Series Circuits
             </h4>
        </div>
       <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
             
     <ul class="list-group">
          <li class="list-group-item"> <a href="#" onclick="pdfname='pdf/modue_1_2.pdf'; pdfRidirect(pdfname)" style="font-size:12px;">Module 1</a></li>
         <li class="list-group-item"> <a href="#" onclick="pdfname='pdf/modue_2_2.pdf'; pdfRidirect(pdfname)" style="font-size:12px;">Module 2</a></li>
		  <li class="list-group-item"> <a href="#" onclick="pdfname='pdf/modue_3_2.pdf'; pdfRidirect(pdfname)" style="font-size:12px;">Module 3</a></li>
		   
        </ul>
            </div>
        </div>
    </div>
	
	<!-- Second Panel -->
      <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title" 
                 data-toggle="collapse" 
                 data-target="#collapseFour">
                Quiz and Review
             </h4>
        </div>
       <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
             
     <ul class="list-group">
          <li class="list-group-item"> <a href="http://www.bbc.co.uk/bitesize/quiz/q80633759">Electricity & circuit</a></li>
     
		   
        </ul>
            </div>
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
<script src="../js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script>
$(function () {

    var active = true;

    $('#collapse-init').click(function () {
        if (active) {
            active = false;
            $('.panel-collapse').collapse('show');
            $('.panel-title').attr('data-toggle', '');
            $(this).text('Enable accordion behavior');
        } else {
            active = true;
            $('.panel-collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            $(this).text('Disable accordion behavior');
        }
    });
    
    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });

});
</script>

</body>
</html>
