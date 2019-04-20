<?php 

// IF Session is destroy then redirect To login
    session_start();
    if (empty($_SESSION['user_id'])) {
        header("Location: login.php");
    }
?>
 
 <!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nomadic Escape</title> -->
    <!-- <link rel="stylesheet" href="assets/css/AB/my.css"> -->
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    

</head>

<body> -->
    <!-- <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Nomadic Escape</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="destinations.php">Destinations</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#">Destinations </a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation" href="destinations.php" >Destinations</a>
                        <a class="dropdown-item text-uppercase" role="presentation" href="#">Newsletter</a>
                        </div></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="hotelsrestaurants.php">Hotels & Restaurants</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#"id="navbarDropdown" role="button">Gallery </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" role="menu"><a class="dropdown-item text-uppercase" href="gallery.php" >Gallery</a>
                        <div class="dropdowndivider"></div>
                        <a class="dropdown-item text-uppercase" href="#">Newsletter</a>
                        </div></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="faq.php">FAQ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#">Contact Us </a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation" href="contact.php" >Contact Us</a>
                        <a class="dropdown-item text-uppercase" role="presentation" href="faq.php">FAQ</a>
                        <a class="dropdown-item text-uppercase" role="presentation" href="#">Survey</a>
                        </div></li>
                    <li class="nav-item" role="presentation">
                    <a href="includes/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> </a></li>
                </ul>
        </div>
        </div>
    </nav> -->    
    
    <!-- <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Nomadic Escape</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active text-uppercase"  href="index.php"><strong>HOME</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false"  href="#"><strong>travel</strong>&nbsp;</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation"  href="destinations.php">destinations</a><a class="dropdown-item text-uppercase" role="presentation" style="font-family:'Source Sans Pro', sans-serif;"
                                href="#">newsletter</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="hotelsrestaurants.php"><strong>HOTELS &amp; RESTAURANTS</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false"  href="#"><strong>views</strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation"  href="gallery.php">gallery</a><a class="dropdown-item text-uppercase" role="presentation" style="font-family:'Source Sans Pro', sans-serif;"
                                href="#">reviews</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="blog.php"><strong>BLOG</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false"  href="#"><strong>info&nbsp;</strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation"  href="contact.php">contact us</a>
                        <a class="dropdown-item text-uppercase" role="presentation" style="font-family:'Source Sans Pro', sans-serif;" href="faq.php">faq</a><a class="dropdown-item text-uppercase" role="presentation"  href="#">survey</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><strong>L</strong></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="includes/logout.php"><strong><i class="fa fa-sign-out" aria-hidden="true"></strong></i> </a></li>
                </ul>
            </div>
        </div>
    </nav> -->

    
     <!--<nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active text-uppercase"  href="#"><strong>HOME</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false"  href="#"><strong>travel</strong>&nbsp;</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation"  href="#">destinations</a><a class="dropdown-item text-uppercase" role="presentation" style="font-family:'Source Sans Pro', sans-serif;"
                                href="#">newsletter</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="#"><strong>HOTELS &amp; RESTAURANTS</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false"  href="#"><strong>views</strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation"  href="#">gallery</a><a class="dropdown-item text-uppercase" role="presentation" style="font-family:'Source Sans Pro', sans-serif;"
                                href="#">reviews</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-uppercase"  href="#"><strong>BLOG</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false"  href="#"><strong>info&nbsp;</strong></a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item text-uppercase" role="presentation"  href="#">contact us</a><a class="dropdown-item text-uppercase" role="presentation" style="font-family:'Source Sans Pro', sans-serif;"
                                href="#">faq</a><a class="dropdown-item text-uppercase" role="presentation"  href="#">survey</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><strong>L</strong></a></li>
                </ul>
            </div>
        </div>
    </nav> -->




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nomadic Escape</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="stylesheet" href="../assets/css/news_letter.css">
    <link rel="stylesheet" href="../assets/css/blog.css">
    <link rel="stylesheet" href="../assets/css/destination.css">

</head>

<body>