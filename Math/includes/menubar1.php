<html>
     <head>
	       <title>
		       Navigation bar
		   </title>
		   
		   <style>
		        body{
				
				background:skyblue;
				margin:0;
				}
				.menu{
				  width:100%;
				  background:#142b47;
				  overflow:auto;
				
				}
				.menu ul{
				margin:0;
				padding:0;
				list-style:none;
				line-height:60px;
				}
		           
				   .menu li{
				     float:right;
				   }
				   .menu ul li a{
				      background:#142b47;
					  text-decoration:none;
					  width:130px;
					  display:block;
					  text-align:center;
					  color:#f2f2f2;
					  font-size:18px;
					  font-family:sans-serif;
					  letter-spacing:0.5px;
				   }
				   .menu li a:hover{
				   
				   color:#fff;
				   opacity:0.5;
				   font-size:19px;
				   
				   }
				   
				   .search-form{
				   margin-top:15px;
				   float:left;
				   margin-left:100px;
				  
				   
				   }
				   .search-form input[type=text]{
				   padding:7px;
				   border:none;
				   font-size:19px;
				   font-family:sans-serif;
				    border-radius:5px 0 0 5px;
				   }
				   button{
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
		   </style>
	 </head>
	 
	 <body>
	      <nav class="menu">
		        <ul>
				     <li> <a href="#"> Home</a> </li>
					<li> <a href="#"> Gallery</a> </li>
					<li> <a href="#"> Event</a> </li>
					<li> <a href="#"> About</a> </li>
					<li> <a href="#"> friends</a> </li>
				</ul>
				
				<form class="search-form">
				     <input type="text" placeholder="search">
					 <button> Search </button>
				</form>
		  </nav>
		  <h1> hello user </h1>
	 </body>
</html>