<?php
require_once 'Database.php';
require_once 'Restaurant.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $h = new Restaurant();
    $restaurant = $h->getRestaurantById($id, $dbcon);

}

if(isset($_POST['updres'])){
    $id= $_POST['rid'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $address = $_POST['address'];

    $dbcon = Database::getDb();
    $h = new Restaurant();
    $count = $h->updateRestaurant($id, $name, $description, $address, $dbcon);

    if($count){
        
        header("Location: listrestaurants.php");
    
    } else {
    
        echo  "problem updating";
    
    }


}



?>


<form action="" method="post">
    <input type="hidden" name="hid" value="<?= $restaurant->id; ?>" />
    Name: <input type="text" name="name" value="<?= $restaurant->name; ?>" /><br/>
    Description: <input type="text" name="description" value="<?= $restaurant->description; ?>" /><br />
    Address: <input type="text" name="address" value="<?= $restaurant->address; ?>"/><br />
    <input type="submit" name="updhot" value="Update Restaurant">
</form>