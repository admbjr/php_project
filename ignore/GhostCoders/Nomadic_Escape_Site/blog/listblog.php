<?php
require_once '../includes/database.php';
require_once '../includes/Classes/blogs.php';
require_once '../includes/Classes/comments.php';


$dbcon = Database::getDb();
$b = new Blog();
$myblog =  $b->getAllblog(Database::getDb());
$comment_obj = new Comment();

// Get All Comments
$comments = $comment_obj->getAllComment($dbcon);

$blog_category = null;

if (!empty($_GET['blog_category'])) {
    $blog_category = $_REQUEST['blog_category'];
    $myblog = $b->filterBlog($dbcon, $blog_category);
}

// Add Comment On Blog 
if(isset($_POST['submit-comment'])) {
   $comment = $_POST['comment'];
   $blog_id = $_POST['blog_id'];
   $user_id = $_SESSION['user_id'];

   $comment_obj->addComment($blog_id, $user_id, $comment, $dbcon);
   $comments = $comment_obj->getAllComment($dbcon);
}

?>


<div class="container">
    <div class="row mb-4 mt-2">
        <h3>LIST OF BLOGS</h3>
        <div class="col-lg-7">
            <form method="get">
                 <select name="blog_category" class="form-control w-25 d-inline mt-1">
                        <option value="Entertainment">Entertainment</option>
                        <option value="Tour">Tour</option>
                        <option value="LifeStyle">LifeStyle</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Technology">Technology</option>
                </select>
                <input type="submit" value="filter" class="btn btn-primary d-inline ml-2">
                <a href="../pages/blog.php" class="btn btn-success d-inline ml-2">Reset</a>
            </form>
            <?php 
                if($blog_category != null) {
                    echo '<h5 class="mt-4">Filter by '.$blog_category.' - </h5>';
                }
             ?>
        </div>
    </div>

    <div class="row">
                <?php
                    if(sizeof($myblog) > 0) {
                        foreach($myblog as $blog){
                            echo '<div class="col-lg-4 mb-2 line-content">
                                    <img src="../images/'.$blog->image.'" alt="image not found" width="320" height="225">

                                    <h6 class="blogTitle mt-2">'.$blog->blog_name.'</h6>
                                    <a href="../blog/getBlog.php?id='.$blog->blog_id.'" class="read-more">READ MORE <i class="fa fa-arrow-right"></i></a>';

                            if($_SESSION['role'] == 'Admin') {
                                echo ' <a href="../blog/updateBlog.php?id='.$blog->blog_id.'" class="text-dark pl-0 nav-link d-inline">EDIT<i class="fa fa-edit ml-2"></i></a>
                                    <a  onclick="javascript:confirmationDelete($(this));return false;" 
                                        href="../blog/deleteBlog.php?id='.$blog->blog_id.'"
                                        class=" d-inline nav-link text-danger">DELETE
                                        <i class="fa fa-trash ml-2"></i></a>';
                            }
                            echo '<form method="post" class="comment-frm">
                                    <input type="text" name="comment" class="comment-box" required>
                                    <input type="hidden" name="blog_id" value="'.$blog->blog_id.'">
                                    <button class="comment-btn" type="submit" name="submit-comment"> <i class="fa fa-paper-plane text-dark"></i> </button>
                                  </form>';
                            echo '<ul type="none">';

                        // Set Comment data by Each Blog
                        if(sizeof($comments) > 0) {
                            foreach ($comments as $comm) {
                                if($blog->blog_id == $comm->blog_id) {
                                   echo '<li>'.$comm->comment.'</li>';
                                }
                            }
                        }   
                            echo '</ul></div>';      
                        }
                    } 
                    else {
                       echo '<div class="alert alert-info d-flex justify-content-center">
                                <strong>Sorry !</strong> No Result Found
                            </div>';
                    }
                ?>
    </div>
    <div class="mt-5">
        <ul id="pagin" type="none">
                    
        </ul>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script>



    /*
     * Pagination For Blogs Set default to 9 Blogs After it Divided in 2 pages 
     * And After that more and more
     */
    var pageSize = 9;

    var pageCount =  $(".line-content").length / pageSize;
     for(var i = 0 ; i<pageCount;i++){
        
       $("#pagin").append('<li class="paginationbox"><a href="#" class="text-dark">'+(i+1)+'</a></li> ');
     }
        $("#pagin li").first().find("a").addClass("current")
    showPage = function(page) {
        $(".line-content").hide();
        $(".line-content").each(function(n) {
            if (n >= pageSize * (page - 1) && n < pageSize * page)
                $(this).show();
        });        
    }
    
    showPage(1);

    $("#pagin li").click(function() {
        $("#pagin li a").removeClass("current");
        $(this).addClass("current");
        showPage(parseInt($(this).text())) 
    });

    function confirmationDelete(anchor) {
       var conf = confirm('Are you sure want to delete this blog?');
       if(conf)
          window.location=anchor.attr("href");
    }

    $('#commentPopup').click(function() {

    });

</script>
