<?php
class ClientController{

    function addclient() {
        global $me;
        extract($_POST);
       $me->ajoutclient($nom, $prenom, $email,$telephone);
   
       header(header: 'location:../public/index.php?redirect=Gestionclient');
    }
   
   
   function indexclient()
   {          global $me;
        $client =$me->getallclient();
       require_once"../app/views/client/show.php";
   }
   function supprimerclient(){
    global $me;
       $id=$_GET['id'];
       $me->deleteclient($id);
       header(header: 'location:../public/index.php?redirect=Gestionclient');
   }
   function modifierclient(){
    global $me;
       extract($_POST);  
       $me->updatclient($id,$nom, $prenom, $email,$telephone); 
       header(header: 'location:../public/index.php?redirect=Gestionclient');
   }
   function modifredirectclient(){
       $idval=$_GET['id'];
       $nomval=$_GET['nom'];
       $prenomval=$_GET['prenom'];
       $emailval=$_GET['email'];
       $telephoneval=$_GET['telephone'];
   
       require_once"../app/views/client/edit.php";
   }
}

?>