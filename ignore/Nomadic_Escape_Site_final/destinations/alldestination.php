<?php
require_once '../includes/database.php';
require_once '../includes/Classes/destination.php';
require_once '../includes/Classes/Reviews.php';

// Get REwies And Destinations And Set Country
$dbcon = Database::getDb();
$des_obj = new Destination();
$user_id = $_SESSION['user_id'];
$desData =  $des_obj->getAllDestinationByUser($dbcon, $user_id);
$tempdesData =  $desData;
$review_obj = new Reviews();

$reviews = $review_obj->getAllReview($dbcon);

$country = null;

// Set Country
if (!empty($_GET['country'])) {
    $country = $_REQUEST['country'];
    $desData = $des_obj->getDestinationByCountry($country, $dbcon);
}

$review_id = null;
if (!empty($_GET['id'])) {
    $review_id = $_REQUEST['id'];
    $reviewData = $review_obj->getReviewById($review_id, $dbcon);
    var_dump($reviewData);
}

if(isset($_POST['submit-review'])) {
   $review = $_POST['review'];
   $des_id = $_POST['des_id'];
   $user_id = $_SESSION['user_id'];
   
   if($review_id != null) {
        $review_obj->updateReview($review_id, $review, $dbcon);
        $reviewData = null;
        header("Location: alldestination.php");
   } else {
       $review_obj->addReview($des_id, $user_id, $review, $dbcon);
   }
   $reviews = $review_obj->getAllReview($dbcon);
}
?>


<div class="container">
    <div class="row mb-4 mt-2">
        <h3>LIST OF DESTINATIONS</h3>
    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="row">
                <?php
                    if(sizeof($desData) > 0) {
                        foreach($desData as $destination){
                            echo '<div class="col-lg-4 mb-2 line-content">
                                    <h2>'.$destination->country.'</h2>
                                    <span>( '.$destination->city.' )</span>
                                    <img src="../images/'.$destination->image.'" alt="image not found" width="250" height="225">
                                    <p>'.$destination->caption.'</p>';
                            if($_SESSION['role'] == 'Admin') {
                                echo ' <a href="../destinations/updateDestination.php?id='.$destination->des_id.'"  class="text-dark pl-0 nav-link d-inline">EDIT</a>
                                        <a href="../destinations/deleteDestination.php?id='.$destination->des_id.'"
                                        class="text-danger nav-link d-inline">DELETE</a>';
                                }
                            echo '<form method="post" class="mt-3 comment-frm">';
                                if($review_id != null && $reviewData->des_id == $destination->des_id) {
                                    echo '<input type="text" name="review" class="review-box" value="'.$reviewData->review.'" required>';
                                } else {
                                    echo'<input type="text" name="review" class="review-box" required>'; 
                                }
                            echo'<input type="hidden" name="des_id" value="'.$destination->des_id.'">
                                 <button class="comment-btn" type="submit" name="submit-review"> <i class="fa fa-paper-plane text-dark"></i> </button>
                                 </form>
                            <ul type="none">';
                        if(sizeof($reviews) > 0) {
                            foreach ($reviews as $review) {
                                if($destination->des_id == $review->des_id) {
                                   echo '<li class="mt-2">
                                            <div class="w-50 d-inline">
                                                <span>'.$review->review.'</span>
                                            </div>';

                                            // Set User Wise Permission
                                            if($review->user_id == $_SESSION['user_id']) {
                                            echo'<div class="w-50 d-inline float-right">
                                                <a href="../pages/destinations.php?id='.$review->review_id.'" class="text-dark ml-4"><i class="fa fa-edit"></i></a>
                                                    <a href="../destinations/deleteReview.php?id='.$review->review_id.'" class="text-dark ml-2"><i class="fa fa-trash"></i></a></div>';
                                            }
                                    echo '</li>';
                                }
                            }
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
        <div class="col-lg-2">
            <div class="des-ref-block">
                <?php 
                    // Filter Destination By Country
                    if(sizeof($tempdesData) > 0) {
                        foreach($tempdesData as $destination){
                            echo '<a href="../pages/destinations.php?country='.$destination->country.'" class="des-ref-list">'.$destination->country.'</a>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>
    // For Page data not submitting again After Refresh
    if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
    }


</script>
