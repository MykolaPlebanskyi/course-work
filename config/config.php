<?php 

  session_start();

  define('SITEURL', 'http://localhost:8081/');

  define('LOCALHOST', 'localhost');
  define('ROOT', 'occurence_user');
  define('PASSWORD', 'strongpassword');
  define('DATABASE', 'occurence_db');

  $conn =  mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE, 3306) 
           or die(mysqli_error($conn));
  $db_select = mysqli_select_db($conn, DATABASE) or die(mysqli_error($conn));


?>

