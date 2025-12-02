
<form action="?action=updateProduct" method="POST">
    <input type="text" name="id" id="" hidden value="<?= $produit->getId()?>">
    <label for="">Libelle</label>
    <input type="text" name="libelle" id="" value="<?= $produit->getLibelle() ?>">
    <br>
    <label for="">Quantite</label>
    <input type="text" name="qt" id="" value="<?= $produit->getQuantite() ?>">
    <br>
    <label for="">Prix Unitaire</label>
    <input type="text" name="prix" id="" value="<?= $produit->getPrix() ?>">
    <br>
    <button name="add">Update</button>
</form>