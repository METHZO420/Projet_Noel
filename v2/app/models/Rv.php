<?php

use Doctrine\DBAL\Driver\FetchUtils;

class Rv{
    function ajoutrv($date,$heure,$description,$client){
        global $db;
        $req = $db->prepare("INSERT INTO rendez_vous (dates, heure,descriptions,client ) VALUES (?, ? , ? , ?)");     
        $req-> execute([$date,$heure,$description,$client]);
    }
    function getallrv(){
        global $db;
        $req=$db->prepare("SELECT * FROM rendez_vous ") ;
        $req->execute();
        $rv =$req;
        return $rv;
    
    
    }
    function deleterv($id){
        global $db;
        $req= $db->prepare( "DELETE FROM rendez_vous WHERE id=$id");
        $req->execute();
    
    }
    function updaterv($id,$date,$heure,$description,$client){
        global $db;
        $req= $db->prepare( "UPDATE rendez_vous SET dates='$date',heure='$heure',descriptions='$description',client='$client' WHERE id='$id'");
        $req->execute();
    }
}
