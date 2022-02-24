<?php

include('./connect/connect.php');

class genres{
    public $connect;
    public $table = 'genres';

    private $id_genre;
    private $nom_genre;

    public function __construct(){
        $this->connect = new Bdd();
        $this->connect = $this->connect->getConnexion();
    }

    // getters

    public function getTable(){
        return $this->table;
    }
    public function getId_genre(){
        return $this->id_genre;
    }
    public function getNom_genre(){
        return $this->nom_genre;
    }
}

?>