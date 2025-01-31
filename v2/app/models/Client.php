<?php
class Client
{
    function ajoutclient($nom,$prenom,$email,$telephone){
        global $db;
         $db->query("INSERT INTO client (nom, prenom, email,telephone) VALUES ('$nom','$prenom','$email','$telephone')"); 
    
    }
    function getallclient(){
        global $db;
        $req=$db->prepare( "SELECT * FROM client ");
        $req->execute(); 
$client = $req; 
        return $client;
    
    
    }
    function deleteclient($id){
        global $db;
        $req= $db->prepare( "DELETE FROM client WHERE id=$id");
        $req->execute();
    
    }
    function updatclient($id,$nom,$prenom,$email,$telephone){
        global $db;
        $req= $db->prepare( "UPDATE client SET nom='$nom',prenom='$prenom',email='$email',telephone='$telephone' WHERE id='$id'");
        $req->execute();
    }
}
