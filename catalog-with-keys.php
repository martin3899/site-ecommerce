<?php

$giant = array(
"name" => "Giant",
"price" => 3500,
"weight" => 8500,
"picture" => "https://www.intercycle.fr/Files/124649/Img/08/gia22-propadvsld1M-Velo-Route-GIANT-Propel-Advanced-SL-1-Disc-AXS_1x1200.jpg"
);
$scott = array(
    "name" => "Scott",
    "price" => 2500,
    "weight" => 9000,
    "picture" => "https://static.cyclelab.eu/velos/scott/2007/ico/280644.jpg",
);
$lapierre = array(
    "name" => "Lapierre",
    "price" => 10000,
    "weight" => 78000,
    "picture" => "https://adfnjoxprq.cloudimg.io/v7/_lapierre_prod/media/87/42/87/1619004687/Pulsium%20SAT%206.0.png",
);
    $trek = array(
        "name" => "Trek",
        "price" => 5000,
        "weight" => 8200,
        "picture" => "https://static.cyclelab.eu/velos/trek/2007/highres/2014_A_1_1_1_H2_Compact.jpg",
    );
    include "my-functions.php";
    ?>

<div>
    <h3><?php echo $giant["name"]?></h3>
    <p><?php echo "Prix: " . $giant["price"]  ?></p>
    <img src="https://www.intercycle.fr/Files/124649/Img/08/gia22-propadvsld1M-Velo-Route-GIANT-Propel-Advanced-SL-1-Disc-AXS_1x1200.jpg" height="100" width="100" alt="image vélo giant"/>
</div>

<div>
    <h3><?php echo $scott["name"]?></h3>
    <p><?php echo "Prix: " . $scott["price"]  ?></p>
    <img src="https://static.cyclelab.eu/velos/scott/2007/ico/280644.jpg" height="100" width="100" alt="image vélo scott" />
</div>

<div>
    <h3><?php echo $lapierre["name"]?></h3>
    <p><?php echo "Prix: " . $lapierre["price"]  ?></p>
    <img src="https://adfnjoxprq.cloudimg.io/v7/_lapierre_prod/media/87/42/87/1619004687/Pulsium%20SAT%206.0.png" height="100" width="100" alt="image vélo lapierre" />
</div>

<div>
    <h3><?php echo $trek["name"]?></h3>
    <p><?php echo "Prix: " . $trek["price"]  ?></p>
    <img src="https://static.cyclelab.eu/velos/trek/2007/highres/2014_A_1_1_1_H2_Compact.jpg" height="100" width="100" alt="image vélo trek" />
</div>


