<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
function comment_insert($user_id, $post_id, $content, $time_send){
    $sql = "INSERT INTO comments(user_id, post_id, content, time_send) 
                      VALUES ( '$user_id', $post_id, '$content', '$time_send')";
    pdo_execute($sql);

    function comment_update($user_id, $post_id, $content, $time_send, $comment_id){
        $sql = "UPDATE comments SET user_id='$user_id', post_id=$post_id, content='$content', time_send='$time_send' WHERE comment_id=$comment_id";
        pdo_execute($sql);
    }
}
function comment_delete($comment_id) {
    if(is_array($comment_id)){
        foreach ($comment_id as $ma) {
    $sql = "DELETE FROM   WHERE comment_id=$ma";

            pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM   WHERE comment_id=$comment_id";

        pdo_execute($sql);
    }

}
function comment_select_all(){
    $sql = "SELECT * FROM comments";
    return pdo_query($sql);
}
function comment_select_by_id($comment_id){
    $sql = "SELECT * FROM comments WHERE comment_id=$comment_id";
    return pdo_query_one($sql);
}
function comment_exist($comment_id){
    $sql = "SELECT count(*) FROM comments WHERE comment_id=$comment_id";
    return pdo_query_value($sql) > 0;
}

//comment theo người dùng
function comment_select_by_user_id($user_id) {
    $sql = "SELECT * FROM comments WHERE user_id=$user_id";
    return pdo_query($sql);
}
//commet theo bài viết
function comment_select_by_post_id($post_id) {
    $sql = "SELECT * FROM comments WHERE post_id=$post_id";
    return pdo_query($sql);

}

?>