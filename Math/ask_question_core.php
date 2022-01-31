<?php
require("includes\database_connection_config.php");


$problem_pic_name=$_FILES['problem_pic']['name'];
$problem_pic_temp_name=$_FILES['problem_pic']['tmp_name'];
$location="logo/problem_pic/";
move_uploaded_file($problem_pic_temp_name,$location . "$problem_pic_name");


$title=$_POST["title"];
$description=$_POST["description"];
if ($_SERVER["REQUEST_METHOD"]== "POST") { 
		     
				 if(empty($title) || empty($description)){
				 	header("location: ask_question.php?null_value");
				 }
				 else
				 {
				 		 $title = test_input($title); 
			     $description = test_input($description); 
				
				 
				 $mail="current_user_email"; //acess the cookie value 
			     $user_email=$_COOKIE[$mail];
				 
				$insert_problem_query= "INSERT INTO problem (prob_id, prob_heading, prob_description, prob_pic, submit_by) VALUES (NULL, '$title', '$description', '$problem_pic_name', '$user_email')" ;
					 
					 $run_query=mysqli_query($con,$insert_problem_query);
					 if($run_query==true){
						 header("location: index.php");

					 }
					 else{
					 	echo "query not run";
					 }
				 }
			
					 
}

function test_input($data) { 
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
return $data; }



?>
