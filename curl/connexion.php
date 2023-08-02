<?php

function connexion() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=phptest', 'root', '');
    
        return $pdo;
    }
    catch(Exception $e) {
        die($e);
    }
}


