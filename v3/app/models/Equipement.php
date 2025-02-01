<?php
// src/Product.php

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'equipements')]
class Equipement
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private string $nom;
    #[ORM\Column(type: 'string')]
    private string $etat;
    #[ORM\Column(type: 'string')]
    private string $disponibilite;
    #[ORM\OneToMany(mappedBy: "equipement", targetEntity: Animaux::class)]
    private Collection $animal;
    // .. (other code)

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get the value of disponibilite
     */ 
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set the value of disponibilite
     *
     * @return  self
     */ 
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }
    function __construct($nom,$etat,$disponibilite){

        $this->nom=$nom;
        $this->etat=$etat;
        $this->disponibilite=$disponibilite;

    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}