<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../Controller/Router.php?action=login" method="post">
        <label for="mail">Mail</label>
        <input type="email" name="mail" id="mail">

        <label for="password">Mot de Passe</label>
        <input type="password" name="password" id="password">

        <input type="submit" value="Login">
    </form>
</body>
</html>