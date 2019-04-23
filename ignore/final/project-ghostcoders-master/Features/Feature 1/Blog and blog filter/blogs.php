<?php
class Blog
{
    public function getblogById($id, $db){
        $sql = "SELECT * FROM blog WHERE id = :id ";     //
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
	 public function addblog($blogName, $author, $blogContent, $db)
    {
        $sql = "INSERT INTO blog (blogName, author, blogContent) 
              VALUES (:blogName, :author, :blogContent) ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':blogName', $blogName);
        $pst->bindParam(':author', $author);
        $pst->bindParam(':blogContent', $blogContent);
        $count = $pst->execute();
        return $count;
    }
	
	  public function updateBlog($id, $blogName, $author, $blogContent, $db)
	  {
        $sql = "UPDATE blog
                SET blogName = :blogName,
                author = :author,
                blogContent = :blogContent
                WHERE id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->bindParam(':blogName', $blogName);
        $pst->bindParam(':author', $author);
        $pst->bindParam(':blogContent', $blogContent);
        $count = $pst->execute();
        return $count;
    }
	 public function deleteBlog($id, $db){
        $sql = "DELETE FROM blog WHERE id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;
    }
	
	 public function getAuthors($db){
        $query = "SELECT DISTINCT author FROM blog";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        //fetch all result
        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getBlogContent($db, $author){
        $query = "SELECT * FROM blog WHERE author= :author";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':author', $author, PDO::PARAM_STR);
        $pdostm->execute();
        $a = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $a;
    }
	
	
}
?>