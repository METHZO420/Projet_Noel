<?php
class EquipementController{

    function addequipement() {
        global $mep;
        extract($_POST);
       $mep->ajoutequipement($nom, $etat, $disponibilite);
   
       header(header: 'location:../public/index.php?redirect=Gestionequipement');
    }
   
   
   function index()
   {          global $mep;
        $equipement =$mep->getallequipement();
       require_once"../app/views/equipement/show.php";
   }
   function supprimerequipement(){
    global $mep;
       $id=$_GET['id'];
       $mep->deleteequipement($id);
       header(header: 'location:../public/index.php?redirect=Gestionequipement');
   }
   function modifierequipement(){
    global $mep;
       extract($_POST);  
       $mep->updateequipement($id,$nom,$etat,$disponibilite); 
       header(header: 'location:../public/index.php?redirect=Gestionequipement');
   }
   function modifredirectequipement(){
       $idval=$_GET['id'];
       $nomval=$_GET['nom'];
       $etatval=$_GET['etat'];
       $disponibiliteval=$_GET['disponibilite'];   
       require_once"../app/views/equipement/edit.php";
   }
}

?>