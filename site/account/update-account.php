<?php
require '../../global.php';
require '../../dao/users.php';

// check_login();

extract($_REQUEST);

if (exist_param("btn_update")) {
    $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
    $hinh = strlen("$file_name") > 0 ? $file_name : $hinh;
    try {
        update_users($user_name, $password,$name, $email, $phone, $image, $role, $user_id);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = select_by_name_users($user_name);
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
} else {
    extract($_SESSION['user']);
}

$VIEW_NAME = "account/update-account-form.php";
require '../layout.php';