<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>





<script type="text/javascript">


//This function updates the serverside info for the query
function addQuestion(){

	xmlhttp=new XMLHttpRequest(); //make ajax object
	var params = "action=add&question="+document.getElementById("question").value+"&answer="+document.getElementById("answer").value+"&category="+document.getElementById("category").value;
	xmlhttp.open("POST","insert.php",true);

	//Send the proper header information along with the request
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.setRequestHeader("Connection", "close");


	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){  //the callback that will receive the response   
			alert(xmlhttp.responseText);
		}
	}

	xmlhttp.send(params);

}


function reset(){
	xmlhttp=new XMLHttpRequest(); //make ajax object
	var params = "action=reset"
		xmlhttp.open("POST","insert.php",true);

	//Send the proper header information along with the request
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){  //the callback that will receive the response   
			alert(xmlhttp.responseText);
		}
	}
	xmlhttp.send(params);
}


function insertQuestion(){
	xmlhttp=new XMLHttpRequest(); //make ajax object
	var params = "action=insert"
		xmlhttp.open("POST","insert.php",true);

	//Send the proper header information along with the request
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", params.length);
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){  //the callback that will receive the response   
			alert(xmlhttp.responseText);
		}
	}
	xmlhttp.send(params);
}



//This function appends what the user inputs to the UI
function extendQuery(){
	var node = document.createElement("LI"); 
	node.id = "hmmOk";
	var textnode = document.createTextNode("Question: " + document.getElementById("question").value);         // Create a text node
	node.appendChild(textnode);                              // Append the text to <li>
	document.getElementById("myList").appendChild(node);
}
</script>
</head>

<body>
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<a class="navbar-brand" href="../index.php">Unterricht</a>
</div>
<div>
<ul class="nav navbar-nav">
<li><a href="theDaily.php">See the Daily!</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="insertNew.php">Insert Content</a></li>
</ul>
</div>
</nav>

<ul id="myList">
</ul>
<!-- Insert Question -->
<form  action="extendQuery()" >
<div class="row">
<div class="col-xs-6">	 
<label for="answer">What is the tip or shortcut?</label>
<br>
<textarea class='form-control' rows="20" name="answer" id="answer"></textarea>
</div>
<div class="col-xs-6">
<label for="question">What does the tip or shortcut do?</label>
<br>
<textarea class='form-control' rows="20" name="question" id="question"></textarea>
</div >

</div>
<br>
<!-- Need checkboxes for category plus a section for "new" category-->
<label for="questionCategory">What program or platform is this tip or shortcut for?</label>
<?php

?>
<input type="text" class="form-control" name="category" id="category">
<br>
<!-- <button type="submit" name="addAnother">Add Another </button>-->
</form>

<button onclick="addQuestion()" name="addAnother2">Click me to add another question</button><br>
<button onclick="reset()" name="reset">I messed up.  Reset all the questions I was going to insert</button><br>
<button onclick="insertQuestion()" name="insertQuestions">I'm done. Insert these questions into the database </button><br>
</body>
</html>
