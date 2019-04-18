<?php
    require_once 'includes/header.php';
?>

    <header class="masthead" style="background-image:url('assets/img/beach-blur-close-up-348523.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1><strong>Hotels &amp; Restaurants</strong><br></h1><span class="subheading">Top picks of where to sleep and eat!<br></span></div>
                </div>
            </div>
        </div>
    </header>
    <div>
        <?php
            require_once 'hotelsrestaurants/hotel/listhotels.php';
        ?>
    </div>
    <div>
        <?php
            require_once 'hotelsrestaurants/restaurant/listrestaurants.php';
        ?>
    </div>

<?php
    require_once 'includes/footer.php';
?>