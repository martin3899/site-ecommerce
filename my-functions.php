<?php
function formatPrice ($prix){
    return  round($prix/100, 2) . "€";
}


function priceExcludingVAT ($prixTTC){
    $TVA = 20;
    return (100*$prixTTC)/((100+$TVA));
}


function discountedPrice($prixAvantRemise){
    $remise = 0.1; //remise de 10%
    return formatPrice($prixAvantRemise*(1-$remise));
}

function totalPrice($prix,$quantite){
    return $prix*$quantite;
}

function priceTransport($quantite){
    if ($quantite==1){
        return 8000;
    }
    elseif ($quantite>1 && $quantite<3){
        return 4000;
    }

    else {
        return 0;
    }

}