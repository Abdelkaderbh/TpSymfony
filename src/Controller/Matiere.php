<?php

namespace App\Controller;

class Matiere
{
    private $id_mat;
    private $Nom_mat;

    public function getId(){
        return $this->id_mat;
    }

    public function setId($id_mat):void{
        $this->id_mat=$id_mat;
    }
    public function setNom($Nom_mat):void{
        $this->Nom_mat=$Nom_mat;
    }


    public function getNom(){
        return $this->Nom_mat;
    }




}