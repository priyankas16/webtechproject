<!--Amy and Priyanka website about Food Waste Index Page!-->
<!--uses jquery accordion, json, and bootstrap-->
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
	<style>
  		#accordion{
  			font-family:bold;
  			text-align:center;
  			margin:0 auto;
  			}
  		#factsection{
  			background-color: #B0F2D2;
  			padding:20px;
  			}
  		img {
  			width:400px;
  			}
  		#minifactsection{
  			background-color:white;
  			width:80%;
  			margin: 0 auto;
  			padding:20px;
  			}
  		#about {
  			text-align:left;
  			padding-bottom:40px;
  			}
  		#miniabout{
  			width:70%;
  			margin: 0 auto;
  			}
  		div.button{
  			text-align:center;
  			}
	</style>
	
	<script>
  		$( function() {
    		$( "#accordion" ).accordion({
      		heightStyle: "content"
    		});
  		} );
  </script>
  </script>
</head>

<body>  
	<nav class="navbar navbar-expand-lg border-bottom">
		<a class="navbar-brand" href="index.php">Stop Food Waste</a>
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

<div class="jumbotron">
	<h1> Stop Food Waste </h1>
</div>

<!--about section-->
<div id="about">
	<div id="miniabout">
		<h2 class="text-danger"> ABOUT </h2>
		<p class="text-primary"> Our goal is to help prevent food waste by spreading awareness and utilizing a platform that allows restaurant to donate their extra food to charities in need.
			We are currently based in Aurora, IL and are always looking for partners (restaurants and charities) to help us expand our platform!  </p> 
		<div class="button">
			<a href='donate.php' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Donate Food!</a>
			<a href='partner.html' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>Become a Partner!</a>
		</div>
		<br>
		<p class="text-primary"> We currently have a list of local restaurants, local charities, and available food avaialble to view on our website. </p>
		<div class="button">
			<a href='share.php' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>View Available Food!</a>
			<a href='partnerexamples.php' class='btn btn-primary btn-lg active' role='button' aria-pressed='true'>View Current Partners!</a>
		</div>
	</div>
</div>

<div class="embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7SqLz4O32vc"></iframe>
</div>

<!-- section with facts about food waste-->
<!--uses accordion-->
<div id="factsection">
	<div id="minifactsection" class="rounded">
		<h2 class='text-danger'> FOOD WASTE FACTS </h2>
		<div id="accordion" style="width:80%">
			<?php 
			
			$json = file_get_contents('facts.json'); //imports file and stores it as a JSON String
			$data =  json_decode($json, true); // converts JSON string to a PHP variable
      		
      		foreach($data as $key => $value) //accesses array keys and the values for each key
			{ //creates accordion using json
    			echo "<h3>" . $value['fact'] . "</h3>";
    			echo "<div>". $value['info'] . "</div>";
		}
  			?>
		</div>
	</div>
</div>


</body>
</html>
