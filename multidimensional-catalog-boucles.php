<?php
$products = [
    "giant" => [
        "name" => "Giant",
        "price" => 350000,
        "weight" => 8500,
        "picture" => "http://localhost/site-ecommerce/images/velo-giant.jpg",
    ],
    "scott" => [
        "name" => "Scott",
        "price" => 250000,
        "weight" => 9000,
        "picture" => "http://localhost/site-ecommerce/images/velo-scott.jpg",
    ],

    "lapierre" => [
        "name" => "Lapierre",
        "price" => 1000000,
        "weight" => 7800,
        "picture" => "http://localhost/site-ecommerce/images/velo-lapierre.jpg",
    ],
    "trek" => [
        "name" => "Trek",
        "price" => 500000,
        "weight" => 8200,
        "picture" => "http://localhost/site-ecommerce/images/velo-trek.jpg",
    ],

];
include "my-functions.php";

foreach ($products as $product):

?>


<div>
    <h3><?php echo $product["name"]?></h3>
    <p>Prix TTC : <?php echo formatPrice($product["price"])  ?></p>
    <p>Prix HT : <?php echo priceExcludingVAT($product["price"])  ?></p>
    <p>Prix remisé : <?php echo discountedPrice($product["price"])  ?></p>
    <p><?php echo "Poids: " . $product["weight"]  ?></p>
    <img src="<?php echo $product["picture"] ?>" height="100" width="100" alt="image vélo"/>

</div>

<?php

endforeach;

?>