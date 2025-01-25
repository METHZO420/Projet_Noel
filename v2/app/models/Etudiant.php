<?php
class Etudiant
{
    function ajoutetd($nometd,$prenometd,$email,$filiere){
        global $db;
         $db->query("INSERT INTO etudiants (nom, prenom, email,filiere) VALUES ('$nometd','$prenometd','$email','$filiere')"); 
    
    }
    function getalletd(){
        global $db;
        $req=$db->prepare( "SELECT * FROM etudiants ");
        $req->execute(); 
$etudiants = $req; 
        return $etudiants;
    
    
    }
    function deletetd($id){
        global $db;
        $req= $db->prepare( "DELETE FROM etudiants WHERE id=$id");
        $req->execute();
    
    }
    function updatetd($id,$nomcours,$prenom,$email,$filiere){
        global $db;
        $req= $db->prepare( "UPDATE etudiants SET nom='$nomcours',prenom='$prenom',email='$email',filiere='$filiere' WHERE id='$id'");
        $req->execute();
    }
}
