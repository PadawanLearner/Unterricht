<?php session_start();


/*


ToDo:
-password protect insert: use hashed sql password
-allow insertNew.php to take special characters, then add lots of new commands via csv file
-change all script requires and includes to the scripts perspective
-center layout on insertNew.php
-add an admin page in which you can concatenate categories to sql file that retrieves the daily (by retreiving all wanted categories for you daily)
-import large csv files with more content
-make icons for each category
-can you do a foreach loop for each categories
-use ssl or make your own front end hash
-make layout mobile friendly
-allow carousel arrows to encapsulate more than a standard page
-decide between SSL or using your personal client hash 
-make a ctr for each question, and select only questions that are below the average of the ctrs
-figure out how to send specific changed files to filezilla via command line 
-make timer for each daily
-make a php function that echoes most recent bootstrap and jquery version, so you can update them in one place
-add comments for functions
-make category field in insertNew.php only allow radio buttons for more control
-insert more content for Linux (use book) and find other categories like github.  When you add a category, make sure you update your sql statement
-import a huge csv file full of shortcuts into you sql db(use your linux book as well)
-make frontends prettier for insertNew.php and theDaily.php (look into angular course)
-use pngs for the linux/github/vim/etc logos above the tip of the day
-make content in database time sensitive.  newly added items will have more of a probability of being chosen as opposed to older items.  Also implemented a "learned" tag that operates on a three strikes rule, at which point the item will be "learned" and have a drastically lower probability of being chosen
-create user story for insertNew.php.  
-make insertQuestion password protected
-look into best practices (specifically folder structures) for a portable app. example: readme files, install files, etc
-allow non-admin users to request and apply that a one-liner be reviewed to be put into the database and become a candidate for the Daily. Let the admin get an email when this happens	



BUGS:
-insertNew.php: click "Im done. Insert these questions..." button | This will cause an array bounds error for insert.php
-insertNew.php: after filling out input forms, click "Click me to add another question" | This does not erase the content after its been added to the queue nor does it show up on the HTML page for user affirmation that it has been inserted

Each "daily" will have:
-a Linux command review &|| question
-a meditation tip
-make dailies have a foriegn key
-daily language word
-a conceptual image
-a Vim command
-Windows batch command
-Windows shortcut
-a github command
-financial rule/advice/definition
-a definition of a word you want to incorporate into your language.
-a tricky syntax of the day line
-a paragraph or phrase from rethinking your wetware
-*future*: daily quote/headline/daily tech defn/anything on your morning routine webpages	
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
