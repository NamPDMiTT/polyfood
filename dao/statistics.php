<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
function statistic_products(){
    $sql = "SELECT cate.category_id, cate.category_name,"
    . " COUNT(*) total,"
    . " MIN(pro.price) price_min,"
    . " MAX(pro.price) price_max,"
    . " AVG(pro.price) price_avg"
    . " FROM products pro "
    . " JOIN categories cate ON cate.category_id=pro.category_id "
    . " GROUP BY cate.category_id, cate.category_name";
return pdo_query($sql);
}

function statistic_feedbacks(){
    $sql = "SELECT pro.product_id,pro.product_name , u.user_name,fb.*, "
    . " COUNT(*) total,"
    . " MIN(fb.time_send) new,"
    . " MAX(fb.time_send) old"
    . " FROM feedbacks fb "
    . " JOIN products pro ON pro.product_id=fb.product_id "
    . " JOIN users u ON u.user_id=fb.user_id "
    . " GROUP BY pro.product_id, pro.product_name, u.user_name"
    . " HAVING total > 0";
    return pdo_query($sql);

}
?>