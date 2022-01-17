<?php

    include("function.php");

    $user = 'aksNqFtfwR';
    $pass = 's3BRhNUQXv';
    $db = 'aksNqFtfwR';
    
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Account_number = $_POST['Account_number'];
		$Password = $_POST['pass'];

		if(!empty($Account_number) && !empty($Password))
		{

			//read from database
			$query = "select * from users where Account_number = '$Account_number' limit 1";
			$result = mysqli_query($database, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
                    $user_data = mysqli_fetch_assoc($result);
					
					
				}
                header("Location: personal.php");
				die;
			}
			
			echo "Invalid Account Number or Password!";
		}else
		{
			echo "Invalid form of Account Number or Password!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="./images/logo_img.jpg">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | SANFA</title>
        
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="./css/signup.css">
    </head>

    <body style="padding-top: 30px">

        <video autoplay muted loop id="myVideo">
          <source src="images/3.mp4" type="video/mp4">
        </video>
        
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="./images/signin-image.jpg" alt="sing up image"></figure>
                        
                        <a href="index.php" class="signup-image-link">Go back to Home</a>
                        <a href="signup.php" class="signup-image-link">Don't Have an Account?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_number"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="Account_number" id="your_number" placeholder="Your Account Number"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>