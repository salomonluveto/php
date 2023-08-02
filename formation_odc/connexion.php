<?php
function connexion(){
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=php','root','');
        
        return $pdo;
        }
        catch(Exception $e){
            die($e);
        }
}
?>