<?php
class Comment
{
    public function getAllComment($dbcon){

        $sql = "SELECT * FROM blog_comment ORDER BY comment_id DESC";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();
        $comments = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }	

	public function addComment($blog_id, $user_id, $comment, $db)
    {
        $sql = "INSERT INTO blog_comment (blog_id, user_id, comment) 
              VALUES (:blog_id, :user_id, :comment) ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':blog_id', $blog_id);
        $pst->bindParam(':user_id', $user_id);
        $pst->bindParam(':comment', $comment);

        $count = $pst->execute();
        return $count;
    }
	
	public function updateComment($id, $comment, $db)
	  {
        $q = $db->prepare('UPDATE blog_comment
                SET comment = ?
                WHERE comment_id = ?');
        $count = $q->execute(array($comment, $id));

        return $count;
    }
	 public function deleteComment($id, $db){
        $sql = "DELETE FROM blog_comment WHERE comment_id = ?";
        $pst = $db->prepare($sql);
        $pst->execute(array($id));
        $count = $pst->execute();
        return $count;
    }
}
?>