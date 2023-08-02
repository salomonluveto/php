<?php 
session_start();


if(isset($_POST['check']) && isset ($_POST['nom']) && !empty($_FILES['fichier']['name'])){
    $nom = $_POST['nom'];
    $name = $_FILES['fichier']['name'];
    $size = $_FILES['fichier']['size'];
    $tmp = $_FILES['fichier']['tmp_name'];
    $dossier = 'doc/';
    $chemin = $dossier.$name;
    
    move_uploaded_file($tmp, $chemin);
    setcookie('page',$nom,time()+10);
    setcookie('fiche',$name,time()+10);
if(!empty($_COOKIE['page']) && !empty($_COOKIE['fiche'])){
    echo "you're welcome mr ".$_COOKIE['page']."<br/><br/>";
    
    echo "<img src = $chemin width = '350px' >
    <br/><a href = 'deconnexion.php'>Deconnexion</a>";
    
}

}
else if(isset ($_POST['nom']) && !empty($_FILES['fichier']['name'])){
    $nom = $_POST['nom'];
    $name = $_FILES['fichier']['name'];
    $size = $_FILES['fichier']['size'];
    $tmp = $_FILES['fichier']['tmp_name'];
    $dossier = 'doc/';
    $chemin = $dossier.$name;
    $_SESSION['fer'] = $_POST['nom'];
    
    
    move_uploaded_file($tmp, $chemin);

    echo "you're welcome mr ".$_SESSION['fer']."<br/><br/>";
    echo "<img src = $chemin width = '350px' >
    <br/><a href = 'deconnexion.php'>Deconnexion</a>";
    
}
else{
    header('location:formulaire.php');
}
   
?>