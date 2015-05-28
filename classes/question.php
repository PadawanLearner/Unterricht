<?php

/*

php oo : http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762



Where does SQL data grouping end and OO begin?  They needs to meet in some ways, but not overwrite one another




Quiz
	-set type of quiz('interview, recent, academic, etc)
	-SQL get all types of quizzes
	-set # of questions
	-fill quiz (aggregation with Questions) 	
	-
		
		
Questions
		Methods/Props:
		-set/get question/answer
		-SQL setters/getters
		-set/get difficulty
		-set/get urgency
		
	Children:
	T/F
	MC
	Fill-in-the-blank
	Response

		Methods/Props:
		-Frontend-Format
		
		
	



*/







/*

QUESTION

*/
class Question{

	//Constructor
	public function __construct(){
		echo "Constructing".__CLASS__;
	}
	//Destructor
	public function __destruct(){
      echo  "Testing ".__CLASS__." destroy"; //use unset(), if necessary, to trigger this before the imminent destruction at the end of script 
    }
	
	
	//Methods
	public function setPrompt($newQuestion){
		//Modify existing question
	}
	public function getPrompt(){
		//Obtain existing question
	}
	public function setAnswer($newAnwser){
		//Modify existing question
		$this->$answer = $newAnswer;
	}
	public function getAnswer(){
		//Obtain existing answer
	}
	public function printQuestion(){
		//Print front-end stuff
	}
	public function createQuestionAndAnswer($newQuestion, $newAnswer, $newCategory){
		//Insert a question and answer into the database
		include (realpath(__DIR__ . "/../../../phpFunctions/dbConnect.php")); //relative to this script's location. equivalent to: include (realpath('./../../../phpFunctions/dbConnect.php'));
		//PDO mysqli insert question
		$query= file_get_contents(realpath(__DIR__ . "/../sql/insertQuestionAndAnswer.sql")); 
		$stmt = mysqli_prepare( $conn, $query);
		mysqli_stmt_bind_param($stmt, "sss", $question, $answer, $category);
		$question = $newQuestion;
		$answer = $newAnswer;
		$category= $newCategory;

		mysqli_stmt_execute($stmt);
		
		//Verify failure or success
		if(!$stmt){
		 echo("Error description: " . mysqli_error($conn));
		}
		else{
		 echo "Question created";
		}


		//Close connections
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}

	
	
	//Properties
	public $prompt;
	public $answer;
	public $urgency;
	public $category;


}


/*

QUESTION::RESPONSE

*/

class Response extends Question{


	//Constructor
	public function __construct(){
		echo "Constructing".__CLASS__;
	}

	public function newMethod()
	  {
		  echo "From a new method in ". __CLASS__ ;
	  }
}










?>