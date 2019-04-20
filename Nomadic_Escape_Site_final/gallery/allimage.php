<?php
require_once '../includes/database.php';
require_once '../includes/Classes/gallery.php';
require_once '../includes/Classes/destination.php';

// Getting  Gallery Data
$dbcon = Database::getDb();
$b = new Gallery();
$imageData =  $b->getAllimage($dbcon);
$des_obj = new Destination();
$desData =  $des_obj->getAllDestination($dbcon);

?>
<div class="container">
    <div class="row mb-4 mt-2">
        <h3>LIST OF IMAGES</h3>
    </div>

    <div class="row">
        <?php
            if(sizeof($imageData) > 0) {
                foreach($imageData as $image){
                    echo '<div class="col-lg-4 mb-2 line-content">
                            <span>'.$image->destination.'</span>
                            <img src="../images/'.$image->image.'" alt="image not found" width="320" height="225">
                            <p>'.$image->caption.'</p>';
                    echo ' <a href="../gallery/updateImage.php?id='.$image->img_id.'"  class="text-dark">EDIT
                            <i class="fa fa-edit ml-2"></i></a>
                            <a onclick="javascript:confirmationDelete($(this));return false;" 
                            href="../gallery/deleteImage.php?id='.$image->img_id.'"
                            class="text-dark ml-4">DELETE
                            <i class="fa fa-trash ml-2"></i></a> 
                            </div>';
                }
            }
            else {
               echo '<div class="alert alert-info d-flex justify-content-center">
                        <strong>Sorry !</strong> No Result Found
                    </div>';
            }
        ?>
    </div>
    <div class="row mb-4 mt-2">
        <h3>LIST OF DESTINATIONS</h3>
    </div>

    <div class="row">
        <?php
            if(sizeof($desData) > 0) {
                foreach($desData as $destination){
                    echo '<div class="col-lg-4 mb-2 line-content">
                            <span>'.$destination->country.'</span>
                            <span>( '.$destination->city.' )</span>
                            <img src="../images/'.$destination->image.'" alt="image not found" width="250" height="225">
                            <p>'.$destination->caption.'</p>';
                    if($_SESSION['role'] == 'Admin') {
                        echo ' <a href="../destinations/updateDestination.php?id='.$destination->des_id.'"  class="text-dark pl-0 nav-link d-inline">EDIT</a>
                                <a href="../destinations/deleteDestination.php?id='.$destination->des_id.'"
                                class="text-danger nav-link d-inline">DELETE</a>';
                        }
             echo ' </ul>
                </div>';
                }
            } 
            else {
               echo '<div class="alert alert-info d-flex justify-content-center">
                        <strong>Sorry !</strong> No Result Found
                    </div>';
            }
        ?>
    </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    function confirmationDelete(anchor) {
       var conf = confirm('Are you sure want to delete?');
       if(conf)
          window.location=anchor.attr("href");
    }
</script>
