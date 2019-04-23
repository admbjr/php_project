<?php
require_once 'Database.php';
require_once 'Hotel.php';

    if(isset($_POST['addhot'])){
       $name = $_POST['name'];
       $description = $_POST['description'];
       //$area = $_POST['area'];
       $address = $_POST['address'];


       $db = Database::getDb();
       $h = new Hotel();
       $add = $h->addHotel($name, $description, $address, $db);


       if($c){
           echo "Added Hotel Sucessfully";
       } else {
           echo "Problem adding a Hotel";
       }

    }
?>


<form action="" method="post">
    Name: <input type="text" name="name" /><br/>
    Description: <input type="text" name="description" /><br />
    Area: <input type="text" name="area" /><br />
    Address: <input type="text" name="address" /><br />
    <input type="submit" name="addhot" value="Add Hotel">
</form>