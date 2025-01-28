<?php

$serveur = 'localhost';
$dbname = 'projet_gestion_universitaire';
$user = 'root';
$mdp = '';

$db =new mysqli($serveur,$user ,$mdp ,$dbname );

if(!$db){
    echo "Erreur ";
}else{
}

?>
