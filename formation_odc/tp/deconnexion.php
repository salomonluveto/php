<?php
session_start();
if(!empty($_COOKIE['page']) && !empty($_COOKIE['fiche'])){
    setcookie('page',$nom,time()-10);
    setcookie('fiche',$name,time()-10);
}
elseif (!empty($_SESSION['fer'])){
session_destroy();
}

    header('location:formulaire.php');