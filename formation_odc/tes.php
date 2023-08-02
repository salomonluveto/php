<?php
session_start();

if(!empty($_SESSION['panier'])){
    $panier = $_SESSION['panier'];
    foreach($panier as $produit){
        echo "</p>$produit</p>";
    }
}
?>