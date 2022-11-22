<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../../css/style.css" />
  <link rel="stylesheet" href="../../css/base.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div id="root" class="font min-w-[320px] max-w-[1400px] mx-auto">
    <div class="content-wrapper max-w-screen-2xl mx-auto  text-base bg-white">
      <header class=" max-w-[1400px] bg-[rgba(0,0,0,0.6)] sticky top-0 z-50">
        <nav class="w-full h-16 px-5 bg-[rgba(0,0,0,0.7)]  hidden lg:flex justify-between items-center ">
          <div class="h-10 py-2 px-3">
            <a href="../../index.html" class="logo  flex items-center">
              <h1 class="text-xl font-semibold">
                <span class="text-orange-600">poly</span><span class="text-blue-600 font-semibold">F</span><span class="text-orange-600 font-semibold">oo</span><span class="text-green-600 font-semibold">d</span>
              </h1>
            </a>
          </div>

          <ul class="menu w-[60%] justify-center flex gap-6  text-sm text-white uppercase">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Sản Phẩm</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
          <ul class="cart__account flex gap-7">
            <li class="cart">
              <form action="index.php?action=products" method="post" class="search flex items-center py-1 px-2 border rounded-2xl">
                <input type="text" name="search" placeholder="Search" placeholder="Search" class="search__input w-24 bg-transparent focus:outline-none text-white" />
                <button class="search-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                </button>
              </form>
            </li>

            <li class="cart">
              <a href="#">
                <img class="w-12 h-auto" src="../IMG/cart.png" alt="" />
              </a>
            </li>
            <li class="account">
              <a href="#">
                <img class="w-10 h-auto" src="../IMG/account1.png" alt="" />
              </a>
            </li>
          </ul>
        </nav>
      </header>
      <main class="w-full mt-14">
        <h1 class="text-3xl text-center">CREATE ACCOUNT</h1>
        <?php
        if (strlen($MESSAGE)) {
          echo "<h5 class=''>$MESSAGE</h5>";
        }
        ?>
        <div class="form__login my-10 w-full flex justify-center">
          <form action="sign-up.php" method="post" enctype="multipart/form-data" class="form__login--content w-[300px] sm:w-[500px]  flex flex-col  gap-4">
            <div class="form__group flex flex-col gap-2 ">
              <label for="name">Full name</label>
              <input type="text" name="name" id="name" placeholder="Name" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" value="<?= $name ?>"/>
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['name'])) {
                  echo $error['name'];
                }
                ?>
              </span>
            </div>
            <div class="form__group flex flex-col gap-2">
              <label for="user_name">Username</label>
              <input type="text" name="user_name" id="username" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Username" value="<?= $user_name ?>"/>
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['user_name'])) {
                  echo $error['user_name'];
                }
                ?>
              </span>
            </div>
            <div class="form__group flex flex-col gap-2 ">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm 
                  focus:border-orange-500 focus:outline-none" placeholder="Password" value="<?= $password ?>"/>
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['password'])) {
                  echo $error['password'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="password2">Confirm password</label>
              <input type="password" name="password2" id="password2" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="Confirm password" value="<?= $password2 ?>"/>
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['password2'])) {
                  echo $error['password2'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="Email" value="<?= $email ?>"/>
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['email'])) {
                  echo $error['email'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="phone">Phone</label>
              <input type="tel" name="phone" id="phone" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="Phone" value="<?= $phone ?>"/>
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['phone'])) {
                  echo $error['phone'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="avatar">Avatar</label>
              <input type="file" name="avatar" id="avatar" class="form__input  text-xs border border-gray-700  p-[9px] w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="avatar" />
            </div>
            <div class="form__group flex flex-col justify-center items-center gap-3">
              <!-- <a href="#" class="text-center">Forgot your password?</a> -->
              <button type="submit" name="btn_register" class="text-white bg-orange-600 p-2 rounded-sm w-full sm:w-[100px] text-center">
                CREATE
              </button>
            </div>
            <!--Default value-->
            <input name="role" value="0" type="hidden">
          </form>
        </div>
      </main>

      <footer class="w-full grid gap-4 grid-cols-2 font-montserrat bg-[#FAB500] rounded-t-[40px] md:grid-cols-3 lg:grid-cols-4 p-8 md:p-14 lg:px-20 lg:scroll-py-14">
        <div class="footer__item mb-5 ml-5">
          <h1 class="footer__item-title font text-xl block mb-3 font-extrabold">
            <a href="../../index.html" class="logo  flex items-center">
              <h1 class="text-xl font-semibold">
                <span class="text-orange-600">poly</span><span class="text-blue-600 font-semibold">F</span><span class="text-orange-600 font-semibold">oo</span><span class="text-green-600 font-semibold">d</span>
              </h1>
            </a>
          </h1>
          <p class="footer-item-title--desc mt-4 text-gray-900 text-sm  max-w-[220px]">
            Chúng tôi luôn đặt chất lượng sản phẩm lên hàng đầu và luôn đem
            lại sự hài lòng cho khách hàng.
          </p>
          <a href="#" class="author block mt-10 text-sm text-gray-900 ">POLYFOOD. © 2022</a>
        </div>
        <div class="footer__item mb-5 ml-5">
          <h1 class="footer__item-title text-xl block mb-3 font-bold font">
            Thời gian làm việc
          </h1>
          <ul class="footer__item-list mt-3">
            <li class="footer__item-list-item">
              <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-900 ">
                Thứ 2 - Thứ 7
              </a>
            </li>
            <li class="footer__item-list-item">
              <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-900 ">
                Khung giờ : 7h15 - 20h30
              </a>
            </li>
          </ul>
        </div>
        <div class="footer__item mb-5 ml-5">
          <h1 class="footer__item-title text-xl ml-3 block mb-3 font-bold font">
            Địa chỉ
          </h1>
          <ul class="footer__item-list mt-3">
            <li class="footer__item-list-item">
              <a href="#" class="footer__item-list-item-link mb-3 flex text-sm gap-2 text-gray-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>

                Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ
                Liêm, Hà Nội
              </a>
            </li>
            <li class="footer__item-list-item">
              <a href="#" class="footer__item-list-item-link mb-3 flex text-sm gap-2 text-gray-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                0981725836
              </a>
            </li>
            <li class="footer__item-list-item">
              <a href="#" class="footer__item-list-item-link mb-3 flex text-sm gap-2 text-gray-900 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
                caodang.fpt.edu.vn
              </a>
            </li>
          </ul>
        </div>

        <div class="footer__item mb-5 ml-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558831317!2d105.7445930501829!3d21.038132792766216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1668616523370!5m2!1svi!2s" class="rounded-lg w-28 sm:w-auto" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </footer>
    </div>
  </div>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.mySwiper', {
      slidesPerView: 1,
      spaceBetween: 10,

      autoplay: {
        delay: 2000
      },

      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50
        },
        1280: {
          slidesPerView: 5,
          spaceBetween: 50
        }
      }
    })
  </script>
</body>

</html>