<?php
class Reviews
{
    public function getAllReview($dbcon){

        $sql = "SELECT * FROM reviews ORDER BY review_id DESC";
        $pdo = $dbcon->prepare($sql);
        $pdo->execute();
        $reviews = $pdo->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }	

    public function getReviewById($id, $dbcon){
        $sql = "SELECT * FROM reviews WHERE review_id= :review_id";
        $pdo = $dbcon->prepare($sql);
        $pdo->bindParam(':review_id', $id);
        $pdo->execute();
        $reviews = $pdo->fetch(PDO::FETCH_OBJ);
        return $reviews;
    }   

	public function addReview($des_id, $user_id, $review, $db)
    {
        $sql = "INSERT INTO reviews (des_id, user_id, review) 
              VALUES (:des_id, :user_id, :review) ";
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':des_id', $des_id);
        $pdo->bindParam(':user_id', $user_id);
        $pdo->bindParam(':review', $review);

        $count = $pdo->execute();
        return $count;
    }
	
	public function updateReview($id, $review, $db)
	  {
        $q = $db->prepare('UPDATE reviews
                SET review = ?
                WHERE review_id = ?');
        $count = $q->execute(array($review, $id));
        return $count;
    }
	 public function deleteReview($id, $db){
        $sql = "DELETE FROM reviews WHERE review_id = ?";
        $pdo = $db->prepare($sql);
        $pdo->execute(array($id));
        $count = $pdo->execute();
        return $count;
    }
}
?>