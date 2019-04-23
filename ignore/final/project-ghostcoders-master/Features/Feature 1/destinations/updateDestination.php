<?php
require_once 'DatabasePro.php';
require_once 'Destination.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $d = new Destination();
    $desti = $d->getDestinationById($id, $dbcon);
    var_dump($desti);

}

if(isset($_POST['upddesti'])){
    $id= $_POST['rid'];
    $desti_name = $_POST['desti_name'];

    $dbcon = Database::getDb();
    $d = new Destination();
    $count = $d->updateDestination($id, $desti_name,$dbcon);

    if($count){
        header("Location: listDestination.php");
    } else {
        echo  "problem updating destination";
    }

}

?>

<form action="" method="post">
    <input type="hidden" name="rid" value="<?= $desti->desti_id; ?>" />
    Destination: <input type="text" name="desti_name" value="<?= $desti->desti_name; ?>" /><br/>
    <input type="submit" name="upddesti" value="Update Destination">
</form>