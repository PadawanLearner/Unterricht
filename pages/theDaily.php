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
<!-- Print the Question -->
</head>

<body>
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a class="navbar-brand" href="../index.php">Unterricht</a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="theDaily.php">See the Daily!</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="insertNew.php">Insert Content</a></li>
</ul>
</div>
</nav>

<!--Display the daily -->
<?php
for ($i=0;$i<sizeof($_SESSION['questions']);$i++){
	echo "<br>".$_SESSION['categories'][$_SESSION['ctr']]." tip of the day: ";
	echo "<br>Description: ". $_SESSION['questions'][$_SESSION['ctr']];
	echo '<br><button type="button" class="btn btn-success" data-toggle="displayAnswer" title="% correct" data-content="'.$_SESSION['answers'][$_SESSION['ctr']].'">Answer</button>';
	echo "<br><br><br>";
	$_SESSION['ctr']++;
}
?>
<br>

<script>
$(document).ready(function(){
		$('[data-toggle="displayAnswer"]').popover();   
		});
</script>

</body>
</html>
