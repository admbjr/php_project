<?php
require_once '../includes/database.php';
require_once '../includes/Classes/faq.php';



$dbcon = Database::getDb();
$faq_obj = new Faq();
$faqData =  $faq_obj->getAllFaq($dbcon);
$tempdesData =  $faqData;


?>

<div class="container">
    <div class="row mb-4 mt-2">
        <h3>FAQ</h3>
    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="row">
                <?php
                    if(sizeof($faqData) > 0) {
                        foreach($faqData as $faq){
                            echo '<div class="col-lg-4 mb-2 line-content">
                                    <h2>'.$faq->questions.'</h2>
                                    <span>( '.$faq->answers.' )</span>
                                    
                              </div>';
							  
							    if($_SESSION['role'] == 'Admin') {
                                echo ' <a href="../faq/updateFaq.php?id='.$faq->faq_id.'"  class="text-dark pl-0 nav-link d-inline">EDIT</a>
                                        <a href="../faq/deleteFaq.php?id='.$faq->faq_id.'"
                                        class="text-danger nav-link d-inline">DELETE</a>';
                                }
                           
						}
						}
						?>
        </div>
       
    </div>
</div>
</div>


