<?php
$user = 'ngocha';
$password = '1';
   


   if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER']!=$user) || ($_SERVER['PHP_AUTH_PW']!=$password))
   {
       header('http://localhost:8080 unautherized');
       header('WWW-Authenticate: Basic realm="my_travel"');
       exit('You must enter valid user name and passworld');
   }

?>