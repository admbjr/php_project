<?php 
require_once 'DatabasePro.php';
require_once 'Destination.php';

    if(isset($_POST['add_desti'])){
       $desti_name = $_POST['desti_name'];

       $db = Database::getDb();
       $d = new Destination();
       $add = $d->addDestination($desti_name, $db);


       if($add){
           echo "Added destination sucessfully";
       } else {
           echo "problem adding a destination";
       }

    }
?>


<form action="" method="post">
    Add destination: <input type="text" name="desti_name" /><br />
    <input type="submit" name="add_desti" value="Add Destination	">
</form>