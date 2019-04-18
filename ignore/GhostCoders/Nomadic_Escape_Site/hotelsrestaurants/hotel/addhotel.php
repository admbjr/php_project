<?php
require_once '../../includes/database.php';
require_once '../../includes/Classes/Hotel.php';
require_once '../../includes/header.php';

    if(isset($_POST['addhot'])){
       $name = $_POST['name'];
       $description = $_POST['description'];
       $address = $_POST['address'];
       $area = $_POST['area'];


       $db = Database::getDb();
       $h = new Hotel();
       $c = $h->addHotel($name, $description, $address, $area, $db);


       if($c){
           echo "Added hotel sucessfully";
       } else {
           echo "problem adding a hotel";
       }

    }
?>


<form action="" method="post">
    Name: <input type="text" name="name" /><br/>
    Description: <input type="text" name="description" /><br />
    Address: <input type="text" name="address" /><br />
    Area: <input type="text" name="area" /><br />
    <input type="submit" name="addhot" value="Add Hotel">
</form>

<br />
<hr>
<br />

 <li><a href='hotelsrestaurants.php'>Back to Hotels & Restaurants!</a></li>