<?php

require_once("./model/database.php");
require_once("./model/produit.php");


class ProduitController {
    private $produitModel;

    function __construct($produitModel){
        $this->produitModel = $produitModel;
    }

    //Méthodes
    function index(){
        $produits = $this->produitModel->getAll();
        require_once("view/list.php");
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
}

   





?>