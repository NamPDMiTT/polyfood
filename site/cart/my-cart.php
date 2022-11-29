<?php
require_once "/xampp/htdocs/polyfood/site/layout/header.php";
require_once "/xampp/htdocs/polyfood/site/layout/menu.php";
$total_price = 0;
foreach ($_SESSION['my_cart'] as $cart) {
  extract($cart);
  $total_price += $cart[4];
}


?>

  <div class="container mx-auto mt-10">
    <div class="lg:flex shadow-md my-10">
      <div class="mx-auto lg:w-3/4 bg-white px-10 py-10 ">
        <div class="flex justify-between pb-8 border-b-[3px] border-dashed">
          <h1 class="font-semibold text-2xl">Giỏ hàng</h1>
          <h2 class="font-semibold text-2xl">1 sản phẩm</h2>
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
        <div class="products__item flex items-center hover:bg-gray-100 -mx-8 px-6 py-5 border-b-[3px] border-dashed">
          <div class="flex w-2/5">
            <!-- product -->
            <div class="w-20">
              <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="" />
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-sm">Điền tên sản phẩn</span>
              <span class="text-red-500 text-xs">Điền danh mục</span>
              <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Xóa</a>
            </div>
          </div>
          <div class="flex justify-center w-1/5">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
              <path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
            </svg>

            <input class="mx-2 border text-center w-8" type="text" value="1" />

            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
              <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
            </svg>
          </div>
          <span class="text-center w-1/5 font-semibold text-sm">
            Điền giá 1 sp
          </span>
          <span class="text-center w-1/5 font-semibold text-sm">
            Giá thành tiền
          </span>
        </div>

        <!-- Nút tiếp tục mua hàng, quay về trang trước đó -->
        <a href="#" class="flex font-semibold text-indigo-600 text-sm mt-10">
          <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
            <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
          </svg>
          Tiếp tục mua hàng
        </a>
      </div>

      <!-- --------------Thanh toán----------------- -->
      <div id="checkout" class="w-full lg:w-1/4 px-8 py-10">
        <h1 class="font-semibold text-2xl border-b pb-8">Thanh toán</h1>

        <div class="receipt__product flex gap-2 justify-between items-center p-2 border-b-[3px] border-dashed">
          <span class="repcript__product-quantity text-sm font-light">x Hiển thị số lượng sp</span>
          <h1 class="repcript__product-name text-xs text-gray-500 font-light">
            Hiển thị tên sp
          </h1>
          <span class="repcript__product-price font-medium text-sm">
            Hiển thị giá sp
          </span>
        </div>

        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>
              Tạm tính
            </span>
            <span>
              Hiển thị giá tổng
            </span>
          </div>
          <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">
            Thanh toán
          </button>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once '/xampp/htdocs/polyfood/site/layout/footer.php';
  ?>