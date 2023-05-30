<?php
    $products = ["giant","scott","lapierre","trek"];

    echo "Le premier produit du tableau est " . $products[0] ."<br>";

    echo "Le dernier produit du tableau est " . $products[count($products)-1] . "<br>";



    for ($i=0; $i<count($products); $i++){
        echo $products[$i] . "<br>";
        }
    $i=0;

    while ($i < count($products)){
        echo $products[$i] . "<br>";
        $i++;
    }


    $i=0;
    do {
        echo $products[$i] . "<br>";
        $i++;
    } while($i < count($products));

    foreach ($products as $brand){
        echo $brand . "<br>";
    }

    include "my-functions.php";







