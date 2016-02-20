<?php 
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
		echo "<input  type='radio' class='big' name='category' value='".$category."'>".$category."&nbsp;&nbsp;&nbsp;";

	}

	/* close statement */
	mysqli_stmt_close($GLOBALS['stmt']);



}

function isDailyOutdated($day){
	$query = "SELECT week 
	FROM dailies 
	WHERE day = '$day' 
	ORDER BY RAND() 
	LIMIT 1";  

	$stmt = mysqli_prepare( $GLOBALS['conn'], $query);		
	mysqli_stmt_execute($stmt);

	//Verify failure or success
	if(!$stmt){
		echo("Error description: " . mysqli_error($GLOBALS['conn']));
	}
	else{
		// echo "Query Success";
	}

	mysqli_stmt_bind_result($stmt, $week);
	$outdated = false;
	while (mysqli_stmt_fetch($stmt)) {		
		//echo "<BR>sql week: ".$week." php week reg: ".Date("W");
		if ($week == (Date("W")))
			$outdated = false;
		else
			$outdated = true;
	}
		//echo "<BR> truth value: ".$outdated;
	return $outdated;
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
function createNewDaily(){	
	//PDO mysqli insert question, each question has the question itself, the answer, and the category
	//TO DO: make a frontend comment stating that all dailies updated on EST time 
	//TO DO: make this into a log file that you can trace if something goes wrong
	$query = "SET time_zone = '-5:00'";
	$stmt = mysqli_query( $GLOBALS['conn'], $query);		

	$query= file_get_contents("../sql/createNewDaily.sql");
	$stmt = mysqli_query( $GLOBALS['conn'], $query);		
	//TODO: make this a transaction so 2 users updating a daily cannot happen at the same time
	//mysqli_stmt_execute($stmt);

	//Verify failure or success
	if(!$stmt){
		echo("Error description: " . mysqli_error($GLOBALS['conn']));
	}
	else{
		// echo "Query Success";
	}
	$query= file_get_contents("../sql/deleteOldDaily.sql");
	$stmt = mysqli_query( $GLOBALS['conn'], $query);		
//	mysqli_close($GLOBALS['conn']);

}		 


?>
