<?php
require_once '../includes/database.php';
require_once '../includes/Classes/destination.php';

 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
	
	// Delete Destination
    $dbcon = Database::getDb();
    $des_obj = new Destination();
	$desData =$des_obj->deleteDestination($id, $dbcon);
	
	if($desData){
		header("location: ../pages/destinations.php");
	}
}