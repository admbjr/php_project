<?php
require_once 'DatabasePro.php';
require_once 'Destination.php';

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();
	
    $d = new Destination();
    $count = $d->deleteDestination($id, $dbcon);
  
 if($count){
        header("Location: listDestination.php");
    } else {
        echo  "problem deleting destination";
    }


}

?>