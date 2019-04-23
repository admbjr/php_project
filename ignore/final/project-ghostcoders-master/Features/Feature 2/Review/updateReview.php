<?php
require_once 'DatabasePro.php';
require_once 'Review.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $r = new Review();
    $review = $r->getReviewById($id, $dbcon);
    var_dump($review);

}

if(isset($_POST['updrev'])){
    $id= $_POST['rid'];
    $reviewName = $_POST['reviewName'];
    $reviewContent = $_POST['reviewContent'];

    $dbcon = Database::getDb();
    $r = new Review();
    $count = $r->updateReview($id, $reviewName, $reviewContent, $dbcon);

    if($count){
        header("Location: listreview.php");
    } else {
        echo  "problem updating";
    }

}

?>

<form action="" method="post">
    <input type="hidden" name="rid" value="<?= $review->review_id; ?>" />
    Your name: <input type="text" name="reviewName" value="<?= $review->review_name; ?>" /><br/>
    Add review: <input type="text" name="reviewContent" value="<?= $review->review_content; ?>" /><br />
    <input type="submit" name="updrev" value="Update Review">
</form>