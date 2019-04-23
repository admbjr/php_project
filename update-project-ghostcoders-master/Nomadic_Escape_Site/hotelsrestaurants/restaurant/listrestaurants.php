<?php
// require_once './includes/Database.php';
require_once './includes/Classes/Restaurant.php';

$dbcon = Database::getDb();
$r = new Restaurant();
$myres =  $r->getAllRestaurants(Database::getDb());


?>




 <li><a href='addrestaurant.php'>Add Restaurants!</a></li>
 <br />
 <hr>



 <?php
foreach($myres as $restaurant){
    echo "<li><a href='restaurantDetail.php?restaurant_id=$restaurant->restaurant_id'>" .  $restaurant->name  . "</a>".
        "<form action='updateRestaurant.php' method='post'>" .
        "<input type='hidden' value='$restaurant->restaurant_id' name='restaurant_id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deleteRestaurant.php' method='post'>" .
        "<input type='hidden' value='$restaurant->restaurant_id' name='restaurant_id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}
















