<?php
require_once './includes/Database.php';
require_once './includes/Classes/Restaurant.php';

if(isset($_POST['delete'])){
    $restaurant_id= $_POST['restaurant_id'];
    $dbcon = Database::getDb();
    $r = new Restaurant();
    $count = $r->deleteRestaurant($restaurant_id, $dbcon);

    if($count){
        header("Location: hotelsrestaurants.php");
    }
}