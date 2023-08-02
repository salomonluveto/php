<?php
session_start();
if(isset($_POST['pre']) && isset ($_POST['nom']) && !empty($_FILES['fichier']['name']) && isset ($_POST['email'])&& isset ($_POST['mdp'])&& isset ($_POST['vil'])){
    $nom = $_POST['nom'];
    $pre = $_POST['pre'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $vil = $_POST['vil'];
    $name = $_FILES['fichier']['name'];
    $size = $_FILES['fichier']['size'];
    $tmp = $_FILES['fichier']['tmp_name'];
    $dossier = 'doc/';
    $chemin = $dossier.$name;
    
      $db = new PDO("mysql:host=localhost;dbname=hotel","root","");

    move_uploaded_file($tmp, $chemin);
    
    $req = "INSERT INTO client(prenom,nom,email,password,ville,photos) VALUES('$pre','$nom','$email','$mdp','$vil','$chemin')";


    if($db->query($req)){
        $_SESSION['nom'] = $nom;
        $_SESSION['image'] = $chemin;
        header('location:form.php');
    }
}
if(isset($_POST['email1']) && isset($_POST['mdp1'])){
    $db = new PDO("mysql:host=localhost;dbname=hotel","root","");
    $email = $_POST['email1'];
    $mdp = $_POST['mdp1'];
    $req = "SELECT id_cli from client WHERE email = '$email' and password ='$mdp'";
    $a = $db->query($req);
    if($a->rowcount()>0){
        $_SESSION['email'] = $email;
        header('location:reservation.php');
    }
    else if($email = 'luveto@gmail.com' && $mdp = "1234"){
        $_SESSION['email'] = 'LUVETO';
        header('location:admin.php');

    }
    else{
        header('location:form.php');
    }
}

?>