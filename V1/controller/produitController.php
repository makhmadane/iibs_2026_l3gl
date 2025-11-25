<?php

require_once("./model/database.php");
require_once("./model/produit.php");


function index(){
    $produits = getAll();
    require_once("view/list.php");
}

function remove($id){
    delete($id); //model
    header('location:index.php');
}

function create(){
    require_once("view/add.php");
}

function store(){
    extract($_POST);
    save($libelle,$qt,$prix);
    header('location:index.php');
}



?>