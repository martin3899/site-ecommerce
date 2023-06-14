<?php



function addOrder($db, $date, $numberOrder){

    $stmt=$db->prepare ('insert into orders(date)
    values(:date,:numberOrder)');
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':numberOrder', $numberOrder);
    $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);

}

function addCustomer($db,$firstName,$lastName,$adress){
    $stmt = $db->prepare('insert into customers(first_name,last_name,address)
    values (:firstName, :lastName,:adress)');
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':adress', $adress);
    $stmt->execute();
    $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
}

function addQuantity($db,$product,$numberOrder,$quantity){
    $stmt= $db->prepare('insert into product_order(product_id,order_id,quantity)
    values (:product,:numberOrder,:quantity)');
    $stmt->bindParam(':product', $product);
    $stmt->bindParam(':numberOrder', $numberOrder);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->execute();
    $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
}

function calculateNewStock($db,$quantity,$productId)
{
    $stmt =$db->prepare( 'update products set stock=stock-:quantity
    where id=:productId');
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':productId', $productId);
    $stmt->execute();
    $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
}

//function findId($db){
//    $stmt= $db->prepare('select id from products');
//    $stmt->execute();
//    return $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
//}


