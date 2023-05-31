<?php
global $products;
include "template/header.php";
include "item.php";
include "my-functions.php";
?>
<?php
//foreach ($products as $product):
    print_r($_POST)
    ?>

<div>
    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Total HT</th>
                <th>TVA</th>
                <th>Transport</th>
                <th>Total TTC</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST["marqueVelo"]?> </td>
                <td><?php echo formatPrice($_POST["prixVelo"]) ?></td>
                <td><?php echo $_POST["nombreVelo"]?></td>
                <td><?php echo formatPrice(totalPrice($_POST["prixVelo"],$_POST["nombreVelo"])) ?> </td>
                <td><?php echo formatPrice(priceExcludingVAT(totalPrice($_POST["prixVelo"],$_POST["nombreVelo"]))) ?></td>
                <td><?php echo formatPrice(totalPrice($_POST["prixVelo"],$_POST["nombreVelo"])-priceExcludingVAT(totalPrice($_POST["prixVelo"],$_POST["nombreVelo"]))) ?> </td>
                <td><?php echo formatPrice(priceTransport($_POST["nombreVelo"])) ?> </td>
                <td><?php echo formatPrice(totalPrice($_POST["prixVelo"],$_POST["nombreVelo"])+priceTransport($_POST["nombreVelo"])) ?> </td>
            </tr>
        </tbody>

    </table>

</div>






<?php
include "template/footer.php";

?>