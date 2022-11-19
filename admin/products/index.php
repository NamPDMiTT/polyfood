<?php
require_once '/xampp/htdocs/polyfood/global.php';
require_once '/xampp/htdocs/polyfood/dao/products.php';
// check_login();
extract($_REQUEST);
if(exist_param('btn_insert')) {
    try {
        products_insert($product_name, $price, $discount, $image, $category_id,  $view, $quantity, $detail);
        $MESSAGE = "Thêm sản phẩm thành công";
        unset($name, $price, $image, $description, $status, $product_id);
    } catch (Exception $exc) {
        $MESSAGE = "Thêm sản phẩm thất bại";
    }
    $VIEW_NAME ="../products/new.php";
}else
if(exist_param('btn_update')){
    try {
        products_update($product_id,$product_name, $price, $discount, $image, $category_id,  $view, $quantity, $detail);
        $MESSAGE = "Cập nhật sản phẩm thành công";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật sản phẩm thất bại";
    }
    $VIEW_NAME ="../products/edit.php";
}else if(exist_param('btn_delete')){
    if (products_delete($product_id)) {
        $items = products_select_all();
        $MESSAGE = "Xóa thành công!";
    } else {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../products/list.php";
} else if(exist_param('btn_edit')){
    $product = products_select_by_id($product_id);
    extract($product);
    $VIEW_NAME ="../products/edit.php";
} else  {
    $items = products_select_all();
    $VIEW_NAME = "../products/list.php";
}
require_once '/xampp/htdocs/polyfood/admin/page/layout.php';


?>