<?php
session_start();
error_reporting(0);
include("includes\database_connection_config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#question_form{
			border-radius: 10px;
			background: #99CCFF;
			width: 50%;
			padding: 20px;
			margin: auto;
		}
		label{
			margin: 10px;
			width: 100%;
			padding: 10px;
			font-size: 22px;
		}
		#title{
			width: 98%;
			height: 40px;
			margin: 5px;
			border-radius: 5px;
			font-size: 20px;
			padding: 5px;

		}
		textarea{
			width: 98%;
			margin: 8px;
			border-radius: 5px;
			padding: 5px;
			font-size: 22px;
		}
		#submit_question{
			width: 30%;
			height: 50px;
			background: tomato;
			display: block;
			margin: auto;
			border-radius: 25px;
			font-size: 20px;
			border-color: green;
			



		}
	</style>
</head>
<body>

<?php
	   require('includes\menubar.php');
	   if(isset($_COOKIE['current_user_email'])){
		   echo '<div>
		          
				  </div>';
	   }
	   else {
		   echo '<center> <a href="signup.php">sign up for enjoy math </a> </center> <br>';
	   }
	   echo "<br> <br>";
?>
<h1>
	<center>Ask you question here: <br> </center>
</h1>
<div id="question_form">
	<form action="ask_question_core.php" method="POST" enctype="multipart/form-data">
		<label for="title"><b> Title </b> </label><br>
		<input type="text" id="title" name="title" placeholder="Enter your problem title"> 
		<br>
		<label for="description"><b> Problem Descripton </b> </label><br>
       <textarea type="text" placeholder="Describe your problem in details..." id="description" name="description"  rows="10"></textarea> <br>
       <br>
       <?php 
       if(isset($_REQUEST["null_value"])){
			echo '<strong style="color:red;font-size:20px;" >*Problem title and description can not be empty </strong>';
					}
		?>
		<br><br>
        <label>Add image </label>
        <input type="file" name="problem_pic"> <br>
	    <input id="submit_question" type="submit" value="Ask now" >

 	</form>
</div>
	



<?php

include 'includes\footer.php';
	?>
</body>
</html>