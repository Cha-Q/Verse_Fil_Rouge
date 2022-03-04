<?php session_start(); 
include_once('./controler/modifCompte.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descritpion" content="Verse - streaming and fun ! ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>

    <header>

    <p> Powered by <a href="www.twitch.com">Twitch</a><i class="fab fa-twitch"></i></p>

    </header>

    <div class="container modifCompte">

        <form action="" method="post">

            <h2>Modifiez vos informations</h2>
            
            <div class="form-group form-check ">
            
                <label class="form-input-label" for="newlogin">Nouveau pseudo : </label>
                <input class="form-control" type="text" name="newlogin" maxlength="50" />
            
            
                <label class="form-input-label" for="mdp-newlogin">Mot de passe : </label>
                <input class="form-control" type="password" name="mdp-newlogin" maxlength="15" />
            
                <button class="btn btn-primary col-2 i" type="submit" name="Newlogin">Confirmer</button>
            </div>
            
        </form>
        <form action="" method="post">
            <div class="form-group form-check ">
                <label class="form-input-label" for="newmdp">Nouveau mot de passe : </label>
                <input class="form-control" type="password" name="newmdp" maxlength="50" />
            
                <label class="form-input-label" for="mdp-newmdp">Mot de passe actuel : </label>
                <input class="form-control" type="password" name="mdp-newmdp"  maxlength="15" />
            
                
                <button class="btn btn-primary col-2 i" type="submit" name="Newmdp">Confirmer</button>
            </div>
        </form>

    </div>
</body>
</html>
