<?php
class CoursController{
    function index()

    {  
        global $mc;
          $sess="cours";
         $cours=$mc->getallcours();
        require_once"../app/views/cours/show.php";
    }
    function addcours() {
        global $mc;
         extract($_POST);
         $mc->ajoutcours($nomcours, $codecours, $nbheures);
         header('location:../public/index.php?redirect=Gestioncours');
            }
    
    
    
    function supprimerCours(){
        global $mc;
        $id=$_GET['idcours'];
        $mc->deletecours($id);
        header('location:../public/index.php?redirect=Gestioncours');
    }
    function modifiercours(){
        global $mc;
    
        extract($_POST);
    
        $mc->updatecours($idcours,$nomcours, $codecours, $nbheures);
    
        header(header: 'location:../public/index.php?redirect=Gestioncours');
    }
    function modifredirect(){
        $idval=$_GET['idcours'];
        $nomval=$_GET['nomcours'];
        $codeval=$_GET['codecours'];
        $heureval=$_GET['nbheures'];
        require_once"../app/views/cours/edit.php";
    }
}

?>