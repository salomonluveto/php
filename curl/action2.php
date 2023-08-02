<?php 
session_start();

if(!empty($_POST['name']) & !empty($_FILES['fichier'])) {
    $name = trim($_POST['name']);

    $fichier_name = $_FILES['fichier']['name'];
    $fichier_tmp = $_FILES['fichier']['tmp_name'];

    $dossier = 'img/';

    $tb = explode('.', $fichier_name);

    $ext = $tb[1];

    $new_name = date('Ymdhis').'.'.$ext;

    $destination = $dossier.$new_name;

    if(move_uploaded_file($fichier_tmp, $destination)) {
        if(isset($_POST['remember'])) {
            setcookie('nom', $name, time()+180);
            setcookie('fichier', $new_name, time()+180);
        }
        else{
            $_SESSION['nom'] = $name;
            $_SESSION['fichier'] = $new_name;
        }

        header('location:compte.php');
    }
}