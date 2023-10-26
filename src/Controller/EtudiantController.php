<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'app_etudiant')]
    public function index(): Response
    {
        return new Response('First Controller Method');
    }
    #[Route('/etudiant/{id}', name: 'affichage_etudiant',requirements: ["id"=>"\d{3}"])]
        public function afficherEtudiant($id):Response{
            return new Response('Page Id is '.$id);
    }

    #[Route('/etudiant/{name}', name: 'etudiant_name',requirements: ["name"=>"[A-Z 0-9]{2,10}"])]
    public function nomEtudiant($name):Response{
       return $this->render('etudiant/etudiant.html.twig',[
           'name' => $name,
        ]);
    }

    #[Route('/etudiant/{name}/{login}%{password}',name :'loginpage')]
    public function loginEtudiant($name,$login,$password):Response{
        return $this->render('etudiant/login.html.twig',[
            'name' => $name,
            'login' => $login,
            'password'=> $password,
        ]);
    }

    #[Route('/list',name:'liste')]
    public function listeEtudiant(){
        $etudiant = array("Ali","Med");

        $modules = array(
            array(
                "nom"=>"Symfony",
                "id"=>1,
                "enseignant"=>"Ali",
                "NbrHeures"=>42,
                "date"=>"12-12-2021",
                ) ,
            array(
                "nom"=>"JEE",
                "id"=>2,
                "enseignant"=>"Med",
                "NbrHeures"=>31,
                "date"=>"12-10-2021",
            ),
            array(
                "nom"=>"BD",
                "id"=>3,
                "enseignant"=>"Islem",
                "NbrHeures"=>21,
                "date"=>"12-09-2021",
            )
        );
        return $this -> render("etudiant/list.html.twig",array("etudiants"=>$etudiant,"modules"=>$modules));
    }

    #[Route('/affecter',name:'affectation')]
    public function affecter(){
        return $this ->render("etudiant/affecter.html.twig",);
    }


    #[Route ('/indexFils',name:'index_fils')]
    public function indexFils(){
        return $this->render("etudiant/index.html.twig");
    }


    #[Route ('/client','liste_produits-client')]
        public function aff_pro()
    {
        $Products = array(
            array("id" => 1, "Designation" => "Product 1", "Price" => 210, "Id_Client" => 1),
            array("id" => 2, "Designation" => "Product 2", "Price" => 360, "Id_Client" => 2),
            array("id" => 3, "Designation" => "Product 3", "Price" => 580, "Id_Client" => 1),
            array("id" => 4, "Designation" => "Product 4", "Price" => 680, "Id_Client" => 2)
        );
        $Clients = array(
            array("id_c" => 1, "nom" => "Client1"),
            array("id_c" => 2, "nom" => "Client2")
        );
        return $this->render("Products/client.html.twig",array("Products"=>$Products,"Clients"=>$Clients));
    }

}
