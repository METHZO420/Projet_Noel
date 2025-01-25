<?php

function addcours() {
    // Get form data
 //   $nomcours = $_POST['nomcours'];
   // $codecours = $_POST['codecours'];
    //$nbheures = $_POST['nbheures'];
     extract($_POST);
    ajoutcours($nomcours, $codecours, $nbheures);

    index();
}


function index()
{    $sess="cours";
     $cours =getallcours();
    require_once"../app/views/cours/show.php";
}
function supprimerCours(){
    $id=$_GET['idcours'];
    deletecours($id);
    index();
}
function modifiercours(){

    extract($_POST);

    updatecours($idcours,$nomcours, $codecours, $nbheures);

    index();
}
function modifredirect(){
    $idval=$_GET['idcours'];
    $nomval=$_GET['nomcours'];
    $codeval=$_GET['codecours'];
    $heureval=$_GET['nbheures'];
    require_once"../app/views/cours/edit.php";
}
?>