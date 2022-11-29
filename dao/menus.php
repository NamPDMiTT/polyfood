<?php
require_once '/xampp/htdocs/polyfood/dao/pdo.php';
 function insert_menus($menu_name) {
    $sql = "INSERT INTO menus (menu_name) VALUES ('$menu_name')";
pdo_execute($sql);

 }
 function update_menus($menu_name,$menu_id){
    $sql = "UPDATE menus SET category_name = '$menu_name' WHERE menu_id = $menu_id";
    pdo_execute($sql);
 }

 function menus_delete($menu_id){
    if(is_array($menu_id)){
        foreach ($menu_id as $id_tmp) {
        $sql = "DELETE FROM menus WHERE menu_id=$id_tmp";
            pdo_execute($sql);
        }
    }
    else{
        $sql = "DELETE FROM menus WHERE menu_id=$menu_id";
        pdo_execute($sql);
    }
    }
    function menus_select_all(){
        $sql = "SELECT * FROM menus";
    return pdo_query($sql);
    }
    