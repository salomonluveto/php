<?php 
if(!empty($_COOKIE['compte'])) {
    header('location:membre.php');
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
    <h1>Se connecter</h1>
    <?php 
    if(!empty($_COOKIE['message'])) {
        echo "<p><b>".$_COOKIE['message']."</b></p>";
    }
    ?>
<form action="action3.php" method="post" enctype="multipart/form-data">

   <p>Email : <input type="email"  required="" name="email" id=""></p>
   <p>Mot de passe : <input type="password" required="" name="pwd" id=""></p>
   <p><input type="checkbox" value="1"name="remember" id=""> Se rappeler de moi</p>  
   <p><button type="submit" name="btn_login">Valider</button></p>
    </form>
</body>
</html>