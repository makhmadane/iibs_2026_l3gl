<?php
    require_once './model/database.php';
    require_once("model/produit.php");
    require_once("controller/produitController.php");

    $db = new Database();
    $model = new Produit($db->get_Connexion());
    $produitController = new ProduitController($model);



   /* if(isset($_GET['id'])){
        $id =  $_GET['id'];
        remove($id);
    }*/
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
    }

?>