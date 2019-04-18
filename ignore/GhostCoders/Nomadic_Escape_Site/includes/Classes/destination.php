<?php
class Destination
{
    public function getAllDestination($dbcon){
        $sql = "SELECT * FROM destinations";
        $pdo = $dbcon->prepare($sql);
        $pdo->execute();
        $desData = $pdo->fetchAll(PDO::FETCH_OBJ);
        return $desData;
    }	
    
	 public function addDestination($country, $city, $caption, $des_image, $db)
    {
        $sql = "INSERT INTO destinations (country, city, caption, image) 
              VALUES (:country, :city, :caption, :image) ";
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':country', $country);
        $pdo->bindParam(':city', $city);
        $pdo->bindParam(':caption', $caption);
        $pdo->bindParam(':image', $des_image);

        $desData = $pdo->execute();
        return $desData;
    }
	
	public function updateDestination($country, $city, $caption, $image, $db, $id) {
        $sql = "UPDATE destinations 
                    SET country = :country, city = :city, caption = :caption, image = :image WHERE des_id= :des_id";

        $pdo = $db->prepare($sql);
        $pdo->bindParam(':country', $country);
        $pdo->bindParam(':city', $city);
        $pdo->bindParam(':caption', $caption);
        $pdo->bindParam(':image', $image);
        $pdo->bindParam(':des_id', $id);
        $desData = $pdo->execute();
        return $desData;
    }

    public function getDestinationById($des_id, $db) {
        $sql = "SELECT * FROM destinations WHERE des_id = :des_id ";     //
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':des_id', $des_id);
        $pdo->execute();
        $desData =  $pdo->fetch(PDO::FETCH_OBJ);
        return $desData;
    }

    public function deleteDestination($id, $db){
        $sql = "DELETE FROM destinations WHERE des_id = ?";
        $pdo = $db->prepare($sql);
        $pdo->execute(array($id));
        $desData = $pdo->execute();
        return $desData;
    }

    public function getDestinationByCountry($country, $db) {
        $sql = "SELECT * FROM destinations WHERE country = :country ";     //
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':country', $country, PDO::PARAM_STR);
        $pdo->execute();
        $desData =  $pdo->fetchAll(PDO::FETCH_OBJ);
        return $desData;
    }
}
?>