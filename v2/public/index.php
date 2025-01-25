
<?php 
require_once"./header.php";
require_once"../app/database.php";
$conn=new Database;
$db=$conn->getconnection();
require_once"../app/models/cours.php";
$mc=new Cours;
require_once"../app/controllers/CoursController.php";
$cc=new CoursController;

require_once"../app/models/Etudiant.php";
$me=new Etudiant;
require_once"../app/controllers/EtudiantController.php";
$ce=new EtudiantController;
require_once"./topbar.php";

  if(isset($_GET['redirect'])){

    if($_GET['redirect']=="Gestionetd"){
        $ce->indexetd();
    }
    if($_GET[ 'redirect']=='Gestioncours'){
        $cc->index();    }

  }
  if (isset($_GET['page'])) {
    if($_GET['page']=='Showcours'){ 
         $cc->index();
       
    }

    if($_GET['page']=='Ajout'){ 
        require_once"../app/views/cours/create.php";
    }
    if($_GET['page']=='deletecours'){
        $cc->supprimerCours();
    }if($_GET['page']=='modifiercours'){
        $cc-> modifredirect();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='savecours'){
        $cc->addcours();

    }
    if($_GET['action']=='modifcours'){
        $cc-> modifiercours();

    }

}

?>



<?php 


 
  if (isset($_GET['page'])) {
    if($_GET['page']=='Showetd'){ 
        $ce->indexetd();
    }

    if($_GET['page']=='Ajoutetd'){ 
        require_once"../app/views/etudiants/create.php";
    }
    if($_GET['page']=='deletetd'){
        $ce->supprimeretd();
    }if($_GET['page']=='modifieretd'){
        $ce->modifredirectetd();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='savetd'){
        $ce->addetd();

    }
    if($_GET['action']=='modifetd'){
        $ce->modifieretd();

    }

}

?>

    