<?php 

require 'includes/Database.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login / Register</title>
    <link rel="stylesheet" href="assets/css/register_style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>

    <?php
    if(isset($_POST['register_button'])) {
        echo '
        <script>
        $(document).ready(function() {
            $("#first").hide();
            $("#second").show();
        });
        </script>
        ';
    }

    ?>

<div class="wrapper">
<div class="login_box">
    <div class="login_header">
        <h1>Nomadic Escape</h1><br>
        Login or Sign Up Below!
    </div>    
    <br>
    <div id="first">
    <form action="register.php" method="POST">
    <input type="email" name="log_email" placeholder="Email Address" value="<?php
        if(isset($_SESSION['log_email'])) {
            echo $_SESSION['log_email'];
        } ?>" required>
    <br>
    <input type="password" name="log_password" placeholder="Password" required>
    <br>
    <input type="submit" name="login_button" value="Login">
    <br>
    <?php if(in_array("Email or Password was incorrect!<br>", $error_array)) echo "<span class='errorMsg'>Email or Password was incorrect!</span><br>"; ?>
    <a href="#" id="signup" class="signup">Don't have an account? Register here!</a>
    </form>
    </div>
    <div id="second">
    <form action="register.php" method="POST">
        <input type="text" name="reg_fname" placeholder="First Name" value="<?php
        if(isset($_SESSION['reg_fname'])) {
            echo $_SESSION['reg_fname'];
        } ?>" required>
        <br>
        <?php if(in_array("Your first name must be between 2 and 25 characters!<br>", $error_array)) echo "<span class='errorMsg'>Your first name must be between 2 and 25 characters!</span><br>"; ?>
        
        <input type="text" name="reg_lname" placeholder="Last Name" value="<?php
        if(isset($_SESSION['reg_lname'])) {
            echo $_SESSION['reg_lname'];
        } ?>" required>
        <br>
        <?php if(in_array("Your last name must be between 2 and 25 characters!<br>", $error_array)) echo "<span class='errorMsg'>Your last name must be between 2 and 25 characters!</span><br>"; ?>
        
        <!-- <input type="text" name="reg_username" placeholder="username" value="<?php 
        if(isset($_SESSION['reg_username'])) {
            echo $_SESSION['reg_username'];
        } ?>" required>
        <br>
        <?php if(in_array("Your username must be between 5 and 25 characters!<br>", $error_array)) echo "<span class='errorMsg'>Your last name must be between 2 and 25 characters!</span><br>"; ?>-->

        <input type="email" name="reg_email" placeholder="Email" value="<?php
        if(isset($_SESSION['reg_email'])) {
            echo $_SESSION['reg_email'];
        } ?>" required>
        <br>
        <input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php
        if(isset($_SESSION['reg_email2'])) {
            echo $_SESSION['reg_email2'];
        } ?>" required>
        <br>
        <?php if(in_array("Email already in use!<br>", $error_array)) echo "<span class='errorMsg'>Email already in use!</span><br>";
        else if(in_array("Invalid email format!<br>", $error_array)) echo "<span class='errorMsg'>Invalid email format!</span><br>";
        else if(in_array("Emails don't match!<br>", $error_array)) echo "<span class='errorMsg'>Emails don't match!</span><br>"; ?>

        <input type="password" name="reg_password" placeholder="Password" required>
        <br>
        <input type="password" name="reg_password2" placeholder="Confirm Password" required>
        <br>
        <?php if(in_array("Your passwords don't match!<br>", $error_array)) echo "<span class='errorMsg'>Your passwords don't match!</span><br>";
        else if(in_array("Your password can only contain letters and numbers!<br>", $error_array)) echo "<span class='errorMsg'>Your password can only contain letters and numbers!</span><br>";
        else if(in_array("Your password must be between 5 and 30 characters!<br>", $error_array)) echo "<span class='errorMsg'>Your password must be between 5 and 30 characters!</span><br>"; ?>

        <input type="submit" name="register_button" value="Register">
        <br>
        
        <?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
        <a href="#" id="signin" class="signup">Already have an account? Login here!</a>

    </form>
    </div>
    
    </div>
    </div>

</body>
</html>