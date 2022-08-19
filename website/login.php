<!DOCTYPE html>
<?php
session_start();
require_once('../constant/connection.php');

    $error_msg = "";
        
    if(!isset($_SESSION['user_id']))
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
              $_SESSION['user_id'] = $row['id'];
              $_SESSION['username'] = $row['username'];
              setcookie("user_id",$row['id'],time() + (60*60*24*30));
              setcookie("username",$row['username'],time() + +(60*60*24*30));
            //   $home_url = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/home.php';
              header('Location: home.php ');
             
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

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Sign In.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Đăng nhập</title>
</head>
<body>

<!-- sign up -->
  
<!-- Login -->

    


    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already have an account ?</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't have an account ?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <h3>Sign in</h3>
                    <input type="text" placeholder="Username" value="" name="user-login" required>
                    <input type="password" placeholder="Password" name="password-login" required>
                    <button type="submit" class="register" name="login-btn">Login</button>
                    <a href="#" class="forgot">Forgot Password</a>
                </form>
                <?php
                 if(empty($_SESSION['user_id'])){echo'<p class="error">'.$error_msg.'</p>'; ?>
                <?php 
                }
                else
                {
                    echo  '<p class="login">You are loged in as '.$_COOKIE['username'].'</p>';
                }
                ?>
            </div>




            <div class="form signupForm">
                <form action="sign_up_code.php" method="post">
                    <h3>Sign up</h3>
                    <input type="text" value="<?php if(!empty($username)) echo $username ?>" placeholder="Username" name="username" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="password" placeholder="Confirm Password" name="confirmpass" required>
                    <button type="submit" class="register" name="register-btn">Register</button> 
                    
                </form>
            </div>
        </div>
    </div>

    <script>

        

        const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
        const body = document.querySelector('body')

        signupBtn.onclick = function(){
            formBx.classList.add('active')
            body.classList.add('active')
        }

        signinBtn.onclick = function(){
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
    </script>
</body>
</html>