<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
function insert_order($product_id,$quantity,$user_id,$time_order,$note,$total_price,$status){
    $sql = "INSERT INTO orders(product_id,quantity,user_id,time_order,note,total_price,status) 
                      VALUES ( $product_id, $quantity, '$user_id', '$time_order', '$note', $total_price, $status)";
    pdo_execute($sql);
} 
function update_order($product_id,$quantity,$user_id,$time_order,$note,$total_price,$status,$order_id){
    $sql = "UPDATE orders SET product_id=$product_id, quantity=$quantity, user_id='$user_id', time_order='$time_order', note='$note', total_price=$total_price, status=$status WHERE order_id=$order_id";
    pdo_execute($sql);
}
function order_delete($order_id) {
    if(is_array($order_id)){
        foreach ($order_id as $ma) {
    $sql = "DELETE FROM orders WHERE order_id=$ma";

            pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM orders WHERE order_id=$order_id";

        pdo_execute($sql);
    }

}
function order_select_all(){
    $sql = "SELECT * FROM orders";
    return pdo_query($sql);
}
function order_select_by_id($order_id){
    $sql = "SELECT * FROM orders WHERE order_id=$order_id";
    return pdo_query_one($sql);
}
function order_exist($order_id){
    $sql = "SELECT count(*) FROM orders WHERE order_id=$order_id";
    return pdo_query_value($sql) > 0;
}
function order_select_by_user_id($user_id) {
    $sql = "SELECT * FROM orders WHERE user_id=$user_id";
    return pdo_query($sql);

}
function order_change_status($order_id, $status) {
    $sql = "UPDATE orders SET status=$status WHERE order_id=$order_id";
    pdo_execute($sql);
}
// order đã được xử lý
function order_select_by_finish() {
    $sql = "SELECT * FROM orders WHERE status=1";
    return pdo_query($sql);
}

// order chưa được xử lý

function order_select_by_unfinished() {
    $sql = "SELECT * FROM orders WHERE status=0";
    return pdo_query($sql);

}
?>