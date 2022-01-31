<?php
require("includes\database_connection_config.php");


$profile_pic_name=$_FILES['Profilepic']['name'];
$profile_pic_temp_name=$_FILES['Profilepic']['tmp_name'];
$location="logo/Profile_pic/";
move_uploaded_file($profile_pic_temp_name,$location . "$profile_pic_name");


$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$nickname=$_POST["nickname"];
$birthday=$_POST["birthday"];
$marital_status=$_POST["marital_status"];
$current_address=$_POST["current_address"];
$hometown=$_POST["hometown"];
if ($_SERVER["REQUEST_METHOD"]== "POST") { 
		     
				 
				 $first_name = test_input($first_name); 
			     $last_name = test_input($last_name); 
				 $nickname= test_input($nickname);
				 $birthday= test_input($birthday);
				 $marital_status= test_input($marital_status);
				 $current_address= test_input($current_address);
				 $hometown= test_input($hometown);
				 
				 $mail="current_user_email"; //acess the cookie value 
			     $user_email=$_COOKIE[$mail];
				 
				$update_profile_query= "UPDATE user_info SET Name='$first_name',last_name='$last_name',Nickname='$nickname',
				                        Birthday='$birthday',Marital_status='$marital_status',Current_address='$current_address',
										Hometown='$hometown',Profilepic='$profile_pic_name' WHERE Email='$user_email' ";
					
					 
					 $run_query=mysqli_query($con,$update_profile_query);
					 if($run_query==true){
						 header("location: profile.php");
					 }
					 
}

function test_input($data) { 
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
return $data; }



?>
