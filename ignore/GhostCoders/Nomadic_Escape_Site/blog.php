<?php
    require_once("../includes/header.php");
    require_once("../includes/navbar.php");
?>


    <header class="masthead" style="background-image:url('../assets/img/blog.jpg');">
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
        <?php 
            require_once("../blog/listblog.php");
        ?>
    </div>

<?php
    require_once("../includes/footer.php");
?>