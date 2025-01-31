
<?php 
require_once"./header.php";
require_once"../app/database.php";
$conn=new Database;
$db=$conn->getconnection();
require_once"../app/models/Rv.php";
$mc=new Rv;
require_once"../app/controllers/RvController.php";
$cc=new RvController;

require_once"../app/models/Client.php";
$me=new Client;
require_once"../app/controllers/ClientController.php";
$ce=new ClientController;
require_once"./topbar.php";

  if(isset($_GET['redirect'])){

    if($_GET['redirect']=="Gestionclient"){
        $ce->indexclient();
    }
    if($_GET[ 'redirect']=='Gestionrv'){
        $cc->index();    }

  }
  if (isset($_GET['page'])) {
    if($_GET['page']=='Showrv'){ 
         $cc->index();
       
    }

    if($_GET['page']=='Ajout'){ 
        require_once"../app/views/rv/create.php";
    }
    if($_GET['page']=='deleterv'){
        $cc->supprimerrv();
    }if($_GET['page']=='modifierrv'){
        $cc-> modifredirect();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='saverv'){
        $cc->addrv();

    }
    if($_GET['action']=='modifrv'){
        $cc-> modifierrv();

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

    