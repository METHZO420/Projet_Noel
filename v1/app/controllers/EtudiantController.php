<?php

function addetd() {
   
     extract($_POST);
    ajoutetd($nom, $prenom, $email,$filiere);

    indexetd();
}


function indexetd()
{      $etudiants =getalletd();
    require_once"../app/views/etudiants/show.php";
}
function supprimeretd(){
    $id=$_GET['idetd'];
    deletetd($id);
    indexetd();
}
function modifieretd(){

    extract($_POST);

    updatetd($idetd,$nom, $prenom, $email,$filiere);

    indexetd();
}
function modifredirectetd(){
    $idval=$_GET['idetd'];
    $nomval=$_GET['nom'];
    $prenomval=$_GET['prenom'];
    $emailval=$_GET['email'];
    $filiereval=$_GET['filiere'];

    require_once"../app/views/etudiants/edit.php";
}
?>