<?php

function get_delete_data() {
    $db = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $fetchData = $db->prepare("SELECT `content_name` FROM `Content`;");
    $fetchData->execute();
    return $fetchData->fetchAll();
}