<?php
require_once './includes/Database.php';
require_once './includes/Classes/Restaurant.php';

if(isset($_POST['update'])){
    $restaurant_id = $_POST['restaurant_id'];

    $dbcon = Database::getDb();
    $r = new Restaurant();
    $restaurant = $r->getRestaurantById($restaurant_id, $dbcon);

}

if(isset($_POST['updres'])){
    $restaurant_id= $_POST['restaurant_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $area = $_POST['area'];

    $dbcon = Database::getDb();
    $r = new Restaurant();
    $count = $r->updateRestaurant($restaurant_id, $name, $description, $address, $area, $dbcon);

    if($count){
        header("Location: hotelsrestaurants.php");
    } else {
        echo  "problem updating";
    }


}



?>


<form action="" method="post">
    <input type="hidden" name="restaurant_id" value="<?= $restaurant->restaurant_id; ?>" />
    Name: <input type="text" name="name" value="<?= $restaurant->name; ?>" /><br/>
    Description: <input type="text" name="description" value="<?= $restaurant->description; ?>" /><br />
    Address: <input type="text" name="address" value="<?= $restaurant->address; ?>"/><br />
    Area: <input type="text" name="area" value="<?= $restaurant->area; ?>"/><br />
    <input type="submit" name="updres" value="Update Restaurant">
</form>