<?php


function get_data() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $fetchData = $db->prepare("SELECT `content_name` FROM `Content`;");
    $fetchData->execute();
    return $fetchData->fetchAll();
}

function return_about() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,  PDO::FETCH_ASSOC);

    $fetchData = $handler->prepare("SELECT `id`,`text_content` FROM `Content`WHERE `content_name` = :about;");
    $fetchData->bindParam(':about', $_POST['about']);
    $fetchData->execute();
    $result = $fetchData->fetch();
    return $result;
}

function update() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $text = $_POST['text'];

    $query = $db->prepare("UPDATE `Content` SET `text_content` = :text WHERE id = :id;");
    $query->bindParam(':text', $text);
    $query->bindParam(':id', $_POST['id']);
    $query->execute();
    return $query;
}
