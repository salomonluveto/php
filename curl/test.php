<?php 
session_start();

$_SESSION['panier'][] = "Chemise";
$_SESSION['panier'][] = "Pantalon";
$_SESSION['panier'][] = "Soulier";

if(!empty($_SESSION['panier']))
{
    print_r($_SESSION['panier']);
}