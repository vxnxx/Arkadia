<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>Création de Compte</title>
</head>
<body>
    <img class="mainlogo" src="img/LOGO FULL.png" alt="logo arkadia">
    <div class="formcontainer2"></div>
    <div class="formcontainer">
        
        <form class="form" action="acc_Creation.php" method="post">
            <span class="titre">Création de compte</span> 
            <input class="inputext" type="text" style="font-size: 18px; height: 40px;" placeholder="Nom d'utilisateur" name="login">
            <input class="inputext" style="font-size: 18px; height: 40px;" type="text" placeholder="Email" name="email">
            <input class="inputext" style="font-size: 18px; height: 40px;" type="password" placeholder="Mot de passe" name="password">
            <input class="inputext" style="font-size: 18px; height: 40px;" type="password" placeholder="Confirmation du mot de passe" name="password_confirmation" >
            <input class="loginbutton" type="submit" value="S'enregistrer" name="enregistrement">
        </form>
    </div>
    

</body>
</html>