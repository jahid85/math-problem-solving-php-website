<?php 

setcookie("current_user_email","",time()-(86400*289),"/");
header('location:index.php?logout');


?>