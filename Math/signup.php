<?php 
session_start();
require_once("includes\database_connection_config.php");



?>
<html>
     <head>
	      <title>
		  </title>
		  <link href="stylesheet\style.css" rel="stylesheet">
		  <style>
		  body{
			  margin:0px;
		  }
			 div#signup_box{
					max-width:600px;
					height:auto;
					background: #e1f4fa;
					border: .2px solid green;
					padding:15px;
					margin-left:auto;
					margin-right:auto;
					margin-top:60px;
					margin-bottom:20px;
					border-radius:15px;
			
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
		  <div id="signup_box">
		      <center>
			          <form action="signup_core.php" method="post">
					  <p style="color:blue; font-size:22px;" > Sign up Mathmatics School </p>
					<input type="text" class="login_input" placeholder="Firstname" id="first_name" name="first_name" />
					
					<br/>
					<input type="text" class="login_input" placeholder="Lastname" name="last_name" />
					
					<br/>
					<input type="email" class="login_input" Placeholder="Email" id="email" name="email" />
				
					<br/>
					<input type="password" class="login_input" Placeholder="password" name="password" />
					
					<br/>
					<input type="password" class="login_input" Placeholder="Re-enter Password" name="retype_password"/>
					<br/>
					<?php if(isset($_REQUEST["nul_value"])){
						echo '<strong style="color:red;font-size:15px;" >*Must fill all the field </strong>';
					}
					if(isset($_REQUEST["pass_problem"])){
						echo '<strong style="color:red;font-size:15px;"> * Password dont match or less than 6 character</strong>';
					}
					?>
					<br/>
					<input class="login_input" type="submit" value="submit"/>
			   </form>
			   
			  </center>
				
		  </div>
		  <center>
		       <a href="login.php">Already have an account? login now </a>
			   <br>
			   <br>
			   <br>
		  </center>
		  <?php
		      include 'includes\footer.php';
		  ?>
	 </body>
</html>