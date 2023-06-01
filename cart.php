<?php
global $products;
global $transporters;
include "template/header.php";
include "item.php";
include "my-functions.php";
$_SESSION["marqueVelo"]= $_POST["marqueVelo"];
$_SESSION["prixVelo"]= $_POST["prixVelo"];
$_SESSION["nombreVelo"]= $_POST["nombreVelo"];
?>
<?php

    print_r($_POST);
    ?>

<div>
    <table class="table table-striped-columns">
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
        <?php foreach ($products as $product):

        ?>
            <tr>
                <td><?php echo $_SESSION["marqueVelo"]?> </td>
                <td><?php echo formatPrice($_SESSION["prixVelo"]) ?></td>
                <td><?php echo $_SESSION["nombreVelo"]?></td>
                <td><?php echo formatPrice(totalPrice($_SESSION["prixVelo"],$_SESSION["nombreVelo"])) ?> </td>
                <td><?php echo formatPrice(priceExcludingVAT(totalPrice($_SESSION["prixVelo"],$_SESSION["nombreVelo"]))) ?></td>
                <td><?php echo formatPrice(totalPrice($_SESSION["prixVelo"],$_SESSION["nombreVelo"])-priceExcludingVAT(totalPrice($_SESSION["prixVelo"],$_SESSION["nombreVelo"]))) ?> </td>
                <td><?php echo formatPrice(priceTransport($_SESSION["nombreVelo"])) ?> </td>
                <td><?php echo formatPrice(totalPrice($_SESSION["prixVelo"],$_SESSION["nombreVelo"])+priceTransport($_SESSION["nombreVelo"])) ?> </td>
            </tr>
        <?php endforeach;?>
        </tbody>

    </table>

</div>






<?php

include "template/footer.php";

?>