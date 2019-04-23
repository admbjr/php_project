<?php
require_once '../includes/database.php';
require_once '../includes/Classes/blogs.php';

 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];

    // deleting blog
    $dbcon = Database::getDb();
    $b = new Blog();
	$count =$b->deleteblog($id, $dbcon);
	
	if($count){
		header("location: ../pages/blog.php");
	}
}