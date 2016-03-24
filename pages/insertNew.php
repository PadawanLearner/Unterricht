<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/png" href="../favicon.ico"/>
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


<script type="text/javascript">
/*
   This function returns the value of the currently selected radio button
 */
function getCheckedRadio(radioGroup) {
	for (var i = 0; i < radioGroup.length; i++) {
		var button = radioGroup[i];
		if (button.checked) {
			return button;
		}
	}
	return undefined;
}

/*
   /This function updates the serverside info for the query

 */
function addQuestion(){
	/*
	You have to store the following elements into a variable, because if you just used getElementsByName as this script and the  DOM is loaded, then getElementsByName would fail to find the specified element. This is because those elements haven't been loaded yet (they are loaded below after this head script).  By using a variable, when addQuestion is called they have had enough time to be loaded, so the variable can in fact find them upon its initialization
	*/
	var questionText = document.getElementsByName("question");
	var answerText = document.getElementsByName("answer");
	var checkedButton = getCheckedRadio(document.getElementsByName("category"));
	if (!questionText[0].value)
		alert ("No Question entered");

	else if (!answerText[0].value)
		alert ("No Answer entered");

	else if (!checkedButton) {
		alert("No Category selected");
	}
	else{

	xmlhttp=new XMLHttpRequest(); //make ajax object
	var params = "action=add&question="+document.getElementById("question").value+"&answer="+document.getElementById("answer").value+"&category="+checkedButton.value+"&password="+document.getElementById("password").value;
	xmlhttp.open("POST","insert.php",false);//There is no reason to use ajax here, other than for my own personal experience

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
}

/*
   Reset all the data from the questions the user has planned to enter into the database
 */
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

/*
   Put in motion the insertion of the question(s) on the server
 */
function insertQuestion(){
	xmlhttp=new XMLHttpRequest(); //make ajax object
	var params = "action=insert"
		xmlhttp.open("POST","insert.php",true);//Really no need for this to be async but I wanted the experience

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
<link rel="stylesheet" type="text/css" href="mainTheme.css">
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-collapse collapse">
<ul class="nav nav-justified">
<li><a href="theDaily.php">see the daily!</a></li>
<li><a href="insertNew.php">insert content</a></li>
</ul>
</div>
</nav>
<ul id="myList">
</ul>
<!-- Insert Question -->
<form id="content"  action="extendQuery()" >
<div class="row">
<div class="col-xs-6">
<label for="question">What does the tip do? (question)</label>
<br>
<textarea class="form-control" rows="20" name="question" id="question"></textarea>
</div >
<div class="col-xs-6">	 
<label for="answer">What is the tip? (answer)</label>
<br>
<textarea class='form-control' rows="20" name="answer" id="answer"></textarea>
</div>

</div>
<br>
<div class="row">
<div class="col-xs-12 text-center">	 
<!-- Need checkboxes for category plus a section for "new" category-->
<label for="questionCategory">What category is this tip for?</label>
<br>
<?php
require "regulate.php";
displayCategories();
?>
</div>
</div>
<!-- <input type="text" class="form-control" name="category" id="category"> -->
<br>
<!-- <button type="submit" name="addAnother">Add Another </button>-->
</form>

<br>
<br>
<br>
<div class="row">
<div class="col-xs-12 text-center">	 
<form  action='javascript:addQuestion()' accept-charset='UTF-8'>
<fieldset >
<label for='password' >Password:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit Content' />
</fieldset>
</form>
</div>
</div>
</body>
</html>
