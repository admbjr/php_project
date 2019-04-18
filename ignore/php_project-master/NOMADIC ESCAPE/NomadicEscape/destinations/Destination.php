<?php

class Destination
{
	//DESTINATION
	 public function getDestinationById($id, $db){
		$sql = "SELECT * FROM destination WHERE desti_id = :id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->execute();

        $desti =  $pst->fetch(PDO::FETCH_OBJ);

        return $desti;


    }
	
	//DESTINATION
    public function getAllDestinations($dbcon)
	{
		 $sql = "SELECT * FROM destination";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $desti = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $desti;
    }
	

	//DESTINATION			
	public function addDestination($desti_name, $db)
    {
		
		$sql = "INSERT INTO destination (desti_name) 
              VALUES (:desti_name)";
		$pst = $db->prepare($sql);
		$pst->bindParam(':desti_name', $desti_name);
        $count = $pst->execute();
        return $count;
    }
	
	 //DESTINATION
	    public function deleteDestination($id, $db)
		{
		$sql = "DELETE FROM destination WHERE desti_id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();
        return $count;

		}
		
		 //DESTINATION 
		public function updateDestination($id, $desti_name, $db)
		{	
		$sql = "UPDATE destination
                SET desti_name = :desti_name
                WHERE desti_id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->bindParam(':desti_name', $desti_name);

        $count = $pst->execute();
        return $count;


    }
}


?>