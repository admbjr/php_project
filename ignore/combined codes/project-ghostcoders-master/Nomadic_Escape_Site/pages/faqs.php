<?php
    require_once '../includes/database.php';
    require_once '../includes/header.php';
    require_once '../includes/navbar.php';
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
    <div>
        <?php
           require_once '../faqs/listfaqs.php';
        ?>
    </div>
    
    
<?php
    require_once '../includes/footer.php';
?>