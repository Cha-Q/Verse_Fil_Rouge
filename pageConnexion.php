<?php 
include('./controler/connexion_user.php');

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
        <!-- <nav>
            <ul>
                <li>Regarder</li>
                <li>Salon</li>
                <li>Mes informations</li>
            </ul>
        </nav> -->
    </header>

	<div class="container " id="inscription">

    <h1 class="text-center" style="color:black;">Veuillez entrer vos informations pour rejoindre votre espace</h1>
    <div class="form-group">
        <form action="" method="post">
            <div>
                <label class="form-input-label">Veuillez saisir votre Login ou votre adresse mail</label>
                <input class="form-control" type="text" name="login" id="login" placeholder="votre identifiant">
            </div>
            <div>
                <label class="form-input-label">Veuillez saisir votre mot de passe</label>
                <input class="form-control" type="password" name="mdp" id="password" placeholder="mot de passe">
            </div>
            <button class="btn btn-primary col-2 " type="submit" name="submit">Valider</button>
            <button class="btn btn-primary col-2" onclick="window.location.href = './index.php';" type="submit" name="submit">retour</button>
        </form>
	</div>
    </div>
</body>

</html>