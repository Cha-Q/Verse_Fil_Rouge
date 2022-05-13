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
    } else{
        // $bitch = new User();
        // $bitch->setId_User($aaa['id_utilisateur']);
        // $beta = $bitch->getSingleUserById();
        // $bbb = $beta->fetch();
        // $aaa['id_utilisateur'] = $bbb['login_utilisateur'];
    }
?>
    <style>
        .posts{
            border: 1px solid black;
            border-radius: 25px;
            margin: 0 auto 20px 0;
            padding: 20px 15px;
            width: 100%;
            word-wrap: break-word;
            max-height: 300px;
            overflow: hidden;
        }
        .posts:nth-child(2){
            color: red;
        }
    </style>

    <div class="container">
        <div class="posts col-lg-10 offset-lg-2 col-sm-12" style="color:black;">
            <h3 style="color:black;">
                    De <?= htmlspecialchars($aaa['login_utilisateur']) ?>
                    <em style="color:black;"> en la date du <?= $aaa['date_article'] ?></em>
            </h3>

            <p style="color:black;">
                <?= nl2br(htmlspecialchars($aaa['texte_article'])) ?>
            </p>

        </div>

    </div>
<?php
}

?>
<?php $content = ob_get_clean(); ?>