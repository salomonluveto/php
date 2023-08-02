<?php
    $hello = (isset($_GET['message']) & isset($_GET['nom']))? $_GET['message'].' '.$_GET['nom']:null;
    
?>
<html>
<head>
</head>
<body>
    <P><a href ="index.php?message=bonjour&nom=Sarah">Sarah</a></p>
    <P><a href ="index.php?message=bonjour&nom=Elvis">Elvis</a></p>
    <?php echo $hello ?><br/><br/>
    <form action="index.php" method="GET">
                     Message  <input type="text" name = "message"/><br/><br/>
                     Nom      <input type="text" name = "nom"/></br><br/>
                     <input type="submit" value="valider"/>
             </form>
             
</body>
</html>