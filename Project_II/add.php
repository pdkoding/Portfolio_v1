<?php

function add() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $title = $_POST['add_title'];
    $text = $_POST['add_text'];

    $query = $db->prepare("INSERT INTO `Content` (`content_name`, `text_content`) VALUES (:title, :content);");
    $query->bindParam(':title', $title);
    $query->bindParam(':content', $text);
    $query->execute();
    header("Location: index.php");
}

add();