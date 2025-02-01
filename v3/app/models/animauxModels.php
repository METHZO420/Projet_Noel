<?php
class AnimauxModel
{
    function ajoutanimal($type,$age,$sante,$idEquipement){
        global $entityManager;
        $animal=new Animaux($type,$age,$sante,$idEquipement);
        $entityManager->persist($animal);
        $entityManager->flush();
         
    }
    public function getallanimal(){
        global $entityManager;
        $animal=$entityManager->getRepository('animaux')->findAll();
       
        return $animal;
    
    
    }
    function deleteanimal($id){
        global $entityManager;
        $animal=$entityManager->getRepository('animaux')->find($id);
        $entityManager->remove($animal);
        $entityManager->flush();
    
    }
    function updatanimal($id,$type,$age,$sante,$idEquipement){
        global $entityManager;
        $animal=$entityManager->getRepository('animaux')->find($id);
        $animal->setAge($age);
        $animal->setType($type);
        $animal->setSante($sante);
        $entityManager->persist($animal);
        $entityManager->flush();
    }
}
