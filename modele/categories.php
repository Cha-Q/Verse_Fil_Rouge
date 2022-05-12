<?php

include('./connect/connect.php');

class Categories{
    public $connect;
    public $table = 'categories';

    private $id_categorie;
    private $nom_categorie;

    public function __construct(){
        $this->connect = new Bdd();
        $this->connect = $this->connect->getConnexion();
    }

    // getters

    public function getTable(){
        return $this->table;
    }
    public function getId_categorie(){
        return $this->id_categorie;
    }
    public function getNom_categorie(){
        return $this->nom_categorie;
    }

    // setter

    public function setNom_categorie($nom_categorie){
        return $this->nom_categorie = $nom_categorie;
    }

    // Queries

    public function getAllCategories(){
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.';';
                    
        $stmt = $this->connect->prepare($myQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getSingleCategories(){
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.';
                    WHERE
                        '.$this->nom_categorie.';';
                    
        $stmt = $this->connect->prepare($myQuery);
        $stmt->execute();
        return $stmt;
    }

    public function updateCategorie(){
        $myQuery = 'UPDATE
                        '.$this->table.'
                    SET
                        nom_categorie= :newCategorie
                    WHERE
                        id_categorie = :id_categorie;';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':newCategorie', $this->nom_categorie);
        $stmt->bindParam(':id_user', $this->id_categorie);
        $stmt->execute();
        return $stmt;
    }
}

?>