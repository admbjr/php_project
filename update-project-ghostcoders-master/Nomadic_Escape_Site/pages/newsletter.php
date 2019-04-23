<?php
    require_once("../includes/header.php");
    require_once("../includes/navbar.php");
?>
    <header class="masthead" style="background-image:url('../assets/img/news.gif');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>Newsletter</h1><span class="subheading">For all the latest!</span></div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <?php
            require_once("../news_letter/newsList.php");
        ?>
    </div>
    

<?php
    require_once("../includes/footer.php");
?>