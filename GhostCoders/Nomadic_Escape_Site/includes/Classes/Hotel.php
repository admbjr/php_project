<?php

class Hotel
{

    // public function getAreas($db){
    //     $query = "SELECT DISTINCT area FROM hotels";
    //     $pdostm = $db->prepare($query);
    //     $pdostm->execute();

    //     $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
    //     return $results;
    // }
    // public function getHotelsInArea($db, $area){
    //     $query = "SELECT * FROM hotels WHERE area= :area";
    //     $pdostm = $db->prepare($query);
    //     $pdostm->bindValue(':area', $area, PDO::PARAM_STR);
    //     $pdostm->execute();
    //     $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
    //     return $s;
    // }

    public function getHotelById($hotel_id, $db){
        $sql = "SELECT * FROM hotels WHERE hotel_id = :hotel_id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':hotel_id', $hotel_id);

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

    public function addHotel($name, $description, $address, $area, $db)
    {
        $sql = "INSERT INTO hotels (name, description, address, area) 
              VALUES (:name, :description, :address, :area) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
        $pst->bindParam(':address', $address);
        $pst->bindParam(':area', $area);

        $count = $pst->execute();

        return $count;
    }

    public function deleteHotel($hotel_id, $db){
        $sql = "DELETE FROM hotels WHERE hotel_id = :hotel_id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':hotel_id', $hotel_id);
        $count = $pst->execute();

        return $count;


    }

    public function updateHotel($hotel_id, $name, $description, $address, $area, $db){
        $sql = "UPDATE hotels SET name = :name, description = :description, address = :address, area = :area WHERE hotel_id = :hotel_id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':hotel_id', $hotel_id);
        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
        $pst->bindParam(':address', $address);
        $pst->bindParam(':area', $area);

        $count = $pst->execute();
        return $count;


    }
}