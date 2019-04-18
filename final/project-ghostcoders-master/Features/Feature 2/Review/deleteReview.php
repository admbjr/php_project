<?php
require_once 'DatabasePro.php';
require_once 'Review.php';

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();
	
    $r = new Review();
    $count = $r->deleteReview($id, $dbcon);
  
 if($count){
        header("Location: listreview.php");
    } else {
        echo  "problem deleting";
    }


}

?>