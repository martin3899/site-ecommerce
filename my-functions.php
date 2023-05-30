<?php
function formatPrice ($prix){
    echo  round($prix/100, 2) . "€";
}


function priceExcludingVAT ($prixTTC){
    $TVA = 20;
    echo formatPrice((100*$prixTTC)/((100+$TVA)));
}
print_r(priceExcludingVAT (350000));

function discountedPrice($prixAvantRemise){
    $remise = 0.1; //remise de 10%
    echo formatPrice($prixAvantRemise*(1-$remise));
}