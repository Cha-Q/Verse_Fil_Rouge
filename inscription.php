<?php
    include_once('./controler/create_user.php');
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

    <title>Cette fois c'est la bonne on s'y met</title>


</head>

<body>

    <header>

        <p> Powered by <a href="www.twitch.com">Twitch</a><i class="fab fa-twitch"></i></p>

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
                    <div class="nomPrenom row">
                        <div class="form-group">

                            <label class="form-input-label" for="Nom">Nom :</label>
                            <br>
                            <input class="form-control" type="text" name="nom" placeholder="Entrez votre Nom" maxlength="20" minlength="2" id="Nom" />

                            <label class="form-input-label" for="prenom">Prénom :</label>
                            <br>
                            <input class="form-control" type="text" name="prenom" placeholder="Entrez votre prenom" maxlength="20" minlength="2" id="prenom" />

                        </div>
                    </div>
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
                    <input class="form-control" type="email" name="mail" placeholder="votreMail@smthg.com" id="email" />

                    <label for="mail2">Mail de verification :</label>
                    <br>
                    <input class="form-control" type="email" name="mail2" placeholder="votreMail@smthg.com" id="email" />
                </div>


                <div class="form-group">

                    <label for="password">Entrez votre mot de passe :</label>
                    <br>
                    <input class="form-control" type="password" name="mdp" placeholder="Hackerman" maxlength="20" id="password" />

                    <label for="password">Vérifiez votre mot de passe :</label>
                    <br>
                    <input class="form-control" type="password" name="mdp2" placeholder="Hackerman" maxlength="20" id="password" />

                </div>
        </div>
        <!-- Premier champ avec les infos persos -->




        <!-- <div>

                    <label for="file" class="pic"> Choisissez une photo de profil :</label>
                    <input type="file" name="photoid" id="file">

                </div> -->




        <!-- <fieldset id="field">
                Deuxième champ avec les checkboxes

                <legend>Dites-nous ce que vous aimez regarder :</legend>

                <label for="checkboxJV"><input type="checkbox" id="checkboxJV" checked /> Jeux vidéos</label>

                <label for="checkboxEvent"> <input type="checkbox" id="checkboxEvent" /> évenements</label>

                <label for="checkboxJustC"> <input type="checkbox" id="checkboxJustC" /> Just chatting </label>

                <label for="checkboxNo"> <input type="checkbox" id="checkboxNo" /> Nada, je suis juste là pour découvrir</label>

            </fieldset>

            <fieldset id="field1">
                Dernier champ avec les infos persos

                <legend> Dites-nous quand est-ce qu'il vous arrive de regarder des streams</legend>

                <label for="checkMat"><input type="checkbox" name="checkWake" id="checkMat" checked> Le Matin</label>

                <label for="checkMid"><input type="checkbox" name="checkMid" id="checkMid"> Le midi</label>

                <label for="checkSoir"><input type="checkbox" name="checkWake" id="checkSoir"> Le soir</label>

                <label for="checkAsSoon"><input type="checkbox" name="checkAsSoon" id="checkAsSoon"> Dès que j'en ai l'occasion !</label>

            </fieldset> -->



                <div class="submit text-center">

                    <button class="btn btn-primary col-2 " type="submit" name="submit">Valider</button>

                    <a class="log btn btn-primary col-2" href="./index.php"  type="submit" name="submit">Retour</a>

                </div>




        </form>

    </div>
    </div>

</body>

</html>