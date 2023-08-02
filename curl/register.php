<?php 
if(!empty($_COOKIE['nom'])) {
    header('location:compte.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ouvrir un compte</h1>
    <?php 
    if(!empty($_COOKIE['message'])) {
        echo "<p><b>".$_COOKIE['message']."</b></p>";
    }
    ?>
<form action="action3.php" method="post" enctype="multipart/form-data">
   <p>Nom : <input type="text" required="" name="name" id=""></p>
   <p>Email : <input type="email"  required="" name="email" id=""></p>
   <p>Mot de passe : <input type="password" required="" name="pwd" id=""></p>
   <p>Confirmer : <input type="password" required="" name="conf" id=""></p>
    <p><button type="submit" name="btn_register">Valider</button></p>
    </form>
</body>
</html>