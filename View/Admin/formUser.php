<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="../../Controller/Router.php?action=create"  method="post">


<div class="divForm">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div class="divForm">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" required>
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
        <label for="role">Roles</label>
            <select name="role" id="role" required>
                <option value="">--- Choisir son role ---</option>
                <option value="user">Utilisateur</option>
                <option value="advisor">Conseillère</option>
                <option value="company">Entreprise</option>
                <option value="jobseeker">Demandeur d'emploi</option>
            </select>
        </div>
        <label for="rgpd"> Je suis d'accord avec les conditions d'utilisations</label>
        <input type="checkbox" name="rgpd" id="rgpd" required>
        <div class="divForm">
            <input type="submit" name="submit" value="Envoyer">
        </div>










</form>







</body>
</html>