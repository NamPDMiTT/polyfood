<?php
require_once "/xampp/htdocs/polyfood/site/layout/header.php";
require_once "/xampp/htdocs/polyfood/site/layout/menu.php";
require_once "/xampp/htdocs/polyfood/global.php";
require_once "/xampp/htdocs/polyfood/dao/orders.php";
check_login();
$items=join_order_product($_SESSION['user']['user_id']);
$count = count_order_by_user($_SESSION['user']['user_id']);
// echo "<pre>";
// var_dump($items);
// die;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/base.css" />
    <script src="../Javascript/main.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
  </head>
  <body>
    <div class="font-montserrat">
      <div class="container mx-auto mt-10">
        <div class="lg:flex shadow-md my-10">
          <div class="mx-auto lg:w-3/4 bg-white px-10 py-10 ">
            <div class="flex justify-between pb-8 border-b-[3px] border-dashed">
              <h1 class="font-semibold text-2xl">Giỏ hàng</h1>
              <h2 class="font-semibold text-2xl"><?=$count?> sản phẩm</h2>
            </div>
            <div class="flex mt-10 mb-5 ">
              <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">
                Sản phẩm
              </h3>
              <h3
                class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center"
              >
                Số lượng
              </h3>
              <h3
                class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center"
              >
                Đơn giá
              </h3>
              <h3
                class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center"
              >
                Thành tiền
              </h3>
            </div>
            <?php
            foreach($items as $item) {
            ?>
            <div
              class="products__item flex items-center hover:bg-gray-100 -mx-8 px-6 py-5 border-b-[3px] border-dashed"
            >
              <div class="flex w-2/5">
                <!-- product -->
                <div class="w-20">
                  <img
                    class="h-24"
                    src="<?=$CONTENT_URL?>/images/products/<?= $item['image'] ?>" alt=""
                  />
                </div>
                <div class="flex flex-col justify-between ml-4 flex-grow">
                  <span class="font-bold text-sm"><?=$item['product_name']?></span>
                  
                </div>
              </div>
              <div class="flex justify-center w-1/5">
                

                <input
                  class="mx-2 border text-center w-8"
                  type="text"
                  value="<?=$item['quantity']?>"
                />

                
              </div>
              <span class="text-center w-1/5 font-semibold text-sm">
              <?=$item['price']?>
              </span>
              <span class="text-center w-1/5 font-semibold text-sm">
              <?=$item['quantity']*$item['price']?>
              </span>
            </div>
                <?php
            }
                ?>
            <!-- Nút tiếp tục mua hàng, quay về trang trước đó -->
            <a
              href="#"
              class="flex font-semibold text-indigo-600 text-sm mt-10"
            >
              <svg
                class="fill-current mr-2 text-indigo-600 w-4"
                viewBox="0 0 448 512"
              >
                <path
                  d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"
                />
              </svg>
              Tiếp tục mua hàng
            </a>
          </div>

          <!-- --------------Thanh toán----------------- -->
          <div id="checkout" class="w-full lg:w-1/4 px-8 py-10">
            <h1 class="font-semibold text-2xl border-b pb-8">Thanh toán</h1>

            <div
              class="receipt__product flex gap-2 justify-between items-center p-2 border-b-[3px] border-dashed"
            >
              <span class="repcript__product-quantity text-sm font-light"
                >x Hiển thị số lượng sp</span>
              <h1
                class="repcript__product-name text-xs text-gray-500 font-light"
              >
                Hiển thị tên sp
              </h1>
              <span class="repcript__product-price font-medium text-sm"
                >
                Hiển thị giá sp
                </span
              >
            </div>

            <div class="border-t mt-8">
              <div
                class="flex font-semibold justify-between py-6 text-sm uppercase"
              >
                <span>
                  Tạm tính
                </span>
                <span>
                  Hiển thị giá tổng
                </span>
              </div>
              <button
                class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full"
              >
                Thanh toán
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="text-gray-700 pt-24 mx-auto">
      <section
        class="w-full grid gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 px-8 md:px-14 lg:px-20"
      >
        <div class="footer__item-logo ml-5">
          <img class="h-16" src="../IMG/logo.png" alt="logo" />
          <p
            class="footer-item-title--desc mt-4 text-gray-500 text-sm max-w-[220px]"
          >
            Website được phát triển bởi đội ngũ sinh viên FPT Polytechnic.
          </p>
        </div>
        <div class="footer__item mb-5 ml-5">
          <h1 class="footer__item-title text-xl block mb-3 font-bold">
            Liên hệ
          </h1>
          <ul class="footer__item-list mt-3">
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Giới thiệu
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Góp ý
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Tuyển dụng
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Điều khoản
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__item mb-5 ml-5">
          <h1 class="footer__item-title text-xl block mb-3 font-bold">
            Hỗ trợ
          </h1>
          <ul class="footer__item-list mt-3">
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Hướng dẫn mua hàng
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Hướng dẫn thanh toán
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Khiếu nại
              </a>
            </li>

            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                FAQs
              </a>
            </li>
          </ul>
        </div>

        <div class="footer__item mb-5 ml-5">
          <h1 class="footer__item-title text-xl block mb-3 font-bold">
            ĐỊA CHỈ
          </h1>
          <ul class="footer__item-list mt-3">
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ
                Liêm, Hà Nội, Việt Nam
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                https://caodang.fpt.edu.vn/
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
                098.172.5836
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
              </a>
            </li>
            <li class="footer__item-list-item">
              <a
                href="#"
                class="footer__item-list-item-link block mb-3 text-sm text-gray-500"
              >
              </a>
            </li>
          </ul>
        </div>
      </section>

      <div class="border-t border-gray-200">
        <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
          <form
            class="search__form flex md:flex-no-wrap flex-wrap justify-center md:justify-start"
          >
            <input
              style="box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)"
              class="sm:w-64 w-40 bg-gray-100 rounded sm:mr-4 mr-2 border focus:outline-none focus:border-orange-600 text-base py-2 px-4"
              placeholder="Nhập tên món ăn..."
              type="text"
            />
            <button
              style="box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)"
              class="inline-flex text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
            >
              Tìm kiếm
            </button>
          </form>
          <span
            class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto"
          >
            <a class="text-gray-500">
              <svg
                fill="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <path
                  d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg
                fill="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <path
                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path
                  d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"
                ></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg
                fill="currentColor"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="0"
                class="w-5 h-5"
                viewBox="0 0 24 24"
              >
                <path
                  stroke="none"
                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
                ></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </div>
      <div class="bg-gray-200">
        <div
          class="container mx-auto py-4 px-5 flex justify-center items-center sm:flex-row flex-col"
        >
          <p class="text-gray-500 text-sm text-center sm:text-left">
            © 2022 polyfood —
            <a
              href="#"
              class="text-gray-600 ml-1"
              target="_blank"
              rel="noopener noreferrer"
              >@fptpolytechnic</a
            >
          </p>
        </div>
      </div>
    </footer>
    <a
      style="box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)"
      id="cart"
      href="#"
      class="rounded-full w-16 h-16 sm:w-20 sm:h-20 bg-orange-600 animate-bounce fixed bottom-8 right-0 flex items-center z-50 justify-center text-gray-800 mr-8 mb-8 shadow-sm border-gray-300 border"
      target="_blank"
      ><svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-9 h-9 text-white"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"
        />
      </svg>
    </a>
    <nav
      style="
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(2.5px);
        -webkit-backdrop-filter: blur(2.5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
      "
      class="menu__mobile lg:hidden fixed bottom-0 left-0 right-0 p-3 z-40 text-gray-400"
    >
      <ul class="flex justify-center items-center gap-6 sm:gap-8">
        <li>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-8 sm:w-10"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
              />
            </svg>
          </a>
        </li>
        <li>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-8 sm:w-11"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"
              />
            </svg>
          </a>
        </li>
        <li>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-8 sm:w-10"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
              />
            </svg>
          </a>
        </li>
        <li>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-8 sm:w-10"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"
              />
            </svg>
          </a>
        </li>
        <li>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-8 sm:w-11"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
  </body>
</html>
