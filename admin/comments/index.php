<?php
require_once '/xampp/htdocs/polyfood/global.php';
require_once '/xampp/htdocs/polyfood/dao/comments.php';
// check_login();
extract($_REQUEST);
if(exist_param('btn_insert')) {
    try {
        comment_insert($user_id, $post_id, $content, $time_comment, $status);
        unset($user_id, $post_id, $content, $time_comment, $status, $comment_id);
    } catch (Exception $exc) {
    }
    $VIEW_NAME ="../comments/new.php";
}else if(exist_param('btn_update')){
    try {
        comment_update($user_id, $post_id, $content, $time_comment, $status, $comment_id);
    } catch (Exception $exc) {
    }
    $VIEW_NAME ="../comments/edit.php";
}else if(exist_param('btn_delete')){
    try {
        comment_delete($comment_id);
        $items = comment_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "../comments/list.php";
} else if(exist_param('btn_edit')){
    $comment = comment_select_by_id($comment_id);
    extract($comment);
    $VIEW_NAME ="../comments/edit.php";
} else if(exist_param('all')) {
    $items = comment_select_all();
    $VIEW_NAME = "../comments/list.php";
}
else {
    $items = comment_select_all();
    $VIEW_NAME ="../comments/list.php";
}
require_once '/xampp/htdocs/polyfood/admin/page/layout.php';
?>