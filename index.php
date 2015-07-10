<?php session_start();


/*

   This app seeks a new design.  Instead of a quiz-like interaction, this app will provide handy shortcuts and info that will change everyday at midnight.
   Each "daily" will have:
   -a Linux command review &|| question
   -a Vim command
   -a github command
   -a definition of a word you want to incorporate into your language.
   -a tricky syntax of the day line
   -a paragraph or phrase from rethinking your wetware
   -*future*: daily quote/headline/daily tech defn/anything on your morning routine webpages	
   -*future*: includes a daily picture of a concept that is illustrated completely as visual. Example: http://www.codeproject.com/KB/database/Visual_SQL_Joins/Visual_SQL_JOINS_orig.jpg

ToDo:
-store yesterdays daily into xml
-make timer for each daily
-make a running total for implemented features(ie completed tasks on this toDo list) on the home page
-insert more content for Linux (use book) and find other categories like github.  When you add a category, make sure you update your sql statement
-import a huge csv file full of shortcuts into you sql db(use your linux book as well)
-rethink your db design
-make frontends prettier for insertNew.php and theDaily.php (look into angular course)
-use pngs for the linux/github/vim/etc logos above the tip of the day
-make content in database time sensitive.  newly added items will have more of a probability of being chosen as opposed to older items.  Also implemented a "learned" tag that operates on a three strikes rule, at which point the item will be "learned" and have a drastically lower probability of being chosen
-create user story for insertNew.php.  
-make insert content page
-revisit UI once functionality is done
-make insertQuestion password protected
-look into best practices (specifically folder structures) for a portable app. example: readme files, install files, etc
-make an xml file that will hold the daily sql info. it should only replace its contents once a day at midnight 	
-allow non-admin users to request and apply that a one-liner be reviewed to be put into the database and become a candidate for the Daily. Let the admin get an email when this happens	



BUGS:
-insertNew.php: click "Im done. Insert these questions..." button | This will cause an array bounds error for insert.php
-insertNew.php: after filling out input forms, click "Click me to add another question" | This does not erase the content after its been added to the queue nor does it show up on the HTML page for user affirmation that it has been inserted

 */
?>









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





<br>
<br>
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a class="navbar-brand" href="index.php">Unterricht</a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="pages/theDaily.php">See the Daily!</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="pages/insertNew.php">Insert Content</a></li>
</ul>
</div>
</nav>


<div class="container"> <div class="text-center"><h1>What is Unterricht?</h1></div>
<br>
<br>
<div class="row">
<div class="text-center"><p>Unterricht is a learning tool that covers an extremely brief lesson each day, known as "the Daily"</p></div>
<div class="col-xs-12">
<ul class="list-group">
<li class="list-group-item"><div class="text-center"><p>Unterricht is easy and casual</p></div></li>
<li class="list-group-item"><div class="text-center"><p>Unterricht is meant to be used briefly each day (&lt;10 min)</p></div></li>
<li class="list-group-item"><div class="text-center"><p>Unterricht is not meant to be used for cramming</p></div></li>
<li class="list-group-item"><div class="text-center"><p>Is an epic sounding German <a href="http://en.wiktionary.org/wiki/Unterricht">word</a>
<iframe src="http://commons.wikimedia.org/wiki/File%3ADe-Unterricht.ogg?embedplayer=yes" width="45" height="20" frameborder="5" ></iframe>
</li>
<li class="list-group-item"><div class="text-center"><p>The Daily has an acute focus on handy one-liners, e.g. Vim hotkeys, Linux commands, etc</p></div></li>


</ul>
</div>

</div>

</div>









<br>

</body>

</html> 

