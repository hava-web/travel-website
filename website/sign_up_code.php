<?php
session_start();
require_once('../constant/connection.php');
   
      if(isset($_POST['register-btn']))
      {
          $username = mysqli_real_escape_string($connection,trim($_POST['username']));
          $email = mysqli_real_escape_string($connection,trim($_POST['email']));
          $password = mysqli_real_escape_string($connection,trim($_POST['password']));
          $confirm = mysqli_real_escape_string($connection,trim($_POST['confirmpass']));
          $create_date = date("y-m-d h:i:sa");
          if(!empty($username) && !empty($email) && !empty($password) && !empty($confirm) && ($password===$confirm))
          {
             $query = "SELECT * FROM user_account WHERE username = '$username' ";
             $query_run = mysqli_query($connection,$query);
             if(mysqli_num_rows($query_run) == 0)
             {
                $query = "INSERT INTO user_account(username,email,password,create_date) VALUES".
                "('$username','$email',SHA('$password'),'$create_date')";
                mysqli_query($connection,$query);
                $query2 = "SELECT id,username FROM user_account WHERE username = '$username' AND password = SHA('$password')";
                $data = mysqli_query($connection,$query2);
                $row = mysqli_fetch_array($data);
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                setcookie("user_id",$row['id'],time() + (60*60*24*30));
                setcookie("username",$row['username'],time() + +(60*60*24*30));
                header('Location: home.php');
                mysqli_close($connection);
                exit();


             }
             
             else
             {
               echo '<p class="error">An account already exits for this username. Please enter a differnt'.'address </p>';
               $username='';
             }
          }
          else
          {
            echo '<p class="error">You must enter all of the sign-up data, including the desired password
            '.'tiwce</p>';
          }
      }
      mysqli_close($connection);
      
?>