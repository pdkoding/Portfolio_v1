<?php

session_start();

$username = 'hello';
$password = 'hey';

/*
* For login page
* Compare`s the input with the username and password there are already stored inside this file
*/
function LogIn($username, $password) {
    if ($username === $_POST['Username'] && $password === $_POST['Password']) {
        $_SESSION['loggedIn'] = true;
        header('Location: update_page.php');
        exit();
    }   else {
        session_destroy();
        header('Location: fail_login.html');
        exit;
    }
}

LogIn($username, $password);