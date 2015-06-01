<?php session_start();


/*

This app seeks a new design.  Instead of a quiz-like interaction, this app will provide handy shortcuts and info that will change everyday at midnight.
Each "daily" will have:
	-a Linux command review &|| question
	-a Vim command
	-a definition of a word you want to incorporate into your language.
	-a tricky syntax of the day line
	-*future*: daily quote/headline/daily tech defn/anything on your morning routine webpages	


ToDo:
	-make insertQuestion password protected
	-	
	
*/
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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>

<body>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Unterricht</a>
    <div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
       <li><a href="pages/insertNew.php">Insert Question</a></li>
        <li><a href="pages/takeQuiz.php">See the Daily!</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Take Quiz-->
<form class="form-inline" role="form" action="pages/takeQuiz.php" method="POST">
  <button type="submit" class="btn btn-default" name="takeQuiz">Take Quiz</button>
</form>

<!-- Insert New Question-->
 <form class="form-inline" role="form" action="pages/insertNew.php" method="POST">
  <button type="submit" class="btn btn-default" name="insertNew">Insert Question</button>
</form>

<br>

</body>

</html>


