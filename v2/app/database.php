<?php
class Database{

private $serveur="localhost";
private $user="root";
private $pwd="";
private $dbname="projet_gestion_universitaire";


public function getConnection(){
    try{
        $connexion = new PDO("mysql:host=$this->serveur;dbname=$this->dbname",$this->user, $this->pwd);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    return $connexion;
}
 

}

?>