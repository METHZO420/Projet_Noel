<?php
class EtudiantController{

    function addetd() {
        global $me;
        extract($_POST);
       $me->ajoutetd($nom, $prenom, $email,$filiere);
   
       header(header: 'location:../public/index.php?redirect=Gestionetd');
    }
   
   
   function indexetd()
   {          global $me;
        $etudiants =$me->getalletd();
       require_once"../app/views/etudiants/show.php";
   }
   function supprimeretd(){
    global $me;
       $id=$_GET['idetd'];
       $me->deletetd($id);
       header(header: 'location:../public/index.php?redirect=Gestionetd');
   }
   function modifieretd(){
    global $me;
       extract($_POST);  
       $me->updatetd($idetd,$nom, $prenom, $email,$filiere); 
       header(header: 'location:../public/index.php?redirect=Gestionetd');
   }
   function modifredirectetd(){
       $idval=$_GET['idetd'];
       $nomval=$_GET['nom'];
       $prenomval=$_GET['prenom'];
       $emailval=$_GET['email'];
       $filiereval=$_GET['filiere'];
   
       require_once"../app/views/etudiants/edit.php";
   }
}

?>