
<?php
session_start();
require_once("includes\database_connection_config.php");

$user_email=$_REQUEST["email"];
$user_password=$_REQUEST["password"];

$match_query="SELECT * FROM user_info WHERE Email='$user_email' AND Password='$user_password'";

$run_query=mysqli_query($con,$match_query);

$check_count=mysqli_num_rows($run_query);
if($run_query==true)
{
	if($check_count==1)
{
	setcookie("current_user_email",$user_email,time()+(86400*7),"/");
	/*$_SESSION['user_login']="true";*/
	header("location: index.php");
}
else{
	header("location: login.php?wrong_info");
}
}



?>