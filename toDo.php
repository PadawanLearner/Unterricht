<?php session_start();


/*
ToDo :
-write js function to wipe out question, answer, and category selections after content has been inserted
-refactor js to reference one file
-write function to remove a daily category from learning
-make a php function that echoes most recent bootstrap and jquery version, so you can update them in one place
-add comments
-alphabetize daily categories; to do this it might be more effective to make an function that loops over alphabetized categories as elements, then writes them to the sql file
-make html ids have the same quotes, either ' or "
-backup sql files
-wait a month, then read code and see if it makes sense
-ask SO questions about why "select * from table where col='$myVar'" fails when its in an sql file but not in a php script
-import large csv files with more content
-make icons for each category
-make a cleanup function in case chron fails
-use ssl or make your own front end hash
-make script to  send specific changed files to filezilla via command line 
-make category field in insertNew.php only allow radio buttons for more control
-insert more content for Linux (use book) and find other categories like github.  When you add a category, make sure you update your sql statement




Each "daily" will have:
-a Linux command review &|| question
-a meditation tip
-testing/QA/hacking tip of the day
-daily spanish word
-math tip related to programmign or finance
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
