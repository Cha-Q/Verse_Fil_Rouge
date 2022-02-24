<?php include('./controler/connexion_user.php');
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <h1>Veuillez entrer vos informations pour rejoindre votre espace</h1>
    <section>
        <form action="" method="post">
            <div>
                <label>Veuillez saisir votre Login ou votre adresse mail</label>
                <input type="text" name="login" id="login" placeholder="votre identifiant">
            </div>
            <div>
                <label>Veuillez saisir votre mot de passe</label>
                <input type="password" name="mdp" id="password" placeholder="mot de passe">
            </div>
            <input type="submit">
        </form>
    </section>
</body>

</html>