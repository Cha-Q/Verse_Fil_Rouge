<?php

    require_once('./modele/article.php');
    include_once('./utils/utils.php');

    if (isset($_POST['texte_article']) && !empty($_POST['texte_article']))
    {
            $text = valid_donnees($_POST['texte_article']);
            $date = date('Y-m-d H:i:s');
            $id_user = $_SESSION['id'];

            $article = new Article();
        
            $article->setTexteArticle($text);
            $article->setDateArticle($date);
            $article->setIdUtilisateur($id_user);

            if($article->createArticle()){
                $return = $article->getSingleArticle();
                
            } 
    }

    $posts = new Article();
    $allPost = $posts->getAllArticle(); 
    ob_start();
?>

<?php 

while ($aaa = $allPost->fetch())
    {
        $tab[] = $aaa;
}

// rsort($tab);

foreach ($tab as $aaa){
    if($aaa['login_utilisateur'] == null){
        $aaa['login_utilisateur'] = 'Anonymous';
    } 
?>

    <div class="container">
        <div class="posts col-lg-10 offset-lg-2 col-sm-12" style="color:black;">
            <h3 style="color:black;">
                    De <?= $aaa['login_utilisateur'] ?>
                    <em style="color:black;"> en la date du <?= $aaa['date_article'] ?></em>
            </h3>

            <p style="color:black;">
                <?= $aaa['texte_article'] ?>
            </p>

        </div>

    </div>
<?php
}

?>
<?php $content = ob_get_clean(); ?>