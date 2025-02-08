<?php
class AnimauxController{
    function indexanimal()
    {  
        global $ma;
        global $twiga;
         $animals=$ma->getallanimal();
         echo $twiga->render('show.html.twig', ['animals' => $animals]);
    }
    function addanimal() {
        global $ma;
         extract($_POST);
         var_dump($_POST);
         $ma->ajoutanimal($type,$age,$sante,$idEquipement);
         header('location:../public/index.php?redirect=Gestionanimal');
            }
    
    function supprimeranimal(){
        global $ma;
        $id=$_GET['idanimal'];
        $ma->deleteanimal($id);
        header('location:../public/index.php?redirect=Gestionanimal');
    }
    function modifieranimal(){
        global $ma;
    
        extract($_POST);
    
        $ma->updatanimal($id,$type,$age,$sante,$idEquipement);
    
        header(header: 'location:../public/index.php?redirect=Gestionanimal');
    }
    function modifredirectanimal(){
        $idval=$_GET['id'];
        $typeval=$_GET['type'];
        $ageval=$_GET['age'];
        $santeval=$_GET['sante'];

        require_once"../app/views/animal/edit.html.twig";
    }
}

?>