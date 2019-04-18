<?php 
    session_start();
    require_once("includes/header.php");
?>

    <header class="masthead" style="background-image: url('assets/img/post-sample-image.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>Profile</h1><span class="subheading">All about you!</span></div>
                </div>
            </div>
        </div>
    </header>

    <div style="float:right;"<img src="<?php echo $_SESSION['profile_pic']; ?>" width="200px;">
    </div>
        <div style="background:skyblue; float:left; width:280px; padding:10px;">
            Firstname: <?php echo $_SESSION['reg_fname']; ?><br>
            Lastname: <?php echo $_SESSION['reg_lname']; ?><br>
            Email: <?php echo $_SESSION['reg_email']; ?><br>
<?php 
    require_once("includes/header.php");
?>
