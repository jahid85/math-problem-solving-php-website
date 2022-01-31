<?php
session_start();
error_reporting(0);
include("includes\database_connection_config.php");

if(isset($_COOKIE['current_user_email']))
{
	header('location:index.php');
}
?>


	    <!DOCTYPE html>
<html>
    <head>
	      <title>
		  </title>
		  <link href="stylesheet\style.css" rel="stylesheet">
		  <style>
		  body{
			  margin:0px;
		  }
		  div#login_box{
	margin-top:60px;
	margin-right:auto;
	margin-left:auto;
	margin-bottom:20px;
	padding:30px;
	width:350px;
	background-image: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
	border: 1px tomato solid;
	border-radius:10px;
	
	
}
		  .login_input{
     padding:10px;
	 width:175px;
	 margin:5px;
	 margin-right: 10px;
	
	 
}
		        
		  </style>
	</head>
	<body>
	
	    <?php
		     require_once("includes\menubar.php");
		?>
		
		<div id="login_box">
		    <center>
		     <form action="login_core.php" method="post">
				<label for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;</label>  <!-- &nbsp for make a space-->
				<input class="login_input" type="text" id="email" name="email" placeholder="Enter Email address" /><br/>
				<label for="password">Password</label>
				<input class="login_input" type="password" id="password" name="password" placeholder="Enter Password" /><br/>
				<input class="login_input" type="submit" value="Login"/>
		    </form>
			<?php
			if(isset($_REQUEST["wrong_info"]))
			{
				echo '<br/> <b style="color:red;font-size: 20px;"> Username or password is wrong </b>';
			}
			?>
			</center>
		</div>
		<center>
		      <a style="text-align:center;" href="signup.php" >Don't have an account?signup now </a>
			  <br> <br> <br>
		</center>
		
		
		<?php
	    include 'includes\footer.php';
	echo '</body>
</html>';
?>



