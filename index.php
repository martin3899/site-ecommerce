<?php
session_start();


include "./classes/catalogue.php";
include "./classes/pdo.php";
include "./classes/clients.php";
include "./template/header.php";



$connection = new connexionToDatabase();
$products = $connection->request('select * from products ');
$catalogue=new Catalogue($products);
$catalogue->displayCatalogue($products);


$customer = $connection->request('select * from customers ');
$clientList=new ClientsList($customer);
$clientList->displayClientList($customer);


include "./template/footer.php";

