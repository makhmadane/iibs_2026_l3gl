<?php

require_once("./model/produit.php");


class ProduitController {
    private $produitModel;

    function __construct($produitModel){
        $this->produitModel = $produitModel;
    }

    //Méthodes
    function index(){
        global $twig;
        $produits = $this->produitModel->getAll();
        echo $twig->render('list.html.twig', ["products" => $produits]);
    }

    function create(){
        require_once("view/add.php");
    }
    
    function store(){
        $this->produitModel->save($_POST);
        header('location:index.php');
    }

    function remove($id){
        $this->produitModel->delete($id);
        header('location:index.php');
    }
    
    function edit($id){
        $produit = $this->produitModel->findByIdProduit($id);
        require_once("view/edit.php");
    }

     function updateProduit(){
        $this->produitModel->update($_POST);
        header('location:index.php');
    }
}

   





?>