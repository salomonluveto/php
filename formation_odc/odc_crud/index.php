<?php
require 'connexion.php';

$req = "SELECT * FROM etudiant ORDER BY id DESC";
$query = $db->query($req);
$tab = $query->fetchAll();
?>

<html>
     <head>
             <title> formulaire </title>
             <meta charset = "utf-8"/>
             <style>
                 td,th{ padding:10px 20px;border:1px solid silver;}
                 table{ border-collapse:collapse;}
             </style>
     </head>
     <body>
         
             <h1> Liste des étudiants</h1>
             <p><a href = "create.php">Enregistrer</a></p>
             <table> 
                  <thead>
                      <tr><th>Prenom</th><th>Nom</th><th>Age</th><th>Modifier</th><th>Supprimer</th></tr>
                  </thead>
                  <tbody>
                <?php  foreach ($tab as $ligne) {
                    echo "<tr>
                    <td>".$ligne['prenom']."</td>
                    <td>" .$ligne['nom']."</td>
                    <td>".$ligne['age']."</td>
                    <td><a href='edit.php?id=".$ligne['id']."'>Modiier</a></td>
                    <td>
                        <form action = 'action.php' method = 'post'>
                             <input type = 'hidden' name = 'suppr' value = '".$ligne['id']."'/>
                             <input type = 'submit' value = 'Supprimer'/>
                        </form>
                    </td>
                    </tr>";
                }
                
                ?>
                
                  </tbody>
</table>

     </body>
</html>