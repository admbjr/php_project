<?php
require_once '../../includes/database.php';
require_once '../../includes/Classes/Hotel.php';
require_once '../../includes/header.php';


if(isset($_GET['hotel_id'])){
    $hotel_id = $_GET['hotel_id'];
    $dbcon = Database::getDb();

    $h = new Hotel();
    $hotel = $h->getHotelById($hotel_id, $dbcon);

}

echo  "Name : " . $hotel->name . "<br />";
echo  "Description : " . $hotel->description . "<br />";
echo  "Address : " . $hotel->address . "<br />";
echo  "Area : " . $hotel->area . "<br />";

?>

<br />
<hr>
<br />

 <li><a href='hotelsrestaurants.php'>Back to Hotels & Restaurants!</a></li>