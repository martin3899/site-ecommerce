<?php
session_start();

include "my-functions.php";
include "database.php";
include "./classes/catalogue.php";
include "./classes/pdo.php";
include "./classes/clients.php";
include "./classes/heritage-product.php";


try {
    $db = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'Martin3899', 'Actutennis38!');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if ( isset($_POST['product']) && isset($_POST['quantity']) && isset($_POST['action'])) {
    $productKey = $_POST['product'];
    $quantity = $_POST['quantity'];
    $action = $_POST['action'];

    if ($action === "add") {
        addToCart($productKey, $quantity);
    }
}

if( isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['adress'])) {
    $_SESSION['firstName']=$_POST['firstName'];
    $_SESSION['lastName']=$_POST['lastName'];
    $_SESSION['adress']=$_POST['adress'];
    addCustomer($db, $_SESSION['firstName'],$_SESSION['lastName'],$_SESSION['adress']);

}

var_dump($_POST);
if ( isset($_POST['validate_form']) && isset($_POST['product']) && isset($_POST['quantity'])){
    $dateTime=date('Y-m-d h-i-s');
    $numberOrder=random_int(0,99999);
    addOrder($db,$dateTime,$numberOrder);
    foreach ($_POST['product'] as $productKey => $product) {
        addQuantity($db, $product, $numberOrder, $_POST['quantity'][$productKey]);
        calculateNewStock($db, $_POST['quantity'][$productKey], $product);
    }
}


$cart=getCart();
$total=getCartTotal($cart);


include "template/header.php";


?>


<div>
    <form action="cart.php" method="post">
        <label for="firstName">Prénom</label>
        <input class="text_input" type="text" name="firstName" >
        <label for="lastName">Nom</label>
        <input class="text_input" type="text" name="lastName" >
        <label for="adress">Adresse</label>
        <input class="text_input" type="text" name="adress" >
        <p><input class="submit_button" type="submit" name="validate_customer" value="Valider"> </p>
    </form>
    <form action="cart.php" method="post">
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($cart as $item):
            ?>
                <tr>
                    <td><?php echo  $item['id']?> </td>
                    <td><?php echo formatPrice(getPriceWithTax($item['price'])) ?></td>
                    <td><input type="hidden" name="product[]" value="<?php echo $item['id'] ?>">
                        <input type="number" name="quantity[]" value="<?php echo $item['quantity'] ?>" min="1" max="<?php echo $item['stock'] ?>"></td>
                    <td><?php echo formatPrice(getPriceWithTax($item['total'])) ?> </td>
                </tr>
            <?php endforeach;?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="2">
                </td>
                <td>Total HT</td>
                <td><?php echo formatPrice($total) ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Dont TVA</td>
                <td><?php echo formatPrice(getTaxFromPrice($total)) ?></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Total TTC</td>
                <td><?php echo formatPrice(getPriceWithTax($total)) ?></td>
            </tr>
            </tfoot>
        </table>
        <p><input class="submit_button" type="submit" name="validate_form" value="Valider"> </p>
    </form>
</div>





<?php

include "template/footer.php";

?>

