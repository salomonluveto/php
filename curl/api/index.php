<?php
require '../connexion.php';
//print_r($_SERVER['REQUEST_METHOD']);
if(!empty($_GET['p'])) {
    $table = $_GET['p'];
    $tb_url = explode('/', $table);
  
    if(count($tb_url) > 1) {
        $dossier = $tb_url[0];
        $id = $tb_url[1];
    }
    else {
        $dossier = $table;
        $id = null;  
    }
    
}
else {
    echo json_encode(['message'=>'Veuillez identifier le nom de la table']);
    die();
}
switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
       
        $action = ($id != null)?"getOne":"getAll";
        require $dossier.'/controller.php';
        break;
    
    case 'POST':
        $action = "create";
        require $dossier.'/controller.php';
        break;

    case 'PUT':
        $action = "update";
        require $dossier.'/controller.php';
        break;

    case 'DELETE':
        $action = "delete";
        require $dossier.'/controller.php';
        break;
    default:
        echo 'head';
        break;
}