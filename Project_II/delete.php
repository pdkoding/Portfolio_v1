<?php

function delete() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


    $query = $db->prepare("DELETE FROM `Content` WHERE `content_name` = :content_name;");
    $query->bindParam(':content_name', $_POST['delete']);
    $query->execute();

    header("Location: update_page.php");
}

delete();