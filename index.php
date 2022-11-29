<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Arkadia</title>
</head>

<body>

    <div class="formcontainer2"></div>
    <div class="formcontainer">

        <form class="form" action="php/verifcreds.php" method="post">
            <input class="inputext" type="text" placeholder="Nom d'utilisateur" name="login">
            <input class="inputext" type="password" placeholder="Mot de passe" name="password">
            <input class="loginbutton" type="submit" value="Connexion" name="envoi">
            <?php
            if (isset($_GET['empty'])) {
                echo ('<span class="defontErr">Veuillez remplir les champs emails et/ou mots de passe</span>');
            }
            if (isset($_GET['invalidPassword'])) {
                echo ('<span class="defontErr">L\'identifiant ou le mot de passe est invalide</span>');
            }
            ?>
            <span class="defont">Vous n'avez pas de <a href="pregister.php" class="defont">compte ?</a></span>
        </form>
    </div>
</body>

</html>