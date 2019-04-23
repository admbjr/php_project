<?php
class Users
{
    public function getUsers($dbcon){
        $sql = "SELECT * FROM users";
        $pdo = $dbcon->prepare($sql);
        $pdo->execute();
        $users = $pdo->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }	
    
	 public function addUser($first_name, $last_name, $role, $email, $password, $sign_up_date, $profile_picture, $db)
    {
        $sql = "INSERT INTO users (first_name, last_name, role, email, password, sign_up_date, profile_picture) 
              VALUES (:first_name, :last_name, :role, :email, :password, :sign_up_date, :profile_picture) ";
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':first_name', $first_name);
        $pdo->bindParam(':last_name', $last_name);
        $pdo->bindParam(':role', $role);
        $pdo->bindParam(':email', $email);
        $pdo->bindParam(':password', $password);
        $pdo->bindParam(':sign_up_date', $sign_up_date);
        $pdo->bindParam(':profile_picture', $profile_picture);

        $user = $pdo->execute();
        return $user;
    }
	
	public function UpdateRole($id, $role, $db) {
        $pdo = $db->prepare('UPDATE users
                SET role = :role
                WHERE user_id = :user_id');

        $pdo->bindParam(':role', $role);
        $pdo->bindParam(':user_id', $id);
        $roleData = $pdo->execute();
        return $roleData;
    }

    public function getUserByRole($db){
        $query = "SELECT * FROM users WHERE role= :role";
        $pdostm = $db->prepare($query);
        $pdostm->bindValue(':role', 'User', PDO::PARAM_STR);
        $pdostm->execute();
        $a = $pdostm->fetchAll(PDO::FETCH_OBJ);
        return $a;
    }
	
	
}
?>