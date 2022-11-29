<?php
require_once '/xampp/htdocs/polyfood/dao/products.php';
extract($_REQUEST);
$items = products_select_by_categories($category_id);
foreach ($items as $item) {
    extract($item);
?>
    <form action="<?= $SITE_URL ?>/cart/index.php?btn_order" method="post">
        <input type="hidden" value="<?=$product_id?>" value="product_id" name="product_id">
        <input type="hidden" value="<?=$image?>" value="image" name="image">
        <div class="p-4 shadow__products  rounded-2xl bg-white space-y-2">
        <a href="<?=$SITE_URL?>/page/detail.php?product_id=<?=$product_id?>">       <img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="" class="rounded"> </a>
            <h2 class="text-xl font"><?= $product_name ?></h2>
            <p class="text-xs font-semibold flex justify-between  text-red-500 mt-2">
                <span class="text-sm text-red-600">★★★★★</span><?= number_format($price, 0, '', '.') ?>đ
            </p>
            <p class="text-gray-500 text-xs mt-1 limited__content-2  font">
                <?= $detail ?> </p>
            <button class="btn__add w-full bg-orange-600 text-white px-2 py-2 rounded">
                <a href="<?= $SITE_URL ?>/cart/index.php?btn_order&product_id=<?= $product_id ?>">
                    Thêm vào giỏ
                </a>
            </button>
        </div>
    </form>
<?php
}
?>