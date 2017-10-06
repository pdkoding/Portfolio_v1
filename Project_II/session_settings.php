<?php
$expire_after = 5;
function session_length($expire_after){
    if (isset($_SESSION['last_action'])) {
        $seconds_inactive = time() - $_SESSION['last_action'];
        $expire_after_seconds = $expire_after * 60;
        if ($seconds_inactive >= $expire_after_seconds) {
            session_unset();
            session_destroy();
        }
    }
}

session_length($expire_after);
$_SESSION['last_action'] = time();

session_start();
if(isset($_SESSION['loggedIn'])){
    header("location: update_page.php");
}

?>