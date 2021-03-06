<?php
    include_once('../controler/create_user.php');
    
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descritpion" content="Verse - streaming and fun ! ">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./CSS/main.css">
    <title>Inscrivez-vous sur Verse</title>


</head>

<body>

<!-- Le Header de la page que l'on retrouve sur toutes les pages du site -->
    <?php require('./header.php'); ?>

    <?= $header; ?>


    <!-- Mise en place de la div qui sera le container du formulaire d'inscription -->
    <div class="container-lg" id="inscription">

        <h2>On t'a préparé un petit formulaire pour faire plus ample connaissance ! (et surtout créer ton compte)<br></h2>
        <div class="form ">
        <?= $error; ?>


            <form action="" method="post">

                <div class="form-group form-check text-center">
                    <div id="radioMF">
                        <div>
                            <input class="form-radio-input" type="radio" name="radioS" value="3" checked>
                            <label class="form-radio-label" for="radioL">Licorne</label>
                        </div>

                        <div>
                            <input class="form-radio-input" type="radio" name="radioS" value="2">
                            <label class="form-radio-label" for="radioF">Femme </label>
                        </div>

                        <div>
                            <input class="form-radio-input" type="radio" name="radioS" value="1">
                            <label class="form-radio-label" for="radioM">Homme</label>
                        </div>

                    </div>
                </div>
                <div class="form-group">

                    <label class="form-input-label" for="Nom">Nom :</label>
                    <br>
                    <input class="form-control" type="text" name="nom" placeholder="Entrez votre Nom" maxlength="20" minlength="2" id="Nom" />

                    <label class="form-input-label" for="prenom">Prénom :</label>
                    <br>
                    <input class="form-control" type="text" name="prenom" placeholder="Entrez votre prenom" maxlength="20" minlength="2" id="prenom" />

                </div>
                <div class="form-group">
                    <label for="login">Pseudo :</label>
                    <br>
                    <input class="form-control" type="text" name="login" placeholder="Entrez votre Pseudo" maxlength="20" minlength="2" id="login" />
                </div>

                <div class="form-group">

                    <label for="age">Date de naissance :</label>
                    <br>
                    <input class="form-control" type="date" name="age" placeholder=" " min="1910-01-01" id="age" />

                </div>

                <div class="form-group">
                    <label for="email">Mail :</label>
                    <br>
                    <input class="form-control" type="email" name="mail" placeholder="votreMail@smthg.com" />

                    <label for="mail2">Confirmez votre mail :</label>
                    <br>
                    <input class="form-control" type="email" name="mail2" placeholder="votreMail@smthg.com" />
                </div>


                <div class="form-group">

                    <label for="password">Entrez votre mot de passe :</label>
                    <br>
                    <input class="form-control" type="password" name="mdp" placeholder="Hackerman" maxlength="20" autocomplete="password" />

                    <label for="password">Confirmez votre mot de passe :</label>
                    <br>
                    <input class="form-control" type="password" name="mdp2" placeholder="Hackerman" maxlength="20" autocomplete="password" />

                </div>
            
        
                <div class="submit text-center ">

                    <button class="btn btn-primary col-2 " type="submit" name="submit">Valider</button>

                    <a class="log btn btn-primary col-2" href="../index.php"  type="submit" name="submit">Retour</a>

                </div>

            </form>

        </div>
    </div>

</body>

</html>