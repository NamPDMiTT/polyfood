<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
function insert_feedbacks($user_id, $product_id, $content, $time_send){
    $sql = "INSERT INTO feedbacks(user_id, product__id, content, time_send) 
                      VALUES ( '$user_id', '$product_id', '$content', '$time_send')";
    pdo_execute($sql);
}
function update_feedbacks($user_id, $product_id, $content, $time_send, $feedback_id){
    $sql = "UPDATE feedbacks SET user_id='$user_id', product_id='$product_id', content='$content', time_send='$time_send' WHERE feedback_id=$feedback_id";
    pdo_execute($sql);
}
function feedbacks_delete($feedback_id) {
    if(is_array($feedback_id)){
        foreach ($feedback_id as $ma) {
    $sql = "DELETE FROM   WHERE feedback_id='$ma'";

            pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM   WHERE feedback_id='$feedback_id'";

        pdo_execute($sql);
    }

}
function feedbacks_select_all(){
    $sql = "SELECT * FROM feedbacks";
    return pdo_query($sql);
}
function feedbacks_select_by_id($feedback_id){
    $sql = "SELECT * FROM feedbacks WHERE feedback_id='$feedback_id'";
    return pdo_query_one($sql);
}
function feedbacks_exist($feedback_id){
    $sql = "SELECT count(*) FROM feedbacks WHERE feedback_id='$feedback_id'";
    return pdo_query_value($sql) > 0;
}
//feedback theo người dùng
function feedbacks_select_by_user_id($user_id) {
    $sql = "SELECT * FROM feedbacks WHERE user_id=$user_id";
    return pdo_query($sql);
}
//feedback theo sản phẩm
function feedbacks_select_by_product_id($product_id) {
    $sql = "SELECT * FROM feedbacks WHERE product_id=$product_id";
    return pdo_query($sql);

}
?>