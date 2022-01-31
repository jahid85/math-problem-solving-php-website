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




.container {

    width:200px;

    position: relative;

}

.click{

    background-color: #f85f73;

}

.click:hover {

    background-color: #B71C1C;

}

.click,.links {

    padding: 12px;

    font-size: 1.2em;

    font-family: futura Md BT;

    border: none;

    outline: none;

    width:200px;

    color:#fff;

    transition: 0.3s;

}

.list {

    position: absolute;

    transform: scaleY(0);

    transform-origin: top;

    transition: 0.3s;

}

.newlist {

    transform: scaleY(1);

}

.links {

    background-color: #283c63;

}

.links:hover {

    background-color: #01579B;

    transform: scale(1.1);

}

*{

    margin: 0;

    padding: 0;

    box-sizing: border-box;

}

body{

    width:100%;

    display: flex;

    justify-content: center;

    align-items: center;

    background-image: url('https://www.cdgroupcredentialing.com/wp-content/uploads/2019/07/logo-background-shapes-png-5.png');

    background-size: cover;

}
 </style>

   
	<nav class="menu">
	       	<ul>
		  
			<?php
			        if(isset($_COOKIE['current_user_email'])){
			?>

			        	<div class="container">

            <button class="click">Click Me</button>

            <div class="list">

                <button class="links">Link 1</button>

                <button class="links">Link 2</button>

                <button class="links">Link 3</button>

                <button class="links">Link 4</button>

                <button class="links">Link 5</button>

            </div>

        </div>

        <script>

            let click = document.querySelector('.click');

            let list = document.querySelector('.list');

            click.addEventListener("click",()=>{

                list.classList.toggle('newlist');

            });

        </script>

				<?php
				}	  
					  
				 else{
					 echo'<li><a href="login.php">Login</a></li>';
				
				 }
			?>
		      <li> <a href="ask_question.php">Ask Questions</a> </li>
			  <li><a href="#">Suggested</a></li>
			  <li><a href="#">Unsolved</a></li>
			  <li><a href="index.php">Home</a></li>
			   
			  
			  
		</ul>
		
		<form action="search_result.php" class="search-form" method="get" >
             <input type="text" placeholder="Search a problem..." name ="search_text">
			 <button class="search_button"> search </button>
		</form>
	</nav>
	
	
		
	  