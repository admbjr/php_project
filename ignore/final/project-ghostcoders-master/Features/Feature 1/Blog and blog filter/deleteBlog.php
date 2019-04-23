<?php
require_once 'Database.php';
require_once 'blogs.php';

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $b = new Blog();
	$count =$b->deleteblog($id, $dbcon);
	
	if($count){
		header("location: listblog.php");
	}
}