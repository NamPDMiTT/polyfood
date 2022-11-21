<?php
require '../../global.php';
require '../../dao/users.php';

extract($_REQUEST);

if (exist_param("btn_register")) {
    if ($password != $confirm_password) {
        $MESSAGE = "Xác nhận mật khẩu không đúng!";
    } else if (users_exist($user_name)) {
        $MESSAGE = "Tên đăng nhập này đã được sử dụng!";
    } else {
        $up_hinh = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = strlen("$up_hinh") > 0 ? $up_hinh : "user.png";
        try {
            insert_users($user_name, $password, $name , $email, $phone, $image, $role);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
} else {
    global $user_name, $password, $name , $email, $phone, $image, $role, $confirm_password;
}

$VIEW_NAME = "account/sign-up-form.php";
require '../layout.php';
