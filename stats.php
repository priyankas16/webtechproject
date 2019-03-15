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
  div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
  table {
    width: 1000px;
  }
		img {
			width:100%;
			}
</style>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( { //datatable plugin script
        "scrollX": true
    } );
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
        <a class="nav-link" href="stats.html">Statistics</a>
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
<!--Highcharts code for pretty chart!-->
<div id="highcharts-ee1c3176-4df5-41d1-8d37-14e83f18eb30"></div><script>
(function(){ var files = ["https://code.highcharts.com/stock/highstock.js","https://code.highcharts.com/highcharts-more.js","https://code.highcharts.com/highcharts-3d.js","https://code.highcharts.com/modules/data.js","https://code.highcharts.com/modules/exporting.js","https://code.highcharts.com/modules/funnel.js","https://code.highcharts.com/modules/annotations.js","https://code.highcharts.com/modules/solid-gauge.js"],loaded = 0; if (typeof window["HighchartsEditor"] === "undefined") {window.HighchartsEditor = {ondone: [cl],hasWrapped: false,hasLoaded: false};include(files[0]);} else {if (window.HighchartsEditor.hasLoaded) {cl();} else {window.HighchartsEditor.ondone.push(cl);}}function isScriptAlreadyIncluded(src){var scripts = document.getElementsByTagName("script");for (var i = 0; i < scripts.length; i++) {if (scripts[i].hasAttribute("src")) {if ((scripts[i].getAttribute("src") || "").indexOf(src) >= 0 || (scripts[i].getAttribute("src") === "http://code.highcharts.com/highcharts.js" && src === "https://code.highcharts.com/stock/highstock.js")) {return true;}}}return false;}function check() {if (loaded === files.length) {for (var i = 0; i < window.HighchartsEditor.ondone.length; i++) {try {window.HighchartsEditor.ondone[i]();} catch(e) {console.error(e);}}window.HighchartsEditor.hasLoaded = true;}}function include(script) {function next() {++loaded;if (loaded < files.length) {include(files[loaded]);}check();}if (isScriptAlreadyIncluded(script)) {return next();}var sc=document.createElement("script");sc.src = script;sc.type="text/javascript";sc.onload=function() { next(); };document.head.appendChild(sc);}function each(a, fn){if (typeof a.forEach !== "undefined"){a.forEach(fn);}else{for (var i = 0; i < a.length; i++){if (fn) {fn(a[i]);}}}}var inc = {},incl=[]; each(document.querySelectorAll("script"), function(t) {inc[t.src.substr(0, t.src.indexOf("?"))] = 1; }); function cl() {if(typeof window["Highcharts"] !== "undefined"){var options={"title":{"text":"Food Waste in Countries"},"subtitle":{"text":""},"exporting":{},"chart":{"type":"bar","inverted":true,"polar":false,"style":{"fontFamily":"Verdana","color":"#333","fontSize":"12px","fontWeight":"bold","fontStyle":"italic"}},"plotOptions":{"series":{"dataLabels":{"enabled":true},"animation":false},"bar":{"dataLabels":{"enabled":true}}},"tooltip":{"valueSuffix":" millions"},"legend":{"layout":"vertical","align":"right","verticalAlign":"top","x":-40,"y":80,"floating":true,"borderWidth":1,"backgroundColor":"#FFFFFF","shadow":true},"credits":{"enabled":false},"series":[{"name":"Year 2017","turboThreshold":0}],"data":{"csv":"\"Category\";\"Year 2017\"\n\"United States\";90767.6\n\"India\";67693.9\n\"China\";61107.6\n\"Japan\";19874.6\n\"Mexico\";18427.6\n\"Brazil\";14808\n\"Turkey\";13408.9\n\"Germany\";12708.3\n\"Australia\";8948.6\n\"Italy\";8772.7\n\"Russia\";8224.6\n\"Spain\";7680.6\n\"France\";7123.3\n\"Egypt\";7036.8\n\"United Kingdom\";4903.9\n\"South Korea\";4887.4\n\"Morocco\";4665.5\n\"Canada\";4550.5\n\"Colombia\";3124.6\n\"Portugal\";1391.8\n\"Jordan\";1317.7\n\"Tunisia\";1282\n\"Greece\";473.8","googleSpreadsheetKey":false,"googleSpreadsheetWorksheet":false},"yAxis":[{"title":{"text":"Food Waste (in million kilograms per year)"},"labels":{}}],"xAxis":[{"title":{},"labels":{}}]};
new Highcharts.Chart("highcharts-ee1c3176-4df5-41d1-8d37-14e83f18eb30", options);}}})();
</script>

<?php
include 'config.php';
mysqli_select_db($conn, 'shareFood');
$sql ="DROP TABLE IF EXISTS stats";
mysqli_query($conn, $sql);
$sql = "CREATE TABLE IF NOT EXISTS stats ( /*Create table of 20 questions*/
country VARCHAR(100) NOT NULL,
amnt VARCHAR(100) NOT NULL
)";
mysqli_query($conn, $sql);
$sql = "INSERT INTO stats (country, amnt)
VALUES ('United States', '90,767.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('India', '67,693.9')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('China', '61,107.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats stats (country, amnt)
VALUES ('Japan', '19,874.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Mexico', '18,427.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Brazil', '14,808')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Turkey', '13,408.9')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Germany', '12,708.3')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Australia', '8,948.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Italy', '8,772.7')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Russia', '8,224.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Spain', '7,680.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('France', '7,123.3')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Egypt', '7,036.8')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('United Kingdom', '4,903.9')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('South Korea', '4,887.4')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Morocco', '4,665.5')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Canada', '4550.5')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Colombia', '3,124.6')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Portugal', '1,391.8')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Jordan', '1,317.7')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Tunisia', '1,282')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO stats (country, amnt)
VALUES ('Greece', '473.8')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM stats"; //select everything from database
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { //if the table has been found
  //create table with headers
  echo "
    <table id='example' class='display nowrap' style='width:100%'>
                <thead>
                        <tr>
                            <th>Country</th>
                            <th>Food Waste (in million kilograms per year)</th>
                        </tr>
                </thead>
                <tbody>";
    while($row = mysqli_fetch_assoc($result)) { //print rows
    echo "
                <tr>
                  <td>" . $row['country']."</td>
                  <td>" . $row['amnt']."</td>
                </tr>
            ";
  } 
}
else {
    echo "<p>0 results</p>";
}
//close table
echo "
            </tbody>
            </table>
            <div id='chart'></div>";
?>
</html>

