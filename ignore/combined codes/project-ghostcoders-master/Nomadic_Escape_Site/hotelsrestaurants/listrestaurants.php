<?php
// require_once '../../includes/Database.php';
require_once '../includes/Classes/Restaurant.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';

$dbcon = Database::getDb();
$r = new Restaurant();
$myres =  $r->getAllRestaurants(Database::getDb());


?>

<div class="locations">


<li><h3><i>Restaurants</i></h3></li>
<br />
<hr>


<div class="places">
<?php
   
   foreach($myres as $restaurant){
       echo '<div>
               <h4>'.$restaurant->name.'</h4>
               <span>'.$restaurant->description.'</span><br>
               <span>'.$restaurant->address.'</span><br>
               <span>'.$restaurant->area.'</span><br><br>
               </div>';
   
       if($_SESSION['role'] == 'Admin') {
           echo '  <a href="../hotelsrestaurants/updaterestaurant.php?id='.$restaurant->restaurant_id.'"  class="text-dark pl-0 nav-link d-inline">EDIT</a>
                   <a href="../hotelsrestaurants/deleterestaurant.php?id='.$restaurant->restaurant_id.'"
                   class="text-danger nav-link d-inline">DELETE</a><hr><br>';
           }
       }
       
   ?>
   </div>


</div>