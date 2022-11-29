<?php
require_once "/xampp/htdocs/polyfood/site/layout/header.php";
require_once "/xampp/htdocs/polyfood/site/layout/menu.php";
require_once "/xampp/htdocs/polyfood/global.php";
$total_price = 0;
$count = 0;
// $_SESSION['my_cart']=[];
products_select_all();
foreach ($_SESSION['my_cart'] as $cart) {
  $total_price += $cart['total_price'];
  $count += 1;
  // echo '<pre>';
  // var_dump($cart) ;
}


?>

<div class="container mx-auto mt-10">
  <div class="lg:flex shadow-md my-10">
    <div class="mx-auto lg:w-3/4 bg-white px-10 py-10 ">
      <div class="flex justify-between pb-8 border-b-[3px] border-dashed">
        <h1 class="font-semibold text-2xl">Giỏ hàng</h1>
        <h2 class="font-semibold text-2xl"><?= $count ?> sản phẩm</h2>
      </div>
      <div class="flex mt-10 mb-5 ">
        <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">
          Sản phẩm
        </h3>
        <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">
          Số lượng
        </h3>
        <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">
          Đơn giá
        </h3>
        <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">
          Thành tiền
        </h3>
      </div>
      <!-- --------------------------Đổ sản phẩm ra từ đây----------------------------- -->
      <!-- ------------------------1 products__item là 1 sp--------------------------- -->
      <?php
      foreach ($_SESSION['my_cart'] as $item) {
      ?>
        <div class="products__item flex items-center hover:bg-gray-100 -mx-8 px-6 py-5 border-b-[3px] border-dashed">
          <div class="flex w-2/5">
            <!-- product -->
            <div class="w-20">
              <img class="h-24" src="<?= $CONTENT_URL ?>/images/products/<?= $item['image'] ?>" alt="" />
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <!-- name -->
              <span class="font-bold text-sm"><?= $item['product_name'] ?></span>
              <span class="text-red-500 text-xs"><?= $item['category_id'] ?></span>
              <form action="index.php?btn_delete" method="POST">
                <input type="hidden" id="product_id" name="product_id" value="<?= $item['product_id'] ?>">
                <button class="font-semibold hover:text-red-500 text-gray-500 text-xs">Xóa</button>
              </form>
              <!-- <a href="index.php?btn_delete&product_id=<?= $item['product_id'] ?>">xóa</a> -->
            </div>
          </div>
          <form action="index.php?btn_re_quantity" method="POST">
            <div class="flex justify-center w-1/5">
              <button name="choose" value="0"> <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                  <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                </svg> </button>

              <input id="quantity" name="quantity" class="mx-2 border text-center w-8" type="text" value="<?= $item['quantity'] ?>" />
              <input type="hidden" id="product_id" name="product_id" value="<?=$item['product_id']?>">
              <button name="choose" value="1"> <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                  <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                </svg> </button>
            </div>
          </form>
          <span class="text-center w-1/5 font-semibold text-sm">
            <?= $item['price'] ?>
          </span>
          <span class="text-center w-1/5 font-semibold text-sm">
            <?= $item['price'] * $item['quantity'] ?>
          </span>
        </div>
      <?php
      }
      ?>
      <!-- Nút tiếp tục mua hàng, quay về trang trước đó -->
      <a href="<?= $SITE_URL ?>/page/product.php" class="flex font-semibold text-indigo-600 text-sm mt-10">
        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
          <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
        </svg>
        Tiếp tục mua hàng
      </a>
    </div>

    <!-- --------------Thanh toán----------------- -->
    <div id="checkout" class="w-full lg:w-1/4 px-8 py-10">
      <h1 class="font-semibold text-2xl border-b pb-8">Thanh toán</h1>
      <?php
      foreach ($_SESSION['my_cart'] as $item) {
      ?>
        <div class="receipt__product flex gap-2 justify-between items-center p-2 border-b-[3px] border-dashed">
          <span class="repcript__product-quantity text-sm font-light">x <?= $item['quantity'] ?></span>
          <h1 class="repcript__product-name text-xs text-gray-500 font-light">
            <?= $item['product_name'] ?>
          </h1>
          <span class="repcript__product-price font-medium text-sm">
            <?= $item['price'] ?>
          </span>
        </div>
      <?php
      }
      ?>
      <form action="index.php?btn_checkout" method="post">
        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>
              Tạm tính
            </span>
            <span>
              <?= $total_price ?>
            </span>
          </div>
          <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
            Thanh toán
          </button>
      </form>
    </div>
  </div>
</div>
</div>
<?php
require_once '/xampp/htdocs/polyfood/site/layout/footer.php';
?>