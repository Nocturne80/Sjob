<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    if($_SESSION["role"] == 0):     
    ?>
    <a href="../../index.php">Accueil</a>

    <?php 
    
    elseif($_SESSION["role"] == 1):    
    ?>
    <a href="../../Controller/Router.php?action=all">Voir les utilisateurs</a>
    <?php endif; ?>


</body>
</html>