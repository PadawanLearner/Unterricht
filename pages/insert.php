<?php
session_start();
require "regulate.php";
if ($_POST['action'] == 'add') {
	connectTOSQL();
	$query = file_get_contents(dirname(dirname(__FILE__))."/sql/getAdminHash.sql");
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

	if(!password_verify($_POST['password'],$hashFromDb)){
		closeSQLConnection();
		exit("Incorrect password");
	}
	else{
		$query = file_get_contents(dirname(dirname(__FILE__))."/sql/insertQuestionAnswerCategory.sql")."'".$_POST['category']."'";

		//PDO mysqli insert question, each question has the question itself, the answer, and the category
		$insertQuestionsStmt = mysqli_prepare( $GLOBALS['conn'], $query);         

		/*
		To avoid
		http://drupal.stackexchange.com/questions/6322/strict-warning-only-variables-should-be-passed-by-reference-in-include
		we must pass the post data by variables and not reference
		*/
		$question = mb_convert_encoding($_POST['question'], "HTML-ENTITIES", 'UTF-8');
		$answer = mb_convert_encoding($_POST['answer'], "HTML-ENTITIES", 'UTF-8');

		mysqli_stmt_bind_param($insertQuestionsStmt, "sss", $question, $answer, $_POST['category']);
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
