<?php
require_once '../includes/database.php';
require_once '../includes/Classes/Hotel.php';

$dbcon = Database::getDb();
$h = new Hotel();
$myhot =  $h->getAllHotels(Database::getDb());

?>




 <li><a href='addhotel.php'>Add Hotel!</a></li>
 <br />
 <hr>



 <?php

foreach($myhot as $hotel){
    echo "<li><a href='hotelDetail.php?hotel_id=$hotel->hotel_id'>" .  $hotel->name  . "</a>".
        "<form action='updateHotel.php' method='post'>" .
        "<input type='hidden' value='$hotel->hotel_id' name='hotel_id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deleteHotel.php' method='post'>" .
        "<input type='hidden' value='$hotel->hotel_id' name='hotel_id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}
















