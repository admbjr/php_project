<?php
require_once '../includes/database.php';
require_once '../includes/Classes/destination.php';


    $des_id = null;
    // Get Destination Data By Id
    if(!empty($_GET['id'])) {
        $des_id = $_REQUEST['id'];
        $dbcon = Database::getDb();
        $des_obj = new Destination();
        $desData = $des_obj->getDestinationById($des_id, $dbcon);
    }

    
    $countryErr = $cityErr = $captionErr = $country = $city = $caption = "";

    // On submitting form below function will execute.
    if(isset($_POST['updateDestination'])){
        if (empty($_POST["country"])) {
            $countryErr = "country is required";
        } else {
            $country = test_input($_POST["country"]);
           if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
                $countryErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["city"])) {
            $cityErr = "city is required";
        } else {
            $city = test_input($_POST["city"]);
           if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
                $cityErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["caption"])) {
            $captionErr = "caption is required";
        } else {
            $caption = test_input($_POST["caption"]);
           if (!preg_match("/^[a-zA-Z ]*$/",$caption)) {
                $captionErr = "Only letters and white space allowed";
            }
        }


        if(isValid($country, $city, $caption)) {
            $des_image = $_FILES['des_img']['name'];
            $tempImagename = $_FILES['des_img']['tmp_name'];
            if($desImage == '') {
                $desImage = $desData->image;
            }
            move_uploaded_file($tempImagename,"../images/$des_image");

           $destinationData = $des_obj->updateDestination($country, $city, $caption, $desImage, $dbcon, $des_id);

            if($destinationData){
                header("Location: ../pages/destinations.php");
            } else {
               echo "problem updating a destination";
            }
        }

    }

    /*
     * final validation is all field is correct or not
     */ 
    function isValid($country, $city, $caption) {
        if($country != '' && $city != '' && $caption != '') {
            return true;
        }
        return false;
    }
    
    /*
     * For Matching Data is correct or not
     */ 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

require '../includes/header.php';
require '../includes/nav-add-link.php';

?>
<header class="masthead" style="background-image:url('../assets/img/adventure-beach-blue-386025.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1>Destinations</h1><span class="subheading">The world is yours!</span></div>
            </div>
        </div>
    </div>
</header>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <h3>UPDATE DESTINATIONS</h3>
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input class="form-control" value="<?php echo $desData->country ?>" name="country" type="text" placeholder="Enter Destination Name">
                        <span class="error"><?php echo $countryErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input class="form-control" name="city" value="<?php echo $desData->city ?>" type="text" placeholder="Enter Destination Name">
                        <span class="error"><?php echo $cityErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input class="form-control" name="caption" type="text" value="<?php echo $desData->caption ?>" placeholder="Enter Destination Name">
                        <span class="error"><?php echo $captionErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="image" class="d-block">Select Image</label>
                        <input class="form-control d-inline w-75" name="des_image" type="file">
                        <img src="../images/<?php echo $desData->image ?>" class="d-inline ml-3" alt="not found" width="50" height="50">
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="updateDestination" class="btn btn-success">Update</button>
                            <a class="btn btn-primary" href="../pages/destinations.php">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>   
</div>
<?php require '../includes/footer-add-link.php'; ?>



