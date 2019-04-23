<?php
require_once '../includes/database.php';
require_once '../includes/Classes/Hotel.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';

$dbcon = Database::getDb();
$h = new Hotel();
$myhot =  $h->getAllHotels(Database::getDb());

?>

<div class="locations">

<li><h3><i>Hotels</i></h3></li>
 <br />
 <hr>

<div class="places">
    <?php
    
        foreach($myhot as $hotel){
            echo '<div>
                    <h4>'.$hotel->name.'</h4>
                    <span>'.$hotel->description.'</span><br>
                    <span>'.$hotel->address.'</span><br>
                    <span>'.$hotel->area.'</span><br><br>
                    </div>';

            if($_SESSION['role'] == 'Admin') {
                echo '  <a href="../hotelsrestaurants/updatehotel.php?id='.$hotel->hotel_id.'"  class="text-dark pl-0 nav-link d-inline">EDIT</a>
                        <a href="../hotelsrestaurants/deletehotel.php?id='.$hotel->hotel_id.'"
                        class="text-danger nav-link d-inline">DELETE<br></a><hr><br>';
                }
            }
            
    ?>
     
     </div>
     </div>

 <hr>