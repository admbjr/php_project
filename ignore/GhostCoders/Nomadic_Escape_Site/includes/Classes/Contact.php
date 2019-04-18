<?php
class Contact
{
	public function addContact($name, $email, $subject, $message, $db) {

        $sql = "INSERT INTO contact_form (contact_name, contact_email, contact_subject, contact_message) 
              VALUES (:contact_name, :contact_email, :contact_subject, :contact_message) ";
        $pdo = $db->prepare($sql);
        $pdo->bindParam(':contact_name', $name);
        $pdo->bindParam(':contact_email', $email);
        $pdo->bindParam(':contact_subject', $subject);
        $pdo->bindParam(':contact_message', $message);

        $contact = $pdo->execute();
        return $contact;
    }
    public function getContact($db) {

        $sql = "SELECT * FROM contact_form";
        $pdo = $db->prepare($sql);
        $pdo->execute();
        $contact = $pdo->fetchAll(PDO::FETCH_OBJ);

        return $subscriber;
    }
}

?>