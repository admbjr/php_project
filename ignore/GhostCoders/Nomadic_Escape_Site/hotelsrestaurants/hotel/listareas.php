<?php
require_once "./includes/database.php";
require_once './includes/Classes/Hotel.php';

$db = Database::getDb();
$h = new Hotel();
$areas = $a->getAreas($db);
$hotels;
if(isset($_POST['showhot'])){
    $area = $_POST['area'];
    $hotels = $h->getHotelsInArea($db, $area);
}

?>
<h1>Area List </h1>
<form action="listareas.php" method="post">
    <select name="area">
        <?php foreach ($areas as $a){
            echo "<option value='$a->area'>" . $a->area . "</option>";
        }?>
    </select>
    <input type="submit" name="showhot" value="Get Hotels in Area" />
</form>

<div>
    <?php
    if(isset($hotels)){
        foreach ($hotels as $h) {
            echo "<li>" . $h->name . "</li>";
        }
    }?>
</div>
