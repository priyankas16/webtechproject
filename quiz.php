<!-- Amy Guo and Priyanka Sarangabany, December 9th, 2018-->
<!--Questions page that creates database of 20 questions on the server side and randomnly prints 10 to the page on the client side, includes a 10 minute timer that automatically submits exam at 0:00-->
<!-- Countdown Timer information researched from https://www.w3schools.com/howto/howto_js_countdown.asp and https://wplearninglab.com/countdown-timer/-->
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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src=" https://code.jquery.com/jquery-3.3.1.js"></script> <!--from datatables.net-->
  <script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> <!--from datatables.net-->
	<style>
		img {
			width:100%;
			}
	nav {
		background-color: white;
	}
.container {

	width: 100%;
	height: 100%;
	
	position: absolute;
	top:50%;
	bottom: 0;
	left: 0;
	right: 0;
  	
	margin: auto;
}
div#clockdiv {
    text-align: center;
    font-family: bold;
    font-weight: bold;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
    text-align:center;
    margin-top: 2%;
}
 
div#clockdiv:before {
    width: 100%;
    margin-bottom: 21px;
}
 
.countdown-wrap {
    width: 100%;
}
 
div#clockdiv > div {
    font-size: 30px;
    width: 25%;
    color: red;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
 
.minutes, .seconds {
	margin-bottom:20px;
}
 
span.time-label {
    font-size: 16px;
    color: red;
}
body {
	background-color: #B0F2D2;
}
</style>
	</style>
	<script>
		$(document).ready(function() { //performs the datatable functions
    	$('#example').DataTable();
		} );
	</script>
</head>

<body>  
	<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="index.html">Stop Food Waste</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
  		</button>
  	
  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
      	<li class="nav-item active">
        	<a class="nav-link" href="share.html">Share Food</a>
      	</li>
      
      	<li class="nav-item">
        <a class="nav-link" href="stats.php">Statistics</a>
        </li>
      
      	<li class="nav-item dropdown">
        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          	Get Involved
        	</a>
        	
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
        		<a class="dropdown-item" href="advocate.html">Become an Advocate</a>
        		<a class="dropdown-item" href="share.html">Become a Partner</a>
        	</div>
	</nav>
<!--end of navbar code-->


<div class="countdown-wrap">
            <div id="clockdiv">
                <div>
                    <span class="minutes"></span>
                    <span class="time-label">MINUTES</span>
                </div>
                <div>
                    <span class="seconds"></span>
                    <span class="time-label">SECS</span>
                </div>
            </div>
        </div>


<div>

<script>
var timeInMinutes = 10; //10 minutes on timer
var currentTime = Date.parse(new Date()); //count down from current time
var deadline = new Date(currentTime + timeInMinutes*60*1000); //count down to deadline


function getTimeRemaining(endtime){
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor( (t/1000) % 60 );
    var minutes = Math.floor( (t/1000/60) % 60 );
    return {
        'total': t,
        'minutes': minutes,
        'seconds': seconds
    };
}

function initializeClock(id, endtime){
    var clock = document.getElementById(id);
    function updateClock(){
        var t = getTimeRemaining(endtime);
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');
        minutesSpan.innerHTML = t.minutes;
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        if(t.total<=0){
        	document.getElementById('form').submit();
        }
    }
    updateClock(); // run function once at first to avoid delay
    var timeinterval = setInterval(updateClock,1000);
}
initializeClock('clockdiv', deadline);
</script>

<?php
include "config.php";

//sql to create database
$sql = "CREATE DATABASE advocate";
mysqli_query($conn, $sql);
mysqli_select_db($conn, 'advocate');

// sql to create table
$sql = "CREATE TABLE questions ( /*Create table of 20 questions*/
question TEXT NOT NULL,
answer BOOLEAN 
)";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer);
VALUES ('Over 1/3 of all food produced globally goes to waste.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('The annual value of food wasted globally is $1 trillion, and it weighs 1.3 billion tonnes.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('All the world’s nearly one billion hungry people could be fed on less than a quarter of the food that is wasted in the US, UK and Europe.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('An area larger than China is used to grow food that is never eaten.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('25% of the world’s fresh water supply is used to grow food that is never eaten.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('If food waste were a country it would be the 3rd largest emitter of greenhouse gases (after China & the USA).', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('In most developed countries, over half of all food waste takes place in the home.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('1.3 billion tons of food are wasted every year.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Food waste in rich countries (222 million tons) is approximately equivalent to all of the food produced in Sub-Saharan Africa (230 million tons).', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('A European or North American consumer wastes 15 times more food than a typical African consumer.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Lack of technology and infrastructure is the main cause of food waste in Africa, as opposed to household food waste in the developed world.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Food waste generates 3.3 billions tons of carbon dioxide, which accelerates global climate change.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Fruit and vegetables are the most wasted food group, followed by meat and dairy', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Promotions in supermarkets can lead to more food waste. When we think we are getting more for our money, we buy more which we won’t necessarily use', '1')"; 
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Only 37% of people know the difference between ‘use by’ and ‘best before’ dates.', '1')"; 
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Food waste is not a problem in the US.', '0')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Despite rising awareness, food waste rates have increased.', '0')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('It is impossible to reduce food waste rates.', '0')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('Food losses and waste amounts to roughly US$ 680 billion in industrialized countries and US$ 310 billion in developing countries.', '1')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO questions (question, answer)
VALUES ('The food currently lost or wasted in Latin America could feed 300 million people.', '1')";
mysqli_query($conn, $sql);

/*Printing the 10 questions to the page*/
echo "<form id = 'form' action = 'score.php' method = 'POST'>";
$sql = "Select * from questions ORDER BY RAND() LIMIT 10";
	$result = mysqli_query($conn, $sql);
	$i = 1;
	if(mysqli_num_rows($result) > 0){
	echo "<div class='container'>
    <div class='row'>
      <div class='col-lg-10 col-xl-9 mx-auto'>
        <div class='card card-signin flex-row my-5'>
          <div class='card-body'>" ;

	echo "<p style='color:red'>You have 10 minutes to complete this quiz. You must answer all questions before submitting.</p><hr class='my-4'>";
	while($row = mysqli_fetch_assoc($result)) {
	echo "$i. ". $row['question']. "<br><input type = 'radio' name = '$i' value = '1' required='required'>True  <br>
	<input type = 'radio' name = '$i' value = '0'>False";
	echo "<hr class='my-4'>";
	$answer = $row['answer'];
	echo "<input type = 'hidden' name = 'ans$i' value = '$answer'>"; //printing hidden information so it can be accessed by score.php
	$i++;
	}
	}
	echo "<button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit'>Submit</button>";
	echo "</div>
        </div>
      </div>
    </div>
  </div>";
?>