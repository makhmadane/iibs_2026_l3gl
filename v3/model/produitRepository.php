<?php
   class ProduitRepository {
    
    function save($p){
      global $entityManager;
      
      $produit = new Produit();
      $produit->setLibelle($p['libelle']);
      $produit->setQuantite($p['qt']);
      $produit->setPrix($p['prix']);

      $entityManager->persist($produit);
      $entityManager->flush();

   }
  
  
   function getAll(){
       global $entityManager;
      return  $entityManager->getRepository(Produit::class)->findAll();    
   }
  
   function delete($id){
      global $entityManager;
      $produit = $this->findByIdProduit($id);
      $entityManager->remove($produit);
      $entityManager->flush();
   }

   function findByIdProduit($id){
      global $entityManager;
      return $entityManager->find("Produit",$id);

   }
  
   function update($p){
      global $entityManager;
      $produit = $this->findByIdProduit($p['id']);
      var_dump($produit);
      $produit->setLibelle($p['libelle']);
      $produit->setQuantite($p['qt']);
      $produit->setPrix($p['prix']);
      $entityManager->flush();
   }
  
}



