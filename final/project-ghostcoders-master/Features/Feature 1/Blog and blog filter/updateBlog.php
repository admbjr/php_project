<?php
require_once 'Database.php';
require_once 'blogs.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $dbcon = Database::getDb();
    $b = new Blog();
    $blog = $b->getBlogById($id, $dbcon);
    //var_dump($blog);

}

if(isset($_POST['updateBlog'])){
    $id= $_POST['id'];
    $blogName = $_POST['blogName'];
    $author = $_POST['author'];
    $blogContent = $_POST['blogContent'];

    $dbcon = Database::getDb();
    $b = new Blog();
    $count = $b->updateBlog($id, $blogName, $author, $blogContent, $dbcon);

    if($count){
        header("Location: listblog.php");
    } else {
        echo  "problem updating";
    }
}
?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $blog->id; ?>" />
	<h1>Update Blog</h1>
    <b>Blog name:</b> <input type="text" name="blogName" value="<?= $blog->blogName; ?>" /><br/><br />
   <b> Author:</b> <input type="text" name="author" value="<?= $blog->author; ?>" /><br /><br />
    <b>Blog Content:</b> <input type="text" name="blogContent" value="<?= $blog->blogContent; ?>"/><br /><br/>
	
    <input type="submit" name="updateBlog" value="Update Blog">
</form>