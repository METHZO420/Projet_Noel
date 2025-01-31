<?php
class RvController{
    function index()

    {  
        global $mc;
          $sess="rv";
         $rv=$mc->getallrv();
        require_once"../app/views/rv/show.php";
    }
    function addrv() {
        global $mc;
         extract($_POST);
         $mc->ajoutrv($date, $heure, $description,$client);
         header('location:../public/index.php?redirect=Gestionrv');
            }
    
    
    
    function supprimerrv(){
        global $mc;
        $id=$_GET['id'];
        $mc->deleterv($id);
        header('location:../public/index.php?redirect=Gestionrv');
    }
    function modifierrv(){
        global $mc;
    
        extract($_POST);
    
        $mc->updaterv($id,$date, $heure, $description,$client);
    
        header(header: 'location:../public/index.php?redirect=Gestionrv');
    }
    function modifredirect(){
        $idval=$_GET['id'];
        $deateval=$_GET['date'];
        $heureval=$_GET['heure'];
        $descriptionval=$_GET['description'];
        $clientval=$_GET['client'];

        require_once"../app/views/rv/edit.php";
    }
}

?>