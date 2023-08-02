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
<form action="action2.php" method="post" enctype="multipart/form-data">
   <p>Nom : <input type="text" name="name" id=""></p>
   <p><input type="checkbox" value="1"name="remember" id=""> Se rappeler de moi</p>     
    <p><input type="file" accept="image/jpg, image/png" name="fichier" id=""></p>
        <p><button type="submit">Uploader</button></p>
    </form>
</body>
</html>