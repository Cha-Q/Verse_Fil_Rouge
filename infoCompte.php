<?php session_start(); 
include_once('./controler/modifCompte.php'); 
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
<form action="" method="POST">
                <ul>
                    <li>
                        <label for="newlogin">Nouveau pseudo : </label>
                        <input type="text" name="newlogin" maxlength="50" />
                    </li>
                    <li>
                        <label for="mdp-newlogin">Mot de passe : </label>
                        <input type="password" name="mdp-newlogin" maxlength="15" />
                    </li>
                    <li>
                        <input type="submit" name="Newlogin" value="Confirmer">
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="newmdp">Nouveau mot de passe : </label>
                        <input type="password" name="newmdp" maxlength="50" />
                    </li>
                    <li>
                        <label for="mdp-newmdp">Mot de passe actuel : </label>
                        <input type="password" name="mdp-newmdp"  maxlength="15" />
                    </li>
                    <li>
                        <input type="submit" name="Newmdp" value="Confirmer">
                    </li>
                </ul>
</form>
</body>
</html>
