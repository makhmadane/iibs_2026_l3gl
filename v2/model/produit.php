<?php
   class Produit {
   // Properties
   private $id;
   private $libelle;
   private $quantite;
   private $prix;

   private $connexion;
   
   function __construct($connexion){
      $this->connexion = $connexion;
   }

   //Getters /Setters
   function set_id($id) {
      $this->id = $id;
   }
   function set_quantite($qt) {
      $this->quantite = $qt;
   }

   function set_prix($prix) {
      $this->prix = $prix;
   }
   function set_libelle($libelle) {
      $this->libelle = $libelle;
   }
   
   function get_id() {
      return $this->id;
   }
   function get_libelle() {
      return $this->libelle;
   }
   function get_quatite() {
      return $this->quantite;
   }
   function get_prix() {
      return $this->prix;
   }

   //Méthodes
    function save($produit){
      var_dump($produit);
      $stmt = $this->connexion->prepare("INSERT INTO produit (libelle, qt, pu) VALUES (?, ?, ?)");
      return $stmt->execute([$produit['libelle'], $produit['qt'], $produit['prix']]);
   }
  
  
   function getAll(){
      $sql = "SELECT * FROM produit";
      return $this->connexion->query($sql)->fetchAll();
       
   }
  
   function delete($id){
      global $connexion;
      $stmt = $this->connexion->prepare("DELETE FROM produit where id = ?");

      return $stmt->execute([$id]);
   }
  /*
   function update($libelle,$qt,$pu,$id){
      global $connexion;
      $sql ="UPDATE produit set libelle='$libelle',qt=$qt,pu=$pu where id = $id)";
      return pg_query($connexion,$sql);
   }*/
  
}



