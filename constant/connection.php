<?php
  define('LOCALHOST','localhost');
  define('DB_USERNAME','root');
  define('DB_PASSWORD','');
  define('DB_NAME','book_db');


  $connection = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
  $db_select = mysqli_select_db($connection,DB_NAME) or die(mysqli_error());
?>