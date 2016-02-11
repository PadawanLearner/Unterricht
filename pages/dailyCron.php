<?php
require "regulate.php";
connectToSQL();
$query = "SET time_zone = '-5:00'";
$stmt = mysqli_query( $GLOBALS['conn'], $query);
$query =file_get_contents("../sql/createNewDaily.sql"); 
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
closeSQLConnection();
?>
