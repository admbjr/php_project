<?php
require_once '../includes/database.php';
require_once '../includes/Classes/gallery.php';

 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];

    // Delete Gallery Image  
    $dbcon = Database::getDb();
    $b = new Gallery();
	$count =$b->deleteImage($id, $dbcon);
	
	if($count){
		header("location: ../pages/gallery.php");
	}
}