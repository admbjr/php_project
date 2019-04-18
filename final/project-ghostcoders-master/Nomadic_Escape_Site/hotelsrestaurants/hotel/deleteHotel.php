<?php
require_once './includes/Database.php';
require_once './includes/Classes/Hotel.php';

if(isset($_POST['delete'])){
    $hotel_id= $_POST['hotel_id'];
    $dbcon = Database::getDb();
    $h = new Hotel();
    $count = $h->deleteHotel($hotel_id, $dbcon);

    if($count){
        header("Location: hotelsrestaurants.php");
    }
}