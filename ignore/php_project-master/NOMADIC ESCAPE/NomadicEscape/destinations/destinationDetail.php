<?php
require_once 'DatabasePro.php';
require_once 'Destination.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $d = new Destination();
    $desti = $d->getDestinationById($id, $dbcon);


}

echo  "Destination : " . $desti->desti_name ."<br />";
