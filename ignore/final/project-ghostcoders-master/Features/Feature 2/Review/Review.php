<?php

class Review
{
	
	 public function getReviewById($id, $db){
        $sql = "SELECT * FROM reviews WHERE review_id = :id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);

        $pst->execute();

        $review =  $pst->fetch(PDO::FETCH_OBJ);

        return $review;

    }

    public function getAllReviews($dbcon){


        $sql = "SELECT * FROM reviews";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $reviews = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $reviews;
    }
	
	
	    public function getImages($dbcon){


        $sql = "SELECT * FROM gallery";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $galleries = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $galleries;
    }

    public function addReview( $review_content, $db)
    {
        $sql = "INSERT INTO reviews (review_content) 
              VALUES (:review_content) ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':review_content', $review_content);
        $count = $pst->execute();
        return $count;
    }
	
	    public function deleteReview($id, $db){
        $sql = "DELETE FROM reviews WHERE review_id = :id";
        $pst = $db->prepare($sql);
		
        $pst->bindParam(':id', $id);
		
        $count = $pst->execute();
        return $count;

		}
		
		public function updateReview($id, $reviewName, $reviewContent, $db){
        $sql = "UPDATE reviews
                SET 
                review_content = :reviewContent
                WHERE review_id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->bindParam(':reviewContent', $reviewContent);

        $count = $pst->execute();
        return $count;


    }
}


?>