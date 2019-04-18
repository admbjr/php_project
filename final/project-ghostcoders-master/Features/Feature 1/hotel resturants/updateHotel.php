<?php
require_once 'Database.php';
require_once 'Hotel.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $h = new Hotel();
    $hotel = $h->getHotelById($id, $dbcon);
    var_dump($hotel);

}

if(isset($_POST['updhot'])){
    $id= $_POST['hid'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $address = $_POST['address'];

    $dbcon = Database::getDb();
    $h = new Hotel();
    $count = $h->updateHotel($id, $name, $description, $address, $dbcon);

    if($count){
        
        header("Location: listhotels.php");
    
    } else {
    
        echo  "problem updating";
    
    }


}



?>


<form action="" method="post">
    <input type="hidden" name="hid" value="<?= $hotel->id; ?>" />
    Name: <input type="text" name="name" value="<?= $hotel->name; ?>" /><br/>
    Description: <input type="text" name="description" value="<?= $hotel->description; ?>" /><br />
    Address: <input type="text" name="address" value="<?= $hotel->address; ?>"/><br />
    <input type="submit" name="updhot" value="Update Hotel">
</form>