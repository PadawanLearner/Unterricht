<?php
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

<!-- Insert Question -->
<form  action="regulate.php" method="POST">
	<div class="row">
		<div class="col-xs-6">
			<label for="question">Insert Question into Database:</label>
			<br>
			<textarea class='form-control' rows="20" name="question" id="question"></textarea>
		</div >
	  
		<div class="col-xs-6">	 
			<label for="answer">Insert Answer into Database:</label>
			<br>
			<textarea class='form-control' rows="20" name="answer" id="answer"></textarea>
		</div>
	</div>
	<br>
	<!-- Need checkboxes for category plus a section for "new" category-->
	<label for="questionCategory">Question Category:</label>
	<input type="text" class="form-control" name="category" id="category">
	<br>
	<button type="submit" name="insertQuestion">Create New Question </button>
</form>
</body>
</html>
