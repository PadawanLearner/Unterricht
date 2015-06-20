<?php session_start();


/*

This app seeks a new design.  Instead of a quiz-like interaction, this app will provide handy shortcuts and info that will change everyday at midnight.
Each "daily" will have:
	-a Linux command review &|| question
	-a Vim command
	-a definition of a word you want to incorporate into your language.
	-a tricky syntax of the day line
	-*future*: daily quote/headline/daily tech defn/anything on your morning routine webpages	
	-*future*: includes a daily picture of a concept that is illustrated completely as visual. Example: http://www.codeproject.com/KB/database/Visual_SQL_Joins/Visual_SQL_JOINS_orig.jpg

ToDo:
	-make insertQuestion password protected
	-make an xml file that will hold the daily sql info. it should only replace its contents once a day at midnight 	
	-allow non-admin users to request and apply that a one-liner be reviewed to be put into the database and become a candidate for the Daily. Let the admin get an email when this happens	
*/
?>









<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap --> <!-- Latest compiled and minified CSS --> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> <!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- Theme -->
	<link rel="stylesheet" type="text/css" href="mainTheme.css">
</head>


<body>





<br>
<br>
<nav class="navbar navbar">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Unterricht</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="pages/takeQuiz.php">See the Daily!</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
	<li><a href="pages/insertNew.php">Insert Content</a></li>
	</ul>
    </div>
</nav>


<div class="container"> <div class="text-center"><h2>What is Unterricht?</h2></div>
	<div class="row">
		<div class="text-center"><p>Unterricht is a learning tool that covers an extremely brief lesson each day, known as "the Daily"</p></div>
		<div class="col-xs-12">
		<ul class="list-group">
		<li class="list-group-item list-group-item-success">Unterricht is easy and casual</li>
		<li class="list-group-item list-group-item-success">Unterricht is meant to be used briefly each day</li>
		<li class="list-group-item list-group-item-danger">Unterricht is not meant to be used for cramming</li>
		<li class="list-group-item list-group-item-info">Is an epic sounding German <a href="http://en.wiktionary.org/wiki/Unterricht">word</a>.
<iframe src="http://commons.wikimedia.org/wiki/File%3ADe-Unterricht.ogg?embedplayer=yes" width="45" height="20" frameborder="5" ></iframe>
</li>
		<li class="list-group-item list-group-item-info">The Daily has an acute focus on handy one-liners, e.g. Vim hotkeys, Linux commands, etc</li>


		</ul>
		</div>

	</div>

</div>









 <!-- Take Quiz <form class="form-inline" role="form" action="pages/takeQuiz.php" method="POST"> <button type="submit" class="btn btn-default" name="takeQuiz">Take Quiz</button>
</form>

 Insert New Question
 <form class="form-inline" role="form" action="pages/insertNew.php" method="POST">
  <button type="submit" class="btn btn-default" name="insertNew">Insert Question</button>
</form>
-->
<br>

</body>

</html> 

