<?php
class Blog
{
    public function getblogById($id, $db){
        $sql = "SELECT * FROM blog WHERE blog_id = :id ";     //
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();
        $Blogs =  $pst->fetch(PDO::FETCH_OBJ);
        return $Blogs;
    }
    public function getAllblog($dbcon){

        $sql = "SELECT * FROM blog";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $newBlog = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $newBlog;
    }	
	 public function addblog($blog_name, $author, $blog_category, $image, $blog_content, $user_id, $created_at, $db)
    {
        $sql = "INSERT INTO blog (blog_name, blog_content, user_id, blog_category, image, author, created_at) 
              VALUES (:blog_name, :blog_content, :user_id, :blog_category, :image, :author, :created_at) ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':blog_name', $blog_name);
        $pst->bindParam(':blog_content', $blog_content);
        $pst->bindParam(':user_id', $user_id);
        $pst->bindParam(':blog_category', $blog_category);
        $pst->bindParam(':image', $image);
        $pst->bindParam(':author', $author);
        $pst->bindParam(':created_at', $created_at);

        $count = $pst->execute();
        return $count;
    }
	
	public function updateBlog($id, $blog_name, $author, $blog_category, $image, $blog_content, $db)
	  {
        $q = $db->prepare('UPDATE blog
                SET blog_name = ?,
                author = ?,
                blog_category = ?,
                image = ?,
                blog_content = ?
                WHERE blog_id = ?');
        $count = $q->execute(array($blog_name, $author, $blog_category, $image, $blog_content, $id));

        return $count;
    }
	 public function deleteBlog($id, $db){
        $sql = "DELETE FROM blog WHERE blog_id = ?";
        $pst = $db->prepare($sql);
        $pst->execute(array($id));
        $count = $pst->execute();
        return $count;
    }
	
	 public function getBlogName($db){
        $query = "SELECT DISTINCT blog_name FROM blog";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function filterBlog($db, $blog_category){
        $query = "SELECT * FROM blog WHERE blog_category= :blog_category";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':blog_category', $blog_category, PDO::PARAM_STR);
        $pdostm->execute();
        $a = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $a;
    }
	
	
}
?>