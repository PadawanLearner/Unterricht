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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- Print the Question -->
</head>

<body>

<!-- Select Quiz Parameters -->
<?php
for ($i=0;$i<sizeof($_SESSION['questions']);$i++){
	echo "<br>".$_SESSION['categories'][$_SESSION['ctr']]." tip of the day: ".$_SESSION['answers'][$_SESSION['ctr']];
	echo "<br>Description: ". $_SESSION['questions'][$_SESSION['ctr']];
	$_SESSION['ctr']++;
	echo "<br><br><br>";
}
?>


</body>
</html>