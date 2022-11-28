<?php
require_once "/xampp/htdocs/polyfood/dao/pdo.php";
require_once "/xampp/htdocs/polyfood/global.php";
require_once "/xampp/htdocs/polyfood/dao/posts.php";
if (exist_param("btn_insert")) {
  foreach ($_FILES['image']['name'] as $key => $value) { //lấy tên file
    $rand = rand('11111111', '99999999'); //tạo số ngẫu nhiên
    $image_name = $rand . '_' . $value; //tên file
    $image_tmp = $_FILES['image']['tmp_name'][$key]; //đường dẫn file
    move_uploaded_file($image_tmp, $IMAGE_DIR .'posts/'. $image_name); //di chuyển file vào thư mục
  }
} ?>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="image[]" multiple />
  <input type="submit" name="btn_insert" />
</form>