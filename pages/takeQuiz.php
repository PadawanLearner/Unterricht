<?php
//choose type of quiz
	//radio buttons for length of quiz

//clickable start quiz
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
<form  action="regulate.php" method="POST">
<?php
	require('../../../phpFunctions/dbConnect.php');
	//PDO mysqli insert question
	$query= file_get_contents("../sql/selectQuestionCategories.sql");
	$stmt = mysqli_prepare( $conn, $query);
	//mysqli_stmt_bind_param($stmt, "s");
	mysqli_stmt_execute($stmt);
	//Verify failure or success
	if(!$stmt){
	 echo("Error description: " . mysqli_error($conn));
	}
    /* bind variables to prepared statement */
    mysqli_stmt_bind_result($stmt, $col1);
    /* fetch values */
	echo "Select categories to be quizzed on:<br>";
    while (mysqli_stmt_fetch($stmt)) {
        echo 
		"<input type='checkbox' name='category[]' value='".$col1."'>".$col1." ";
    }
	echo "<input type='checkbox' name='category[]' value='Any'>Any";
	echo "<br><br>Select number of questions<br>";
	//Close connections
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
?>
	<input type="radio" name="length" value="3">3 questions&nbsp; 
	<input type="radio" name="length" value="5">5 questions&nbsp; 
	<input type="radio" name="length" value="10">10 questions&nbsp;
	<br>
	<input type="submit" value="Take Quiz">
</form>



</body>
</html>