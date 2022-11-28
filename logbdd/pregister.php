<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <script src="js/errmsg.js"></script>
    <title>Création de Compte</title>
</head>
<body>
    <div class="formcontainer2"></div>
    <div class="formcontainer">
        
        <form class="form" action="php/register.php" method="post">
            <span class="titre">Création de compte</span> 
            <input class="inputext" type="text" style="font-size: 18px; height: 40px;" placeholder="Nom d'utilisateur" name="login">
            <input class="inputext" style="font-size: 18px; height: 40px;" type="text" placeholder="Email" name="email">
            <input class="inputext" style="font-size: 18px; height: 40px;" type="password" placeholder="Mot de passe" name="password">
            <input class="inputext" style="font-size: 18px; height: 40px;" type="password" placeholder="Confirmation du mot de passe" name="passConf" >
            <?php
            if(isset($_GET['notEquals'])) {
            echo('<span class="defontErr">Les deux mots de passe ne correspondent pas</span>');
            }
            ?>
            <input class="loginbutton" type="submit" value="S'enregistrer" name="enregistrement">
            <?php
            if(isset($_GET['err'])) {
            echo('<span class="defontErr">L\'identifiant ou l\'email sont déjà utilisés</span>');
            }
            ?>
            <?php
            if(isset($_GET['empty'])) {
            echo('<span class="defontErr">Veuillez remplir <strong>TOUS</strong> les champs</span>');
            }
            ?>
        </form>
    </div>
    

</body>
</html>