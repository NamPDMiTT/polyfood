<?php
require '../../global.php';
require '../../dao/users.php';

extract($_REQUEST);

$VIEW_NAME = "account/forgot-password-form.php";

if (exist_param("btn_forgot")) {
    $user = select_by_name_users($user_name);
    if ($user) {
        if ($user['email'] != $email) {
            $MESSAGE = "Sai địa chỉ email!";
        } else {
            $MESSAGE = "Mật khẩu của bạn là: " . $user['password'];
            $VIEW_NAME = "account/sign-in-form.php";
            global $user_name, $password;
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
    }
}

require '../layout.php';