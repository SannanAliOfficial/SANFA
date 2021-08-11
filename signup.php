<?php

function random_number($length)
{
    $text="";
    if($length < 5 )
    {
        $length = 5;
    }

    $len= rand(4,$length);

    for ($i=0; $i < $len; $i++){
        $text.= rand(0,9);
    }

    return $text;
}

$user = 'aksNqFtfwR';
$pass = 's3BRhNUQXv';
$db = 'aksNqFtfwR';

if(! $database = new mysqli('remotemysql.com', $user , $pass, $db ))
{
    die("failed to connect");
}

if($_POST['pass'] != $_POST['re_pass']){
    die('Password does not match');
}



if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['pass'];
    $Re_Password = $_POST['re_pass'];

    if(!empty($Name) && !empty($Email) && !empty($Password) && !empty($Re_Password))
    {
        $Account_number = random_number(16);
        $query = "insert into users (Account_number, Name, Email, Password, Re_Password) values('$Account_number','$Name', '$Email', '$Password', '$Re_Password')";
        mysqli_query($database,$query);

        header("Location: personal.php");
        die;      
        
    }else
    {
        
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./../css/signup.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="signup.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./../images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">Go back to Home</a>
                        <a href="login.php" class="signup-image-link">Already have an Account</a>
                    </div>
                </div>
            </div>
        </section>



    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="index.js"></script>
</body>
</html>