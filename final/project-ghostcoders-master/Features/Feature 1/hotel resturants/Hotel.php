<?php

class Hotel
{

    // public function getAreas($db){
    //     $query = "SELECT DISTINCT area FROM hotels";
    //     $pdostm = $db->prepare($query);
    //     $pdostm->execute();

    //     //fetch all result
    //     $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
    //     return $results;
    // }
    // public function getHotelsInArea($db, $area){
    //     $query = "SELECT * FROM hotels WHERE area= :area";
    //     $pdostm = $db->prepare($query);
    //     $pdostm->bindValue(':area', $area, PDO::PARAM_STR);
    //     $pdostm->execute();
    //     $h = $pdostm->fetchAll(PDO::FETCH_OBJ);
    //     return $h;
    // }

    public function getHotelById($id, $db){
        $sql = "SELECT * FROM hotels WHERE id = :id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);

        $pst->execute();

        $hotel =  $pst->fetch(PDO::FETCH_OBJ);

        return $hotel;


    }
    public function getAllHotels($dbcon){


        $sql = "SELECT * FROM hotels";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $hotels = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $hotels;
    }

    public function addHotel($name, $description, $address, $db)
    {
        $sql = "INSERT INTO hotels (name, description, address) 
              VALUES (:name, :description, :address) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
       // $pst->bindParam(':area', $area);
        $pst->bindParam(':address', $address);

        $count = $pst->execute();

        return $count;
    }

    public function deleteHotel($id, $db){
        $sql = "DELETE FROM hotels WHERE id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();

        return $count;


    }

    public function updateHotel($id, $name, $description, $address, $db){
        $sql = "UPDATE hotels
                SET name = :name,
                description = :description,
                
                address = :address
                WHERE id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
     //   $pst->bindParam(':area', $area);
        $pst->bindParam(':address', $address);

        $count = $pst->execute();
        return $count;


    }
}