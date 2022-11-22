<?php
require_once '/xampp/htdocs/polyfood/global.php';
require_once '/xampp/htdocs/polyfood/dao/orders.php';
// check_login();
extract($_REQUEST);
if(exist_param('btn_insert')) {
    try {
        insert_order($product_id,$quantity,$user_id,$time_order,$note,$total_price,$status);
        $MESSAGE = "Thêm đơn hàng thành công";
        unset($product_id,$quantity,$user_id,$time_order,$note,$total_price,$status);
    } catch (Exception $exc) {
        $MESSAGE = "Thêm đơn hàng thất bại";
    }
    $VIEW_NAME ="../orders/new.php";
}else
if(exist_param('btn_update')){
    try {
        update_order($product_id,$quantity,$user_id,$time_order,$note,$total_price,$status,$order_id);
        $MESSAGE = "Cập nhật đơn hàng thành công";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật đơn hàng thất bại";
    }
    $VIEW_NAME ="../orders/edit.php";
}else if(exist_param('btn_delete')){
    try {
        order_delete($order_id);
        $items = order_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../orders/list.php";
} else if(exist_param('btn_edit')){
    $order = order_select_by_id($order_id);
    extract($order);
    $VIEW_NAME ="../orders/edit.php";
} else if(exist_param('all')) {
    $items = order_select_all();
    $VIEW_NAME = "../orders/list.php";
}else if(exist_param('finished')) {
    $items =order_select_by_finish();
    $VIEW_NAME = "../orders/list.php";
}else if(exist_param('unfinished')) {
    $items =order_select_by_unfinished();
    $VIEW_NAME = "../orders/list.php";
}else{
    $items = order_select_all();
    $VIEW_NAME = "../orders/list.php";
}
require_once '/xampp/htdocs/polyfood/admin/page/layout.php';

?>