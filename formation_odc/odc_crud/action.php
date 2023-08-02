<?php 
require'connexion.php';
// insértion dans la base de donée

  if(isset($_POST['prenom']) & isset($_POST['nom']) & isset($_POST['age'])){
      
      $pre = $_POST['prenom'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $req = "INSERT INTO etudiant(prenom,nom,age) VALUES('$pre','$nom','$age')";


if($db->query($req)){
    header('location:index.php');
}
else{
    echo "Erreur";
}

  }
// modification

  if(!empty($_POST['prenom2']) & !empty($_POST['nom2']) & !empty($_POST['age2']) & !empty($_POST['id'])){
  
    $id = (int)$_POST['id'];
    $pre = htmlspecialchars ($_POST['prenom2']);
    $nom = htmlspecialchars($_POST['nom2']);
    $age = (int)$_POST['age2'];
    $req = "UPDATE etudiant SET prenom ='$pre' , nom = '$nom' ,age = $age WHERE id = $id";


if($db->query($req)){
  header('location:index.php');
}
else{
  echo "Erreur";
}

}
// suppression
if(!empty($_POST['suppr'])){
  $id = $_POST['suppr'];
  $sql = "DELETE FROM etudiant WHERE id = $id";
  
  if($db->query($sql)){
    header('location:index.php');
  }
  else{
    echo "Erreur";
  }
}
?>