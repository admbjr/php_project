<?php
class Gallery
{
    public function getAllimage($dbcon){
        $sql = "SELECT * FROM gallery";
        $pdo = $dbcon->prepare($sql);
        $pdo->execute();
        $imageData = $pdo->fetchAll(PDO::FETCH_OBJ);
        return $imageData;
    }	
    
	 public function addImage($destination, $caption, $imagename, $db)
    {
        $sql = "INSERT INTO gallery (destination, image, caption) 
              VALUES (:destination, :image, :caption) ";
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':destination', $destination);
        $pdo->bindParam(':image', $imagename);
        $pdo->bindParam(':caption', $caption);

        $image = $pdo->execute();
        return $image;
    }
	
	public function updateImage($dest, $caption, $image, $db, $id) {
        $sql = "UPDATE gallery 
                    SET destination = :destination, image = :image, caption = :caption WHERE img_id= :img_id";

        $pdo = $db->prepare($sql);
        $pdo->bindParam(':destination', $dest);
        $pdo->bindParam(':image', $image);
        $pdo->bindParam(':caption', $caption);
        $pdo->bindParam(':img_id', $id);
        $image = $pdo->execute();
        return $image;
    }

    public function getImageById($img_id, $db) {
        $sql = "SELECT * FROM gallery WHERE img_id = :img_id ";     //
        $pst = $db->prepare($sql);
        $pst->bindParam(':img_id', $img_id);
        $pst->execute();
        $image =  $pst->fetch(PDO::FETCH_OBJ);
        return $image;
    }

    public function deleteImage($id, $db){
        $sql = "DELETE FROM gallery WHERE img_id = ?";
        $pst = $db->prepare($sql);
        $pst->execute(array($id));
        $count = $pst->execute();
        return $count;
    }
}
?>