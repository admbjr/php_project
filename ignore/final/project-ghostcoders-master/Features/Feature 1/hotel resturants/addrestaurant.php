<?php
require_once 'Database.php';
require_once 'Restaurant.php';

    if(isset($_POST['addres'])){
       $name = $_POST['name'];
       $description = $_POST['description'];
       //$area = $_POST['area'];
       $address = $_POST['address'];


       $db = Database::getDb();
       $r = new Restaurant();
       $add = $r->addRestaurant($name, $description, $address, $db);


       if($add){
           echo "Added Restaurant Sucessfully";
       } else {
           echo "Problem adding a Restaurant";
       }

    }
?>


<form action="" method="post">
    Name: <input type="text" name="name" /><br/>
    Description: <input type="text" name="description" /><br />
    Area: <input type="text" name="area" /><br />
    Address: <input type="text" name="address" /><br />
    <input type="submit" name="addres" value="Add Restaurant">
</form>