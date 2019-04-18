 <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Nomadic Escape</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown" style="padding: 0px;padding-bottom: 1px;"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="height: 38px;padding-top: 10px;padding-right: 20px;padding-bottom: 10px;padding-left: 20px;color: #ffffff;font-size: 13px;width: 91.9531px;"><strong>TRAVEL</strong></a>
                        <div
                            class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="destinations.php">DESTINATIONS</a><a class="dropdown-item" role="presentation" href="newsletter.php">NEWSLETTER</a></div>
        </li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="hotelsrestaurants.php"><strong>HOTELS &amp; RESTAURANTS</strong></a></li>
        <li class="nav-item dropdown" style="padding: 0px;padding-bottom: 1px;"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="height: 38px;padding-top: 10px;padding-right: 20px;padding-bottom: 10px;padding-left: 20px;color: #ffffff;font-size: 13px;width: 91.9531px;"><strong>ViEws</strong></a>
            <div
                class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="gallery.php">GALLERY</a>
                <!-- <a class="dropdown-item" role="presentation" href="reviews.php">REVIEWS</a></div> -->
        </li>
        <li class="nav-item" role="presentation"><a class="nav-link" href="blog.php"><strong>BLOG</strong></a></li>
        <li class="nav-item dropdown" style="padding: 0px;padding-bottom: 1px;"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="height: 38px;padding-top: 10px;padding-right: 20px;padding-bottom: 10px;padding-left: 20px;color: #ffffff;font-size: 13px;width: 91.9531px;"><strong>INFO</strong></a>
            <div
                class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="contact.php">CONTACT US</a><a class="dropdown-item" role="presentation" href="faq.php">FAQ</a><a class="dropdown-item" role="presentation" href="survey.php">SURVEY</a></div>
        </li>
        <?php 
            if($_SESSION['role'] == 'Admin') {
               echo '<li class="nav-item dropdown" style="padding: 0px;padding-bottom: 1px;"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="height: 38px;padding-top: 10px;padding-right: 20px;padding-bottom: 10px;padding-left: 20px;color: #ffffff;font-size: 13px;width: 91.9531px;"><strong>ADMIN</strong></a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" role="presentation" href="../news_letter/userList.php">CHANGE USER ROLE</a>
                        <a class="dropdown-item" role="presentation" href="../news_letter/addNews.php">ADD NEWS LETTER</a>
                        <a class="dropdown-item" role="presentation" href="../blog/addblog.php">CREATE A BLOG</a>
                        <a class="dropdown-item" role="presentation" href="../destinations/addDestination.php">ADD DESTINATION</a>
                        <a class="dropdown-item" role="presentation" href="../gallery/addimages.php">ADD IMAGES IN GALLERY</a>
                    </div>
                </li>';
            }
        ?>
        <li class="nav-item" role="presentation"><a class="nav-link" href="login.php"><strong><i class="fa fa-sign-out" aria-hidden="true"></strong></i> </a></li>
        </ul>
        </div>
        </div>
    </nav>
