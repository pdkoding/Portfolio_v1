<?php
/*
* For about section
* Select the content from the field named 'about' and output it in the html
*/
function about_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'about';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}
/*
* For introduction section
* Select the content from the field named 'introduction' and output it in the html
*/
function int_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'introduction';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}
/*
* For contacts section
* Select the content from the field named 'contacts' and output it in the html
*/
function contacts_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'contacts';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}
/*
* For finish section
* Select the content from the field named 'finish' and output it in the html
*/
function finish_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'finish';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}
/*
* For finish section
* Select the content from the field named 'optional_p_1' and output it in the html If empty it stays empty and it`s not mandatory
*/
function optional_p_1_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'optional_p_1';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}
/*
* For finish section
* Select the content from the field named 'optional_p_2' and output it in the html If empty it stays empty and it`s not mandatory
*/
function optional_p_2_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = 'optional_p_2';");
    $fetchData->execute();
    return $fetchData->fetchAll();
}
/*
* For the `note` field
* Select the content from all the subsequent fields with id high that 7 and display it in additional field in order to make the add functionality full
*/
function addition_html() {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=Project_DB', 'root');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $fetchData = $handler->prepare("SELECT `text_content` FROM `Content` WHERE `content_name` = (`id` < '7');");
    $fetchData->execute();
    return $fetchData->fetchAll();
}