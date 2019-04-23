<?php
require_once '../includes/database.php';
require_once '../includes/Classes/faq.php';
require_once '../includes/header.php';
require_once '../includes/navbar.php';

    if(isset($_POST['addfaq'])){
       $questions = $_POST['questions'];
       $answers = $_POST['answers'];


       $db = Database::getDb();
       $f = new Faq();
       $faqData = $f->addFaq($questions, $answers, $db);


       if($c){
           echo "Added Faq sucessfully";
       } else {
           echo "problem adding faq";
       }

    }
?>


<header class="masthead" style="background-image:url('../assets/img/adventure-blur-cartography-408503.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1><strong>FAQ'S</strong><br></h1><span class="subheading">To help assist your needs!<br></span></div>
                </div>
            </div>
        </div>
    </header>

 <div class="add">
<form action="" method="post">
    Question <input type="text" name="questions"  placeholder="Enter question" /><br/>
    Answer <input type="text" name="answers"   placeholder="Enter answer" /><br />
    <input class="btn btn-success" type="submit" name="addfaq" value="Add FAQ">
    <a class="btn btn-primary" href="../pages/faqs.php">Back</a>
</form>
</div>
<?php 

require_once '../includes/footer.php';
?>