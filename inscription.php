<?php
    include_once('./controler/create_user.php');
?>

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
    <title>Cette fois c'est la bonne on s'y met</title>


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

    <div class="container " id="inscription">

        <h2>On t'a préparé un petit formulaire pour faire plus ample connaissance ! (et surtout créer ton compte)<br></h2>
        <div class="form ">



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

                    <label for="age">Age :</label>
                    <br>
                    <input class="form-control" type="number" name="age" placeholder=" " maxlength="2" id="age" />

                </div>

                <div class="form-group">
                    <label for="email">Mail :</label>
                    <br>
                    <input class="form-control" type="email" name="mail" placeholder="votreMail@smthg.com" />

                    <label for="mail2">Mail de verification :</label>
                    <br>
                    <input class="form-control" type="email" name="mail2" placeholder="votreMail@smthg.com" />
                </div>


                <div class="form-group">

                    <label for="password">Entrez votre mot de passe :</label>
                    <br>
                    <input class="form-control" type="password" name="mdp" placeholder="Hackerman" maxlength="20" autocomplete="password" />

                    <label for="password">Vérifiez votre mot de passe :</label>
                    <br>
                    <input class="form-control" type="password" name="mdp2" placeholder="Hackerman" maxlength="20" autocomplete="password" />

                </div>
            </div>
        
            <div class="submit text-center ">

                <button class="btn btn-primary col-2 " type="submit" name="submit">Valider</button>

                <a class="log btn btn-primary col-2" href="./index.php"  type="submit" name="submit">Retour</a>

            </div>




        </form>

    </div>
    </div>

</body>

</html>