<?php
session_start();
error_reporting(0);
include("includes\database_connection_config.php");

?>

<html>
    <head>
	      <title>
		  </title>
		  <link href="stylesheet\style.css?v=<?php echo time();?>" rel="stylesheet" >
		  
		  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

		  <style>
		        body{
					margin: 0px;
				}
		        div#problem_structure{
				width:80px;
				margin:auto;
				border:1px solid green;
				background: #e1f4fa;
}
		       .pagination a.active{
				    background-color: #4CAF50;
                    color: white;
					border: 1px solid #4CAF50;
			   }
			   .pagination a:hover:not(.active) {background-color: #ddd;}
			   div#solution{
			   	display: block;
			   }
			   div#solution{
			   	font-size: 25px;
			   }
		  </style>
		  <script>
		  	function setvisibility(id, visibility){
		  		document.getElementById(id).style.display=visibility;
		  		
		  	}
		  </script>
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
	   
	   
	   $problem_per_page=10;
	   $sql="SELECT *FROM problem";
	   $run_query=mysqli_query($con,$sql);
	   $number_of_problem=mysqli_num_rows($run_query);
	   
	   $num_of_page=ceil($number_of_problem/$problem_per_page);
	   
	   
	   
	   if(!isset($_GET['page'])) 
	   {
           $page = 1;
       } 
	   else 
	   {
           $page = $_GET['page'];
       }

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_problem_index = ($page-1)*$problem_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM problem LIMIT ' . $this_page_first_problem_index . ',' .  $problem_per_page;
$result = mysqli_query($con, $sql);
        echo "<br> <br> <br> ";
while($row = mysqli_fetch_array($result)) {
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


    <!--


	      <div id="see_button">
    	       <input type=button name=t1 value='see solution' onclick="setvisibility('solution', 'inline-block');">

    	  </div>
    -->
    	  <div id="solution">
    	  	<!--
    	  	<input type=button name=t2 value='hide solution' onclick="setvisibility('solution', 'none');"> <br>
    	  	Solution part <br>
    	  -->
    	  	<h2 style="color: green; font: italic;"> Solution: </h2>
    	  	<?php
    	  	$r1=$row['prob_id'];
    	  	$solution_sql="SELECT * FROM solution WHERE solution_id ='$r1' ";
    	  	$output=mysqli_query($con, $solution_sql);
    	  	/* test for query

    	  	if($output==true){
    	  		echo "run succesfully";
    	  	}
    	  	else
    	  	{
    	  		echo "query not run";
    	  	}
    	  	*/

    	  	if(mysqli_num_rows($output)==1)
    	  		{
    	  			while($row=mysqli_fetch_array($output))
    	  				{
    	  					// echo mysqli_num_rows($output);
    	  					
    	  					echo $row['solution'];
    	  				
    	  				}
    	  			
    	  			
    	  		}
    	  		else
    	  		{
    	  			echo "No solution found. Are you interested to answer this question? <a href=submit_ans.php?id=" . $r1 . "> Answer now  <a> ";
    	  		}
    	  	

    	  	?>

    	  </div>
	
    </div>

    
	
	<?php
	
}

// (pagination )display the links to the pages 
echo '<div style="text-align:center;" >';
    echo '<div class="pagination" style="display:inline-block;">';
for($page=1;$page<=$num_of_page;$page++) {
  echo ' <a style="color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;" href="index.php?page=' . $page . '">' . $page . '  </a> ';
}
echo '</div>';
echo "</div>";
echo '<br>';

//end pagination
	   
	
	include 'includes\footer.php';
	?>
	    
	</body>
</html>