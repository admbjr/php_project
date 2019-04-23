<?php
require_once 'DatabasePro.php';
require_once 'Review.php';

    if(isset($_POST['addrev'])){
       $reviewName = $_POST['reviewName'];
       $reviewContent = $_POST['reviewContent'];

       $db = Database::getDb();
       $r = new Review();
       $add = $r->addReview($reviewName, $reviewContent, $db);


       if($add){
           echo "Added review sucessfully";
       } else {
           echo "problem adding a review";
       }

    }
?>


<form action="" method="post">
    Your name: <input type="text" name="reviewName" /><br/>
    Add review: <input type="text" name="reviewContent" /><br />
    <input type="submit" name="addrev" value="Add Review	">
</form>