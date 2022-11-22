<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
function products_insert($product_name, $price, $discount, $image, $category_id,  $view, $quantity, $detail){
    $sql = "INSERT INTO products(product_name, price, discount, image, category_id, view, quantity, detail) 
                      VALUES ( '$product_name', $price, $discount, '$image', $category_id , $view, $quantity, '$detail')";
    pdo_execute($sql);
}
    
function products_update($product_id,$product_name, $price, $discount, $image, $category_id,  $view, $quantity, $detail){
    $sql = "UPDATE products SET product_name='$product_name', price=$price, discount=$discount, image='$image', category_id=$category_id, view= $view, quantity=$quantity, detail='$detail' WHERE product_id=$product_id";
    pdo_execute($sql);
}
    
function products_delete($product_id){
    if(is_array($product_id)){
        
        foreach ($product_id as $id_tmp) {
            
    $sql = "DELETE FROM products WHERE  product_id=$id_tmp";
    // var_dump($sql);
    //     die;

    pdo_execute($sql);
        }
    }
    else{
    $sql = "DELETE FROM products WHERE  product_id=$product_id";
        pdo_execute($sql);
    }
}
    
function products_select_all(){
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}
    
function products_select_by_id($product_id){
    $sql = "SELECT * FROM products WHERE product_id=$product_id";
    return pdo_query_one($sql);
}
    
function products_exist($product_id){
    $sql = "SELECT count(*) FROM products WHERE product_id=$product_id";
    return pdo_query_value($sql) > 0;
}
    
function products_view_up($product_id){
    $sql = "UPDATE products SET view = view + 1 WHERE product_id=$product_id";
    pdo_execute($sql);
}
    
function products_select_top10(){
    $sql = "SELECT * FROM products WHERE view > 0 ORDER BY view DESC LIMIT 0, 10";
    return pdo_query($sql);
}
    
    
function products_select_by_categories($category_id){
    $sql = "SELECT * FROM products WHERE category_id=$category_id";
    return pdo_query($sql);
}
   
function products_select_keyword($keyword){
    $sql = "SELECT * FROM products pro "
            . " JOIN categories cate ON cate.category_id=pro.category_id "
            . " WHERE product_name LIKE ? OR product_name LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function products_select_page(){
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    if(!isset($_SESSION['page_count'])){
        $row_count = pdo_query_value("SELECT count(*) FROM products");
        $_SESSION['page_count'] = ceil($row_count/10.0);
    }
    if(exist_param("page_no")){
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if($_SESSION['page_no'] < 0){
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if($_SESSION['page_no'] >= $_SESSION['page_count']){
        $_SESSION['page_no'] = 0;
    }
    $sql = "SELECT * FROM products ORDER BY product_id LIMIT ".$_SESSION['page_no'].", 10";
    return pdo_query($sql);
}
