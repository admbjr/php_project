<?php
require_once './includes/Database.php';
require_once './includes/Classes/Restaurant.php';
require_once './includes/header.php';


if(isset($_GET['restaurant_id'])){
    $restaurant_id = $_GET['restaurant_id'];
    $dbcon = Database::getDb();

    $r = new Restaurant();
    $restaurant = $r->getRestaurantById($restaurant_id, $dbcon);

}

echo  "Name : " . $restaurant->name . "<br />";
echo  "Description : " . $restaurant->description . "<br />";
echo  "Address : " . $restaurant->address . "<br />";
echo  "Area : " . $restaurant->area . "<br />";

?>

<br />
<hr>
<br />

<li><a href='hotelsrestaurants.php'>Back to Hotels & Restaurants!</a></li>