<?php

class Restaurant
{

    // public function getAreas($db){
    //     $query = "SELECT DISTINCT area FROM restaurants";
    //     $pdostm = $db->prepare($query);
    //     $pdostm->execute();

    //     //fetch all result
    //     $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
    //     return $results;
    // }
    // public function getRestaurantsInArea($db, $area){
    //     $query = "SELECT * FROM restaurants WHERE area= :area";
    //     $pdostm = $db->prepare($query);
    //     $pdostm->bindValue(':area', $area, PDO::PARAM_STR);
    //     $pdostm->execute();
    //     $h = $pdostm->fetchAll(PDO::FETCH_OBJ);
    //     return $h;
    // }

    public function getRestaurantById($id, $db){
        $sql = "SELECT * FROM restaurants WHERE id = :id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);

        $pst->execute();

        $restaurant =  $pst->fetch(PDO::FETCH_OBJ);

        return $restaurant;


    }
    public function getAllRestaurants($dbcon){


        $sql = "SELECT * FROM restaurants";
        $pdostm = $dbcon->prepare($sql);
        $pdostm->execute();

        $restaurants = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $restaurants;
    }

    public function addRestaurant($name, $description, $address, $db)
    {
        $sql = "INSERT INTO restaurants (name, description, address) 
              VALUES (:name, :description, :address) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
       // $pst->bindParam(':area', $area);
        $pst->bindParam(':address', $address);

        $count = $pst->execute();

        return $count;
    }

    public function deleteRestaurant($id, $db){
        $sql = "DELETE FROM restaurants WHERE id = :id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':id', $id);
        $count = $pst->execute();

        return $count;


    }

    public function updateRestaurant($id, $name, $description, $address, $db){
        $sql = "UPDATE restaurants
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