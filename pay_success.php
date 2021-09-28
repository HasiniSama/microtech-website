<?php
include "db_conn.php";

/*getting session variables*/
session_start();
$email = $_SESSION['email'];
$prize = $_SESSION['total'];
$order_id = $_SESSION['order_id'];
$cart_sql = $_SESSION['cart_sql'];

/*update orders*/
$sql_orders = "INSERT INTO `orders` (`orderid`, `email`, `price`, `time`) 
               VALUES ('$order_id','$email','$prize','2021-09-28 23:26:14')";
$result_orders = $conn->query($sql_orders);

/*getting cart details*/
$cart_result = $conn->query($cart_sql);

while ($row = $cart_result->fetch_array()) {

    /*update orderdetails*/
    $sql_orderdetails = "INSERT INTO `orderdetails` (`orderid`, `itemid`, `no_of_items`) 
                         VALUES ('$order_id', '".$row['itemid']."', '".$row['no_of_items']."')";
    $result_orderdetails = $conn->query($sql_orderdetails);

    /*update stock*/
    $sql_stock_update = "UPDATE `stock` SET `no_of_items` = `no_of_items` - ".$row['no_of_items']." 
                         WHERE `stock`.`item_id` = '".$row['itemid']."'";
    $result_stock_update = $conn->query($sql_stock_update);
    echo $sql_stock_update;

}

/*update cart*/
$sql_cart_delete = "DELETE FROM `cart` WHERE usermail='$email'";
$result_orders = $conn->query($sql_cart_delete);



/*redirect to cart*/
header("Location:shopping_cart.php");
?>