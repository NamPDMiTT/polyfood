<?php
    require_once '/xampp/htdocs/polyfood/global.php';
    require_once '/xampp/htdocs/polyfood/dao/categories.php';
    // check_login();

extract($_REQUEST);
if(exist_param('btn_insert')) {
    $upload_category_image = save_file("category_image", "$IMAGE_DIR/categories/");
    $category_image = strlen("$upload_category_image") > 0 ? $upload_category_image : 'category.png';

    try {
        insert_categories($category_name,$category_image);
        $MESSAGE = "Thêm danh mục thành công";
        unset($category_name, $category_id,$category_image);
    } catch (Exception $exc) {
        $MESSAGE = "Thêm danh mục thất bại";
    }
    $VIEW_NAME ="../categories/new.php";
}else if(exist_param('btn_update')){
    $upload_category_image = save_file("upload_category_image", "$IMAGE_DIR/categories/");
    $category_image = strlen("$upload_category_image") > 0 ? $upload_category_image : $category_image;
    try {
        update_categories($category_name, $category_image, $category_id);
        $MESSAGE = "Cập nhật danh mục thành công";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật danh mục thất bại";
    }
    $VIEW_NAME ="../categories/edit.php";
}else if(exist_param('btn_delete')){
    try {
        categories_delete($category_id);
        $items = categories_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../categories/list.php";
} else if(exist_param('btn_edit')){
    $item = categories_select_by_id($category_id);
    extract($item);
    $VIEW_NAME ="../categories/edit.php";
} 
else if(exist_param("btn_list")){
    $items = categories_select_all();
    $VIEW_NAME ="../categories/list.php";
}
else{
    $VIEW_NAME = "../categories/new.php";
}
require_once '/xampp/htdocs/polyfood/admin/page/layout.php';
?>