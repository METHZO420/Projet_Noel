
<?php 
require_once"./header.php";
require_once"../app/database.php";
$conn=new Database;
$db=$conn->getconnection();
require_once"../app/models/cours.php";
$mc=new Cours;
require_once"../app/controllers/CoursController.php";
$cc=new CoursController;

require_once"../app/models/Client.php";
$me=new Client;
require_once"../app/controllers/ClientController.php";
$ce=new ClientController;
require_once"./topbar.php";

  if(isset($_GET['redirect'])){

    if($_GET['redirect']=="Gestionclient"){
        $ce->indexclient();
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

  if (isset($_GET['page'])) {
    if($_GET['page']=='Showclient'){ 
        $ce->indexclient();
    }

    if($_GET['page']=='Ajoutclient'){ 
        require_once"../app/views/client/create.php";
    }
    if($_GET['page']=='deleteclient'){
        $ce->supprimerclient();
    }if($_GET['page']=='modifierclient'){
        $ce->modifredirectclient();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='saveclient'){
        $ce->addclient();

    }
    if($_GET['action']=='modifclient'){
        $ce->modifierclient();

    }

}

?>

    