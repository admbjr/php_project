<?php
require_once '../../includes/database.php';
require_once '../../includes/Classes/Hotel.php';

if(isset($_POST['update'])){
    $hotel_id = $_POST['hotel_id'];

    $dbcon = Database::getDb();
    $h = new Hotel();
    $hotel = $h->getHotelById($hotel_id, $dbcon);
}

if(isset($_POST['updhot'])){
    $hotel_id= $_POST['hotel_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $area = $_POST['area'];

    $dbcon = Database::getDb();
    $h = new Hotel();
    $count = $h->updateHotel($hotel_id, $name, $description, $address, $area, $dbcon);

    if($count){
        header("Location: hotelsrestaurants.php");
    } else {
        echo  "problem updating";
    }


}



?>


<form action="" method="post">
    <input type="hidden" name="hotel_id" value="<?= $hotel->hotel_id; ?>" />
    Name: <input type="text" name="name" value="<?= $hotel->name; ?>" /><br/>
    Description: <input type="text" name="description" value="<?= $hotel->description; ?>" /><br />
    Address: <input type="text" name="address" value="<?= $hotel->address; ?>"/><br />
    Area: <input type="text" name="area" value="<?= $hotel->area; ?>"/><br />
    <input type="submit" name="updhot" value="Update Hotel">
</form>

<br />
<hr>
<br />

 <li><a href='listhotels.php'>Back to Hotels!</a></li>