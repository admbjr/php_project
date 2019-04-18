<?php
require_once "./includes/database.php";
require_once './includes/Classes/Restaurant.php';

$db = Database::getDb();
$r = new Restaurant();
$areas = $a->getAreas($db);
$restaurants;
if(isset($_POST['showres'])){
    $area = $_POST['area'];
    $restaurants = $r->getRestaurantsInArea($db, $area);
}

?>
<h1>Area List </h1>
<form action="listareas.php" method="post">
    <select name="area">
        <?php foreach ($areas as $a){
            echo "<option value='$a->area'>" . $a->area . "</option>";
        }?>
    </select>
    <input type="submit" name="showres" value="Get Restaurants in Area" />
</form>

<div>
    <?php
    if(isset($restaurants)){
        foreach ($restaurants as $r) {
            echo "<li>" . $r->name . "</li>";
        }
    }?>
</div>
