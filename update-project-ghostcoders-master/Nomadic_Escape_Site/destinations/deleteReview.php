<?php
require_once '../includes/database.php';
require_once '../includes/Classes/Reviews.php';
 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
	
	// Delete Review
    $dbcon = Database::getDb();
    $pdo = new Reviews();
	$result =$pdo->deleteReview($id, $dbcon);
	
	if($result){
		header("location: ../pages/destinations.php");
	}
}