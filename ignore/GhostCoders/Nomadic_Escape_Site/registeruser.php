<?php
require_once '../includes/database.php';
require_once '../includes/Classes/users.php';

$passwordErr = $confirmPasswordErr = $firstNameErr = $lastNameErr = $emailErr = $email = "";

    if(isset($_POST['addUser'])){
        $db = Database::getDb();

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        }

        if (empty($_POST["confirm_password"])) {
            $confirmPasswordErr = "Confirm Password is required";
        } else if($_POST['password'] != $_POST['confirm_password']) {
            // echo '';
            $passwordErr = '<div class="alert alert-danger mt-2">
                        <strong>Error!</strong> Password Does Not Match
                    </div>';
        } else {
            $password = md5($_POST['password']);
        }

        if (empty($_POST["first_name"])) {
            $firstNameErr = "First Name is required";
        } else {
            $first_name = $_POST['first_name'];
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = $_POST['email'];
            $getuser = $db->prepare("SELECT * FROM users WHERE email='$email'");
            $getuser->execute();
        }

        if (empty($_POST["last_name"])) {
            $lastNameErr = "Last Name is required";
        } else {
            $last_name = $_POST['last_name'];
        }


        if(isValid($passwordErr, $emailErr, $confirmPasswordErr, $firstNameErr, $lastNameErr)) {
            if($email != '' && $getuser->rowCount() == 0) {
                $role = 'User';

                $sign_up_date = new DateTime();
                $sign_up_date = $sign_up_date->format('Y-m-d');

                $profile_picture = $_FILES['profile_picture']['name'];
                $tempname = $_FILES['profile_picture']['tmp_name'];
                move_uploaded_file($tempname,"images/$profile_picture");

                $db = Database::getDb();
                $pdo = new Users();
                $userData = $pdo->addUser($first_name, $last_name, $role, $email, $password, $sign_up_date, $profile_picture, $db);
                if($userData) {
                    echo '<div class="alert alert-success">
                        <strong>Success!</strong>User Added SuccessFully
                      </div>';
                } else {
                    echo "Problem in adding a user";
                }
            } else {
                echo '<div class="alert alert-danger">
                        <strong>Error!</strong> Email Already exists
                      </div>';

            }    
       }

    }       

    /*
     * Check is all field is field or not
     */ 
    function isValid($passwordErr, $emailErr, $confirmPasswordErr, $firstNameErr, $lastNameErr) {
        if($passwordErr == '' && $emailErr == '' && $confirmPasswordErr == '' && $firstNameErr == '' && $lastNameErr == '') {
            return true;
        }
        return false;
    }   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>USER PANEL</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <h3>Sign Up Here</h3>
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input class="form-control" name="first_name" type="text" placeholder="Enter First Name">
                        <span class="show-error"><?php echo $firstNameErr; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input class="form-control" name="last_name" type="text" placeholder="Enter Last Name">
                        <span class="show-error"><?php echo $lastNameErr; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Enter Email Address"> 
                        <span class="show-error"><?php echo $emailErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" name="password" type="password" placeholder="Enter password"> 
                        <span class="show-error"><?php echo $passwordErr; ?></span>

                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input class="form-control" name="confirm_password" type="password" placeholder="Confirm Password"> 
                        <span class="show-error"><?php echo $confirmPasswordErr; ?></span>

                    </div>

                    <div class="form-group">
                        <label for="profile_picture">Profile Picture</label>
                        <input class="form-control" name="profile_picture" type="file" required>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="addUser" class="btn btn-success">Create</button>
                            <a class="btn btn-primary ml-4" href="login.php">Already Have an Account ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>   
</body>
</html>
