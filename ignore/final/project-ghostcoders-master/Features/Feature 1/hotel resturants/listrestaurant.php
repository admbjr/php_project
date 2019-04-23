<?php
require_once 'Database.php';
require_once 'Restaurant.php';

$dbcon = Database::getDb();
$r = new Restaurant();
$myres =  $r->getAllRestaurants(Database::getDb());



foreach($myres as $restaurant){
    echo "<li><a href='restaurantDetail.php?id=$restaurant->restaurant_id'>" .  $restaurant->name  . "</a>".
        "<form action='updaterestaurant.php' method='post'>" .
        "<input type='hidden' value='$restaurant->restaurant_id' name='id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deleterestaurant.php' method='post'>" .
        "<input type='hidden' value='$restaurant->restaurant_id' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}
















