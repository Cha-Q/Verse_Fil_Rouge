<?php
include('./controler/deconnexion.php');
    session_start();
?>

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
    <h1>Bienvenue sur ton Verse <?= $_SESSION['login']; ?></h1>
        <h2>Ceci est ta dashboard à partir d'ici tu peux controler ce que tu souhaites</h2>
        <nav>
            <ul>
                <li><a href="./infoCompte.php">Mon compte</a></li>
                <li><a href="#">Mes salons</a></li>
                <li><a href="#">Mes amis</a></li>
                <form action="" method="POST">
                    <input type="submit" id="deconnect" name="deconnect" value="Déconnexion">
                    <input type="submit" name="rester" value="Je reste">
                </form>
            </ul>
        </nav>
    </header>
    <?Php if(isset($_SESSION['login'])){
        echo "<p>Connecté comme ".$_SESSION['login']."</p>";
    }
    ?>

</body>
</html>