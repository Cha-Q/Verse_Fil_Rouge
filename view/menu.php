<?php ob_start(); ?>

<nav class="navbar navbar-expand-lg bg-light">

    <a class="navbar-brand" href="monespace.php">Verse</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="./infoCompte.php">Mon compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./visionner.php">Visionner</a>
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


<?php $menu = ob_get_clean(); ?>