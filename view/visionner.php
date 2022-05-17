<?php
    session_start();
    include('../controler/deconnexion.php');
    include('../controler/article_user.php');
    if(!$_SESSION['login']){
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/main.css">
    <title>Mon space</title>
    
</head>
<body>
    <?php require('./header.php'); ?>

    <?php require('./menu.php'); ?>

    <?= $header; ?>

	<h2 style="color:aliceblue;" >Bienvenue dans ton Verse <?= $_SESSION['login']; ?></h2>

    <?= $menu; ?>

    <div class="container" id="mainSpace">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">https://www.twitch.tv/</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="ex : Nom d'une chaîne de streaming">
        </div>
            <!-- other thing -->
        <div id="PLAYER_DIV_ID" class="text-center" >
            
        </div>
        <div id="twitch-embed"></div>
    </div>

    <!-- Load the Twitch embed JavaScript file -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./player.js">

    </script>
    </div>


    
    
</body>

</html>