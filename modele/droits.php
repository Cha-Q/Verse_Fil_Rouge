<?php

include('./connect/connect.php');

class Droits{
    public $connect;
    public $table = 'droits';

    private $id_droit;
    private $nom_droit;

    public function __construct(){
        $this->connect = new Bdd();
        $this->connect = $this->connect->getConnexion();
    }

    // getters

    public function getTable(){
        return $this->table;
    }
    public function getId_droit(){
        return $this->id_droit;
    }
    public function getNom_droit(){
        return $this->nom_droit;
    }
}

?>