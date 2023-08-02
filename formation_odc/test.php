<?php
/*
session_start();
$_SESSION['panier'][]="chemise";
$_SESSION['panier'][]="pantalon";
$_SESSION['panier'][]="soulier";
if(!empty($_SESSION['panier'])){
    print_r($_SESSION['panier']);
}
*/


setcookie('page','about',time()+60);
if(!empty($_COOKIE['page'])){
    echo "votre page favorite est ".$_COOKIE['page'];
}



?>