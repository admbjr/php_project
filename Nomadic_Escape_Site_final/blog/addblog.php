<?php
require_once '../includes/database.php';
require_once '../includes/Classes/blogs.php';

$blog_nameErr = $authorErr = $blog_categoryErr = $blog_contentErr = "";

    /*
     * Check is Field filled and then submit or redirect to list of blogs 
     */
    if(isset($_POST['addBlog'])){
      session_start();
        if(empty($_POST['blog_name'])) {
            $blog_nameErr = 'Blog Name is Required';
        } else {
            $blog_name = $_POST['blog_name'];
        }

        if(empty($_POST['author'])) {
            $authorErr = 'Blog Author is Required';
        } else {
            $author = $_POST['author'];
        }

        if(empty($_POST['blog_category'])) {
            $blog_categoryErr = 'Blog Category is Required';
        } else {
            $blog_category = $_POST['blog_category'];
        }

        if(empty($_POST['blog_content'])) {
            $blog_contentErr = 'Blog Content is Required';
        } else {
            $blog_content = $_POST['blog_content'];
        }

        if(isCorrect($blog_nameErr, $authorErr, $blog_categoryErr, $blog_contentErr)) {         
            $user_id = $_SESSION['user_id'];
            $created_at = new DateTime();
            $created_at = $created_at->format('Y-m-d');
            $imagename = $_FILES['simg']['name'];
            $tempname = $_FILES['simg']['tmp_name'];
            move_uploaded_file($tempname,"../images/$imagename");

            $db = Database::getDb();
            $s = new Blog();
            $c = $s->addblog($blog_name, $author, $blog_category, $imagename, $blog_content, $user_id, $created_at, $db);

            if($c){
                header("Location: ../pages/blog.php");
            } else {
               echo "problem adding a blog";
            }
        }
    }

    /*
     * Check is any field is not blank 
     */
    function isCorrect($blog_nameErr, $authorErr, $blog_categoryErr, $blog_contentErr) {
        if($blog_nameErr == '' && $authorErr == '' && $blog_categoryErr == '' && $blog_contentErr == '') {
            return true;
        } else {
            return false;
        }
    }
require_once("../includes/header.php");
require_once("../includes/nav-add-link.php");
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
    <div class="container">
        <div class="row justify-content-center">
            <h3>Create a Blog</h3>
        </div>  
        
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="blog_name">Blog Name</label>
                        <input class="form-control" name="blog_name" type="text" placeholder="Enter Blog Name">
                        <span class="error-class"><?php echo $blog_nameErr ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input class="form-control" name="author" type="text" placeholder="Enter Author Name"><span class="error-class"><?php echo $authorErr ?></span>
                    </div>

                    <div class="form-group">
                        <label for="blog_category">Blog Category</label>
                        <select name="blog_category" class="form-control">
                            <option value="Entertainment">Entertainment</option>
                            <option value="Tour">Tour</option>
                            <option value="LifeStyle">LifeStyle</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Technology">Technology</option>
                        </select>
                        <span class="error-class"><?php echo $blog_categoryErr ?></span>
                    </div>

                    <div class="form-group">
                        <label for="image">Select Image</label>
                        <input class="form-control" name="simg" type="file" required>
                    </div>

                    <div class="form-group">
                        <label for="blog_content">Blog Content</label>
                        <textarea name="blog_content" class="form-control" cols="30" rows="10" placeholder="Enter Blog Content"></textarea>
                        <span class="error-class"><?php echo $blog_contentErr ?></span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="addBlog" class="btn btn-success">Create</button>
                            <a class="btn btn-primary" href="../pages/blog.php">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>   

<?php 
    require_once("../includes/footer-add-link.php");
?>
