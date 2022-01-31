 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <style>
 
.menu{
	width:100%;
	height:70px;
	 background:skyblue;
	 overflow:auto;

}

.menu ul{
	margin:0;
	padding:0;
	list-style:none;
	line-height:70px;

}
.menu li{
	float:right;
	
}
.menu ul li a{
	
					  text-decoration:none;
					  width:130px;
					  display:block;
					  text-align:center;
					  color:black;
					  font-size:18px;
					  font-family:sans-serif;
					  letter-spacing:0.5px;
}
.menu li a:hover{
	background:#333;
	color:white;
	font-size:19px;
	
}
.search-form{
				   margin-top:15px;
				   float:left;
				   margin-left:15%;
				  
				   
				   }

 .search-form input[type="text"] {
    
     padding:7px;
	   border:none;
	   font-size:19px;
	  font-family:sans-serif;
	 border-radius:5px 0 0 5px;
    
}




 .search_button{
	float:right;
   background:orange;
	color:white;
	border-radius:0 5px 5px 0;
	cursor:pointer;
	position:relative;
	padding:7px;
	font-family:sans-serif;
	border:none;
	font-size:19px; 
 }

 
 .dropbtn {
  color:black;
  padding: 16px;
  font-size: 19px;
  border: none;
  cursor: pointer;
  height:70px;
  width:130px;
  background:skyblue;
}
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
  color:white;
}
 .dropdown {
	float:right;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: block;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 130px;
  
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right:0;
  z-index: 1;


}



.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
 </style>

   
	<nav class="menu">
	       	<ul>
		  
			<?php
			        if(isset($_COOKIE['current_user_email'])){
					// echo'<li><a href="logout.php">Logout</a></li>';
					
					  /*
					  echo '<li> 
					      <div class="dropdown">
					              <button class="dropbtn" onclick="myFunction()"> <i class="fas fa-user-circle" aria-hidden="true"></i>Profile</button> 
						           <div id="myDropdown" class="dropdown-content">
                                   <a href="profile.php">Profile</a>
                                   <a href="#">Setting</a>
                                   <a href="logout.php">Logout</a>
                               </div>
						  </div>';

					*/
			?> 
			
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script> 

                     <li>
                     	<a href="profile.php">
 							<?php
 							$email=$_COOKIE['current_user_email'];
 							$userdata= "SELECT * from user_info WHERE Email = '$email' ";
 							$run_query=mysqli_query($con,$userdata);
	  					    $row=mysqli_fetch_assoc($run_query);


 							echo $row['Name'];
 							?>
 						</a>

					  </li>
					  <?php
					}
					  
					  
				 else{
					 echo'<li><a href="login.php">Login</a></li>';
				
				 }
			?>
		      <li> <a href="ask_question.php">Ask Questions</a> </li>
			  <li><a href="#">Suggested</a></li>
			  <li><a href="solved_problem.php">Solved</a></li>
			  <li><a href="index.php">Home</a></li>
			   
			  
			  
		</ul>
		
		<form action="search_result.php" class="search-form" method="get" >
             <input type="text" placeholder="Search a problem..." name ="search_text">
			 <button class="search_button"> search </button>
		</form>
	</nav>
	
	
		
	  