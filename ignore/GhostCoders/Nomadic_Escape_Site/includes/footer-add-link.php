<?php 
require_once '../includes/database.php';
require_once '../includes/Classes/Subscriber.php';

$subscriberData = null;

// Add Subscriber From Footer
if(isset($_POST['subscribe'])) {
    $email = $_POST['email'];
    $name = $_SESSION['name'];
    $dbcon = Database::getDb();
    $pdo = new Subscriber();

    $subscriberData =  $pdo->addSubscriber($name, $email, $dbcon);
    
    if($subscriberData != null){
        echo '
        <div class="alert alert-success w-25" id="notify">
            <strong>Success!</strong>Subscribed Succesfully
        </div>
        <script>
            var notify = document.getElementById("notify");

            setTimeout(function(){ notify.style.display = "none"; }, 2000);
        </script>
            ';
       } else {
           echo "problem adding a Subsrcriber";
       }
}
?>
<footer id="footer">
    <div class="newsletter-subscribe">
    <hr><br>
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Follow Us!</h2>
                <p class="text-center">Subscribe for our Newsletter</p>
            </div>
            <form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
                <div class="form-group"><button class="btn btn-primary" name="subscribe" type="submit">Subscribe </button></div>
            </form>
        </div>
    </div>
    <hr><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>
                            <span
                                class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span>
                                <span
                                    class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-snapchat-ghost fa-stack-1x fa-inverse"></i></span><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook-f fa-stack-1x fa-inverse"></i></span></li>
                        <li
                            class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="text-capitalize text-center"><a href="../pages/index.php" style="color: rgb(0,0,0);">Home</a></p>
                    <p class="text-capitalize text-center"><a href="../pages/destinations.php" style="color: rgb(0,0,0);">Destinations</a></p>
                    <p class="text-capitalize text-center"><a href="../pages/newsletter.php" style="color: rgb(0,0,0);">Newsletter</a></p>
                </div>
                <div class="col-md-4">
                    <p class="text-capitalize text-center"><a href="../pages/hotelsrestaurants.php" style="color: rgb(0,0,0);">Hotels &amp; Restaurants</a></p>
                    <p class="text-capitalize text-center"><a href="../pages/gallery.php" style="color: rgb(0,0,0);">Gallery</a></p>
                    <p class="text-capitalize text-center"><a href="../pages/reviews.php" style="color: rgb(0,0,0);">Reviews</a></p>
                    <p class="text-capitalize text-center"><a href="../pages/blog.php" style="color: rgb(0,0,0);">Blog</a></p>
                </div>
                <div class="col-md-4">
                    <p class="text-capitalize text-center"><a href="../pages/contact.php" style="color: rgb(0,0,0);">Contact Us</a></p>
                    <p class="text-capitalize text-center"><a href="../pages/faq.php" style="color: rgb(0,0,0);">FAQ'S</a></p>
                    <p class="text-capitalize text-center"><a href="../pages/survey.php" style="color: rgb(0,0,0);">Survey</a></p>
                </div>
            </div>
        </div>
        <p class="text-center text-muted copyright"><em>Copyright&nbsp;©&nbsp;Nomadic Escape 2019 ~ All rights reserved</em></p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>
    if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>