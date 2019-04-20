<?php
require_once '../includes/database.php';
require_once '../includes/Classes/News.php';

 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    
    // Delete news Letter
    $dbcon = Database::getDb();
    $pdo = new News();
	$result =$pdo->deleteNews($id, $dbcon);
	
	if($result){
		echo '<script>
        		window.location.href = "../pages/newsletter.php";
    		</script>';
	}
}