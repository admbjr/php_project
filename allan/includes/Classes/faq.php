<?php
class Faq
{
    public function getAllFaq($dbcon){
        $sql = "SELECT * FROM faq";
        $pdo = $dbcon->prepare($sql);
        $pdo->execute();
        $faqData = $pdo->fetchAll(PDO::FETCH_OBJ);
        return $faqData;
    }	
   
	
	public function updateFaq($questions, $answers, $db, $id) {
        $sql = "UPDATE faq 
                    SET questions = :questions, 
					answers = :answers WHERE faq_id= :faq_id";

        $pdo = $db->prepare($sql);
        $pdo->bindParam(':questions', $questions);
        $pdo->bindParam(':answers', $answers);
        $pdo->bindParam(':faq_id', $id);
        $faqData = $pdo->execute();
        return $faqData;
    }


    public function deleteFaq($id, $db){
        $sql = "DELETE FROM faq WHERE faq_id = ?";
        $pdo = $db->prepare($sql);
        $pdo->execute(array($id));
        $faqData = $pdo->execute();
        return $faqData;
    }

    
}
?>