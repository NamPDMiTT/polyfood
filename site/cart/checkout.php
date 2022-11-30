<?php
require_once '/xampp/htdocs/polyfood/global.php';
require_once '/xampp/htdocs/polyfood/site/layout/header.php';
require_once '/xampp/htdocs/polyfood/site/layout/menu.php';
require_once '/xampp/htdocs/polyfood/dao/users.php';
$items = $_SESSION['my_cart'];
$total_price_all = 0;
if (isset($_SESSION['my_cart'])) {
  foreach ($items as $item) {
    extract($item);
    $total_price_all += $total_price;
  }
}

// $total_price = 0;
// $count = 0;
// // $_SESSION['my_cart']=[];
// products_select_all();
// foreach ($_SESSION['my_cart'] as $cart) {
//   $total_price += $cart['total_price'];
//   $count += 1;
//   // echo '<pre>';
//   // var_dump($cart) ;
// }


if (isset($_SESSION['user'])) {
  $user_id = $_SESSION['user']['user_id'];
  $user = select_by_id_users($user_id);
  extract($user);
}
?>
<main class="w-full mt-14 px-8 lg:px-24 font-montserrat">
  <div class="header__checkout w-full mb-5 flex items-center gap-5">
    <h1 class="text-2xl font-semibold flex items-center gap-3">
      Thanh toán
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-gray-500">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
      </svg>
    </h1>
  </div>

  <form action="index.php?order" method="post" class=" flex flex-col gap-3 mx-auto ">
    <h2 class="text-xl text-orange-500 flex items-center gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
      </svg>
      Thông tin khách hàng
    </h2>

    <div class="delivery__address flex flex-col gap-3">
      <div class="form__group flex flex-col gap-2">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" class="form__input text-xs border border-gray-700 p-3 w-full rounded-sm
focus:border-orange-500 focus:outline-none" placeholder="Nhập họ và tên" value="<?= isset($_SESSION['user']) ? $name : '' ?>" />
      </div>

      <div class="form__group flex flex-col gap-2">
        <label for="phone">Số điện thoại</label>
        <input type="number" name="phone" id="phone" class="form__input text-xs border border-gray-700 p-3 w-full rounded-sm
focus:border-orange-500 focus:outline-none" placeholder="Nhập số điện thoại" value="<?= isset($_SESSION['user']) ? $phone : '' ?>" />
      </div>

      <div class="form__group flex flex-col gap-2">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form__input text-xs border border-gray-700 p-3 w-full rounded-sm
focus:border-orange-500 focus:outline-none" placeholder="Nhập email" value="<?= isset($_SESSION['user']) ? $email : '' ?>" />
      </div>
    </div>

    <h2 class="text-xl text-orange-500 flex items-center gap-2 mt-4">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
      </svg>
      Payment method
    </h2>

    <div class="bg-white payment__method flex gap-4 p-5 border border-dashed">
      <div class="form__group">
        <input type="radio" name="payment" value="1" checked />
        <label for="payment">COD</label>
      </div>

      <div class="form__group">
        <input type="radio" name="payment" value="2" />
        <label for="payment">MOMO</label>
      </div>

      <div class="form__group">
        <input type="radio" name="payment" value="3" />
        <label for="payment">Credit</label>
      </div>
    </div>

    <h2 class="product__checkout text-xl text-orange-500 flex items-center gap-2 mt-4
