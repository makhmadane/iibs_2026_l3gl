<?php



 function save($libelle,$qt,$pu){
    global $connexion;
    $sql ="INSERT INTO produit (libelle, qt, pu) values('$libelle',$qt,$pu)";
    return pg_query($connexion,$sql);
 }


 function getAll(){
    global $connexion;
    $sql = "SELECT * FROM produit";
    return pg_query($connexion,$sql);
 }

 function delete($id){
    global $connexion;
    $sql ="DELETE FROM produit where id = $id";
    return pg_query($connexion,$sql);
 }

 function update($libelle,$qt,$pu,$id){
    global $connexion;
    $sql ="UPDATE produit set libelle='$libelle',qt=$qt,pu=$pu where id = $id)";
    return pg_query($connexion,$sql);
 }

