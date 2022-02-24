<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Google Fonts-->
        
        <!--CSS-->
        <link rel="stylesheet" href="html_css/accueil.css">
        <title>Document</title>
    </head>

<body>
    <header>
        <div class="heady">
            <a href="./intro.html"><h1>Verse</h1></a>
        </div>
        
        <?php echo $message ?>

        <nav>
            <ul>
                <?= $besoinCreation ?> 
            </ul>
        </nav>
        <div id="menu-button" class="closed">

        </div>
    </header>

    <nav id="menu" class="">
        <ul>
            <?= $besoinCreation ?>
        </ul>
    </nav>


    <div id="mainContainer">
        <?php echo $content ?>
    </div>

    
    <!--modale de connexion-->
    <div id="modal-creation" class="modal">
        <div>
            <div class="headerM">
                <span class="close">&times;</span>
                <h3>S'inscrire sur Infofo</h3>
            </div> 

            <div>
                <form action="" method="POST">
                    <ul>
                        <li>
                            <label for="pseudo-crea">Pseudo </label>
                            <input type="text" name="pseudo-crea" required pattern="^[a-zA-Z0-9_]*$" maxlength="20" required/>
                        </li>
                        <li>
                            <label for="email">E-mail </label>
                            <input type="email" name="email-crea" required pattern="/^\[a-zA-Z0-9_]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/" required/>
                        </li>
                        <li>
                            <label for="dateN">Date de naissance </label>
                            <input type="date" name="dateN" min="<?=$maxA?>01-01" max="<?=$minSP?>" required/>
                        </li>
                        <li>
                            <label for="mdp-crea">Mot de passe </label>
                            <input type="password" name="mdp-crea" minlength="8" maxlength="15"required/>
                        </li>
                        <li>
                            <label for="confirmMdp-crea">Confirmer le mot de passe </label>
                            <input type="password" name="confirmMdp-crea" minlength="8" maxlength="15" required/>
                        </li>
                        <li id="check">
                            <input type="checkbox" name="condUtilisat" required>
                            <label for="condUtilisat">J'accepte les conditions d'utilisation du site</label>
                        </li>
                        <p><?php echo $log; ?></p>
                        <li>
                            <input type="submit" name="Crea" value="Créer votre compte">
                        </li>
                    </ul>
                </form>
                
            </div>
            <div class="footerM">
                <p id="allerConn" class="liens">Déjà un compte ?  Identifiez vous ici</p>
            </div>
        </div>
    </div>

    
            <div class="footerM">
                <p id="allerCrea" class="liens">Pas de compte ?  Créez-en un ici</p>
            </div>
        </div>
    </div>


    <footer><div id="admin">Admin</div></footer>
    
    
</body>
</html>
