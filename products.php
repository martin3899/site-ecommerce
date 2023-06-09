<?php
function getProducts()
{
    return [
        "giant" => [
            "name" => "Giant",
            "price" => 350000,
            "weight" => 8500,
            "picture" => "http://localhost/site-ecommerce/images/velo-giant.jpg",
            "stock" => 100,
        ],
        "scott" => [
            "name" => "Scott",
            "price" => 250000,
            "weight" => 9000,
            "picture" => "http://localhost/site-ecommerce/images/velo-scott.jpg",
            "stock" => 100,
        ],

        "lapierre" => [
            "name" => "Lapierre",
            "price" => 1000000,
            "weight" => 7800,
            "picture" => "http://localhost/site-ecommerce/images/velo-lapierre.jpg",
            "stock" => 100,
        ],
        "trek" => [
            "name" => "Trek",
            "price" => 500000,
            "weight" => 8200,
            "picture" => "http://localhost/site-ecommerce/images/velo-trek.jpg",
            "stock" => 100,
        ],

    ];
}

function getProduct($key)
{
    $products = getProducts();
    if ( !isset($products[$key]) ) {
        throw new Exception("Le produit $key n'existe pas");
    }

    return $products[$key];
}