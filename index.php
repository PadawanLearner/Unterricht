<?php session_start();


/*
To Do
	-Make check all box for categories on takeQuiz.php
	-Implement question type for SQL db (MC, T/F, problem solving,fill-in-the-blank, etc)
	-parse bad input for SQL (quotes)
	-write a PHP|js function that searches for \" and then its turns " into &quot; 	 ....the quote is being turned into \" before it even gets to SQL. Its the PHP parsing, not SQL
	-Create header of tabs "Take Quiz" "Insert Question".  When user is in one tab and clicks on the other, use jQuery to hide the current tabs content
	and display the new tabs content, ie do not refresh the page.  The goal is to have a constant state app
	
	
	
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Insert Question</a></li>
        <li><a href="#">Take Quiz</a></li>
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


