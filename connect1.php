<?php
include("connect.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="" href="style.css">
</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="" class="sign-in-form">
                    <h2 class="title">Sign-In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username1" id="" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password1" id="" required>
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="login" required>
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon"> <i class="fab
                                    fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon"> <i class="fab
                                    fa-google"></i>
                        </a>
                        <a href="#" class="social-icon"> <i class="fab
                                    fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <form action="" method="" class="sign-up-form">
                    <h2 class="title">Sign-up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username2" id="" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="email" id="" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password2" id="" required>
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid" name="submit" required>
                    <p class="social-text">Or Sign Up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon"> <i class="fab
                                    fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon"> <i class="fab
                                    fa-google"></i>
                        </a>
                        <a href="#" class="social-icon"> <i class="fab
                                    fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores aspernatur impedit aperiam.</p>

                    <button class="btn transparent" id="sign-up-btn" name="submit">Sign Up</button>

                </div>
                <img src="undraw_on_the_office_re_cxds.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores aspernatur impedit aperiam.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>
                <img src="undraw_maker_launch_re_rq81.svg" alt="" class="image">
            </div>
        </div>

    </div>
    <script src="app.js"></script>
</body>

</html>


<?php

$un1 = $_GET['username1'];
$pwd1 = $_GET['password1'];
$un2 = $_GET['username2'];
$pwd2 = $_GET['password2'];
$em = $_GET['email'];

$query ="INSERT INTO users VALUES('$un1','$pwd1','$un2','$pwd2','$em')";

$data =mysqli_query($conn,$query);

if($data){

   // echo "Data inserted into database";
}
else{
//echo "Failed to insert Data into database";
}

?>
