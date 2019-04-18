<?php

class Faq
{
    public function getFaqById($faq_id, $db){
        $sql = "SELECT * FROM faq WHERE faq_id = :faq_id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':faq_id', $faq_id);

        $pst->execute();

        $faq =  $pst->fetch(PDO::FETCH_OBJ);

        return $faq;


    }
    public function getAllFaqs($dbcon){


        $sql = "SELECT * FROM faq";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $faqs = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $faqs;
    }

    public function addFaq($questions, $answers, $db)
    {
        $sql = "INSERT INTO faq (questions, answers) 
              VALUES (:questions, :answers) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':questions', $questions);
        $pst->bindParam(':answers', $answers);

        $count = $pst->execute();

        return $count;
    }

    public function deleteFaq($faq_id, $db){
        $sql = "DELETE FROM faq WHERE faq_id = :faq_id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':faq_id', $faq_id);
        $count = $pst->execute();

        return $count;


    }

    public function updateFaq($faq_id, $questions, $db){
        $sql = "UPDATE faq SET name = :questions, answers = :answers WHERE faq_id = :faq_id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':faq_id', $faq_id);
        $pst->bindParam(':questions', $questions);
        $pst->bindParam(':answers', $answers);

        $count = $pst->execute();
        return $count;


    }
}