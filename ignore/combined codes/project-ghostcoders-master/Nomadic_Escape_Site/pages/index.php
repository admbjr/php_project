<?php
    require_once("../includes/header.php");
    require_once("../includes/navbar.php");
?>
    <header class="masthead" style="background-image:url('../assets/img/about-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1><strong>Welcome!</strong><br></h1><span class="subheading">Where your adventures come to life!<br></span></div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <?php 
            require_once("../search/search.php");
        ?>
    </div>


<?php
    require_once("../includes/footer.php");
?>