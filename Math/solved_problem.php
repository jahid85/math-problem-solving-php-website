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
	   
	   $search = $_GET["search_text"];
	  // echo $search;
	   $problem_per_page=10;
	   $sql="SELECT problem.prob_id, problem.prob_heading, problem.prob_pic, problem.prob_description FROM problem, solution WHERE problem.prob_id = solution.solution_id ";
	//   $sql="SELECT p.prob_id, p.prob_heading, p.prob_pic, s.solution_id FROM problem p INNER JOIN solution s ON s.solution_id = p.prob_id";
	   $run_query=mysqli_query($con,$sql);
	   	if($run_query==true){
    	  	//	echo "run succesfully";
    	  	}
    	  	else
    	  	{
    	  		echo "query not run";
    	  	}
	   $number_of_problem=mysqli_num_rows($run_query);
	   
	   echo "About <b>" .$number_of_problem . " </b> result found";
	   echo "<br>";
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
$sql="SELECT *FROM problem WHERE prob_description LIKE '%" .$search. "%' ";
// LIMIT '$this_page_first_problem_index','$problem_per_page' " ;
$result = mysqli_query($con, $sql);
       
while($row = mysqli_fetch_array($run_query)) {
	?>
	
	
	<div id="problem_stucture" style="background: #E6EEE0;width:80%;margin:auto;padding:10px;border-radius:5px;margin-bottom:3px;">
	<?php

	echo ' <img src="logo/problem_icon.jpg" alt="problem" width="40" height="40" style="display: inline; border-radius: 50%; "> ';
    echo "&nbsp;";
    echo '<p style="font-size:28px;margin-bottom:1px;padding:1px;display:inline;"> <b>' . $row['prob_heading'] . ' </b> </p> <br>';
    echo '<p style="font-size:24px;font-family:verdana;">' . $row['prob_description'] . "</p> <br>";

    // problem image starts here

    
				 $pic=$row['prob_pic'];
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
	
    

    <!--Solution part here -->


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
    	  			echo "No solution found. Are you interested to <a href=submit_ans.php> Answer  <a> this question? <a href=submit_ans.php?id=" . $r1 . "> Answer now  <a> ";
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