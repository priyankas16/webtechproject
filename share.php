<!--Amy and Priyanka website about Food Waste!-->
<!--page with all the food donations-->
<!--uses datatable and complex mysql query with inner join-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Waste</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.png" type="image/png"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!--imports bootstrap css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> <!--from datatables.net-->
  <link rel="stylesheet" type="text/css" href="style.css">
  	<style>
  		#minicontainer{
  			padding:20px;
  			background-color:white;
  			border-style:solid;
  			border-width:5px !important;
  			border-color:red;
  			}
  		#container {
  			margin-top:-35px;
  			padding:20px;
  			
  			}
  	</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src=" https://code.jquery.com/jquery-3.3.1.js"></script> <!--from datatables.net-->
  <script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> <!--from datatables.net-->
	<script>
		$(document).ready(function() { //performs the datatable functions
    	$('#donations').DataTable();
		} );
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

<!--home section with jumbotron and datable inside-->
<div id="homesection">
	<div class="jumbotron">
		<h1> Share Food </h1>
		<p> We are currently partnered with many local restaurants and charities/non-profits in the Aurora Area! On this page, we have a datatable with all the foods currently donated by nearby restaurants </p>
		<a href="donate.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Click Here to Donate!</a>
	</div>
	
	<!--container with the data table for food donations-->
  <div id="container">
  	<div id="minicontainer" class="container-fluid bg-3 text-center" style="width:80%" >
  	<h2 class="text-danger"> FOOD DONATIONS </h2>
		<?php
		include "config.php";
		echo "<table id='donations'>"; //creates the datatable with jquery plugin
		echo "<thead class='text-primary'>";
			echo "<tr>";
				echo "<th> Food Type </th>";
				echo "<th> Quantity Fed </th>";
				echo "<th> Restaurant Name </th>";
				echo "<th> Location </th>";
			echo "</tr>";
		echo "</thead>";
		
		echo "<tbody>";
		$sql = "SELECT foodtype, quantityfed, restName, restLocation FROM donations JOIN restaurants ON donations.restId=restaurants.restId"; //joins the restaurants and donations table by matching the restId key
		$result = $conn->query($sql);
		if ($result-> num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
    			echo "<tr>";
        		echo "<th> ". $row['foodtype']. "</th> <th> ".$row['quantityfed']. "</th> <th>". $row["restName"]. "</th> <th> ". $row["restLocation"]. "</th> " ;
    			echo "</tr>";
    			}
		} else {
    		echo "0 results";
		}
		echo "</tbody>";
		echo "</table>";
		
		$conn->close();
	?>
	</div>
	</div>

	</div>
	
</body>
</html>
