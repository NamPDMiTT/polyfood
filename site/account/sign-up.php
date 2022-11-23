<?php
require '../../global.php';
require '../../dao/users.php';

extract($_REQUEST);

if (exist_param("btn_register")) {
    if ($password != $password2) {
        $MESSAGE = "Xác nhận mật khẩu không đúng!";
    } else if (users_exist_by_username($user_name)) {
        $MESSAGE = "Tên đăng nhập này đã được sử dụng!";
    } else {
        $image_upload = save_file("image_upload", "$IMAGE_DIR/users/");
        $image = strlen("$image_upload") > 0 ? $image_upload : "user.png";
        try {
            insert_users($user_name, $password, $name, $email, $phone, $image, $role);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Email này đã được sử dụng!";
        }
    }
} else {
    global $user_name, $password, $name, $email, $phone, $image, $role, $password2;
}

$VIEW_NAME = "account/sign-up-form.php";
// $VIEW_NAME = "account/sign-in-form.php";
require '../layout.php';