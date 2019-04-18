<?php
    require_once("../includes/header.php");
    require_once("../includes/navbar.php");
?>

    <header class="masthead" style="background-image:url('../assets/img/air-air-travel-aircraft-731217.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1><strong>Gallery</strong><br></h1><span class="subheading">All images around the world!<br></span></div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <?php 
           require_once("../gallery/allimage.php");
        ?>
    </div>
    

<?php
    require_once("../includes/footer.php");
?>