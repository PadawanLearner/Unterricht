<?php
session_start();
require "regulate.php";
getDaily();
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
<link rel="stylesheet" type="text/css" href="mainTheme.css">
</head>


<body>
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a class="navbar-brand" href="../index.php">unterricht</a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="thedaily.php">see the daily!</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="insertNew.php">insert content</a></li>
</ul>
</div>
</nav>

<!--display the daily -->
<?php
/*
for ($i=0;$i<sizeof($_SESSION['questions']);$i++){
	echo "<br>".$_SESSION['categories'][$_SESSION['ctr']]." tip of the day: ";
	echo "<br>description: ". $_SESSION['questions'][$_SESSION['ctr']];
	echo '<br><button type="button" class="btn btn-success" data-toggle="displayAnswer" title="% correct" data-content="'.$_SESSION['answers'][$_SESSION['ctr']].'">answer</button>';
	echo "<br><br><br>";
	$_SESSION['ctr']++;
}
*/
?>
<br>
<div class="carouselWrapper">  
<div id="myCarousel" class="carousel slide"data-ride="carousel" data-interval="false">
<div class="carousel-inner">

<div class="active item">
<p>Sunday</p>
<?php
for ($i=0;$i<sizeof($_SESSION['questions']);$i++){
	echo "<br><p>".$_SESSION['categories'][$_SESSION['ctr']]." tip of the day: </p>";
	echo "<br><p>description: ". $_SESSION['questions'][$_SESSION['ctr']]."</p>";
	echo '<br><p><button type="button" class="btn btn-success" data-toggle="displayAnswer" title="% correct" data-content="'.$_SESSION['answers'][$_SESSION['ctr']].'">answer</button></p>';
	echo "<br><br><br>";
	$_SESSION['ctr']++;
}
?>
</div>

<div class="item">
<p>Monday</p>
<p>Questions here</p>
</div>

<div class="item">
<p>Tuesday</p>
<p>Questions here</p>
</div>

<div class="item">
<p>Wednesday</p>
<p>Questions here</p>
</div>

<div class="item">
<p>Thursday</p>
<p>Questions here</p>
</div>

<div class="item">
<p>Friday</p>
<p>Questions here</p>
</div>

<div class="item">
<p>Saturday</p>
<p>Questions here</p>
</div>

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
<!-- 
<div class="container">
<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="false">
<ol class="carousel-indicators">
<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
<li data-target="#mycarousel" data-slide-to="1"></li>
<li data-target="#mycarousel" data-slide-to="2"></li>
<li data-target="#mycarousel" data-slide-to="3"></li>
</ol>

<div class="carousel-inner" role="listbox">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="item active">
<img src="img_chania.jpg" alt="chania"/>
<div class="carousel-caption">
<h3>chania</h3>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
<p>the atmosphere in chania has a touch of florence and venice.</p>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div class="item">
<div class="carousel-caption">
<h3>chania</h3>
<p>the atmosphere in chania has a touch of florence and venice.</p>
</div>
</div>

<div class="item">
<div class="carousel-caption">
<h3>flowers</h3>
<p>beatiful flowers in kolymbari, crete.</p>
</div>
</div>

<div class="item">
<div class="carousel-caption">
<h3>flowers</h3>
<p>beatiful flowers in kolymbari, crete.</p>
</div>
</div>
</div>

</div>
</div>


-->













<script>
$(document).ready(function(){
		$('[data-toggle="displayAnswer"]').popover();   
		});
</script>

</body>
</html>
