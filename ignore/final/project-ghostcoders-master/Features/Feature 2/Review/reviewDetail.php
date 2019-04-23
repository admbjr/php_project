<?php
require_once 'DatabasePro.php';
require_once 'Review.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$dbcon = Database::getDb();
	
	$r = new Review();
	$review = $r->getReviewById($id,$dbcon);
	
	//var_dump($review);
}

echo "Your name: " . $review->review_name ."<br/>";
echo "Add review:" . $review->review_content ."<br/>";

?>


