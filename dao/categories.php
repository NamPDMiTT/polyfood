<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
 function insert_categories($category_name) {
    $sql = "INSERT INTO categories (category_name) VALUES ('$category_name')";
pdo_execute($sql);

 }
 function update_categories($category_name,$category_id){
    $sql = "UPDATE categories SET category_name = '$category_name' WHERE category_id = $category_id";
    pdo_execute($sql);
 }

 function categories_delete($category_id){
    if(is_array($category_id)){
        foreach ($category_id as $id_tmp) {
        $sql = "DELETE FROM categories WHERE category_id=$id_tmp";
            pdo_execute($sql);
        }
    }
    else{
        $sql = "DELETE FROM categories WHERE category_id=$category_id";
        pdo_execute($sql);
    }
    }
    function categories_select_all(){
        $sql = "SELECT * FROM categories";
    return pdo_query($sql);
    }
    
    function categories_select_by_id($category_id){
        
        $sql = "SELECT * FROM categories WHERE category_id=$category_id";
    return pdo_query_one($sql);
    }
    
    function categories_exist($category_id){
        $sql = "SELECT count(*) FROM categories WHERE category_id=$category_id";
    return pdo_query_value($sql) > 0;
    }
?>