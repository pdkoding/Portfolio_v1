<?php
include 'session_settings.php';
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<html>
<body>
    <div class="contaner">
        <h1>Log In</h1>
        <form action="login_function.php" id="login_form" method="POST" autocomplete="new-password">
            <input type="text" name='Username' id="username" size="20" autocomplete="new-password" placeholder="username"/><br>
            <input type="password" name='Password' id="password" size="20" autocomplete="new-password" placeholder="password"/>
            <br><input type="submit">
        </form>
    </div>
</body>
</html>