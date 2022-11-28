<?php
require_once '/xampp/htdocs/polyfood/global.php';
extract($_REQUEST);
if(exist_param("btn_insert_contact")){
    require_once '/xampp/htdocs/polyfood/dao/contacts.php';
    try {
        insert_contacts($email,$content);
        $MESSAGE = "Gửi liên hệ thành công";
        unset($contact_name,$contact_email,$contact_phone,$contact_content);
    } catch (Exception $exc) {
        $MESSAGE = "Gửi liên hệ thất bại";
    }
    $VIEW_NAME = "page/home.php";
}
else if(exist_param("introduce")){
    $VIEW_NAME = "page/introduce.php";
}
else{
    require_once '/xampp/htdocs/polyfood/dao/products.php';
    require_once '/xampp/htdocs/polyfood/dao/categories.php';
    $cates= categories_select_all();
    extract($_REQUEST);
    $today = gmdate("D", time() + 7 * 3600);
    // var_dump($today);die;
    switch ($today) {
        case 'Mon':
            $items = products_select_by_menu_id(2);
            break;
        case 'Tue':
            $items = products_select_by_menu_id(3);
            break;
        case 'Wed':
            $items = products_select_by_menu_id(4);
            break;
        case 'Thu':
            $items = products_select_by_menu_id(5);
            break;
        case 'Fri':
            $items = products_select_by_menu_id(6);
            break;
        case 'Sat':
            $items = products_select_by_menu_id(7);
            break;
        case 'Sun':
            $items = products_select_by_menu_id(8);
            break;
    }
  $VIEW_NAME = "page/home.php";  
}
require '/xampp/htdocs/polyfood/site/layout.php';