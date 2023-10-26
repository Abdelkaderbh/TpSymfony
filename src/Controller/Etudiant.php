<?php

namespace App\Controller;

class Etudiant
{
    private $id;
    private $nom;
    private $prenom;
    private $Matieres=[];


    public function __construct($id, $nom, $prenom, array $Matieres)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->Matieres = $Matieres;
    }


    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }
    #[Route('/Students',name:'Students-subjects-list')]
    public function Affiche(){
        return $this->render("etudiant/matieres.html.twig");
    }

}