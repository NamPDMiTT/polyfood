<?php
require_once '/xampp/htdocs/polyfood/global.php';
require_once '/xampp/htdocs/polyfood/dao/orders.php';
require_once '/xampp/htdocs/polyfood/dao/products.php';
extract($_REQUEST);
if (!isset($_SESSION['my_cart'])) {
    $_SESSION['my_cart'] = [];
}
if(exist_param("btn_order")){
    // $product_id=$_POST['product_id'];
    $order_product = products_select_by_id($product_id);
    extract($order_product);
    $quantity = 1;
    $total_price = $price * $discount * $quantity;
    $status = 0;
    $user_id = $_SESSION['user']['user_id'];
    $add_orders = [$product_id,$product_name,$quantity,$user_id,$total_price,$status,$category_id,$price,$image];
    array_push($_SESSION['my_cart'],$add_orders);
    $VIEW_NAME = 'my-cart.php';
}else if(exist_param("btn_re_quality")) {
        $VIEW_NAME = "my-cart.php";
        $quantity = $_GET["quantity"];
        $id = $_GET["product_id"];
        if ($_GET["choose"] == 1) {
            $quantity += 1;
        }
        if ($_GET["choose"] == 0) {
    
            if ($quantity > 1) {
                $quantity -= 1;
            } 
        }
        update_product_cart($quantity, $quantity*$_GET["price"] , $id);
}else if(exist_param("btn_delete")){
    $VIEW_NAME = "my-cart.php";
    $id = $_GET["product_id"];
    array_splice($_SESSION['my_cart'], $id, 1);
}else if(exist_param("btn_checkout")) {
    $VIEW_NAME = "checkout.php";
    $user_id = $_SESSION['user']['user_id'];
    $time_order = date("Y-m-d H:i:s");
    $status = 0;


}else if(exist_param("order")){
    $VIEW_NAME = "checkout.php";
    $user_id = $_SESSION['user']['user_id'];
    $time_order = date("Y-m-d H:i:s");
    $status = 0;
    $note = $_POST['note'];
    $total_price = $_POST['total_price'];
    $order_id = insert_order($product_id,$quantity,$user_id,$time_order,$note,$total_price,$status);

 }else {
    $VIEW_NAME = "my-cart.php";
}
require_once $VIEW_NAME;
?>