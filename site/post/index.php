<?php
require_once "/xampp/htdocs/polyfood/dao/pdo.php";
require_once "/xampp/htdocs/polyfood/global.php";
require_once "/xampp/htdocs/polyfood/dao/posts.php";
extract($_REQUEST);
if (exist_param("btn_insert")) {
    $post_id = $_POST['post_id'];
    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['user_id'];
    } else {
        $user_id = 3;
        //     header("location: /polyfood/site/login.php");
    }
    $status = 0;
    $image = $_FILES['image']['name'];
    // var_dump(is_array($image));
    // die;
    insert_post(
        $post_id,
        $user_id,
        $content,
        $status
    );
    foreach ($image as $key => $value) { //lấy tên file
        $image = uniqid() . '_' . $value; //tên file
        $image_tmp = $_FILES['image']['tmp_name'][$key]; //đường dẫn file
        move_uploaded_file($image_tmp, $IMAGE_DIR . 'posts/' . $image); //di chuyển file vào thư mục
        insert_image_post($post_id, $image);
    }
    // var_dump(check_exist());
    // die;

    echo "<script>alert('Đăng bài thành công!');</script>";
} else if (exist_param("btn_delete")) {
    $post_id = $_POST["post_id"];
    post_delete($post_id);
    header("location:post.php");
}
$VIEW_NAME = "./home.php";
require "./layout.php";
