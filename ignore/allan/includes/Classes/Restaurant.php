<?php

class Restaurant
{

    public function getAreas($db){
        $query = "SELECT DISTINCT area FROM restaurants";
        $pdostm = $db->prepare($query);
        $pdostm->execute();

        $results = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }
    public function getRestaurantsInArea($db, $area){
        $query = "SELECT * FROM restaurants WHERE area= :area";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':area', $area, PDO::PARAM_STR);
        $pdostm->execute();
        $s = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }

    public function getRestaurantById($restaurant_id, $db){
        $sql = "SELECT * FROM restaurants WHERE restaurant_id = :restaurant_id ";
        $pst = $db->prepare($sql);
        $pst->bindParam(':restaurant_id', $restaurant_id);

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

    public function addRestaurant($name, $description, $address, $area, $db)
    {
        $sql = "INSERT INTO restaurants (name, description, address, area) 
              VALUES (:name, :description, :address, :area) ";
        $pst = $db->prepare($sql);

        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
        $pst->bindParam(':address', $address);
        $pst->bindParam(':area', $area);

        $count = $pst->execute();

        return $count;
    }

    public function deleteRestaurant($restaurant_id, $db){
        $sql = "DELETE FROM restaurants WHERE restaurant_id = :restaurant_id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':restaurant_id', $restaurant_id);
        $count = $pst->execute();

        return $count;


    }

    public function updateRestaurant($restaurant_id, $name, $description, $address, $area, $db){
        $sql = "UPDATE restaurants SET name = :name, description = :description, address = :address, area = :area WHERE restaurant_id = :restaurant_id";
        $pst = $db->prepare($sql);
        $pst->bindParam(':restaurant_id', $restaurant_id);
        $pst->bindParam(':name', $name);
        $pst->bindParam(':description', $description);
        $pst->bindParam(':address', $address);
        $pst->bindParam(':area', $area);

        $count = $pst->execute();
        return $count;


    }
}