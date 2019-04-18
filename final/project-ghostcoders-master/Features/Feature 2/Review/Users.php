<?php

class Users
{
	public function getUsers($dbcon){

		$sql = "SELECT first_name FROM users1";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $users = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }
	
		 public function getUserById($id, $db){
        $sql = "SELECT first_name FROM users1 WHERE user1_id = :id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);

        $pst->execute();

        $review =  $pst->fetch(PDO::FETCH_OBJ);

        return $review;

    }
}


?>