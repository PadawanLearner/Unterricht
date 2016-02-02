<?php
session_start();
require "regulate.php";
/* 2/1/16 -- This functionality is disabled so that I may password protect content input
if (!isset($_SESSION['insertQuestions'])){
	$_SESSION['insertQuestions'] = array();
	$_SESSION['insertAnswers'] = array();
	$_SESSION['insertCategories'] = array();
}

elseif ($_POST['action'] == 'reset'){
	unset($_SESSION['insertQuestions']);
	unset($_SESSION['insertAnswers']);
	unset($_SESSION['insertCategories']);
}
else{}

if ($_POST['action'] == 'add'){
	array_push($_SESSION['insertQuestions'], $_POST['question']);
	array_push($_SESSION['insertAnswers'], $_POST['answer']);
	array_push($_SESSION['insertCategories'], $_POST['category']);
}
else{}



if ($_POST['action'] == 'insert'){

	if ( sizeof($_SESSION['insertQuestions'])!=sizeof($_SESSION['insertAnswers'])
			||sizeof($_SESSION['insertQuestions'])!=sizeof($_SESSION['insertCategories']))
		echo "Error-Please press the reset button and try again"; 

	connectTOSQL();

	echo sizeof($_SESSION['insertQuestions']);
	for ($i=0;$i<sizeof($_SESSION['insertQuestions']);$i++){
		$query= 'INSERT into questions (question, answer, category) values (?,?,?)';

		//PDO mysqli insert question, each question has the question itself, the answer, and the category
		$insertQuestionsStmt = mysqli_prepare( $GLOBALS['conn'], $query);         

		mysqli_stmt_bind_param($insertQuestionsStmt, "sss", $_SESSION['insertQuestions'][$i], $_SESSION['insertAnswers'][$i], $_SESSION['insertCategories'][$i]);
		mysqli_stmt_execute($insertQuestionsStmt);
		//Verify failure or success
		if(!$insertQuestionsStmt){
			echo("Error description: " . mysqli_error($GLOBALS['conn']));
		}
		else{
			echo "Question inserted. Add button to return to home page";
		}

	}
	unset($_SESSION['insertQuestions']);
	unset($_SESSION['insertAnswers']);
	unset($_SESSION['insertCategories']);

	//Close connections

	mysqli_close($GLOBALS['conn']);
}


//for debugging:
print_r ($_SESSION['insertQuestions']);	
print_r ($_SESSION['insertAnswers']);	
print_r ($_SESSION['insertCategories']);	
*/
?>
