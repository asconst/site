<?php

 	 $host="localhost";
    $user="root";
    $pass=""; 
    $db_name="users";
    $link=mysql_connect($host,$user,$pass);
    mysql_select_db($db_name,$link);
    
    if (isset($_GET["email"])) {
    	echo $_GET["email"];
    }


?>