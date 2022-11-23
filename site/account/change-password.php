<?php
require '../../global.php';
require '../../dao/users.php';

check_login();

extract($_REQUEST);

if (exist_param("btn_change")) {
    if ($password2 != $password3) {
        $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
    } else {
        $user = select_by_name_users($user_name);
        if ($user) {
            if ($user['password'] == $password) {
                try {
                    users_change_password_by_username($user_name, $password2);
                    $_SESSION['user'] = select_by_name_users($user_name);
                    $MESSAGE = "Đổi mật khẩu thành công!";
                } catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại !";
                }
            } else {
                $MESSAGE = "Sai mật khẩu!";
            }
        } else {
            $MESSAGE = "Sai mã đăng nhập!";
        }
    }
} else {
    global $user_name, $password, $password2, $password3;
}

$VIEW_NAME = "account/change-password-form.php";
require '../layout.php';
