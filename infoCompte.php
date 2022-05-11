<?php session_start(); 
include_once('./controler/modifCompte.php');
include('./controler/deconnexion.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descritpion" content="Verse - streaming and fun ! ">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <link rel="apple-touch-icon" sizes="180x180" href="./view/Images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./view/Images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./view/Images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php require('./view/header.php'); ?>
    <?php require('./view/menu.php'); ?>
    <style>
        p{
            color: rgb(119, 68, 196);
        }
    </style>

    <?= $header; ?>

    <?= $menu; ?>

    <div class="container" id="modifCompte">

        <form action="" method="post">

            <h2>Modifiez vos informations</h2>
            <?= $msg?>
            <div class="form-group form-check ">
            
                <label class="form-input-label" for="newlogin">Nouveau pseudo : </label>
                <input class="form-control" type="text" name="newlogin" maxlength="50" />
            
            
                <label class="form-input-label" for="mdp-newlogin">Mot de passe : </label>
                <input class="form-control" type="password" name="mdp-newlogin" maxlength="15" />
            
                <button class="btn btn-primary col-2 i" type="submit" name="Newlogin">Confirmer</button>
            </div>
            
        </form>
        <form action="" method="post">
        <?= $msg1?>
            <div class="form-group form-check ">
                <label class="form-input-label" for="newmdp">Nouveau mot de passe : </label>
                <input class="form-control" type="password" name="newmdp" maxlength="50" />
            
                <label class="form-input-label" for="mdp-newmdp">Mot de passe actuel : </label>
                <input class="form-control" type="password" name="mdp-newmdp"  maxlength="15" />
            
                
                <button class="btn btn-primary col-2 i" type="submit" name="Newmdp">Confirmer</button>
            </div>
        </form>

        <h2>Supprimez définitivement votre compte</h2>
        <form action="" method="post">
        <?= $msg2?>
            <div class="form-group form-check ">
                    <label class="form-input-label" for="mdpSuppr">Entrez votre mot de passe </label>
                    <input class="form-control" type="password" name="mdpSuppr" maxlength="50" />
            
                    <label class="form-input-label" for="mpdConf">Confirmez votre mot de passe : </label>
                    <input class="form-control" type="password" name="mpdConf"  maxlength="15" />
                    
                    <button class="btn btn-primary col-2 i" type="submit" name="delete">Confirmer</button>
            </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
