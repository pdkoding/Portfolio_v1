<?php

function about_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'about';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}

function int_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'introduction';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}

function contacts_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'contacts';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}

function finish_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'finish';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}

function optional_p_1_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'optional_p_1';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}

function optional_p_2_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'optional_p_2';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}