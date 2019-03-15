<!--Amy and Priyanka website about Food Waste Index Page!-->
<!--This page scores the quiz to determine whether user can register as an advocate or not-->
<!--This page uses Bootstrap, SQL, JS-->
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
label{
  	font-size: 12px;
  	margin-left: 5px;
  	margin-top: -4px;
  }
.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  overflow: hidden;
}
.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}
.card-signin .card-img-left {
  width: 45%;
  /* Link to your background image using in the property below! */
  background: scroll center url('images/vegetables.jpg');
  background-size: cover;
}
.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: 30px;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: 10px;
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (1.5));
  padding-bottom: calc(var(--input-padding-y) / 1.5);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) );
  padding-bottom: calc(var(--input-padding-y));
  font-size: 6px;
  color:  gray;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
    img {
      width:100%;
      }
    p {
      text-align: center;
    }
    nav {
    	background-color: white;
    }
    body {
    	background-color: #1F7DE2;
    }
  </style>
  <script>
    $(document).ready(function() { //performs the datatable functions
      $('#example').DataTable();
    } );
  </script>
</head>
<body>
    <!--navbar-->
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
            <a class="dropdown-item" href="quiz.php">Become an Advocate</a>
            <a class="dropdown-item" href="share.html">Become a Partner</a>
          </div>
  </nav>
<!--end of navbar code-->

<?php
include 'config.php';
mysqli_select_db($conn, 'advocate');
$i = 1;
$score = 0;
while ($i < 11)
{
	$ans = $_POST[''.$i];
	$answer = $_POST['ans'.$i];
	if ($ans == $answer) $score++;
	$i++;
}

echo "<div class='container'>
    <div class='row'>
      <div class='col-sm-9 col-md-7 col-lg-5 mx-auto'>
        <div class='card card-signin my-5'>
          <div class='card-body'>You received a score of ";
	echo $score . "/10";
	echo ", which is ";
	echo $score * 10;
	echo "%";

if ($score < 7) {
	echo "<EMBED src='sad.mp3' autostart=true loop=true volume=100 hidden=true>"; //sound bite
	echo "<br><br> You must answer at least 7 questions correctly to receive a 70% and successfully become an advocate. <br><br> Unfortunately, you have not met this requirement. <br><br> <a href='index.html'> Return Home </a></div></div></div></div></div>";
}

if ($score >= 7) {
	echo "<EMBED src='happy.mp3' autostart=true loop=true volume=100 hidden=true>";
	echo "<br><br> Congratulations! You passed! <br><br> You can now move forward in the process of becoming an advocate!</div></div></div></div></div>";
	echo "<body>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-10 col-xl-9 mx-auto'>
        <div class='card card-signin flex-row my-5'>
          <div class='card-img-left d-none d-md-flex'>
          </div>
          <div class='card-body'>
            <h5 class='card-title text-center'>Register as an Advocate</h5>
            <form class='form-signin' method='get' action='membership.docx'>
              <div class='form-label-group'>
                <input type='text' id='inputUserame' class='form-control' placeholder='Username' required autofocus>
                <label for='inputUserame'>Username</label>
              </div>

              <div class='form-label-group'>
                <input type='email' id='inputEmail' class='form-control' placeholder='Email address' required>
                <label for='inputEmail'>Email address</label>
              </div>
              
              <hr>

              <div class='form-label-group'>
                <input type='password' id='inputPassword' class='form-control' placeholder='Password' required>
                <label for='inputPassword'>Password</label>
              </div>
              
              <div class='form-label-group'>
                <input type='password' id='inputConfirmPassword' class='form-control' placeholder='Password' required>
                <label for='inputConfirmPassword'>Confirm password</label>
              </div>
              <button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit'>Register</button>
              <hr class='my-4'>
              <a href='https://accounts.google.com/signin/oauth/oauthchooseaccount?client_id=831371170934-udapit5jhjj56pft5l2drc9gjhfeclf3.apps.googleusercontent.com&as=aYJJXvuEAnAvPP9BDuoyDg&destination=https%3A%2F%2Fgoogle-developers.appspot.com&approval_state=!ChR6RW1CUUhnbkIxbXJ3TFotM2dYchIfNC1mQUtiZ3A3R0FiMEs2dFEwd1Nsa3NGSTBzRW1CWQ%E2%88%99AJDr988AAAAAXIymq3nG27bMEAmZeo-5rHUevOLHV353&oauthgdpr=1&xsrfsig=ChkAeAh8T4BJ0jFQAedNeOEfvrwUXVVrkUxOEg5hcHByb3ZhbF9zdGF0ZRILZGVzdGluYXRpb24SBXNvYWN1Eg9vYXV0aHJpc2t5c2NvcGU&flowName=GeneralOAuthFlow' class='btn btn-lg btn-google btn-block text-uppercase' > Sign up with Google</a>
              <a href='https://www.facebook.com/' class='btn btn-lg btn-facebook btn-block text-uppercase' > Sign up with Facebook</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>'";
}

?>
</html>
