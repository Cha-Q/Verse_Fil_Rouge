<?php

// 
include('./connect/connect.php');

// La classe utilisateur et son constructeur
Class Article{


    public $connect;
    private $table = 'articles';

    private $id_article;
    private $texte_article;
    private $date_article;
    private $id_utilisateur;


        //constructeur
    public function __construct(){
        $this->connect = new Bdd();
        $this->connect = $this->connect->getConnexion();
    }

    // getters

    public function getTable(){
        return $this->table;
    }

    public function getIdArticle(){
        return $this->id_article;
    }

    public function getTexteArticle(){
        return $this->texte_article;
    }
    public function getDateArticle(){
        return $this->date_article;
    }
    public function getIdUtilisateur(){
        return $this->id_utilisateur;
    }

    // setter

    public function setTexteArticle($texte_article){
        $this->texte_article = $texte_article;
    }

    public function setDateArticle($date_article){
        $this->date_article = $date_article;
    }

    public function setIdUtilisateur($id_utilisateur){
        $this->id_utilisateur = $id_utilisateur;
    }

    public function getAllArticle(){
        // $myQuery = 'SELECT * FROM '.$this->table.';';
        $myQuery = 'SELECT
                        login_utilisateur,
                        texte_article, 
                        date_article
                    FROM
                        articles
                    LEFT JOIN
                        utilisateurs
                    ON 
                        utilisateurs.id_utilisateur = articles.id_utilisateur
                        ORDER BY date_article desc';

        $stmt = $this->connect->prepare($myQuery);
        // $stmt->bindParam(':texte_article', $this->texte_article);
        // $stmt->bindParam(':date_article', $this->date_article);
        $stmt->execute();
        return $stmt;
    }
    public function getSingleArticle(){
        $myQuery = 'SELECT
                    *
                    FROM
                        '.$this->table.'
                    WHERE
                        id_article = :id_article;';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':id_article', $this->id_article);
        $stmt->execute();
        return $stmt;
    }


    public function getAllArticleUser(){
        $myQuery = 'SELECT
                    *
                    FROM
                        '.$this->table.'
                    WHERE
                        id_utilisateur = :id_utilisateur;';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':id_utilisateur', $this->id_utilisateur);
        $stmt->execute();

        return $stmt;
    }

    public function createArticle(){
        $myQuery = 'INSERT INTO
                    '.$this->table.'
                    SET
                        texte_article = :texte_article,
                        date_article = :date_article,
                        id_utilisateur = :id_utilisateur;';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':texte_article', $this->texte_article);
        $stmt->bindParam(':date_article', $this->date_article);
        $stmt->bindParam(':id_utilisateur', $this->id_utilisateur);
        $stmt->execute();

        return $stmt;

    }

    public function updateArticle(){
        $myQuery = 'UPDATE
                    '.$this->table.'
                    SET
                        texte_article = :texte_article
                    WHERE
                        id_utilisateur = :id_utilisateur;
                    AND 
                        id_article = :id_article';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':id_utilisateur', $this->id_utilisateur);
        $stmt->bindParam(':id_article', $this->id_article);
        $stmt->execute();

        return $stmt;
    }

    public function deleteArticle(){
        $myQuery = 'DELETE 
                        id_utilisateur = :id_utilisateur
                    WHERE
                        id_utilisateur = :id_utilisateur
                    AND 
                        id_article = :id_article;';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':id_utilisateur', $this->id_utilisateur);
        $stmt->bindParam(':id_article', $this->id_article);
        $stmt->execute();
    }

    // public function userName(){
    //     $myQuery = 'SELECT login_utilisateur from articles JOIN utilisateurs ON utilisateurs.id_utilisateur = '.$this->id_utilisateur.';';

    //     $stmt = $this->connect->prepare($myQuery);
    //     $stmt->bindParam(':id_utilisateur', $this->id_utilisateur);
    //     $stmt->execute();
    // }
}
?>