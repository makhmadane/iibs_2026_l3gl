<a href="?action=addProduct">ADD</a>
<table>

        <tr>
            <th>ID</th>
            <td>Libelle</td>
            <th>Quantite</th>
            <th>Prix</th>
        </tr>
        <?php while($r = pg_fetch_assoc($produits)) :?>
            <tr>
                <td><?php echo $r["id"]  ?></td>
                <td><?php echo $r["libelle"] ?></td>
                <td><?php echo $r["qt"]?></td>
                <td><?php echo $r["pu"]?></td>
                <td>
                    <a href="?action=deleteProduct&id=<?= $r["id"] ?>">Supprimer</a>
                    <br>
                    <a>Modifier</a>
                </td>
            </tr>
        <?php endwhile ?>

</table>