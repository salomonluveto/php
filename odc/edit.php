<?php
require 'connexion.php';

if(!empty($_GET['id'])){
        $id = (int)$_GET['id'];
    $req = "SELECT * FROM etudiant WHERE id = $id";

$query = $db->query($req);
$row = $query->rowCount();
if($row>0){
$data = $query->fetch();
}
else{
        header('location:index.php');
}

}
else{
        header('location:index.php');
}

$req = "SELECT * FROM etudiant";
$query = $db->query($req);
$tab = $query->fetchAll();
?>
<html>
     <head>
             <title> formulaire </title>
             <meta charset = "utf-8"/>
     </head>
     <body>
            <p> <a href = 'index.php'>les étudiants</a></p>
             <form action="action.php" method="post">
                     prenom       <input type="text" name = "prenom2" value = "<?= $data['prenom'] ?>"/><br/><br/>
                     Nom       <input type="text" name = "nom2"  value = "<?= $data['nom'] ?>"/><br/><br/>
                     Age   <input type="text" name = "age2"  value = "<?= $data['age'] ?>"/><br/><br/>
                           <input type = "hidden" name = "id"  value = "<?= $data['id'] ?>"/>
                               <input type="submit" value="valider"/>
             </form>
     </body>
</html>
