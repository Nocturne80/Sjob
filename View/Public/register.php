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
 if(isset($erreur)){
    var_dump($erreur);
 }
?>
    <form action="../../Controller/Router.php?action=register" method="post">

        <div class="divForm">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname">
        </div>

        <div class="divForm">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
        </div>

        <div class="divForm">
            <label for="mail">e-mail</label>
            <input type="email" name="mail" id="mail" required>
        </div>

        <div class="divForm">
            <label for="password">Mot de Passe</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="divForm">
            <label for="role">Rôle</label>
            <input type="bool" name="role" id="role" required>
        </div>


        <label for="rgpd"> Je suis d'accord avec les conditions d'utilisations</label>
        <input type="checkbox" name="rgpd" id="rgpd" required>

        <div class="divForm">
            <input type="submit" name="submit" value="Envoyer">
        </div>




    </form>
    
</body>
</html>