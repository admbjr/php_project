<?php
require_once './includes/Database.php';
require_once './includes/Classes/Hotel.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';

if(isset($_POST['delete'])){
    $hotel_id= $_POST['hotel_id'];
    $dbcon = Database::getDb();
    $h = new Hotel();
    $count = $h->deleteHotel($hotel_id, $dbcon);

    if($count){
        header("Location: ../pages/hotelsrestaurants.php");
    }
}