<?php
require_once '../../includes/Database.php';
require_once '../../includes/Classes/Restaurant.php';
require_once '../../includes/header.php';

    if(isset($_POST['addres'])){
       $name = $_POST['name'];
       $description = $_POST['description'];
       $address = $_POST['address'];
       $area = $_POST['area'];


       $db = Database::getDb();
       $r = new Restaurant();
       $c = $r->addRestaurant($name, $description, $address, $area, $db);


       if($c){
           echo "Added restaurant sucessfully";
       } else {
           echo "problem adding a restaurant";
       }

    }
?>


<form action="" method="post">
    Name: <input type="text" name="name" /><br/>
    Description: <input type="text" name="description" /><br />
    Address: <input type="text" name="address" /><br />
    Area: <input type="text" name="area" /><br />
    <input type="submit" name="addres" value="Add Restaurant">
</form>

<br />
<hr>
<br />

 <li><a href='hotelsrestaurants.php'>Back to Restaurants!</a></li>


 <!-- <li><a href='<?php header("Location: hotelsrestaurants.php"); ?>'>Back to Restaurants!</a></li>

