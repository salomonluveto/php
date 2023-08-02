<?php

session_start();

if(!empty($_COOKIE['compte'])) {
    setcookie('compte', "", time()-180);

}
elseif(!empty($_SESSION['compte'])) {
    session_destroy();

}

header('location:login.php');