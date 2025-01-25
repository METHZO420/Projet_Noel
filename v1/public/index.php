
<?php 
require_once"./header.php";
require_once"../app/database.php";
require_once"../app/models/cours.php";
require_once"../app/controllers/CoursController.php";
require_once"../app/models/Etudiant.php";
require_once"../app/controllers/EtudiantController.php";
require_once"./topbar.php";

  if(isset($_GET['redirect'])){

    if($_GET['redirect']=="Gestionetd"){
        indexetd();
    }
    if($_GET[ 'redirect']=='Gestioncours'){
        index();    }

  }
  if (isset($_GET['page'])) {
    if($_GET['page']=='Showcours'){ 
        echo"OK";
        $cours = getallcours();
        require_once('../app/views/cours/show.php');
    }

    if($_GET['page']=='Ajout'){ 
        require_once"../app/views/cours/create.php";
    }
    if($_GET['page']=='deletecours'){
        supprimerCours();
    }if($_GET['page']=='modifiercours'){
        modifredirect();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='savecours'){
        addcours();

    }
    if($_GET['action']=='modifcours'){
        modifiercours();

    }

}

?>



<?php 


 
  if (isset($_GET['page'])) {
    if($_GET['page']=='Showetd'){ 
        echo"OK";
        $cours = getalletd();
        require_once('../app/views/etudiants/show.php');
    }

    if($_GET['page']=='Ajoutetd'){ 
        require_once"../app/views/etudiants/create.php";
    }
    if($_GET['page']=='deletetd'){
        supprimeretd();
    }if($_GET['page']=='modifieretd'){
        modifredirectetd();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='savetd'){
        addetd();

    }
    if($_GET['action']=='modifetd'){
        modifieretd();

    }

}

?>

    