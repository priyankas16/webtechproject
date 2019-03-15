<!--Amy and Priyanka website about Food Waste Index Page!-->
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
  		#partner{
  			border-style:solid;
  			border-width:5px !important;
  			border-color:red;
  			padding:20px;
  			margin:0 auto;
  			margin-bottom:20px;
  			}
  	</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src=" https://code.jquery.com/jquery-3.3.1.js"></script> <!--from datatables.net-->
  <script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> <!--from datatables.net-->
	
	<script>
		$(document).ready(function() { //performs the datatable functions
    	$('#restaurant').DataTable();
		} );
		
		$(document).ready(function() { //performs the datatable functions
    	$('#charity').DataTable();
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

<div class="jumbotron">
		<h1> Current Partners </h1>
		<p> These are the restaurants and charities we are currently partnered with!</p>
		<a href="partner.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Click Here to Become a Partner!</a>
</div>

<!--container with the data table for restaurant partners-->
  	<div id="partner"class="container-fluid bg-3 text-center" style="width:80%">
  	<h2> Restaurants </h2>
		<?php
		include "config.php";
		echo "<table id='restaurant'>";
		echo "<thead class='text-primary'>";
			echo "<tr>";
				echo "<th> Restaurant Name </th>";
				echo "<th> Location </th>";
			echo "</tr>";
		echo "</thead>";
		
		echo "<tbody>";
		$sql = "SELECT restName, restLocation FROM restaurants";
		$result = $conn->query($sql);
		if ($result-> num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
    			echo "<tr>";
        		echo "<th>". $row["restName"]. "</th> <th> ". $row["restLocation"]. "</th> " ;
    			echo "</tr>";
    			}
		} else {
    		echo "0 results";
		}
		echo "</tbody>";
		echo "</table>";
	?>

	</div>

<!--container with the data table for charity partners-->
  	<div id="partner" class="container-fluid bg-3 text-center" style="width:80%">
  	<h2> Charities </h2>
		<?php
		include "config.php";
		echo "<table id='charity'>";
		echo "<thead class='text-primary'>";
			echo "<tr>";
				echo "<th> Charity Name </th>";
				echo "<th> Location </th>";
			echo "</tr>";
		echo "</thead>";
		
		echo "<tbody>";
		$sql = "SELECT charityName, charityLocation FROM charity";
		$result = $conn->query($sql);
		if ($result-> num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
    			echo "<tr>";
        		echo "<th>". $row["charityName"]. "</th> <th> ". $row["charityLocation"]. "</th> " ;
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

</body>
</html>
