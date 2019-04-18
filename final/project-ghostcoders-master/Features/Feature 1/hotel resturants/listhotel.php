<?php
require_once 'Database.php';
require_once 'Hotel.php';

$dbcon = Database::getDb();
$h = new Hotel();
$myhot =  $h->getAllHotels(Database::getDb());



foreach($myhot as $hotel){
    echo "<li><a href='hotelDetail.php?id=$hotel->id'>" .  $hotel->name  . "</a>".
        "<form action='updateHotel.php' method='post'>" .
        "<input type='hidden' value='$hotel->id' name='id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deleteHotel.php' method='post'>" .
        "<input type='hidden' value='$hotel->id' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}
















