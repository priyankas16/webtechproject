<!--Amy and Priyanka website about Food Waste -->
<!--Page for people that have successfully registered to become restaurant donors-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Waste</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.png" type="image/png"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!--imports bootstrap css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> <!--from datatables.net-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <!--from https://jqueryui.com-->
  <link rel="stylesheet" href="/resources/demos/style.css"><!--from https://jqueryui.com-->
  
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script> <!--from https://jqueryui.com-->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> <!--from https://jqueryui.com-->
  <script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> <!--from datatables.net-->
</head>

<body>  
	<nav class="navbar navbar-expand-lg border-bottom border-light">
		<a class="navbar-brand" href="index.html">Stop Food Waste</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
  		</button>
  	
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      	<li class="nav-item active">
        	<a class="nav-link" href="share.php">Share Food</a>
      	</li>
      
      	<li class="nav-item">
        <a class="nav-link" href="stats.html">Statistics</a>
        </li>
      	
      	<li class="nav-item">
      	<a class="nav-link" href="partnerexamples.php"> Partners </a>
      	
      	<li class="nav-item dropdown">
        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	Get Involved
        	</a>
        	
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
        		<a class="dropdown-item" href="quiz.html">Become an Advocate</a>
        		<a class="dropdown-item" href="partner.html">Become a Partner</a>
        	</div>
	</nav>
<!--end of navbar code-->
	<?php
    	include 'config.php';
		
		$name = $_POST['charName'];
		$location = $_POST['charLocation'];
		
    	$sql = "INSERT IGNORE INTO charity(charityName,charityLocation) VALUES('$name', '$location')";
    	$result = $conn->query($sql);
    	
    	if (!$result) {
    		echo mysqli_error($conn);
    		}
    	else {
    		echo "<div class='jumbotron'> <h1> You have successfully become a charity partner! </h1> <br> <a href='share.php' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Click Here to View the Donated Food!</a> </div>";
    		}
?>


</body>
</html>
