<?php session_start();


/*


ToDo:
-allow insertNew.php to take special characters, then add lots of new commands via csv file
-make a ctr for each question, and select only questions that are below the average of the ctrs
-change all script requires and includes to the scripts perspective
-add an admin page in which you can concatenate categories to sql file that retrieves the daily (by retreiving all wanted categories for you daily)
-refactor js to reference one file
-make sure when timer hits zero that user gets message to refresh the page
-import large csv files with more content
-make icons for each category
-make a cleanup function in case chron fails
-can you do a foreach loop for each categories
-use ssl or make your own front end hash
-make script to  send specific changed files to filezilla via command line 
-make a php function that echoes most recent bootstrap and jquery version, so you can update them in one place
-add comments for functions
-make category field in insertNew.php only allow radio buttons for more control
-insert more content for Linux (use book) and find other categories like github.  When you add a category, make sure you update your sql statement
-import a huge csv file full of shortcuts into you sql db(use your linux book as well)




Each "daily" will have:
-a Linux command review &|| question
-a meditation tip
-testing/QA/hacking tip of the day
-daily spanish word
-a conceptual image
-a Vim command
-Windows batch command
-Windows shortcut
-a github command
-financial rule/advice/definition
-a definition of a word you want to incorporate into your language.
-a tricky syntax of the day line
-a paragraph or phrase from rethinking your wetware
-*future*: includes a daily picture of a concept that is illustrated completely as visual. Example: http://www.codeproject.com/KB/database/Visual_SQL_Joins/Visual_SQL_JOINS_orig.jpg
*/
?>

<!--
<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap --> <!-- Latest compiled and minified CSS --> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<!-- Theme -->
<link rel="stylesheet" type="text/css" href="mainTheme.css">
</head>


<body>

<nav class="navbar navbar-default" role="navigation">
<div class="navbar-collapse collapse">
<ul class="nav nav-justified">
<li><a href="index.php">what is this?</a></li>
<li><a href="pages/theDaily.php">see the daily!</a></li>
<li><a href="pages/insertNew.php">insert content</a></li>
</ul>
</div>
</nav>



<br>
<br>


<div class="container"> <div class="text-center"><h1>What is The Daily?</h1></div>
<br>
<br>
<div class="row">
<div class="text-center"><p>The Daily is a learning tool that covers an extremely brief lesson each day, known as "The Daily"</p></div>
<div class="col-xs-12">
<div class="text-center"><p>The Daily is easy and casual</p></div>
<div class="text-center"><p>The Daily is meant to be used briefly each day (&lt;10 min)</p></div>
<div class="text-center"><p>The Daily is not meant to be used for cramming</p></div>
</div>

</div>

</div>

</body>

</html> 
-->
