<?php
include("includes\database_connection_config.php");

?>

<html>

     <head>
	     <title>
		 </title>
		 <style>
		      .personal_info_profile_card{
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
				  transition: 0.3s;
				  width: 50%;
				  background-color: #f1f1f1;
				  text-align:left;
				  font-size:20px;
				  padding:15px;
				  padding-top:30px;
				  margin-bottom:20px;
			}
			.personal_info_profile_card:hover{
				  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
			}
		      table{
				width: 100%;
				border-collapse:collapse;
				
			}
			th,td{
				padding:15px;
			}
			tr:nth-child(odd) {background-color: white;}
		 </style>
	 </head>
	 <body>
	 
	     <div class ="main_content">
		    
		     <?php
			     $mail="current_user_email"; //acess the cookie value 
			     $user_email=$_COOKIE[$mail];
                 $query="SELECT *FROM user_info WHERE Email='$user_email'";
				 $run_query=mysqli_query($con,$query);
				 $row = mysqli_fetch_assoc($run_query);
			 echo '<center>';
			 ?>
			<image src="logo\Profile_pic\<?php echo $row["Profilepic"]; ?>" width="150px" height="150px" style="border-radius:50%;"><br>
			<br>
			<form action="edit_profile_core.php" method="post" enctype="multipart/form-data">
			Change photo : 
			<input type="file" name="Profilepic" />
			<br> <br>
			<div class="personal_info_profile_card">
			   
			   
			   <table>
			        
			        <tr>
					     <td> First Name :</td>
						 <td> <input type="text" name="fname" value="<?php echo $row['Name']; ?>"/> </td>
					</tr>
					 <tr>
					     <td> Last Name :</td>
						 <td> <input type="text" name="lname" value="<?php echo $row['Last_name']; ?>" /> </td>
					</tr>
					<tr>
					     <td> Nickname : </td>
						 <td><input type="text" name="nickname" id="nickname" value="<?php echo $row['Nickname']; ?>" /></td>
					</tr>
					<tr>
					     <td>Date of Birth :</td>
						 <td><input type="date" name="birthday" value="<?php echo $row['Birthday']; ?>"/></td>
					</tr>
					<tr>
					     <td>Relationship Status : </td>
						 <td> <input type="text" name="marital_status" value="<?php echo $row['Marital_status']; ?>" /></td>
					</tr>
					<tr>
					     <td>Current Adress :</td>
						 <td><input type="text" name="current_address" value="<?php echo $row['Current_address']; ?>"/></td>
					</tr>
					<tr>
					     <td>Hometown :</td>
						 <td><input type="text" name="hometown" value="<?php echo $row['Hometown']; ?>"/></td>
					</tr>
					
			   </table>
			   
			  
			</div>
			    
			<input type="submit" value="Update Profile" />
					
			   
			</center>
			
			<br> <br> <br>
			
			<?php
			
			include 'includes\footer.php';
			
			?>
			
			
		
		
		</div>
		   </form>
	 </body>
</html>
