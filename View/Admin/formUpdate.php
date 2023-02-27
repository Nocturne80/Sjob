<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../Controller/Router.php?action=update" method="post">
        <input type="hidden" name="id_user" id="id_user" value="<?= $user["id_user"]; ?>">

        <div class="divForm">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" value="<?= $user["lastname"]; ?>">
        </div>
        <div class="divForm">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" value="<?= $user["firstname"]; ?>">
        </div>
        <div class="divForm">
            <label for="mail">mail</label>
            <input type="mail" name="mail" id="mail" required>
        </div>
        <div class="divForm">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="divForm">
            <label for="phone">Numéro de téléphone</label>
            <input type="number" name="phone" id="phone">
        </div>
        <div class="divForm">
            <label for="cv">CV</label>
            <input type="files" name="cv" id="cv">
        </div>
        <div class="divForm">
            <label for="area">Zone géographique</label>
            <input type="text" name="area" id="area">
        </div>
        <div class="divForm">
            <label for="address">Adresse</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="divForm">
            <input type="submit" name="submit" value="Envoyer">
        </div>

        


</body>
</html>