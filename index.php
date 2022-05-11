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
    <title>Verse - enjoy the game!</title>
</head>

<body >
    <?php require('./view/header.php'); ?>

    <?= $header; ?>

    <div class="container" id="accueil">

        <div class="row align-items-center ">

            <div class="col-lg-6 col-sm-12 lead side1">
                <div>
                    <h1 class="text-center">Verse is coming </br> for you !</h1>
                    <p>
                        Welcome to <strong>Verse</strong>
                        <br> rejoingez nous sans plus attendre dans cette expérience,
                        <br> partagez et divertissez-vous avec vos amis.

                    </p>
                    <iframe width="80%" src="https://www.youtube.com/embed/5qap5aO4i9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 col-sm-8 offset-sm-2 no-gutters text-center" id="buttons">
                <nav class="button">
                    <h3 style="margin-bottom:10px;color:rgb(119, 68, 196);">Lance-toi dans l'aventure !</h3>

                    <div id="join">
                        <button class="btn btn-primary" onclick="window.location.href = './inscription.php';">Rejoins-nous !</button>
                    </div>

                    <p>ou</p>

                    <div id="connect">
                        <button class="btn btn-primary" onclick="window.location.href = './pageConnexion.php';">Connecte-toi !</button>
                    </div>

                </nav>
            </div>
        </div>
    </div>



</body>

</html>