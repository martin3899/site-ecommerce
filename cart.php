<?php
session_start();

include "my-functions.php";

if ( isset($_POST['product']) && isset($_POST['quantity']) && isset($_POST['action']) ) {
    $productKey = $_POST['product'];
    $quantity = $_POST['quantity'];
    $action = $_POST['action'];

    if ($action === "add") {
        addToCart($productKey, $quantity);
    }
}

$cart=getCart();
$total=getCartTotal($cart);

include "template/header.php";
?>


<div>
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
                    <td><?php echo  $item['title']?> </td>
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
    </form>

</div>




<pre>
<?php
include "template/footer.php";
var_dump($cart);
?>
</pre>
