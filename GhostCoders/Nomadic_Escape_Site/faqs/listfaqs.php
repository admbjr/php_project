<?php
require_once './includes/database.php';
require_once './includes/Classes/Faq.php';

$dbcon = Database::getDb();
$f = new Faq();
$myfaq =  $f->getAllFaqs(Database::getDb());

?>

<div id="faqs">
 <li><a href='faqs/addfaq.php'>Add Faq!</a></li>
 <br />
 <hr>



 <?php

foreach($myfaq as $faq){
    echo "<li><a href='faqs/faqDetail.php?faq_id=$faq->faq_id'>" .  $faq->questions  . "</a>".
        "<form action='faqs/updatefaq.php' method='post'>" .
        "<input type='hidden' value='$faq->faq_id' name='faq_id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='faqs/deletefaq.php' method='post'>" .
        "<input type='hidden' value='$faq->faq_id' name='faq_id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}

?>
</div>













