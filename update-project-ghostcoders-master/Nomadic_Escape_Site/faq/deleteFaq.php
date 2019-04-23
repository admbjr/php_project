<?php
require_once '../includes/database.php';
require_once '../includes/Classes/faq.php';

 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
	
    $dbcon = Database::getDb();
    $faq_obj = new Faq();
	$faqData =$faq_obj->deleteFaq($id, $dbcon);
	
	if($faqData){
		header("location: ../pages/faqs.php");
	}
}