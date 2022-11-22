<?php
require '../../global.php';
require '../../dao/users.php';

extract($_REQUEST);

if (exist_param("btn_register")) {
    if ($password != $password2) {
        $MESSAGE = "Xác nhận mật khẩu không đúng!";
    } else if (users_exist($user_name)) {
        $MESSAGE = "Tên đăng nhập này đã được sử dụng!";
    } else {
        $avatar = save_file("avatar", "$IMAGE_DIR/users/");
        $hinh = strlen("$avatar") > 0 ? $avatar : "user.png";
        try {
            insert_users($user_name, $password, $name , $email, $phone, $avatar, $role);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
} else {
    global $user_name, $password, $name , $email, $phone, $avatar, $role, $password2;
}

$VIEW_NAME = "account/sign-up-form.php";
require '../layout.php';
