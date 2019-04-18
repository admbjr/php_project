<?php
require_once './includes/database.php';
require_once './includes/Classes/Faq.php';
require_once './includes/header.php';

    if(isset($_POST['addfaq'])){
       $questions = $_POST['questions'];
       $answers = $_POST['answers'];


       $db = Database::getDb();
       $f = new Faq();
       $c = $f->addFaq($questions, $answers, $db);


       if($c){
           echo "Added faq sucessfully";
       } else {
           echo "problem adding a faq";
       }

    }
?>


<form action="" method="post">
    Questions: <input type="text" name="questions" /><br/>
    Answers: <input type="text" name="answers" /><br />
    <input type="submit" name="addhot" value="Add Faq!">
</form>

<br />
<hr>
<br />

 <li><a href='faqs.php'>Back to Faq's!</a></li>