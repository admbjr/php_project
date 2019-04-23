<?php
require_once '../includes/database.php';
require_once '../includes/Classes/faq.php';

if(isset($_POST['delete'])){
    $faq_id= $_POST['faq_id'];
    $dbcon = Database::getDb();
    $f = new Faq();
    $faqData = $f->deleteFaq($faq_id, $dbcon);
	
	if($faqData){
		header('location: ../pages/faqs.php');
	}
}