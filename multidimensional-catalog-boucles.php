<?php
global $products;
global $transporters;
include "./template/header.php";

include "item.php";

include "my-functions.php";
?>

<main>

<?php

foreach ($products as $key => $product):

?>

    <div class="container">
        <div class="columns">
            <div class="columns__column">
                <img src="<?php echo $product["picture"] ?>" height="400" width="400" alt="image vélo"/>
                <div>
                    <h3><?php echo $product["name"]?></h3>
                    <p>Prix TTC : <?php echo formatPrice($product["price"])  ?></p>
                    <p>Prix HT : <?php echo priceExcludingVAT($product["price"])  ?></p>
                    <p>Prix remisé : <?php echo discountedPrice($product["price"])  ?></p>
                    <p><?php echo "Poids: " . $product["weight"]  ?></p>
                    <form action="cart.php" method="post">
                        <input id="marqueVelo" name="marqueVelo" value="<?php echo $key?>">
                        <input id="prixVelo" name="prixVelo" value="<?php echo $product["price"]?>">
                        <label for="nombreVelo">Quantité</label>
                        <input id="nombreVelo" type="number" name="nombreVelo" value="0">
                        <label for="choixTransporteur">Choix du transporteur:</label>
                        <select id="choixTransporteur" name="transporteur">
                            <option value="La poste" >La poste</option>
                            <option value='Colissimo'>Colissimo</option>
                            <option value='Chronopost'>Chronopost</option>
                        </select>
                        <p><input type="submit" name="order_form" value="Ajouter au panier"> </p>
                    </form>
                </div>
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