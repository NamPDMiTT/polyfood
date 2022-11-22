<?php
require_once '/xampp/htdocs/polyfood-main/global.php';
require_once '/xampp/htdocs/poly-food/dao/posts.php';
// check_login();
extract($_REQUEST);
if(exist_param('btn_insert')) {
    try {
        insert_post($user_id, $content, $time_post, $status);
        $MESSAGE = "Thêm bài viết thành công";
        unset($user_id, $content, $time_post, $status, $post_id);
    } catch (Exception $exc) {
        $MESSAGE = "Thêm bài viết thất bại";
    }
    $VIEW_NAME ="../posts/new.php";
}

?>