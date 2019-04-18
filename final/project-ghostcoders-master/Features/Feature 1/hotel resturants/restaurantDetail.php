<?php
require_once 'Database.php';
require_once 'Restaurant.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $h = new Restaurant();
    $restaurant = $h->getRestaurantById($id, $dbcon);

}

echo  "Name : " . $restaurant->name . "<br />";
echo  "Description : " . $restaurant->description . "<br />";
echo  "Address : " . $restaurant->address . "<br />";