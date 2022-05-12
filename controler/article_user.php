<?php

    require('./modele/article.php');
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
    if($aaa['id_utilisateur'] == null){
        $aaa['id_utilisateur'] = 'anonymous';
    } else{
        var_dump(intval($aaa['id_utilisateur']));
        $truc = $aaa['id_utilisateur']->setIdUtilisateur(intval($id_utilisateur));
        $truc->getUserName();
    }
?>
    <div class="posts" style="color:black;">
        <h3 style="color:black;">
                <?= htmlspecialchars($aaa['id_utilisateur']) ?>
                <em style="color:black;">le <?= $aaa['date_article'] ?></em>
        </h3>
        <p style="color:black;">
            <?= nl2br(htmlspecialchars($aaa['texte_article'])) ?>
            <br />
            
        </p>
    </div>

<?php
}

?>
<?php $content = ob_get_clean(); ?>