">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
      </svg>
      Products
    </h2>

    <div class="bg-white product__checkout w-full flex justify-center flex-col gap-2 lg:pl-5">
      <table class="bg-white table-auto mx-auto hidden sm:block">
        <thead>
          <tr>
            <th class="px-4 py-2 text-left font-semibold text-gray-600 text-xs uppercase">
              Products details
            </th>
            <th class="px-4 py-2 font-semibold text-gray-600 text-xs uppercase">
              Quantity
            </th>
            <th class="px-4 py-2 font-semibold text-gray-600 text-xs uppercase">
              Price
            </th>
            <th class="px-4 py-2 font-semibold text-gray-600 text-xs uppercase">
              Total
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($_SESSION['my_cart'] as $item) {
          ?>
            <tr class="border border-dashed">
              <td class="px-4 py-2 w-[40%]">
                <div class="flex">
                  <div class="w-20 h-auto">
                    <img src="
                      <?= $CONTENT_URL ?>/images/products/<?= $item['image'] ?>
                    " alt="" class="w-26 h-auto" />
                  </div>
                  <div class="min-w-[200px] ml-4 flex flex-col gap-2">
                    <p class="font-medium text-gray-600 text-xs ">
                      <?= $item['product_name'] ?>
                    </p>
                    <span class="block text-gray-400 text-xs">
                      <?= $item['price'] ?>

                    </span>
                  </div>
                </div>
              </td>
              <td class="px-4 py-2 text-xs lg:text-sm text-gray-600 text-center">
                <span class="font-semibold text-gray-700">

                  <?= $item['category_id'] ?>

                </span>
              </td>
              <td class="px-4 py-2 text-xs lg:text-sm text-gray-600 text-center">
                <span class="font-semibold text-gray-700">
                  <?= $item['quantity'] ?>

                </span>
              </td>
              <td class="px-4 py-2 text-xs lg:text-sm  text-gray-600 text-center">
                <span class="font-semibold text-gray-700">
                  <?= $item['detail'] ?>

                </span>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>

      <div class="list__product__cart-mobile flex flex-col sm:hidden  gap-5">
        <div class="item__prouduct__cart-mobile border-b-[3px] border-dashed pb-2 flex gap-3">
          <?php
          foreach ($_SESSION['my_cart'] as $item) {
          ?>
            <img src="<?= $CONTENT_URL ?>/images/products/<?= $item['image'] ?>" class="w-24 h-24 object-cover" />
            <div class="item__product__cart-mobile--info flex flex-col justify-between">
              <h1 class="text-xs font-medium">
                <?= $item['product_name'] ?>

              </h1>
              <div class="flex flex-col gap-2">
                <span class="text-sm text-gray-700">Price : <?= $item['price'] ?> </span>
                <div class="text flex gap-2">
                  <span class="text-xs text-gray-500">
                    x <?= $item['quantity'] ?>
                  </span>
                  <span class="text-xs text-gray-500">
                    <?= $item['price'] * $item['quantity'] ?>
                  </span>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div> 

      <a href="index.php?action=index.php" class="flex font-semibold text-indigo-600 text-sm">
        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
          <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
        </svg>
        Tiếp tục mua hàng
      </a>
      <!-- End product checkout -->
      <div class="total__price--note flex flex-col  gap-3 p-2 sm:p-5 px-5 border border-dashed">
        <div class="form__group flex flex-col gap-2 sm:mt-2">
          <label for="note">Ghi chú</label>
          <textarea name="note" id="note" class="form__input text-xs border border-gray-700 p-3 w-full rounded-sm
focus:border-orange-500 focus:outline-none" placeholder="Enter your note"></textarea>
        </div>

        <div class="total__price flex justify-between gap-4 items-center sm:mt-4">
          <h3 class="font-semibold text-gray-700">Tổng thanh toán</h3>
          <h3 class="text-lg text-orange-600">
            <?= $total_price_all ?>
          </h3>
        </div>
      </div>
      <div class="form__group--oder w-full flex flex-col sm:flex-row items-center justify-between gap-3 mt-3 mb-10 lg:mb-20">
        <p class="text-sm text-gray-500">
          Nhấp vào "Đặt hàng" có nghĩa là bạn đồng ý tuân theo các điều khoản của
          <a class="text-red-500" href="#">
            polyfood
          </a>
        </p>

        <button name="order" class="form__input--submit w-full sm:w-1/4  bg-orange-600 text-white p-3 rounded-sm
focus:outline-none">
          Đặt hàng
        </button>
      </div>
    </div>
  </form>
</main>
<?php
require_once '/xampp/htdocs/polyfood/site/layout/footer.php';
?>