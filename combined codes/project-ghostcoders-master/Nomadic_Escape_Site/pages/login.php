<?php
require_once '../includes/database.php';
require_once '../includes/Classes/users.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $db = Database::getDb();
    $getuser = $db->prepare("SELECT * FROM users WHERE email='$email' AND password='$password'");
    $getuser->execute();
    $userDetail = $getuser->fetch();

    if($getuser->rowCount() == 1) {
        session_start();
        $_SESSION['role'] = $userDetail['role'];
        $_SESSION['user_id'] = $userDetail['user_id'];
        $_SESSION['name'] = $userDetail['first_name'].' '.$userDetail['last_name'] ;

        header("Location: index.php");

    } else {
        echo '<div class="alert alert-danger">
                <strong>Alert!</strong> 
                    Please Enter correct Email & Password.
              </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>USER PANEL</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <h3>Login Here</h3>
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="" method="post">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Enter Email Address" required> 
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" name="password" type="password" placeholder="Enter password" required> 
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="login" class="btn btn-success">Login</button>
                            <a class="btn btn-primary ml-3" href="registeruser.php">Sign Up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>   
</body>
</html>