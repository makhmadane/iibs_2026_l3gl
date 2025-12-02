<?php
   
    require_once("controller/produitController.php");
    require_once("bootstrap.php");
    require_once("model/produitRepository.php");


    $loader = new \Twig\Loader\FilesystemLoader('./view');
    $twig = new \Twig\Environment($loader,[]);

    $model = new ProduitRepository();
    $produitController = new ProduitController($model);



    
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
         if($_GET['action']=='modifProduct'){
            $produitController->edit($_GET['id']);
           
        }

         if($_GET['action']=='updateProduct'){
            
           $produitController->updateProduit();
        }

        


        
    }else{
        $produitController->index();
    }

?>