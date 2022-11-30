<?php
require_once "/xampp/htdocs/polyfood/global.php";
require_once "../../dao/users.php";
require_once "../../dao/roles.php";
//--------------------------------//
check_login();
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $upload_image = save_file("image", "$IMAGE_DIR/users/");
    $image = strlen("$upload_image") > 0 ? $upload_image : 'user.png';
    try {
        insert_users($user_name, $password, $name, $email, $phone, $image, $role_id);
        unset($user_name, $password, $name, $email, $phone, $image, $role_id);
        $MESSAGE = "Thêm mới thành công!";

    } catch (Exception $exc) {
        
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "../users/new.php";
} else if (exist_param("btn_update")) {
    $upload_image = save_file("upload_image", "$IMAGE_DIR/users/");
    $image = strlen("$upload_image") > 0 ? $upload_image : $image;
    try {
        update_users($user_name, $password, $name, $email, $phone, $image, $role_id, $user_id);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $items = select_all_users();
    $VIEW_NAME = "../users/list.php";
} else if (exist_param("btn_delete")) {
    try {
        delete_users($user_id);
        $items = select_all_users();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../users/list.php";
} else if (exist_param("btn_edit")) {
    $roles = roles_select_all();
    $item = select_by_id_users($user_id);
    extract($item);
    $role_check = $role_id;
    $VIEW_NAME = "../users/edit.php";
} else if (exist_param("btn_list")) {
    $items = select_all_users();
    $VIEW_NAME = "../users/list.php";
} else {
    $roles = roles_select_all();
    $VIEW_NAME = "../users/new.php";
}

require "/xampp/htdocs/polyfood/admin/page/layout.php";
