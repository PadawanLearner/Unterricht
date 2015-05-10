<?php session_start();?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nextQuestion'])){
	 $_SESSION['ctr']++;
}

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

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['displayAnswer'])){
	$answerText = $_SESSION['answers'][$_SESSION['ctr']];
}
else{
	$answerText = "";
}

echo '
			<form action="quiz.php" method="POST">			
				<div class="row">
					<div class="col-xs-6">
						<label for="question">Quiz Question:</label>
						<br>
						<textarea readonly class="form-control" rows="20" name="question" id="question">'.$_SESSION['questions'][$_SESSION['ctr']].'</textarea>
					</div >
				  
					<div class="col-xs-6">	 
						<label for="answerAttempt">Quiz Answer Attempt:</label>
						 <br>
						<textarea class="form-control" rows="20" name="answerAttempt" id="answerAttempt">'.$answerText.'</textarea>
					</div>
				</div>
			
			
			  <button type="submit" name="displayAnswer">See Answer</button>
			</form>
			
			<form class="form-inline" role="form" action="quiz.php" method="POST">
			  <button type="submit" class="btn btn-default" name="nextQuestion">Next Question</button>
			</form>
			';
?>

<br>

</body>

</html>


