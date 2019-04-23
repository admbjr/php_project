<?php
require_once '../includes/database.php';
require_once '../includes/Classes/gallery.php';

// Submitting Form Data and save to database 
    $desErr = $captionErr = "";
    if(isset($_POST['addImage'])){
        
        if(empty($_POST['destination'])) {
            $desErr = "Destination Is Required";
        } else {
            $destination = $_POST['destination'];
        }        

        if(empty($_POST['caption'])) {
            $captionErr = "Caption Is Required";
        } else {
            $caption = $_POST['caption'];
        }        

        if(isFieldValid($desErr, $captionErr)) {
            $imagename = $_FILES['simg']['name'];

            $tempname = $_FILES['simg']['tmp_name'];
            move_uploaded_file($tempname,"../images/$imagename");

            $db = Database::getDb();
            $galley = new Gallery();
            $image = $galley->addImage($destination, $caption, $imagename, $db);

            if($image){
                header("Location: ../pages/gallery.php");
            } else {
               echo "problem adding a Image in Gallery";
            }
        }
    }

    // Check is All Field Are Vaid And Filled
    function isFieldValid($desErr, $captionErr) {
        if($desErr == "" && $captionErr == "") {
            return true;
        }
        return false;
    };

    require_once '../includes/header.php';
    require_once '../includes/nav-add-link.php';

?>
<header class="masthead" style="background-image:url('../assets/img/air-air-travel-aircraft-731217.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1><strong>Gallery</strong><br></h1><span class="subheading">Upload your favorite pictures!<br></span></div>
            </div>
        </div>
    </div>
</header>
<div>
    <div class="container">
        <div class="row justify-content-center">
            <h3>ADD IMAGES</h3>
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input class="form-control" name="destination" type="text" placeholder="Enter Destination Name">
                        <span><?php echo $desErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="image">Select Image</label>
                        <input class="form-control" name="simg" type="file" required>
                    </div>

                    <div class="form-group">
                        <label for="destination">Caption</label>
                        <input class="form-control" name="caption" type="text" placeholder="Enter Caption">
                        <span><?php echo $captionErr; ?></span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="addImage" class="btn btn-success">Save</button>
                            <a class="btn btn-primary" href="../pages/gallery.php">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>   
</div>



<?php require '../includes/footer-add-link.php'; ?>
