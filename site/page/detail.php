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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chi tiết </title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/base.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <div id="root" class="font min-w-[320px] max-w-[1400px] mx-auto">
        <div class="content-wrapper max-w-screen-2xl mx-auto  text-base bg-white">
            <header class=" max-w-[1500px] bg-[rgba(0,0,0,0.6)] lg:sticky lg:top-0 lg:z-50">
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
                <!-- mobile -->
                <div class="menu__mobile__bar   bg-black lg:hidden  flex justify-between items-center w-full px-3 py-2">
                    <div class="h-10 py-2 px-3">
                        <a href="../../index.html" class="logo  flex items-center">
                            <h1 class="text-xl font-semibold">
                                <span class="text-orange-600">poly</span><span class="text-blue-600 font-semibold">F</span><span class="text-orange-600 font-semibold">oo</span><span class="text-green-600 font-semibold">d</span>
                            </h1>
                        </a>
                    </div>
                    <ul class="cart__account flex gap-5">
                        <li class="cart">
                            <form action="index.php?action=products" method="post" class="search flex items-center p-1 border rounded-2xl">
                                <input type="text" name="search" placeholder="Search" placeholder="Search" class="search__input text-xs w-16 bg-transparent focus:outline-none text-white" />
                                <button class="search-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </button>
                            </form>
                        </li>

                        <li class="cart">
                            <a href="#">
                                <img class="w-10 h-auto" src="../IMG/cart.png" alt="" />
                            </a>
                        </li>
                        <li class="btn-menu-mobile ">
                            <div id="menu-mobile-btn" class="lg:hidden cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>

                <nav class="menu__mobile relative animate-down border-t-2 w-full hidden p-5 bg-black">
                    <ul class="menu p-5 flex flex-col w-full justify-center gap-6  text-sm text-white uppercase">
                        <li><a href="<?= $SITE_URL ?>/layout.php">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Sản Phẩm</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <div class="banner__video w-full h-auto relative">
                    <div class="banner__video-title flex flex-col gap-3 sm:gap-5 lg:gap-20 absolute left-0 right-0 top-[20%] sm:top-[30%] text-center">
                        <h1 class="animate__animated animate__bounce animate__infinite text-3xl sm:text-5xl lg:text-[72px] font-semibold text-white">
                            <span class="text-orange-600">poly</span><span class="text-blue-600 font-semibold">F</span><span class="text-orange-600 font-semibold">oo</span><span class="text-green-600 font-semibold">d</span>
                        </h1>
                        <p class="text-2xl sm:text-5xl lg:text-[72px] font-semibold text-white">
                            Yêu là phải nói, đói là phải ăn !
                        </p>
                        <a class="flex justify-center" href="#">
                            <button class="animate__animated animate__infinite animate__pulse btn p-2 sm:p-3 text-xs sm:text-base bg-orange-600 text-white flex gap-2 sm:gap-3 items-center rounded-2xl">
                                <span class="">Đặt hàng ngay</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg></button></a>
                    </div>
                    <video class="w-full h-auto" autoplay muted loop src="../IMG/banner.mp4"></video>
                </div>

        </div>
    </div>
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
                <img src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="" class="rounded">
            </div>
            <div class="">
                <form action="../cart/index.php?btn_order" method="POST">
                    <input type="hidden" name="product_id" id="product_id" value="<?= $items['product_id'] ?>">
                    <input type="hidden" name="product_name" id="product_name" value="<?= $items['product_name'] ?>">
                    <input type="hidden" name="price" id="price" value="<?= $items['price'] ?>">
                    <input type="hidden" name="image" id="image" value="<?= $items['image']?>">

                    <div class="font-bold text-5xl font text-orange-600"><?= $items['product_name'] ?></div>
                    <div class="flex items-center space-x-2 py-4 ">
                        <p class="text-orange-600">★★★★</p>
                        <p class="text-black">|</p>
                        <p class="font "><?= $items['view'] ?> Customer Reviews</p>
                    </div>
                    <div class="text-3xl font text-orange-600 flex space-x-2">
                        <strike class="text-zinc-500 text-3xl"><?= $price ?></strike>
                        <p class="text-3xl flex gap-2"> <span>-</span> <?= $price * (1- $discount /100) ?></p>

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
                            <h1 class="text-md font-bold text-yellow-500">★★★★★</h1>
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
    <footer class="max-w-7xl mx-auto rounded">
        <div class="anh ">
            <img src="../IMG/hah.jpeg" alt="" class="h-[500px] w-[1280px]">
        </div>
        <div class="content ">
            <div class="p-2 grid grid-cols-2 md:grid-cols-4 gap-8 ">
                <div class="md:block hidden">
                    <h1 class="text-3xl font-bold font">About Us</h1>
                    <div class=" bg-white w-[40px] my-4 py-0.5"></div>
                    <p class="font  leading-8">We are here to grow, to improve our school stress system, to help schools thrive. If you have any idea imagine anything can find us.</p>
                </div>
                <div class="">
                    <h1 class="text-3xl font-bold font">Quick Links</h1>
                    <div class=" bg-white w-[40px] my-4 py-0.5"></div>
                    <div class="grid grid-cols-2 gap-4 font">
                        <p>Polyfood</p>
                        <p>Thái Bảnh</p>
                        <p>Tiến dev</p>
                        <p>Xiao</p>
                        <p>Nam Đặng</p>
                        <p>Phạm Nam</p>
                    </div>
                </div>
                <div class="font space-y-4 md:block hidden">
                    <h1 class="text-3xl font-bold font">Working time</h1>
                    <div class="">Monday : 08:00 - 17:00</div>
                    <div class="">Tuseday : 08:00 - 17:00</div>
                    <div class="">Wednesday : 08:00 - 17:00</div>
                    <div class="">Thursday : 08:00 - 17:00</div>
                    <div class="">Friday : 08:00 - 17:00</div>
                    <div class="">Saturday, Sunday : Go camping, go to the beach,. . .</div>
                </div>
                <div class="space-y-4">
                    <div class="flex gap-4 font">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-10 h-10 border-2 border-white hidden md:block ">
                            <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                        </svg>
                        <div class="">
                            <h1 class="text-xl font-bold ">ADDRESS</h1>
                            <p>Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</p>
                        </div>
                    </div>
                    <div class="flex gap-4 font">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-10 border-2 border-white hidden md:block">
                            <path d="M8 16.25a.75.75 0 01.75-.75h2.5a.75.75 0 010 1.5h-2.5a.75.75 0 01-.75-.75z" />
                            <path fill-rule="evenodd" d="M4 4a3 3 0 013-3h6a3 3 0 013 3v12a3 3 0 01-3 3H7a3 3 0 01-3-3V4zm4-1.5v.75c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75V2.5h1A1.5 1.5 0 0114.5 4v12a1.5 1.5 0 01-1.5 1.5H7A1.5 1.5 0 015.5 16V4A1.5 1.5 0 017 2.5h1z" clip-rule="evenodd" />
                        </svg>

                        <div class="">
                            <h1 class="text-xl font-bold ">PHONE</h1>
                            <p>123456789</p>

                        </div>
                    </div>
                    <div class="flex gap-4 font">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="md:w-5 h-10 border-2 border-white hidden md:block">
                            <path fill-rule="evenodd" d="M5.404 14.596A6.5 6.5 0 1116.5 10a1.25 1.25 0 01-2.5 0 4 4 0 10-.571 2.06A2.75 2.75 0 0018 10a8 8 0 10-2.343 5.657.75.75 0 00-1.06-1.06 6.5 6.5 0 01-9.193 0zM10 7.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z" clip-rule="evenodd" />
                        </svg>


                        <div class="">
                            <h1 class="text-xl font-bold ">Email</h1>
                            <p>PoLyfood.fpt.edu.vn</p>

                        </div>

                    </div>
                    <div class="bg-white py-0.5 my-6"></div>
                    <div class="text-xl font-bold font flex items-center space-x-4">
                        <h1 class="text-xl font-bold ">Social: </h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook md:w-[16px] md:h-[16px]" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-twitter md:w-[16px] md:h-[16px]" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-twitch md:w-[16px] md:h-[16px]" viewBox="0 0 16 16">
                            <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0H3.857zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142v6.286z" />
                            <path d="M11.857 3.143h-1.143V6.57h1.143V3.143zm-3.143 0H7.571V6.57h1.143V3.143z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram md:w-[16px] md:h-[16px]" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../../css/ha.js"></script>

</body>

</html>