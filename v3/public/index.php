
<?php 
require_once"./header.php";
require_once"./topbar.php";
require'../bootstrap.php';
require_once'../app/models/Animaux.php';
require_once"../app/models/equipement.php";
require_once"../app/models/animauxModels.php";

$ma=new AnimauxModel;
require_once"../app/controllers/animauxController.php";
$ce=new AnimauxController;

require_once"../app/models/equipementModels.php";
$mep=new EquipementModel;
require_once"../app/controllers/equipementController.php";
$cc=new EquipementController;


  if(isset($_GET['redirect'])){

    if($_GET['redirect']=="Gestionanimal"){
        $ce->indexanimal();
    }
    if($_GET[ 'redirect']=='Gestionequipement'){
        $cc->index();    }

  }
  if (isset($_GET['page'])) {
    if($_GET['page']=='Showequipement'){ 
         $cc->index();
       
    }

    if($_GET['page']=='Ajout'){ 
        require_once"../app/views/equipement/create.php";
    }
    if($_GET['page']=='deleteequipement'){
        $cc->supprimerequipement();
    }if($_GET['page']=='modifierequipement'){
        $cc-> modifredirectequipement();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='saveequipement'){
        $cc->addequipement();

    }
    if($_GET['action']=='modifequipement'){
        $cc-> modifierequipement();

    }

}

  if (isset($_GET['page'])) {
    if($_GET['page']=='Showanimal'){ 
        $ce->indexanimal();
    }

    if($_GET['page']=='Ajoutanimal'){ 
        require_once"../app/views/animal/create.php";
    }
    if($_GET['page']=='deletanimal'){
        $ce->supprimeranimal();
    }if($_GET['page']=='modifieranimal'){
        $ce->modifredirectanimal();
    }  
}
if(isset($_GET['action'])){
    if($_GET['action']=='saveanimal'){
        $ce->addanimal();

    }
    if($_GET['action']=='modifanimal'){
        $ce->modifieranimal();

    }

}

?>

    