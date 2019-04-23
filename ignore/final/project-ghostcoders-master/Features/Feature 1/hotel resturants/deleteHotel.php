<?php
require_once './model/Database.php';
require_once './model/Hotel.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $h = new Hotel();
    $count = $h->Hotel($hotel_id, $dbcon);

    if($count){
        header("Location: listhotel.php");
    }
}