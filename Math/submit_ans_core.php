<?php
require("includes\database_connection_config.php");


$answer_pic_name=$_FILES['ans_pic']['name'];
$answer_pic_temp_name=$_FILES['ans_pic']['tmp_name'];
$location="logo/answer_pic/";
move_uploaded_file($answer_pic_temp_name,$location . "$answer_pic_name");

$id=$_GET['id'];

$description=$_POST["description"];
if ($_SERVER["REQUEST_METHOD"]== "POST") { 
		     
				 if(empty($description)){
				 	header("location: submit_ans.php?null_value&id=$id");
				 }
				 else
				 {
				 		
			     $description = test_input($description); 
				
				 
				 $mail="current_user_email"; //acess the cookie value 
			     $user_email=$_COOKIE[$mail];
				 
				$insert_answer_query= "INSERT INTO solution (solution_id, solution, solution_pic, submit_by) VALUES ('$id', '$description', '$answer_pic_name', '$user_email')" ;
					 
					 $run_query=mysqli_query($con,$insert_answer_query);
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
