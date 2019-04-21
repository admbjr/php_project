<?php
require_once '../includes/database.php';
require_once '../includes/Classes/Faq.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';



$dbcon = Database::getDb();
$f = new Faq();
$myfaq =  $f->getAllFaq($dbcon);


?>

<div id="faqs">
    <div><h3><i>General Questions</i></h3></div>
<?php

    foreach($myfaq as $faq){
        echo '<div id="questions">
                <h4>'.$faq->questions.'</h4>
                <span>'.$faq->answers.'</span>
                </div>';

        if($_SESSION['role'] == 'Admin') {
            echo '  <a href="../faqs/updatefaq.php?id='.$faq->faq_id.'"  class="text-dark pl-0 nav-link d-inline">EDIT</a>
                    <a href="../faqs/deletefaq.php?id='.$faq->faq_id.'"
                    class="text-danger nav-link d-inline">DELETE</a>';
            }
        }
        
?>
</div>

        </div>
       
    </div>

</div>


