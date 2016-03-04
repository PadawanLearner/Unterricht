<?php
date_default_timezone_set("EST");
session_start();
require "regulate.php";
?>

<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="stylesheet" type="text/css" href="mainTheme.css">
</head>


<body>
<nav class="navbar navbar-default" role="navigation">
<ul class="nav nav-justified">
<li><a href="theDaily.php">see the daily!</a></li>
<li><a href="insertNew.php">insert content</a></li>
</ul>
</nav>
<br>
<div>Registration closes in <span id="timerSunday"></span> minutes!</div>
<div>Registration closes in <span id="timerMonday"></span> minutes!</div>
<div>Registration closes in <span id="timerTuesday"></span> minutes!</div>
<div>Registration closes in <span id="timerWednesday"></span> minutes!</div>
<div>Registration closes in <span id="timerThursday"></span> minutes!</div>
<div>Registration closes in <span id="timerFriday"></span> minutes!</div>
<div>Registration closes in <span id="timerSaturday"></span> minutes!</div>
<div class="carouselWrapper">  
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
<div class="carousel-inner">
<?php
$days = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
connectToSQL();
foreach ($days as $day){
	if (Date("l") == $day){
		echo "<div class='active item'>";
	}
	else{
		echo "<div class='item'>";
	}
	echo "<p class='day'>".$day."</p>";
	echo "<p id='timer".$day."'>".$day."</p>";
	?>
		<?php
		getDaily($day);
	for ($i=0;$i<sizeof($_SESSION['dailies']);$i++){
		echo "<br><p class='category'>".$_SESSION['dailies'][$_SESSION['ctr']][0]."</p>";
		echo "<br><p class='question'> ". $_SESSION['dailies'][$_SESSION['ctr']][1]."</p>";
		echo '<br><p><button type="button" class="btn btn-success" data-toggle="displayAnswer" data-content="'.$_SESSION['dailies'][$_SESSION['ctr']][2].'">answer</button></p>';
		echo "<br><br><br>";
		$_SESSION['ctr']++;

	}
	$_SESSION['ctr']=0;
	echo "<br>";
	echo "</div>";

}
closeSQLConnection();

?>

</div>
</div>
</div>
<!-- left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">next</span>
</a>
<script>
$(document).ready(function(){
		$('[data-toggle="displayAnswer"]').popover();   
		});

//http://stackoverflow.com/questions/20618355/the-simplest-possible-javascript-countdown-timer
//With personal additions for hours and days, plus timing for expiring dailies
function startTimer(duration, display) {
	var timer = duration, days, hours, minutes, seconds;
	setInterval(function () {

			days = parseInt(timer / 86400);	
			hours   = parseInt((timer % 86400) / 3600 , 10);
			minutes = parseInt((timer / 60) % 60, 10);
			seconds = parseInt(timer % 60, 10);

			days = days < 10 ? "0" + days: days;
			hours = hours < 10 ? "0" + hours : hours;
			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;

			display.text(days + ":" + hours + ":" + minutes + ":" + seconds);

			if (--timer < 0) {
			timer = duration;
			}
			}, 1000);
}

jQuery(function ($) {
		var timeUntilResetInSeconds = 25 * 60 * 60,
		//days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
		days = ["Sunday","Monday"];
		for (var i=0; i<days.length; i++){
			display = $('#timer' + days[i])
			startTimer(timeUntilResetInSeconds, display);
		}
		});
</script>

</body>
</html>
