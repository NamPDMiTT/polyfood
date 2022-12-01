<?php
require_once "/xampp/htdocs/polyfood/global.php";
require_once '/xampp/htdocs/polyfood/dao/products.php';
extract($_REQUEST);
$items = products_select_by_id($product_id);
extract($items);
$category_id = $items['category_id'];
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="../Javascript/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body class="font-montserrat">
    <header class="hidden lg:block text-gray-700 bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex font title-font font-medium items-center mb-4 md:mb-0" href="#" target="_blank">
                <span class="text-orange-600">poly</span><span class="text-blue-600 font-semibold">F</span><span class="text-orange-600 font-semibold">oo</span><span class="text-green-600 font-semibold">d</span>
            </a>

            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <ul class="menu flex w-full justify-center gap-6 text-sm uppercase">
                    <li><a href="<?= $SITE_URL ?>/page/index.php">Trang chủ</a></li>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <?php if ($_SESSION['user']['role_id'] != 3) { ?>
                            <li><a href='<?= $STAFF_URL ?>/page/index.php'>Danh sách đặt hàng</a></li>
                        <?php } ?>
                    <?php } ?>
                    <li><a href="<?= $SITE_URL ?>/page/introduce.php">Giới thiệu</a></li>
                    <li><a href="<?= $SITE_URL ?>/page/product.php">Sản Phẩm</a></li>
                    <li><a href="<?= $SITE_URL ?>/post/index.php">Blog</a></li>
                    <li>
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button" id="menu-drop" aria-expanded="true" aria-haspopup="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </div>
                            <div id="sub-menu-drop" class="animate-down hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="<?= $SITE_URL ?>/account/update-account.php" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                        Cài đặt tài khoản
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                        Hỗ trợ
                                    </a>
                                    <a href="<?= $SITE_URL ?>/cart/all-my-cart.php<?php if (isset($_SESSION['user'])) echo "?user_id=" . $_SESSION['user']['user_id'] ?>" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">
                                        Đơn hàng của tôi
                                    </a>
                                    <a href="<?= $SITE_URL ?>/account/change-password.php" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">
                                        Đổi mật khẩu
                                    </a>
                                    <?php if (isset($_SESSION['user'])) { ?>

                                        <?php extract($_SESSION['user']); ?>

                                        <?php if ($role_id == 1) { ?>
                                            <a href="<?= $ADMIN_URL ?>/page/index.php" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">
                                                Trang quản trị
                                            </a>

                                        <?php  } ?>
                                    <?php } ?>
                                    <form method="POST" action="<?= $SITE_URL ?>/account/sign-in.php" role="none">
                                        <?php if (isset($_SESSION['user'])) {


                                            echo " <button type='submit' name='btn_logoff' class='text-gray-700 block w-full px-4 py-2 text-left text-sm uppercase' role='menuitem' tabindex='-1' id='menu-item-3'>
                                          
                                    Đăng xuất
                                 
                                 </button>";
                                        } else {


                                            echo " <button type='submit' class='text-gray-700 block w-full px-4 py-2 text-left text-sm uppercase' role='menuitem' tabindex='-1' id='menu-item-3'>
                                          
                                    Đăng nhập
                                 
                                 </button>";
                                        }
                                        ?>

                                    </form>
                                    <form action="<?= $SITE_URL ?>/account/forgot-password.php">
                                        <?php if (!isset($_SESSION['user'])) {
                                            echo " <button type='submit' class='text-gray-700 block w-full px-4 py-2 text-left text-sm uppercase' role='menuitem' tabindex='-1' id='menu-item-3'>
                                          
Quên mật khẩu</button>";
                                        } ?>

                                    </form>
                                    <form action="<?= $SITE_URL ?>/account/sign-up.php" method="post" enctype="multipart/form-data">
                                        <?php if (!isset($_SESSION['user'])) {
                                            echo " <button type='submit' class='text-gray-700 block w-full px-4 py-2 text-left text-sm uppercase' role='menuitem' tabindex='-1' id='menu-item-3'>
                                          
Đăng ký</button>";
                                        } ?>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="max-w-6xl mx-auto mt-10">
        <div class="block md:hidden flex items-center font text-center text-3xl py-2 px-6 text-orange-600"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-balloon-heart-fill h-[30px] w-[30px] " viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z" />
            </svg>
            <p><span class="inline-block text-red-500 font-semibold">Đ</span>
                ộc lập
                <span class="inline-block text-lime-600 font-semibold">tự do</span>
                , miếng nào
                <span class="inline-block text-cyan-400 font-semibold">to</span>
                thì
                <span class="inline-block text-pink-500 font-semibold">gấp.</span>
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-balloon-heart-fill h-[30px] w-[30px] " viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z" />
            </svg>
        </div>
        <div class="grid md:grid-cols-2 gap-12 px-6">
            <div class="rounded">
                <img src="<?= $CONTENT_URL ?>/images/products/<?= $items['image'] ?>" alt="" class="rounded">
            </div>
            <div class="">
                <form action="../cart/index.php?btn_order" method="POST">
                    <input type="hidden" name="product_id" id="product_id" value="<?= $items['product_id'] ?>">
                    <input type="hidden" name="product_name" id="product_name" value="<?= $items['product_name'] ?>">
                    <input type="hidden" name="price" id="price" value="<?= $items['price'] ?>">
                    <input type="hidden" name="image" id="image" value="<?= $items['image'] ?>">

                    <div class="font-bold text-5xl font text-orange-600"><?= $items['product_name'] ?></div>
                    <div class="flex items-center space-x-2 py-4 ">
                        <p class="text-orange-600">★★★★</p>
                        <p class="text-black">|</p>
                        <p class="font "><?= $items['view'] ?> Customer Reviews</p>
                    </div>
                    <div class="text-3xl font text-orange-600 flex space-x-2">

                        <strike class="text-zinc-500 text-3xl"><?= $price ?>đ</strike>
                        <p class="text-3xl flex gap-2"> <span>-</span> <?= $price * (1 - $discount / 100) ?></p>đ


                    </div>
                    <span class="inline-block text-gray-400 font">Quốc gia:</span>
                    <span class="inline-block text-black font">Việt Nam</span>
                    <div class="font text-2xl font-bold py-4">Ưu đãi</div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-orange-600 py-2 px-0.5"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check text-orange-600" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        <p class="text-orange-600 font">Đổi trả dễ dàng trong 2 giờ nếu bạn đổi ý</p>
                    </div>
                    <div class="flex items-center space-x-2 py-2">
                        <span class="bg-orange-600 py-2 px-0.5"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags text-orange-600" viewBox="0 0 16 16">
                            <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
                            <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                        </svg>
                        <p class="text-orange-600 font">Gọi món sớm, có hàng sớm :></p>
                    </div>
                    <button class="bg-orange-600 text-white font py-2 px-8 items-center flex  rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bag-x-fill w-[16px] h-[16px] " viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM6.854 8.146a.5.5 0 1 0-.708.708L7.293 10l-1.147 1.146a.5.5 0 0 0 .708.708L8 10.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 10l1.147-1.146a.5.5 0 0 0-.708-.708L8 9.293 6.854 8.146z" />
                        </svg>
                        <p class="px-2">Thêm Vào Giỏ Hàng.</p>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section class="max-w-6xl mx-auto mt-20">
        <div class="flex justify-center items-center space-x-4 button-box">
            <div id="btn" class="inlinde-block md:mr-44 font text-xl rounded-xl md:w-[114px] md:h-[48px] border-red-500 bg-red-500"></div>
            <button type="button" class="toggle-btn" onclick="leftClick()"><span id="trai" class="inline-block font text-xl  py-2 px-8  text-white  rounded-xl  sili ">Mô tả</span></button>
            <button type="button" class="toggle-btn" onclick="rightClick()"><span id="phai" class="inline-block font text-xl  py-2 px-8  text-red-500 rounded-xl  ">Nhận xét ( 0 )</span></button>
        </div>
        <p class="font text-md py-6 px-6" id="description"><?= $detail ?></p>
        <div class="px-16 py-12 hidden" id="comment">
            <div class="grid grid-cols-[48px,auto] gap-8">
                <div class="rounded-full rounded-2 rounded-red-500 w-[48px] h-[48px]">
                    <img src="../IMG/249948135_361544512438841_2048733435536947929_n.jpg" alt="" class="">
                </div>
                <div class="">
                    <div class="flex items-center space-x-4">
                        <h1 class="text-md font-bold">Shogun</h1>
                        <p class="text-gray-400 text-md">1 tháng trước</p>
                    </div>
                    <div class="text-yellow-500">★★★★★</div>
                    <div class="text-md">bvla balblablasbvla</div>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class=" grid grid-cols-[48px,auto] gap-8 mt-10">
                    <div class="rounded-full rounded-2 rounded-red-500 w-[48px] h-[48px]">
                        <img src="../IMG/249948135_361544512438841_2048733435536947929_n.jpg" alt="" class="">
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-4 py-4">
                            <!-- icon 1/2 star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill text-yellow-500" viewBox="0 0 16 16">
                                <path d="M1.142 5.513l4.9-1.14L8 1.03l1.958 4.343 4.9 1.14-3.53 3.47.852 4.87L8 12.53l-4.382 2.28.852-4.87L1.142 5.513z" />
                            </svg>
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            </fieldset>
                            <p class="text-black text-md">(Vui lòng chọn đánh giá)</p>
                        </div>
                        <textarea placeholder="Điền đánh giá ...." class="md:w-[612px] md:h-[97px] border-2 rounded px-4 py-1"></textarea>
                        <br>
                        <button type="submit" class="rounded py-2 px-10 bg-red-500 font text-white">Gửi</button>
                    </div>
                </div>

            </form>
        </div>
    </section>

    </section>
    <section class="max-w-6xl mx-auto">
        <div class="text-center text-xl text-orange-500 font">Nhiều lượt xem nhất</div>
        <div class="text-center font-bold text-3xl text-red-500 font">Sản phẩm liên quan</div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4">

            <?php
            require_once '/xampp/htdocs/polyfood/site/food/product/products_cate.php';
            ?>

        </div>

    </section>
    </main>
    <footer class="text-gray-700 pt-24 mx-auto">
        <section class="w-full grid gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 px-8 md:px-14 lg:px-20">
            <div class="footer__item-logo ml-5">
                <img class="h-16" src="../IMG/logo.png" alt="logo" />
                <p class="footer-item-title--desc mt-4 text-gray-500 text-sm max-w-[220px]">
                    Website được phát triển bởi đội ngũ sinh viên FPT Polytechnic.
                </p>
            </div>
            <div class="footer__item mb-5 ml-5">
                <h1 class="footer__item-title text-xl block mb-3 font-bold">
                    Liên hệ
                </h1>
                <ul class="footer__item-list mt-3">
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            Giới thiệu
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            Góp ý
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            Tuyển dụng
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
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
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            Hướng dẫn mua hàng
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            Hướng dẫn thanh toán
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            Khiếu nại
                        </a>
                    </li>

                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
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
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ
                            Liêm, Hà Nội, Việt Nam
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            https://caodang.fpt.edu.vn/
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                            098.172.5836
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                        </a>
                    </li>
                    <li class="footer__item-list-item">
                        <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500">
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <div class="border-t border-gray-200">
            <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
                <div>
                    <div class="container mx-auto py-4 px-5 flex justify-center items-center sm:flex-row flex-col">
                        <p class="text-gray-500 text-sm text-center sm:text-left">
                            © 2022 polyfood —
                            <a href="#" class="text-gray-600 ml-1" target="_blank" rel="noopener noreferrer">@fptpolytechnic</a>
                        </p>
                    </div>
                </div>
                <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
    <a style="box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)" id="cart" href="<?= $SITE_URL ?>/cart/all-my-cart.php" class="rounded-full w-16 h-16 sm:w-20 sm:h-20 bg-orange-600 animate-bounce fixed bottom-8 right-0 flex items-center z-50 justify-center text-gray-800 mr-8 mb-8 shadow-sm border-gray-300 border" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-white">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
    </a>
    <nav style="
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(2.5px);
        -webkit-backdrop-filter: blur(2.5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
      " class="menu__mobile lg:hidden fixed bottom-0 left-0 right-0 p-3 z-40 text-gray-400">
        <ul class="flex justify-center items-center gap-6 sm:gap-8">
            <li>
                <a href="<?= $SITE_URL ?>/page/index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 sm:w-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $SITE_URL ?>/page/introduce.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 sm:w-11">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $SITE_URL ?>/page/product.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 sm:w-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="<?= $SITE_URL ?>/post/index.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 sm:w-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 sm:w-11">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</body>

</div>
</div>

<script src="../../css/ha.js"></script>

</body>

</html>