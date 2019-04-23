<?php
require_once './model/Database.php';
require_once './model/hotel.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $h = new Hotel();
    $hotel = $h->getHotelById($id, $dbcon);

}

echo  "Name : " . $hotel->name . "<br />";
echo  "Description : " . $hotel->description . "<br />";
echo  "Address : " . $hotel->address . "<br />";