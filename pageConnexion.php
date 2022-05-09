<?php 
    include('./controler/connexion_user.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="descritpion" content="Verse - streaming and fun ! ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./view/Images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./view/Images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./view/Images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Document</title>
</head>

<body>
    <header>
        <p> Powered by <a href="https://www.twitch.com" target="_blank">Twitch </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitch" viewBox="0 0 16 16">
                    <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z"/>
                    <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z"/>
            </svg>
        </p>
    </header>
    
	<div class="container " id="connection">

    <h1 class="text-center" style="color:black;">Veuillez entrer vos informations pour rejoindre votre espace</h1>
    <?= $msg?>
        <div class="form-group">
            
            <form action="" method="post">
                <div>
                    <label class="form-input-label">Veuillez saisir votre Login ou votre adresse mail</label>
                    <input class="form-control" type="text" name="login" id="login" placeholder="votre identifiant" required>
                </div>
                <div>
                    <label class="form-input-label">Veuillez saisir votre mot de passe</label>
                    <input class="form-control" type="password" name="mdp" id="password" placeholder="mot de passe" required>
                </div>
                
                <div class="text-center">

                    <button class="log btn btn-primary col-3 " type="submit" name="submit" >Valider</button>
                    
                    <a class="log btn btn-primary col-3" href="./index.php"  type="submit" name="submit">Retour</a>
                    
                </div>
                
                
            </form>
            
        </div>
    </div>
</body>

</html>