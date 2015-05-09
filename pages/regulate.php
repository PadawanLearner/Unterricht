<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && (isset($_POST['question'])) &&(isset($_POST['answer']))){
		require('../../../phpFunctions/dbConnect.php');
		//PDO mysqli insert question
		$query= file_get_contents("../sql/insertQuestionAnswerCategory.sql");
		$stmt = mysqli_prepare( $conn, $query);
		
		mysqli_stmt_bind_param($stmt, "sss", $newQuestion, $newAnswer, $newCategory);
		$newQuestion = $_POST['question'];
		$newAnswer = $_POST['answer'];
		$newCategory = $_POST['category'];

		
		mysqli_stmt_execute($stmt);
		//Verify failure or success
		if(!$stmt){
		 echo("Error description: " . mysqli_error($conn));
		}
		else{
		 echo "Question created. Add button to return to home page";
		}
		//Close connections
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['length']) && isset($_POST['category'])){
		
		//assign each of the below categories to an sql select statement with limit of POST length
		 foreach ($_POST['category'] as $category) {
			echo "You selected: $category <br>";
		}
		echo "of length ".$_POST['length'];
	}
	else{
		echo "go to homepage";
	}
?>