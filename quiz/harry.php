<?php
session_start();
?>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="quiz.css">
	<title>QUIZ</title>
	<link href="https://fonts.googleapis.com/css?family=Macondo" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background: 'avengers.jpg'">

			<div id="quiz">
				<div id="question"></div>
				<label class="option"><input type="radio" name="option" value="1" /><span id="option1"></span></label>
				<label class="option"><input type="radio" name="option" value="2" /><span id="option2"></span></label>
				<label class="option"><input type="radio" name="option" value="3" /><span id="option3"></span></label>
				<label class="option"><input type="radio" name="option" value="4" /><span id="option4"></span></label>
				<br>
				<br>
				<br>
				<div>
				<div style="display:inline;"><button id="next" onclick="nextques();">NEXT QUESTION</button></div>
				<button id="quit" onclick="quit();">Quit</button>
				</div>
				

			</div>

			
			
			<div id="result" style="display:none"></div>

			<div style="display: inline; float: right; padding: 30px;">
			<p> <a href="index.php?logout='1'" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red" style="margin-right: 30px; font-size:19px">Logout</a>
			<a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red" style="margin-right: 30px; font-size:19px">Home</a> </p>
			</div>

			<script type="text/javascript" src="harryquestions.js"></script>
	<script type="text/javascript" src="main.js"></script>
    
	
</body>
</html>