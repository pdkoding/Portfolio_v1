<?php

function introduction_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'introduction';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}

