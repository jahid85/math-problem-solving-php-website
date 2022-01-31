<?php
include("includes\database_connection_config.php");

?>

<!DOCTYPE html>

<html>
	<head>
	
		<title>
		
		</title>
		<style>
		body{
			margin:0px;
		}
			.side_bar{
				  height: 100%;
				  width: 20%;
				  position: fixed;
				  z-index: 1;
				  top: 0;
				  left: 0px;
				  background-color: #e1f4fa;
				  overflow-x: hidden;
				  padding-top: 16px;

			}
			#side_bar_top{
				padding-left:30px;
			}
		    .side_bar a{
				  padding: 8px 8px 8px 25px;
				  text-decoration: none;
				  font-size: 25px;
				  color: black;
				  display: block;
                  
			}
			.side_bar a:hover{
				background-color: #f1f1f1;
				color:green;
			}
			.side_bar a:active{
				background-color:green;
				color: white;
			}
			.main_content{
				margin-left:20%;
				width:80%;
				
			}
			.personal_info_profile_card{
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
				  transition: 0.3s;
				  width: 60%;
				  background-color: #f1f1f1;
				  text-align:left;
				  font-size:20px;
				  padding:15px;
				  padding-top:30px;
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
		<div class="side_bar">
		    <h1 id="side_bar_top" >Your Account</h1>
			<a href="index.php" >Home</a>
			<a href="#">Personal info</a>
			<a href="#" >My Questions</a>
			<a href="#" >My Answer</a>
			<a href="logout.php" >Logout</a>
		</div>
		
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
			 <?php
			echo '<h1> Welcome '; 
			
			     
			   
				 echo '<div style="color:green;" >' .$row["Name"] . ' ' . $row["Last_name"] . "</div>";
				

			?> <h1>
			<div class="personal_info_profile_card">
			    <div style="text-align:right;">
				 
				 <a href="edit_profile.php" style="text-decoration:none;" title="Edit your all Profile information">
				   Edit Profile
				 <a/>
				</div>
				<br>
			   <table>
			        <tr>
					     <td> Name :</td>
						 <td><?php echo $row["Name"] . ' ' . $row["Last_name"]; ?> </td>
					</tr>
					<tr>
					     <td> Nickname : </td>
						 <td><?php echo $row["Nickname"]; ?></td>
					</tr>
					<tr>
					     <td>Date of Birth :</td>
						 <td><?php echo $row["Birthday"]; ?></td>
					</tr>
					<tr>
					     <td>Marital Status : </td>
						 <td> <?php echo $row["Marital_status"]; ?></td>
					</tr>
					<tr>
					     <td>Current Adress :</td>
						 <td><?php echo $row["Current_address"]; ?></td>
					</tr>
					<tr>
					     <td>Hometown :</td>
						 <td><?php echo $row["Hometown"]; ?></td>
					</tr>
			   </table>
			</div>
			</center>
			
			<br> <br> <br>
			
			<?php
			
			include 'includes\footer.php';
			
			?>
			
			
		
		
		</div>
	
	</body>

</html>