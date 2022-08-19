<?php
require_once('../constant/connection.php');

    $error_msg = "";
        
    if(!isset($_COOKIE['user_id']))
    {
       if(isset($_POST['login-btn']))
       {
           $user_name = mysqli_real_escape_string($connection,trim($_POST['user-login']));
           $pass = mysqli_real_escape_string($connection,trim($_POST['password-login']));

           if(!empty($user_name) && !empty($pass))
           {
            $query = "SELECT id, username FROM user_account WHERE username='$user_name' AND password = SHA('$pass')";
            $data = mysqli_query($connection,$query);

            if(mysqli_num_rows($data) == 1)
            {
              
              $row = mysqli_fetch_array($data);
              setcookie("user_id",$row['id']);
              setcookie("username",$row['username']);
              $home_url = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/home.php';
              header('Locaion: home.php ');
             
            }
            else
            {
                $error_msg = 'Sorry, you must enter valid username and password to login';
                header('location: login.php');  
            }
           }
           else
           {
            $error_msg = "Sorry, you must enter your user name and password to login.";
            header('location: login.php');
           }
       }

    }
    else
    {
        header('location: home.php');
    }

?>