<?php
require_once '../includes/Database.php';
require_once '../includes/Classes/Restaurant.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';

if(isset($_POST['update'])){
    $restaurant_id = $_POST['restaurant_id'];

    $dbcon = Database::getDb();
    $r = new Restaurant();
    $restaurant = $r->getRestaurantById($restaurant_id, $dbcon);

}

if(isset($_POST['updres'])){
    $restaurant_id= $_POST['restaurant_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $address = $_POST['address'];
    $area = $_POST['area'];

    $dbcon = Database::getDb();
    $r = new Restaurant();
    $count = $r->updateRestaurant($restaurant_id, $name, $description, $address, $area, $dbcon);

    if($count){
        header("Location: ../pages/hotelsrestaurants.php");
    } else {
        echo  "problem updating";
    }


}



?>


    <header class="masthead" style="background-image:url('../assets/img/beach-blur-close-up-348523.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1><strong>Hotels &amp; Restaurants</strong><br></h1><span class="subheading">Top picks of where to sleep and eat!<br></span></div>
                </div>
            </div>
        </div>
    </header>

 <div class="add">
<form action="" method="post">
    Name <input type="text" name="name"  placeholder="Enter restaurant name" /><br/>
    Description <input type="text" name="description"   placeholder="Enter restaurant description" /><br />
    Address <input type="text" name="address"  placeholder="Enter restaurant address" /><br />
    Area <input type="text" name="area"  placeholder="Enter restaurant area" /><br />
    <input class="btn btn-success" type="submit" name="updres" value="Update Restaurant">
    <a class="btn btn-primary" href="../pages/hotelsrestaurants.php">Back</a>
</form>
</div>
<?php 

require_once '../includes/footer.php';
?>