<?php
class Subscriber
{
	public function addSubscriber($name, $email, $db) {

        $sql = "INSERT INTO subscriber_news_letter (subscriber_name, subscriber_email) 
              VALUES (:subscriber_name, :subscriber_email) ";
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':subscriber_name', $name);
        $pdo->bindParam(':subscriber_email', $email);

        $subscriber = $pdo->execute();
        return $subscriber;
    }
    public function getSubscriber($db) {

        $sql = "SELECT * FROM subscriber_news_letter";
        $pdo = $db->prepare($sql);
        $pdo->execute();
        $subscriber = $pdo->fetchAll(PDO::FETCH_OBJ);

        return $subscriber;
    }
}

?>