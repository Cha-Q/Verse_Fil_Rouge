<?php

include('./connect/connect.php');

class Salon{


    public $connect;
    private $table = 'salons';

    private $id_salon;
    private $nom_salon;
    private $password_salon;
    private $id_utilisateur;
    private $id_categorie;


    public function __construct(){
        $this->connect = new Bdd();

        $this->connect = $this->connect->getConnexion();
    }

    // getters
    public function getTable(){
		return $this->table;
    }
	public function getId_salon(){
		return $this->id_salon;
	}

	public function getNom_salon(){
		return $this->nom_salon;
	}

	public function getPassword_salon(){
		return $this->password_salon;
	}

	public function getId_utilisateur(){
		return $this->id_utilisateur;
	}

	public function getId_categorie(){
		return $this->id_categorie;
	}

    // setters
    public function setId_salon($id_salon){
            $this->id_salon = $id_salon;
        }
    public function setNom_salon($nom_salon){
            $this->nom_salon = $nom_salon;
        }
    public function setPassword_salon($password_salon){
            $this->password_salon = $password_salon;
        }
    public function setId_utilisateur($id_utilisateur){
            $this->id_utilisateur = $id_utilisateur;
        }
    public function setId_categorie($id_categorie){
            $this->id_categorie = $id_categorie;
        }

    // les différentes fonctions du CRUD 
    public function getSingleSalon(){
        $myQuery = "SELECT 
                        * 
                    FROM 
                        $this->table
                    Join
                        utilisateur
                    where
                        $this->table.id_utilisateur = utilisateurs.id_utilisateur
                    And
                        nom_salon = :nom_salon";

    $stmt = $this->connect->prepare($myQuery);
    $stmt->bindParam(':nom_salon',$this->nom_salon);
    $stmt->execute();
    return $stmt;
    }
    public function createSalon(){
        $myQuery = 'INSERT INTO
                        '.$this->table.'
                    SET
                        nom_salon = :nom_salon,
                        password_salon = :password_salon,
                        id_user = :id_user;';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':nom_salon',$nom_salon);
        $stmt->bindParam(':password_salon',$password_salon);
        $stmt->bindParam(':id_user',$id_user);
        return $stmt->execute();

    }
    public function updateSalon(){
        $myQuery = 'UPDATE
                        '.$this->table.'
                    SET
                        nom_salon =:nom_salon,
                        password_salon =:password_salon
                    WHERE
                        id_salon = :id_salon;';

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':nom_salon', $this->nom_salon);
        $stmt->bindParam(':password_salon', $this->password_salon);
        $stmt->bindParam(':id_salon', $this->id_salon);
        return $stmt->execute();
    }
    public function deleteSalon(){
        $myQuery = 'DELETE FROM
                        '.$this->table.'
                    where
                        id_salon = :id_salon';
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':id_salon', $this->id_salon);

        return $stmt->execute();
    }
}



?>
