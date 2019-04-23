<?php
require_once '../includes/database.php';
require_once '../includes/Classes/News.php';

    // Set Variables And form data and save news Letter 
    $news_titleErr = $news_bodyErr = "";
    if(isset($_POST['addNews'])){

        if (empty($_POST["news_title"])) {
            $news_titleErr = "News Title is required";
        } else {
            $news_title = $_POST['news_title'];
        }

        if (empty($_POST["news_body"])) {
            $news_bodyErr = "News Body is required";
        } else {
            $news_body = $_POST['news_body'];
        }

        if(isValid($news_bodyErr, $news_titleErr)) {
            $db = Database::getDb();
            $pdo = new News();
            $newsData = $pdo->addNews($news_title, $news_body, $db);

            if($newsData){
                echo '<div class="alert alert-success">
                        <strong>Success!</strong> News Added Succesfully
                    </div>';
                header("Location: sendMail.php?action=created");    
            } else {
               echo "problem adding a news";
            }
        }
    }

    function isValid($news_bodyErr, $news_titleErr) {
        if($news_bodyErr == '' && $news_titleErr == '') {
            return true;
        } 
        return false;
    }
require_once("../includes/header.php");
require_once("../includes/nav-add-link.php");
?>
    <header class="masthead" style="background-image:url('../assets/img/news.gif');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1><strong>Blog</strong><br></h1><span class="subheading">Please share your wonderful adventures where other members can read and share!<br></span></div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <h3>Create a News Letter</h3>
            </div>  
            
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="news_title">News Title</label>
                            <input class="form-control" name="news_title" type="text" placeholder="Enter News Letter Title">
                            <span class="show-error"><?php echo $news_titleErr; ?></span>
                        </div>

                        <div class="form-group">
                            <label for="news_body">News Body</label>
                            <textarea name="news_body" class="form-control" cols="30" rows="10" placeholder="Enter News Body"></textarea>
                            <span class="show-error"><?php echo $news_bodyErr; ?></span>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="addNews" class="btn btn-success">Create</button>
                                <a class="btn btn-primary" href="../pages/newsletter.php">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
         </div>   
</div>
<?php
    require_once("../includes/footer-add-link.php");
?>