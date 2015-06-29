<?php
session_start();

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
	$query = "INSERT into Questions (question, answer, category) values ";
	
	if ( sizeof($_SESSION['insertQuestions'])!=sizeof($_SESSION['insertAnswers'])
	||sizeof($_SESSION['insertQuestions'])!=sizeof($_SESSION['insertCategories']))
		echo "Error-Please press the reset button and try again"; 


	for ($i=0;$i<sizeof($_SESSiON['insertQuestions']);$i++){
		if ($i = sizeof($_SESSION['insertQuestions'])-1)
			$query.= '('.$_SESSION['insertQuestions'][$i].','.$_SESSION['insertAnswers'][$i].','.$_SESSION['insertCategories'][$i].')';
		else
			$query.= '('.$_SESSION['insertQuestions'][$i].','.$_SESSION['insertAnswers'][$i].','.$_SESSION['insertCategories'][$i].'),';
	echo $query;	
	}//Resume work here, test the above if statement by implementing a button in insertNew.php that will echo the above line
}

//for debugging:
print_r ($_SESSION['insertQuestions']);	
print_r ($_SESSION['insertAnswers']);	
print_r ($_SESSION['insertCategories']);	
?>
