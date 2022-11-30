<?php
require '../../global.php';
require '../../dao/users.php';

check_login();

extract($_REQUEST);

function users_exist_by_password_id($password, $user_id)
{
    $sql = "SELECT count(*) FROM users WHERE password='$password' AND user_id = $user_id";
    return pdo_query_value($sql) > 0;
}

if (exist_param("btn_change")) {
    $error = [];
    $password2 = trim($password2);
    $flag = true;
    if (strlen($password2) < 6) {
        $error['password2'] = "Mật khẩu mới phải có ít nhất 6 ký tự!";
        $flag = false;
    }
    if (users_exist_by_password_id($password2, $user_id)) {
        $error['password2'] = "Mật khẩu mới phải khác mật khẩu hiện tại!";
        $flag = false;
    }
    if ($password2 != $password3) {
        $error['password3'] = "Xác nhận mật khẩu mới không đúng!";
        $flag = false;
    }
    if ($flag) {
        $user = select_by_name_users($user_name);
        if ($user) {
            if ($user['password'] == $password) {
                try {
                    users_change_password_by_username($user_name, $password2);
                    $_SESSION['user'] = select_by_name_users($user_name);
                    $MESSAGE = "Đổi mật khẩu thành công!";
                    // header("location: " . "$SITE_URL/page/index.php");
                    // die;
                } catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại !";
                }
            } else {
                $error['password'] = "Mật khẩu không chính xác!";
            }
        } else {
            $error['user_name'] = "Tên đăng nhập không chính xác!";
        }
    }
} else {
    global $user_name, $password, $password2, $password3;
}

$VIEW_NAME = "../account/change-password-form.php";
require '../layout.php';
