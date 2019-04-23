<?php
require_once '../includes/database.php';
require_once '../includes/Classes/gallery.php';

    $img_id = null;
    $dbcon = Database::getDb();
    $pdo = new Gallery();
    
    // Get Gallery Data By ID
    if (!empty($_GET['id'])) {
        $img_id = $_REQUEST['id'];
        $image = $pdo->getImageById($img_id, $dbcon);
    }

    // Submit Form Data And Update Gallery Image
    $desErr = $captionErr = "";
    if(isset($_POST['updateImage'])){
        
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
            move_uploaded_file($tempname,"images/$imagename");

            if($imagename == '') {
                $imagename = $image->image;
            }

           $imageData = $pdo->updateImage($destination, $caption, $imagename, $dbcon, $img_id);

            if($imageData){
                header("Location: ../pages/gallery.php");
            } else {
               echo "problem updating a image in Gallery";
            }

        }
    }

    // Chekc is Field Valid and filled
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
            <h3>UPDATE IMAGES</h3>
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input class="form-control" name="destination" type="text" placeholder="Enter Destination Name" value="<?php echo $image->destination; ?>">
                        <span><?php echo $desErr; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="image" class="d-block">Select Image</label>
                        <input class="form-control w-75 d-inline" name="simg" type="file">
                        <img class="d-inline" src="../images/<?php echo $image->image ?>" alt="not fount" width="60" height="60">
                    </div>

                    <div class="form-group">
                        <label for="destination">Caption</label>
                        <input class="form-control" name="caption" type="text" placeholder="Enter Destination Name" value="<?php echo $image->caption; ?>">
                        <span><?php echo $captionErr; ?></span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="updateImage" class="btn btn-success">Update</button>
                            <a class="btn btn-primary" href="../pages/gallery.php">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
     </div>   
</div>
<?php 
    require_once '../includes/footer-add-link.php';
 ?>
