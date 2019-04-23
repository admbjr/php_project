<?php
require_once '../includes/database.php';
require_once '../includes/Classes/News.php';

// Get All News Data
$dbcon = Database::getDb();
$pdo = new News();
$newsList =  $pdo->getAllNews($dbcon);
?>


<div class="container">
    <div class="row mb-4 mt-2">
        <div class="col-lg-3">
            <h3>LIST OF NEWS</h3>
        </div>
    </div>

    <div class="row">
                <?php
                    if(sizeof($newsList) > 0) {
                        foreach($newsList as $news){
                            echo '<div class="col-lg-12 mb-4">
                                    <h6>'.$news->news_title.'</h6>
                                    <p>'.$news->news_body.'</p>';

                                if($_SESSION['role'] == 'Admin') {
                                    echo'<a href="../news_letter/updatenews.php?id='.$news->news_id.'" class="mr-4 nav-link text-dark d-inline">
                                            EDIT<i class="fa fa-edit ml-2"></i></a>
                                        <a href="../news_letter/deleteNews.php?id='.$news->news_id.'" class="nav-link d-inline text-danger mr-4">DELETE<i class="fa fa-trash ml-2"></i></a>'; 
                                }
                                echo'</div>';
                        }
                    } 
                    else {
                       echo '<div class="alert alert-info d-flex justify-content-center">
                                <strong>Sorry !</strong> No Result Found
                            </div>';
                    }
                ?>
    </div>
</div>
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content pb-4" id="modal-content">
        <span class="close">&times;</span>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Enter Email Address" required> 
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" type="text" placeholder="Enter name" required> 
                    </div>

<!--                     <div class="form-group">
                        <div class="float-right">
                            <button type="submit" name="subscribe" class="btn btn-success">Subscribe</button>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
  </div>

</div>

<!-- <script>
    // Get the modal
var modal = document.getElementById('myModal');
var modalContent = document.getElementById('modal-content');

// Get the button that opens the modal
var btn = document.getElementById("openPopup");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  modal.style.backgroundImage = "url('images/overlay.png')";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 -->
