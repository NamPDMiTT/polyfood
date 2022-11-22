<?php
require '../../global.php';
require '../../dao/users.php';

// check_login();

extract($_REQUEST);

if (exist_param("btn_change")) {
    if ($password2 != $password3) {
        $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
    } else {
        $user = select_by_id_users($user_id);
        if ($user) {
            if ($user['password'] == $password) {
                try {
                    users_change_password($user_id, $password);
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
}

$VIEW_NAME = "account/change-password-form.php";
require '../layout.php';