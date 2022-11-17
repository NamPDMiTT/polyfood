<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
function insert_post($user_id, $content, $time_post, $status) {
    $sql = "INSERT INTO posts(user_id, content, time_post, status) 
                      VALUES ( '$user_id', '$content', '$time_post', $status)";
    pdo_execute($sql);

}
function update_post($user_id, $content, $time_post, $status, $post_id){
    $sql = "UPDATE posts SET user_id='$user_id', content='$content', time_post='$time_post', status=$status WHERE post_id=$post_id";
    pdo_execute($sql);
}
function post_delete($post_id) {
    if(is_array($post_id)){
        foreach ($post_id as $ma) {
    $sql = "DELETE FROM posts WHERE post_id='$ma'";

            pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM posts WHERE post_id='$post_id'";

        pdo_execute($sql);
    }

}
function post_select_all(){
    $sql = "SELECT * FROM posts";
    return pdo_query($sql);
}
function post_select_by_id($post_id){
    $sql = "SELECT * FROM posts WHERE post_id='$post_id'";
    return pdo_query_one($sql);
}
function post_exist($post_id){
    $sql = "SELECT count(*) FROM posts WHERE post_id='$post_id'";
    return pdo_query_value($sql) > 0;
}
//post được phép đăng
function post_accept() {
    $sql = "SELECT * FROM posts WHERE status=1";
    return pdo_query($sql);
}
//post bị từ chối, post chờ duyệt
function post_reject() {
    $sql = "SELECT * FROM posts WHERE status=0";
    return pdo_query($sql);
}
//post theo người dùng

function post_by_user($user_id){
    $sql = "SELECT count(*) FROM posts WHERE user_id='$user_id'";
    return pdo_query_value($sql) > 0;
}
// post mới nhất
function post_newest() {
    $sql = "SELECT * FROM posts ORDER BY time_post DESC LIMIT 5";
    return pdo_query($sql);
}
// post cũ nhất
function post_oldest() {
    $sql = "SELECT * FROM posts ORDER BY time_post ASC LIMIT 5";
    return pdo_query($sql);
}

?>