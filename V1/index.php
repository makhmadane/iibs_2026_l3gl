<?php

    require_once("controller/produitController.php");




    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='addProduct'){
            create(); //controller
        }
        if($_GET['action']=='saveProduct'){
            extract($_POST);
            store();//controller
        }
        if($_GET['action']=='deleteProduct'){
            $id =  $_GET['id'];
            remove($id);//controller
        }
        
    }else{
        index();
    }

?>