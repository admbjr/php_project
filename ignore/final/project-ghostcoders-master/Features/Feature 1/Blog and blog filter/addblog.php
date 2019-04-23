<?php
require_once 'database.php';
require_once 'blogs.php';

    if(isset($_POST['addBlog'])){
       $blogName = $_POST['blogName'];
       $author = $_POST['author'];
       $blogContent = $_POST['blogContent'];


       $db = Database::getDb();
       $s = new Blog();
       $c = $s->addblog($blogName, $author, $blogContent, $db);

       if($c){
           echo "Added blog sucessfully";
       } else {
           echo "problem adding a blog";
       }

    }
?>

<form action="" method="post">
	<h1> Blog </h1>
    <label>Blog name:</label> <input type="text" name="blogName" /><br/><br/>
    Author: <input type="text" name="author" /><br /><br/>
    <label>Content:</label> <textarea rows="10" cols="22" name="blogContent"></textarea><br /><br/>
    <input type="submit" name="addBlog" value="Add blog"/>
</form>