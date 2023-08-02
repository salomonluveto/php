<?php
session_start();

if(!empty($_COOKIE['nom']) & !empty($_COOKIE['fichier'])) {
    echo '<p>Bienvenu <b>'.$_COOKIE['nom'].'</b></p>
    <p><img src="img/'.$_COOKIE['fichier'].'" /></p>
    <p><a href="deconnexion.php">Deconnexion</a></P>';

}
elseif(!empty($_SESSION['nom']) & !empty($_SESSION['fichier'])) {
    echo '<p>Bienvenu <b>'.$_SESSION['nom'].'</b></p>
    <p><img src="img/'.$_SESSION['fichier'].'" /></p>
    <p><a href="deconnexion.php">Deconnexion</a></P>';

}
else {
    header('location:formulaire.php');
}