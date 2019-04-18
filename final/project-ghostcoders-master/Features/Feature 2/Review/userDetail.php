<?php
require_once 'DatabasePro.php';
require_once 'Users.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$dbcon = Database::getDb();
	
	$u = new Users();
	$users = $r->getUserById($id,$dbcon);
	

}

echo "User: " . $users->first_name ."<br/>";


?>


