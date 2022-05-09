<?php
    session_start();
    include('./controler/deconnexion.php');
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="./view/Images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./view/Images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./view/Images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest"> -->
    
    <title>Mon space</title>
    
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

	<h2 style="color:aliceblue;" >Bienvenue dans ton Verse <?= $_SESSION['login']; ?></h2>

    <nav class="navbar navbar-expand-lg bg-light">

        <a class="navbar-brand" href="./index.html">Verse</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="./infoCompte.php">Mon compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mes salons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mes amis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
            <form method="POST" >
                <input value="se deconnecter" id="deconnect" class="btn btn-navbar" name="deconnect" type="submit"></input>
            </form>
        </div>
        
    </nav>

    <div class="container" id="mainSpace">
        <h2>Ceci est ta dashboard bienvenu chez toi ! <i class="fab fa-twitch" style="color:blue;"></i></h2>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">https://www.twitch.tv/</span>
        </div>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
    <script src= "http://player.twitch.tv/js/embed/v1.js" ></script>
    <div id="PLAYER_DIV_ID" class="text-center" >
        <span id="player"></span>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./player.js">

    </script>
    </div>


    
    
</body>

</html>