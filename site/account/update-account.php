<?php
require '../../global.php';
require '../../dao/users.php';

check_login();

extract($_REQUEST);

if (exist_param("btn_update")) {
    $image_upload = save_file("image_upload", "$IMAGE_DIR/users/");
    $image = strlen("$image_upload") > 0 ? $image_upload : $image;
    // var_dump($avatar);
    // die;
    try {
        update_users($user_name, $password, $name, $email, $phone, $image, $role_id, $user_id);
        $MESSAGE = "Cập nhật thông tin thành viên thành công!";
        $_SESSION['user'] = select_by_name_users($user_name);
        // var_dump($_SESSION['user']);
        // die;
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
    }
} else {
    extract($_SESSION['user']);
}

$VIEW_NAME = "account/update-account-form.php";
require '../layout.php';
