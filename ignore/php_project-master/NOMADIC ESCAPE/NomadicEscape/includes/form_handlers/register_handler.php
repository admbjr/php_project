<?php

// Declaring variables to prevent errors

$fname = ""; // first name
$lname = ""; // last name
$em = ""; // email
$em2 = ""; // email 2
$password = ""; // passwprd
$password2 = ""; // password2
$date = ""; // sign up date
$error_array = array(); // holds error messages

if(isset($_POST['register_button'])) {

    // Registration form values

    // First name
    $fname = strip_tags($_POST['reg_fname']); // remove html tags
    $fname = str_replace(' ', '', $fname); // remove spaces
    $_SESSION['reg_fname'] = $fname; // store first name into session variable

    // last name
    $lname = strip_tags($_POST['reg_lname']); // remove html tags
    $lname = str_replace(' ', '', $lname); // remove spaces
    $_SESSION['reg_lname'] = $lname; // store last name into session variable
    
    // email
    $em = strip_tags($_POST['reg_email']); // remove html tags
    $em = str_replace(' ', '', $em); // remove spaces
    $_SESSION['reg_email'] = $em; // store email into session variable

    // email 2
    $em2 = strip_tags($_POST['reg_email2']); // remove html tags
    $em2 = str_replace(' ', '', $em2); // remove spaces
    $_SESSION['reg_email2'] = $em2; // store email2 into session variable
    
    // password
    $password = strip_tags($_POST['reg_password']); // remove html tags
    $password2 = strip_tags($_POST['reg_password2']); // remove html tags

    $date = date("Y-m-d"); // current date


    if($em == $em2) {
        // check if email is in valid format
        if(filter_var($em, FILTER_VALIDATE_EMAIL)) {
            
            $en = filter_var($em, FILTER_VALIDATE_EMAIL);
            
            // check if email already exists
            $e_check = mysqli_query($con, "SELECT email FROM users1 WHERE email='$em'");
            
            // count the numbers of rows returned
            $num_rows = mysqli_num_rows($e_check);

            if($num_rows > 0) {
                array_push($error_array, "Email already in use!<br>");
            }
        }
        else {
            array_push($error_array, "Invalid email format!<br>");
        }
    }
    else {
        array_push($error_array, "Emails don't match!<br>");
    }

    if(strlen($fname) > 25 || strlen($fname) < 2) {
        array_push($error_array, "Your first name must be between 2 and 25 characters!<br>");
    }

    if(strlen($lname) > 25 || strlen($lname) < 2) {
        array_push($error_array, "Your last name must be between 2 and 25 characters!<br>");
    }

    if($password != $password2) {
        array_push($error_array, "Your passwords don't match!<br>");
    }
    else {
        if(preg_match('/[^A-Za-z0-9]/', $password)) {
            array_push($error_array, "Your password can only contain letters and numbers!<br>");
        }

        if(strlen($password > 35 || strlen($password) < 5)) {
            array_push($error_array, "Your password must be between 5 and 35 characters!<br>");
        }
    }

    if(empty($error_array)) {
        $password = md5($password); // encrypts password before sending to database

        // generate username by concatenating first and last name
        $username = strtolower($fname . "_" . $lname);
        $check_username_query = mysqli_query($con, "SELECT email FROM users1 WHERE username='$username'");

        $i = 0;
        // if username exist add number to username
        while(mysqli_num_rows($check_username_query) !=0) {
            $i++; //add 1 to 1
            $username = $username . "_" . $i;
            $check_username_query = mysqli_query($con, "SELECT email FROM users1 WHERE username='$username'");
        }

        // Profile picture assign
        $rand = rand(1,6); // Picks random number between 1 and 6 

        if($rand == 1)
            $profile_pic = "assets/images/profile_pics/defaults/ninja.png";
        else if($rand == 2)
            $profile_pic = "assets/images/profile_pics/defaults/happy-2.png";
        else if($rand == 3)
            $profile_pic = "assets/images/profile_pics/defaults/happy-1.png";
        else if($rand == 4)
            $profile_pic = "assets/images/profile_pics/defaults/happy-4.png";
        else if($rand == 5)
            $profile_pic = "assets/images/profile_pics/defaults/wink.png";
        else if($rand == 6)
            $profile_pic = "assets/images/profile_pics/defaults/happy.png";
        
            $query = mysqli_query($con, "INSERT INTO users1 VALUES(NULL, '$fname', '$lname', '$username', '$em', '$password', '$date', '$profile_pic', '0', '0', 'no', ',')");
             echo "Error: " . mysqli_error($con);

            array_push($error_array, "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>");

            // clear session variables
            $_SESSION['reg_fname'] = "";
            $_SESSION['reg_lname'] = "";
            $_SESSION['reg_email'] = "";
            $_SESSION['reg_email2'] = "";
    }
}


?>