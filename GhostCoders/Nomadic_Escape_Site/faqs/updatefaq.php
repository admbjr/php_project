<?php
require_once './includes/Database.php';
require_once './includes/Classes/Faq.php';

if(isset($_POST['update'])){
    $faq_id = $_POST['faq_id'];

    $dbcon = Database::getDb();
    $f = new Faq();
    $faq = $h->getFaqById($faq_id, $dbcon);
}

if(isset($_POST['updfaq'])){
    $faq_id= $_POST['faq_id'];
    $questions = $_POST['questions'];
    $answers = $_POST['answers'];

    $dbcon = Database::getDb();
    $f = new Faq();
    $count = $f->updateFaq($faq_id, $questions, $answers, $dbcon);

    if($count){
        header("Location: faqs.php");
    } else {
        echo  "problem updating";
    }


}



?>


<form action="" method="post">
    <input type="hidden" name="faq_id" value="<?= $faq->faq_id; ?>" />
    Question: <input type="text" name="name" value="<?= $faq->name; ?>" /><br/>
    Answer: <input type="text" name="description" value="<?= $faq->description; ?>" /><br />
    <input type="submit" name="updfaq" value="Update Faq">
</form>

<br />
<hr>
<br />

 <li><a href='listfaqs.php'>Back to Faq's!</a></li>