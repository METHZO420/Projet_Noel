<?php
// src/Product.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'animaux')]
class Animaux
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private string $type;
    #[ORM\Column(type: 'integer')]
    private string $age;
    #[ORM\Column(type: 'string')]
    private string $sante;
    #[ORM\ManyToOne(targetEntity: Equipement::class, inversedBy: "animaux")]
    #[ORM\JoinColumn(name: "idEquipement", referencedColumnName: "id")]
    private Equipement $equipement;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

   
    public function getAge()
    {
        return $this->age;
    }

   
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

  
    public function getSante()
    {
        return $this->sante;
    }

    
    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }

   
    public function getEquipement()
    {
        return $this->equipement;
    }


    public function setEquipement($equipement)
    {
        $this->equipement = $equipement;

        return $this;
    }
     function __construct($type,$age,$sante,$idEquipement){
        $this-> type= $type;
        $this-> age= $age;
        $this-> sante= $sante;
     }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}