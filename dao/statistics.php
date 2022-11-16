<?php
require_once '/xampp/htdocs/DAM_FALL2022/dao/pdo.php';
function statistic_products(){
    $sql = "SELECT cate.category_id, cate.category_name,"
    . " COUNT(*) quality,"
    . " MIN(pro.price) price_min,"
    . " MAX(pro.price) price_max,"
    . " AVG(pro.price) price_avg"
    . " FROM products pro "
    . " JOIN categories cate ON cate.category_id=pro.category_id "
    . " GROUP BY cate.category_id, cate.category_name";
return pdo_query($sql);
}

function statistic_feedbacks(){
    $sql = "SELECT pro.product_id,pro.product_name,"
    . " COUNT(*) quality,"
    . " MIN(fb.time_send) new,"
    . " MAX(fb.time_send) old"
    . " FROM feedback fb "
    . " JOIN products pro ON pro.product_id=fb.product_id "
    . " GROUP BY pro.product_id, pro.product_name"
    . " HAVING quality > 0";
}


?>