<?php

require_once "products.php";
function formatPrice ($prix){
    return  round($prix/100, 2) . "€";
}

function formatWeight($weight){
    return round($weight/1000, 1) . "kg";
}


function getPriceWithTax($price, $tax = 20) {
    return $price * (1 + $tax/100);
}

function getTaxFromPrice($price, $tax = 20) {
    return $price * ($tax/100);
}


function addToCart($productKey, $quantity) {

    $product = getProduct($productKey);

    // On ne fait rien si le produit n'est pas en stock
    if ($product['stock'] === 0 || $product['stock'] < $quantity) {
        return;
    }

    // On initialise le tableau de session s'il n'existe pas encore
    if (! isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // On ajoute (ou remplace) le produit au panier
    if (isset($_SESSION['cart'][$productKey])) {
        $_SESSION['cart'][$productKey] += $quantity;
    } else {
        $_SESSION['cart'][$productKey] = $quantity;
    }
}

function getCart() {
    $cartSession = $_SESSION['cart'] ?? [];

    $cart = [];

    foreach($cartSession as $productKey => $quantity) {

        $product = getProduct($productKey);

        $cart[] = [
            'id'        => $productKey,
            'stock'     => $product['stock'],
            'price'     => $product['price'],
            'quantity'  => $quantity,
            'total'     => $product['price'] * $quantity,
        ];
    }

    return $cart;
}

function getCartTotal($cart) {
    $total = 0;

    foreach($cart as $item) {
        $total += $item['total'];
    }

    return $total;
}
