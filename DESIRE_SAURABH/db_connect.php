<?php 
    $server_name= "localhost";
    $user_name= "root";
    $pass_word= "";
    $db_name= "saurabh";
    
    $conn= mysql_connect($server_name, $user_name, $pass_word);
    mysql_select_db($db_name) or die("Connection failed");
?>