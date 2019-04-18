<?php
require_once '../includes/database.php';
require_once '../includes/Classes/destination.php';

$countryErr = $cityErr = $captionErr = $country = $city = $caption = "";

    // On submitting form below function will execute.
    if(isset($_POST['addDestination'])){

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

        $des_image = $_FILES['des_img']['name'];
        $tempImagename = $_FILES['des_img']['tmp_name'];
        move_uploaded_file($tempImagename,"../images/$des_image");

        if(isValid($country, $city, $caption)) {
            $db = Database::getDb();
            $des_obj = new Destination();
            $des = $des_obj->addDestination($country, $city, $caption, $des_image, $db);
            if($des){
                header("Location: ../pages/destinations.php");
            } else {
               echo "problem adding a Destination";
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
            <h3>ADD DESTINATION</h3>
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input class="form-control" name="country" type="text" placeholder="Enter Destination Name">
                        <span class="error"><?php echo $countryErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input class="form-control" name="city" type="text" placeholder="Enter Destination Name">
                        <span class="error"><?php echo $cityErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input class="form-control" name="caption" type="text" placeholder="Enter Destination Name" >
                        <span class="error"><?php echo $captionErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="des_img">Select Image</label>
                        <input class="form-control" name="des_img" type="file" required>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="addDestination" class="btn btn-success">Save</button>
                            <a class="btn btn-primary" href="../pages/destinations.php">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</div>     
<?php require '../includes/footer-add-link.php'; ?>
