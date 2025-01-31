<?php
class Cours{
    function ajoutcours($nomcours,$codecours,$nbheures){
        global $db;
        $req = $db->prepare("INSERT INTO cours (nomcours, codecours, nbheures) VALUES (?, ?, ?)");     
        $req->execute([$nomcours,$codecours,$nbheures]);
    }
    function getallcours(){
        global $db;
        $req=$db->prepare("SELECT * FROM cours ") ;
        $cours =$db->query($req);
        return $cours;
    
    
    }
    function deletecours($id){
        global $db;
        $req= $db->prepare( "DELETE FROM cours WHERE id=$id");
        $req->execute();
    
    }
    function updatecours($id,$nomcours,$codecours,$nbheures){
        global $db;
        $req= $db->prepare( "UPDATE cours SET nomcours='$nomcours',codecours='$codecours',nbheures='$nbheures' WHERE id='$id'");
        $req->execute();
    }
}
