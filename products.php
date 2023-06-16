<?php
function getProducts()
{
    return [
        "giant" => [
            "name" => "giant",
            "price" => 350000,
            "weight" => 8500,
            "picture" => "http://localhost/site-ecommerce/images/velo-giant.jpg",
            "stock" => 20,
        ],
        "scott" => [
            "name" => "scott",
            "price" => 250000,
            "weight" => 9000,
            "picture" => "http://localhost/site-ecommerce/images/velo-scott.jpg",
            "stock" => 15,
        ],

        "lapierre" => [
            "name" => "lapierre",
            "price" => 1000000,
            "weight" => 7800,
            "picture" => "http://localhost/site-ecommerce/images/velo-lapierre.jpg",
            "stock" => 5,
        ],
        "trek" => [
            "name" => "trek",
            "price" => 500000,
            "weight" => 8200,
            "picture" => "http://localhost/site-ecommerce/images/velo-trek.jpg",
            "stock" => 10,
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