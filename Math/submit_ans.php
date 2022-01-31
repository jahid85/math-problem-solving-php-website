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
		#answer_form{
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
		#submit_answer{
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



	$id=$_GET['id'];



	   $sql="SELECT *FROM problem WHERE prob_id = '$id' ";
	   $run_query=mysqli_query($con,$sql);
	   $row=mysqli_fetch_assoc($run_query);
?>
<div id="problem_stucture" style="background: #E6EEE0;width:80%;margin:auto;padding:10px;border-radius:5px;margin-bottom:3px;">
	<?php

	echo ' <img src="logo/problem_icon.jpg" alt="problem" width="40" height="40" style="display: inline; border-radius: 50% "> ';
    echo "&nbsp;";
    echo '<p style="font-size:28px;margin-bottom:1px;padding:1px;display:inline;"> <b>' . $row['prob_heading'] . '</p> </b> <br>';
    echo '<p style="font-size:24px;font-family:verdana;">' . $row['prob_description'] . "</p> <br>";
    $prob_image_id=$row['prob_id'];
    $query="SELECT *FROM problem WHERE prob_id ='$prob_image_id'";
				 $run_query=mysqli_query($con,$query);
				 $result_pic = mysqli_fetch_assoc($run_query);
				 $pic=$result_pic['prob_pic'];
				 echo "<br>";

				 if($pic=='')
				 {
				 	
				 }
				 else
				 {
				 	
				 
				 ?>

				 <image src="logo\problem_pic\<?php echo $pic; ?>" width="80%" style="border-radius:5%;"><br>
				<?php
					}
				?> 	
</div>

<h1>
	<center>Submit your Answer<br> </center>
</h1>
<div id="answer_form">
	<form action="submit_ans_core.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
		
		<label for="description"><b> Your Answer </b> </label><br>
       <textarea type="text" placeholder="Write your answer here..." id="description" name="description"  rows="10"></textarea> <br>
       <br>
       <?php 
       if(isset($_REQUEST["null_value"])){
			echo '<strong style="color:red;font-size:20px;" >*Your answer can not be empty </strong>';
					}
		?>
		<br><br>
        <label>Add image </label>
        <input type="file" name="ans_pic"> <br>
	    <input id="submit_answer" type="submit" value="Submit" >

 	</form>
</div>
	



<?php

include 'includes\footer.php';
	?>
</body>
</html>