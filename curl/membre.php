<?php
session_start();

require 'connexion.php';

if(!empty($_COOKIE['compte'])) {
    $id = $_COOKIE['compte'];
}
elseif(!empty($_SESSION['compte'])) {
    $id = $_SESSION['compte'];
}
else {
    header('location:login.php');
}

$sql = "SELECT * FROM users WHERE id = ?";
        
$db = connexion();

$exec = $db->prepare($sql);
$exec->execute([$id]);

if($exec->rowCount() > 0) {
    $data = $exec->fetch();
    echo "Bienvenu ".$data['name'];
    echo '<p><a href="deconnexion.php">Deconnexion</a></p>';
}
else {
    header('location:login.php');
}
