<?php
    require_once("model/produit.php");
    //require_once("controller/produitController.php");
    require_once("bootstrap.php");

    global $entityManager;

    /*$produit = new Produit();
    $produit->setLibelle("Lait");
    $produit->setQuantite(10);
    $produit->setPrix(200);

    $entityManager->persist($produit);
    $entityManager->flush();*/

   /* $produit = $entityManager->find("Produit",2);
    $entityManager->remove($produit);
    $entityManager->flush();*/


     $produits = $entityManager->getRepository(Produit::class)->findAll();
    var_dump($produits);
    //var_dump($produit->getLibelle())
   /* 
    $model = new Produit();
    $produitController = new ProduitController($model);*/



   /* if(isset($_GET['id'])){
        $id =  $_GET['id'];
        remove($id);
    }*/
        /*
    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='addProduct'){
            $produitController-> create();
        }
        if($_GET['action']=='saveProduct'){
            $produitController-> store();
           
        }
        if($_GET['action']=='deleteProduct'){
            $produitController-> remove($_GET['id']);
           
        }


        
    }else{
        $produitController->index();
    }*/

?>