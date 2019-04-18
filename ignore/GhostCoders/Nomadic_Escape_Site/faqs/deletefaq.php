<?php
require_once '../includes/database.php';
require_once '../includes/Classes/Faq.php';

if(isset($_POST['delete'])){
    $faq_id= $_POST['faq_id'];
    $dbcon = Database::getDb();
    $f = new Faq();
    $count = $f->deleteFaq($faq_id, $dbcon);

    if($count){
        header("Location: faqs.php");
    }
}