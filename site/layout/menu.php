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