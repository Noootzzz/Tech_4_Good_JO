<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['content'])) {
        $contact_content = $_POST['content'];

        require 'database.php';



        $stmt = $database->prepare("INSERT INTO contact (user_id, content) VALUES (:user_id, :content)");


        $stmt->bindParam(':user_id', $_SESSION['user_id']);
        $stmt->bindParam(':content', $contact_content);


        if ($stmt->execute()) {
            header("Location: home.php");
            exit();
        } else {

        }
    } else {

    }
}
?>