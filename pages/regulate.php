<?php 
function appendCurrentDailyCategories($newCategory){ 
//From the pages dir:
//php -r "require 'regulate.php';appendCurrentDailyCategories('someNewCategoryChangeMePlease');"

	$appendedCategoryQuery = 
	'UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "'.$newCategory.'" AND dailies.questionId IS NULL AND ctr <= (SELECT CEILING(AVG(ctr)) FROM questions AND category="'.$newCategory.'")
	ORDER BY RAND()
	LIMIT 1
	)';

	file_put_contents(dirname(dirname(__file__)).'/sql/createNewDaily.sql',$appendedcategoryquery, file_append | lock_ex); 
}
function connectToSQL(){
	//The first connection is for localhost testing of the app	
	if($_SERVER['HTTP_HOST'] == "localhost"){
		ini_set('display_errors)',1);
		error_reporting(E_ALL);
		require ((dirname(dirname(dirname(__FILE__)))).'/utility/dbConnect.php');
		//require(dirname(__FILE__).'../../utility/dbConnect.php');
	}
	else{
		require((dirname(dirname(dirname(__FILE__)))).'/phpFunctions/dbConnect.php');
		//require(dirname(__FILE__).'../../phpFunctions/dbConnect.php');
	}
}

function getCategories(){
	connectToSQL();
	$query= "SELECT distinct category from questions where category !=''";
	$GLOBALS['stmt'] = mysqli_prepare( $GLOBALS['conn'], $query);		
	mysqli_stmt_execute($GLOBALS['stmt']);

	//Verify failure or success
	if(!$GLOBALS['stmt']){
		echo("Error description: " . mysqli_error($GLOBALS['conn']));
	}
	else{
		// echo "Query Success";
	}
}

function displayCategories(){
	getCategories();	
	mysqli_stmt_bind_result($GLOBALS['stmt'], $category);

	/* fetch values */
	while (mysqli_stmt_fetch($GLOBALS['stmt'])) {
		//echo "<input  type='radio' class='big' name='category' value='".$category."'>".$category."<span style='white-space: nowrap;'> &nbsp;&nbsp;&nbsp; </span>";
		echo "<input  type='radio' class='big' name='category' value='".$category."'>".$category."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

	}

	/* close statement */
	mysqli_stmt_close($GLOBALS['stmt']);
}

function getDaily($day){

	//PDO mysqli insert question, each question has the question itself, the answer, and the category
	//$query= file_get_contents("../sql/getDaily.sql");
	//TO DO: make this into an sql file
	//TO DO: make this into a log file that you can trace if something goes wrong
	$query = "
	(
	SELECT question,answer,category 
	FROM questions 
	LEFT JOIN dailies 
	ON questions.questionId = dailies.questionId 
	WHERE category = 'Vim' AND dailies.day = '$day' 
	ORDER BY RAND() 
	LIMIT 1 
	)
	UNION
	(
	SELECT question,answer,category 
	FROM questions 
	LEFT JOIN dailies 
	ON questions.questionId = dailies.questionId 
	WHERE category = 'Linux' AND dailies.day = '$day' 
	ORDER BY RAND() 
	LIMIT 1
	)
	UNION
	(
	SELECT question,answer,category 
	FROM questions 
	LEFT JOIN dailies 
	ON questions.questionId = dailies.questionId 
	WHERE category = 'Vocabulary' AND dailies.day = '$day' 
	ORDER BY RAND() 
	LIMIT 1
	)
	";  

	$stmt = mysqli_prepare( $GLOBALS['conn'], $query);		
	mysqli_stmt_execute($stmt);

	//Verify failure or success
	if(!$stmt){
		echo("Error description: " . mysqli_error($GLOBALS['conn']));
	}
	else{
		// echo "Query Success";
	}

	mysqli_stmt_bind_result($stmt, $question, $answer,$category);

	$dailies = array();
	$ctr=0;
	while (mysqli_stmt_fetch($stmt)) {		
		$dailies[$ctr][0]=$category;
		$dailies[$ctr][1]=$question;
		$dailies[$ctr][2]=$answer;
		$ctr++;
	}
	//Store quiz into SESSION 
	$_SESSION["dailies"] = $dailies;
	$_SESSION["ctr"] = 0;

	//Close connections
	//mysqli_stmt_close($stmt);
	//mysqli_close($GLOBALS['conn']);
}

function closeSQLConnection(){

	mysqli_close($GLOBALS['conn']);
}

?>
