<?php

include('./connect/connect.php');


// La classe utilisateur et son constructeur
Class User {


    public $connect;
    private $table = 'utilisateurs';

    private $id_user;
    private $name_user;
    private $firstName_user;
    private $age_user;
    private $mail_user;
    private $login_user;
    private $mdp_user;
    private $id_genre;
    private $id_droit = 1;


        //constructeur
    public function __construct(){
        $this->connect = new Bdd();
        $this->connect = $this->connect->getConnexion();
    }

        //getters

    public function getTable(){
        return $this->table;
    }

    public function getId_user(){
        return $this->id_user;
    }

    public function getName_user(){
        return $this->name_user;
    }

    public function getFirstName_user(){
        return $this->firstName_user;
    }

    public function getAge_user(){
        return $this->age_user;
    }

    public function getMail_user(){
        return $this->mail_user;
    }

    public function getLogin_user(){
        return $this->login_user;
    }

    public function getMdp_user(){
        return $this->mdp_user;
    }

    public function getId_genre(){
        return $this->id_genre;
    }

    public function getId_droit(){
        return $this->id_droit;
    }	


    // setters
    public function setId_user($id_user){
        $this->id_user = $id_user;
    }
    public function setName_user($name_user){
        $this->name_user = $name_user;
    }
    public function setFirstName_user($firstName_user){
        $this->firstName_user = $firstName_user;
    }
    public function setAge_user($age_user){
        $this->age_user = $age_user;
    }
    public function setMail_user($mail_user){
        $this->mail_user = $mail_user;
    }
    public function setLogin_user($login_user){
        $this->login_user = $login_user;
    }
    public function setMdp_user($mdp_user){
        $this->mdp_user = $mdp_user;
    }
    public function setId_genre($id_genre){
        $this->id_genre = $id_genre;
    }
    public function setId_droit($id_droit){
        $this->id_droit = $id_droit;
    }


    public function getSingleUser(){
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.'
                    Join
                        genres
                    ON
                        genres.id_genre = utilisateurs.id_genre
                    Where
                        mail_utilisateur = :mail
                    OR 
                        login_utilisateur =:login';
                    
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':mail', $this->mail_user);
        $stmt->bindParam(':login', $this->login_user);
        $stmt->execute();
        return $stmt;
    }

    public function getSingleUserById(){
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.'
                    Where
                        id_utilisateur = :id_user';
                    
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->execute();
        return $stmt;
    }
    // Requête de création d'utilisateur
    public function createUser(){
        $myQuery = 'INSERT INTO
                        '.$this->table.'
                    SET
                        nom_utilisateur = :name,
                        prenom_utilisateur = :firstName,
                        age_utilisateur = :age,
                        mail_utilisateur = :mail,
                        login_utilisateur = :login,
                        mdp_utilisateur = :mdp,
                        id_genre = :id_genre,
                        id_droit = :id_droit
                        ';
        
        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':name', $this->name_user);
        $stmt->bindParam(':firstName', $this->firstName_user);
        $stmt->bindParam(':age', $this->age_user);
        $stmt->bindParam(':mail', $this->mail_user);
        $stmt->bindParam(':login', $this->login_user);
        $stmt->bindParam(':mdp', $this->mdp_user);
        $stmt->bindParam(':id_genre', $this->id_genre);
        $stmt->bindParam(':id_droit', $this->id_droit);

        return $stmt->execute();
    }

    // Update du login de l'utilisateur
    public function updateUser(){
        $myQuery = 'UPDATE
                        '.$this->table.'
                    SET
                        login_utilisateur = :login,
                        mdp_utilisateur = :mdp
                    WHERE
                        id_utilisateur = :id_user';

        $stmt = $this->connect->prepare($myQuery);

        // bind des paramètres

        $stmt->bindParam(':login', $this->login_user);
        $stmt->bindParam(':mdp', $this->mdp_user);
        $stmt->bindParam(':id_user', $this->id_user);
        return $stmt->execute();
        
    }
    public function verifyLogin() {
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.'
                    WHERE
                        login_utilisateur = :login';

        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':login', $this->login_user);

        $stmt->execute();
        return $stmt;
    }
    public function verifyMail() {
        $myQuery = 'SELECT
                        *
                    FROM
                        '.$this->table.'
                    WHERE
                        mail_utilisateur = :mail';

        $stmt = $this->connect->prepare($myQuery);

        
        $stmt->bindParam(':mail', $this->mail_user);

        $stmt->execute();
        return $stmt;
    }
    public function deleteUser() {
        $myQuery = 'DELETE
                    FROM
                        '.$this->table.'
                    WHERE
                        id_utilisateur = :id_user';
        $stmt = $this->connect->prepare($myQuery);

        $stmt->bindParam(':id_user', $this->id_user);

        $stmt->execute();
        return $stmt;
    }

}

?>