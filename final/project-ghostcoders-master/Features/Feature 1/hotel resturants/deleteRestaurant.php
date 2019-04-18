<?php
require_once 'Database.php';
require_once 'Restaurant.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $r = new Restaurant();
    $count = $r->Restaurant($restaurant_id, $dbcon);

    if($count){
        header("Location: listrestaurant.php");
    }
}