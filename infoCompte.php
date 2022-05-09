<?php session_start(); 
include_once('./controler/modifCompte.php'); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descritpion" content="Verse - streaming and fun ! ">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./view/Images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./view/Images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./view/Images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Document</title>

</head>
<body>

    <style>
        p{
            color: rgb(119, 68, 196);
        }
    </style>

    <header>
        <p> Powered by <a href="https://www.twitch.com" target="_blank">Twitch </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                    <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z"/>
                    <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z"/>
            </svg>
        </p>
    </header>

    <div class="container modifCompte">

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
</body>
</html>
