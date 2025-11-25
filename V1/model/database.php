<?php

$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="passer";
$dbname="gestion_2026_iibs";
            
$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
   echo "succes";
}

