<?php
session_start();
require "regulate.php";
if ($_POST['action'] == 'add') {
	connectTOSQL();
	$query = file_get_contents( "../sql/getAdminHash.sql");
	$stmt = mysqli_prepare( $GLOBALS['conn'], $query);
	mysqli_stmt_execute($stmt);

	//Verify failure or success
	if(!$stmt){
		echo("Error description: " . mysqli_error($GLOBALS['conn']));
	}
	else{
		// echo "Query Success";
	}

	mysqli_stmt_bind_result($stmt, $adminInfo);

	$hashFromDb = "";
	while (mysqli_stmt_fetch($stmt)) {
		$hashFromDb = $adminInfo;
	}
	$isPassword = password_verify($_POST['password'],$hashFromDb);

	if(!$isPassword){
		closeSQLConnection();
		exit("Incorrect password");
	}
	else{
		//$query= 'INSERT into questions (question, answer, category) values (?,?,?)';
		$query = file_get_contents(dirname(dirname(__FILE__))."/sql/insertQuestionAnswerCategory.sql");


		//PDO mysqli insert question, each question has the question itself, the answer, and the category
		$insertQuestionsStmt = mysqli_prepare( $GLOBALS['conn'], $query);         

		mysqli_stmt_bind_param($insertQuestionsStmt, "sss", $_POST['question'], $_POST['answer'], $_POST['category']);
		mysqli_stmt_execute($insertQuestionsStmt);
		//Verify failure or success
		if(!$insertQuestionsStmt){
			echo("Error description: " . mysqli_error($GLOBALS['conn']));
		}

		closeSQLConnection();
		exit("Content inserted and available for daily learning.");
	}
}
else
	echo "Why are you here";
?>
