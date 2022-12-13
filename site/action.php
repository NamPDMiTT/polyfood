<?php
require_once "/xampp/htdocs/polyfood/global.php";
extract($_REQUEST);
echo $name;
//Upload avatar vào thư mục content
$avatar = $_FILES['avatar']['name'];
$avatar_tmp = $_FILES['avatar']['tmp_name'];
move_uploaded_file($avatar_tmp, $IMAGE_DIR . 'avatar/' . $avatar);