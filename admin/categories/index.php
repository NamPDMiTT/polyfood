<?php
    require_once '/xampp/htdocs/polyfood-main/global.php';
    require_once '/xampp/htdocs/poly-food/dao/categories.php';
    check_login();

extract($_REQUEST);
if(exist_param('btn_insert')) {
    try {
        insert_categories($cate_name);
        $MESSAGE = "Thêm danh mục thành công";
        unset($cate_name, $cate_id);
    } catch (Exception $exc) {
        $MESSAGE = "Thêm danh mục thất bại";
    }
    $VIEW_NAME ="../categories/new.php";
}else if(exist_param('btn_update')){
    try {
        update_categories($cate_name, $cate_id);
        $MESSAGE = "Cập nhật danh mục thành công";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật danh mục thất bại";
    }
    $VIEW_NAME ="../categories/edit.php";
}else if(exist_param('btn_delete')){
    try {
        categories_delete($ma_loai);
        $items = categories_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../categories/list.php";
} else if(exist_param('btn_edit')){
    $cate = categories_select_by_id($cate_id);
    extract($cate);
    $VIEW_NAME ="./categories/edit.php";
} else {
    $list = categories_select_all();
    $VIEW_NAME ="./categories/list.php";
}
require_once '/xampp/htdocs/polyfood-main/admin/layout.php';
?>