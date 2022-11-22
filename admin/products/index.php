<?php
require_once '/xampp/htdocs/polyfood/global.php';
require_once '/xampp/htdocs/polyfood/dao/products.php';
require_once '/xampp/htdocs/polyfood/dao/categories.php';
// check_login();
extract($_REQUEST);
if(exist_param('btn_insert')) {
    $upload_image = save_file("image", "$IMAGE_DIR/products/");
    $image = strlen("$upload_image") > 0 ? $upload_image : 'product.png';
    try {
        products_insert($product_name, $price, $discount, $image, $category_id, $quantity, $detail);
        unset($product_name, $price, $discount, $image, $category_id, $quantity, $detail);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "../products/new.php";
}else
if(exist_param('btn_update')){
    $upload_image = save_file("upload_image", "$IMAGE_DIR/products/");
    $image = strlen("$upload_image") > 0 ? $upload_image : $image;
    try {
        products_update($product_id,$product_name, $price, $discount, $image, $category_id,  $quantity, $detail);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "../products/edit.php";
}else if(exist_param('btn_delete')){
    try {
        products_delete($product_id);
        $items = products_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../products/list.php";
}else if(exist_param('btn_edit')){
    $item = products_select_by_id($product_id);
    extract($item);
    $VIEW_NAME ="../products/edit.php";
} 
else if(exist_param("btn_list")){
    $items = products_select_all();
    $VIEW_NAME ="../products/list.php";
}
else{
    $VIEW_NAME = "../products/new.php";
}
require_once '/xampp/htdocs/polyfood/admin/page/layout.php';


?>