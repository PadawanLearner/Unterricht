<?php
session_start();



function resetQuestions(){
	unset($_SESSION['insertQuestions']);
}



if (!isset($_SESSION['insertQuestions']))
	$_SESSION['insertQuestions'] = array();
elseif ($_POST['function'] == 'reset')
	resetQuestions();
else
	array_push($_SESSION['insertQuestions'], $_POST['question']);



function dumpArrayContents(){
print_r ($_SESSION['insertQuestions']);	
}

dumpArrayContents();
?>
