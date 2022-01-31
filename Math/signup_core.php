<?php
session_start();
require("includes\database_connection_config.php");

$first_name=$last_name=$email=$password=$retype_password="";
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$password=$_POST["password"];
$retype_password=$_POST["retype_password"];

if ($_SERVER["REQUEST_METHOD"]== "POST") { 
		      if (empty($_POST["first_name"])|| empty($_POST["last_name"])|| 
			  empty($_POST["email"]) ||empty($_POST["password"])|| empty($_POST["retype_password"])) { 
				 header("location: signup.php?nul_value");
				 } 
				 else {
				 $first_name = test_input($_POST["first_name"]); 
				  $last_name = test_input($_POST["last_name"]); 
				 $email=test_input($_POST["email"]);
				 $password=test_input($_POST["password"]);
				 $retype_password=test_input($_POST["retype_password"]);
				 
				 
				 if($password==$retype_password){
					 if(strlen($password)>=6){
						 $signup_query="INSERT INTO  user_info (id, Name, Last_name, Password, Email, Profilepic) VALUES ( NULL, '$first_name', '$last_name', '$password', '$email', 'profile.jpg')";
					 $run_query=mysqli_query($con,$signup_query);
					 if($run_query==true){
						 setcookie("current_user_email",$email,time()+(86400*7),"/");
						header("location: index.php");
					 }
					 else
					 {
					 	echo "query not run succesfully";
					 }
					 }
					 else{
						  header("location: signup.php?pass_problem");
					 }
					 
				 }
				 else{
					 header("location: signup.php?pass_problem");
				 }
				 
				 } 
			   
			  
			
}

function test_input($data) { 
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
return $data; }



?>
