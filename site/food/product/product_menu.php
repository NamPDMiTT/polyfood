<?php
require_once '/xampp/htdocs/polyfood/dao/products.php';
extract($_REQUEST);
$today = getdate();
$day = $today['weekday'];
switch ($day) {
    case 'Monday':
        $items = products_select_by_menu_id(2);
        break;
    case 'Tuesday':
        $items = products_select_by_menu_id(3);
        break;
    case 'Wednesday':
        $items = products_select_by_menu_id(4);
        break;
    case 'Thursday':
        $items = products_select_by_menu_id(5);
        break;
    case 'Friday':
        $items = products_select_by_menu_id(6);
        break;
    case 'Saturday':
        $items = products_select_by_menu_id(7);
        break;
    case 'Sunday':
        $items = products_select_by_menu_id(8);
        break;
}
foreach ($items as $item) {
?>

    <div class="p-4 shadow__products  rounded-2xl bg-white space-y-2">
        <img src="../IMG/bunbo.jpeg" alt="" class="rounded">
        <h2 class="text-xl font"><?= $item[1] ?></h2>
        <p class="text-xs font-semibold flex justify-between  text-red-500 mt-2">
            <span class="text-sm text-red-600">★★★★★</span><?= $item[3] ?>
        </p>
        <p class="text-gray-500 text-xs mt-1 limited__content-2  font">
            <?= $item[7] ?> </p>
        <button class="btn__add w-full bg-orange-600 text-white px-2 py-2 rounded">
            Thêm vào giỏ
        </button>
    </div>
<?php
}
?>