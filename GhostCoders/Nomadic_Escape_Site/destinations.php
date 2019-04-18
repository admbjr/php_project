<?php
    require_once("../includes/header.php");
    require_once("../includes/navbar.php");
?>

    <header class="masthead" style="background-image:url('../assets/img/adventure-beach-blue-386025.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>Destinations</h1><span class="subheading">The world is yours!</span></div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <?php
           require_once("../destinations/alldestination.php");
        ?>
    </div>


<?php
    require_once("../includes/footer.php");
?>