<?php
require_once '../includes/database.php';
require_once '../includes/Classes/users.php';
/*
 * Getting all users those are registerd and admin cam only change thier role to admin
 */
$dbcon = Database::getDb();
$pdo = new Users();
$userList =  $pdo->getUserByRole($dbcon);

$user_id = null;

if (!empty($_GET['id'])) {
    $user_id = $_REQUEST['id'];
    $roleData = $pdo->UpdateRole($user_id, 'Admin', $dbcon);
    header("Location: userList.php");
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
        <div class="row mb-4 mt-2">
            <h3>LIST OF USERS</h3>
            <div class="col-lg-9 float-right">
                <a href="../pages/newsletter.php" class="btn btn-success float-right">View News</a>
            </div>
        </div>

        <div class="row">
                    <?php
                        if(sizeof($userList) > 0) {
                            foreach($userList as $user){
                                echo '<div class="col-lg-12 mb-2">
                                        <table class="table">
                                            <tr>
                                                <th class="w-25">Name</th>
                                                <th class="w-50">Email</th>
                                                <th class="w-25">Action</th>
                                            </tr>
                                            <tr>
                                                <td>'.$user->first_name.' '.$user->last_name.'</td>
                                                <td>'.$user->email.'</td>
                                                <td><a href="../news_letter/userList.php?id='.$user->user_id.'" class="text-dark btn btn-info">Make Admin</a></td> 
                                            </tr>
                                        </table>
                                     </div>';

                                    echo'';
                            }
                        } 
                        else {
                           echo '<div class="alert alert-info d-flex justify-content-center">
                                    <strong>Sorry !</strong> No Result Found
                                </div>';
                        }
                    ?>
        </div>
    </div>
</body>
</html>