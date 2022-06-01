<?php 
    include('../controler/connexion_user.php');

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
    <link rel="stylesheet" href="./CSS/main.css">
    
    <title>Document</title>
</head>

<body>

    <?php require('./header.php'); ?>

    <?= $header; ?>
    
	<div class="container " id="connection">

    <h1 class="text-center">Veuillez entrer vos informations pour rejoindre votre espace</h1>
    <?= $msg?>
        <div class="form-group">
            
            <form action="" method="post">
                <div>
                    <label class="form-input-label">Veuillez saisir votre identifiant ou votre adresse mail</label>
                    <input class="form-control" type="text" name="login" id="login" placeholder="votre identifiant" required>
                </div>
                <div>
                    <label class="form-input-label">Veuillez saisir votre mot de passe</label>
                    <input class="form-control" type="password" name="mdp" id="password" placeholder="mot de passe" required>
                </div>
                
                <div class="text-center">

                    <button class="log btn btn-primary col-3 " type="submit" name="submit" >Valider</button>
                    
                    <a class="log btn btn-primary col-3" href="../index.php"  type="submit" name="submit">Retour</a>
                    
                </div>
                
                
            </form>
            
        </div>
    </div>
</body>

</html>