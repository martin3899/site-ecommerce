<?php
$products = [
    "giant" => [
        "name" => "Giant",
        "price" => 3500,
        "weight" => 8500,
        "picture" => "https://www.intercycle.fr/Files/124649/Img/08/gia22-propadvsld1M-Velo-Route-GIANT-Propel-Advanced-SL-1-Disc-AXS_1x1200.jpg"
    ],
    "scott" => [
        "name" => "Scott",
        "price" => 2500,
        "weight" => 9000,
        "picture" => "https://static.cyclelab.eu/velos/scott/2007/ico/280644.jpg",
        ],

    "lapierre" => [
        "name" => "Lapierre",
        "price" => 10000,
        "weight" => 7800,
        "picture" => "https://adfnjoxprq.cloudimg.io/v7/_lapierre_prod/media/87/42/87/1619004687/Pulsium%20SAT%206.0.png",
],
    "trek" => [
        "name" => "Trek",
        "price" => 5000,
        "weight" => 8200,
        "picture" => "https://static.cyclelab.eu/velos/trek/2007/highres/2014_A_1_1_1_H2_Compact.jpg",
    ],

];
include "my-functions.php";
?>

<div>
    <div>
        <h3><?php echo "Marque: " . $products["giant"]["name"]?></h3>
        <p><?php echo "Prix: " . $products["giant"]["price"]  ?></p>
        <img src="https://www.intercycle.fr/Files/124649/Img/08/gia22-propadvsld1M-Velo-Route-GIANT-Propel-Advanced-SL-1-Disc-AXS_1x1200.jpg" height="100" width="100" />
    </div>
</div>

<div>
    <h3><?php echo "Marque: " . $products["scott"]["name"]?></h3>
    <p><?php echo "Prix: " . $products["scott"]["price"]  ?></p>
    <img src="https://static.cyclelab.eu/velos/scott/2007/ico/280644.jpg" height="100" width="150" />
</div>

<div>
    <h3><?php echo "Marque: " . $products["lapierre"]["name"]?></h3>
    <p><?php echo "Prix: " . $products["lapierre"]["price"]  ?></p>
    <img src="https://adfnjoxprq.cloudimg.io/v7/_lapierre_prod/media/87/42/87/1619004687/Pulsium%20SAT%206.0.png" height="100" width="120" />
</div>

<div>
    <h3><?php echo "Marque: " . $products["trek"]["name"]?></h3>
    <p><?php echo "Prix: " . $products["trek"]["price"]  ?></p>
    <img src="https://static.cyclelab.eu/velos/trek/2007/highres/2014_A_1_1_1_H2_Compact.jpg" height="100" width="100" />
</div>
