<?php



function addOrder($db, $date, $numberOrder){

    $stmt=$db->prepare ('insert into orders(date)
    values(:date,:numberOrder)');
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':numberOrder', $numberOrder);

}

function addCustomer($db,$firstName,$lastName,$adress){
    $stmt = $db->prepare('insert into customers(first_name,last_name,adress)
    values (:firstName, :lastName,:adress)');
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':adress', $adress);
    $stmt->execute();
}

function addQuantity($db,$product,$numberOrder,$quantity){
    $stmt= $db->prepare('insert into product_order(product_id,order_id,quantity)
    values (:product,:numberOrder,:quantity)');
    $stmt->bindParam(':product', $product);
    $stmt->bindParam(':numberOrder', $numberOrder);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->execute();
}

function calculateNewStock($db,$quantity,$productId)
{
    $stmt =$db->prepare( 'update products set stock=stock-:quantity
    where id=:productId');
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':productId', $productId);
    $stmt->execute();
}

