<?php
    session_start();
    include('./controler/deconnexion.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Mon space</title>
</head>
<body>
    <header>
        <p> Powered by <a href="www.twitch.com">Twitch</a><i class="fab fa-twitch"></i></p>
    </header>

	<h2 >Bienvenue dans ton Verse <?= $_SESSION['login']; ?></h2>

    <nav class="navbar navbar-expand-lg bg-light">

        <a class="navbar-brand" href="./index.html">Verse</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="./infoCompte.php">Mon compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mes salons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mes amis</a>
                </li>

            </ul>
                <form method="POST">
                    <input value="deconnect" class="btn btn-navbar" name="deconnect" type="submit"   >se déconnecter </input>
                    </form>
        </div>
        
    </nav>

    <div class="container" id="mainSpace">
        <h2>Ceci est ta dashboard bienvenu chez toi ! <i class="fab fa-twitch" onclick="window.location.href = './index.php';" style="color:blue;"></i></h2>

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
    

    <script type="text/javascript" src="./player.js">

    </script>
    </div>


    
    
</body>

</html>