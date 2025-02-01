<?php

use Doctrine\DBAL\Driver\FetchUtils;

class EquipementModel{
    function ajoutequipement($nom,$etat,$disponibilite){
        global $entityManager;
        $animal=new Equipement($nom,$etat,$disponibilite);
        $entityManager->persist($animal);
        $entityManager->flush();
        
    }
    function getallequipement(){
        global $entityManager;
       $equipement=$entityManager->getRepository('equipement')->findAll();
        return $equipement;
    
    
    }
    function deleteequipement($id){
        global $entityManager;
       $equipement=$entityManager->getRepository('equipement')->find($id);
       $entityManager->remove($equipement);
       $entityManager->flush();
    
    }
    function updateequipement($id,$nom,$etat,$disponibilite)  {
        global $entityManager;
        $equipement=$entityManager->getRepository('equipement')->find($id);
        $equipement->setNom($nom);
        $equipement->setEtat($etat);
        $equipement->setDisponibilite($disponibilite);
        $entityManager->persist($equipement);
        $entityManager->flush();
    }
}
