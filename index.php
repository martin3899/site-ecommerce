<?php
session_start();

require_once "products.php";
include "my-functions.php";

$products = getProducts();
include "./template/header.php";
?>


<main>

<?php

foreach ($products as $productKey => $product):

?>

    <div class="container">
        <div class="columns">
            <div class="columns__column">
                <img src="<?php echo $product["picture"] ?>" height="400" width="400" alt="image vélo"/>
            </div>
            <div class="columns__column">
                <h3><?php echo $product["name"]?></h3>
                <p>Prix : <?php echo formatPrice($product["price"])  ?></p>
                <p><?php echo "Poids: " . formatWeight($product["weight"])  ?></p>

                <form class="form" action="cart.php" method="post">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" id="marqueVelo" name="product" value="<?php echo $productKey?>">
                    <label for="nombreVelo">Quantité</label>
                    <input class="quantiy_input" id="nombreVelo" type="number" name="quantity" value="0" min="0", max="<?php echo $product['stock']; ?>">
                    <p><input class="submit_button" type="submit" name="order_form" value="Ajouter au panier"> </p>
                </form>
            </div>
        </div>
    </div>

    <?php
endforeach;
    ?>

</main>

<?php
include "./template/footer.php";

?>