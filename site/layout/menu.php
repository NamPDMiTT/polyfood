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
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Sản Phẩm</a></li>
                    <li><a href="#">Blog</a></li>
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
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">
                                        Cài đặt tài khoản
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">
                                        Hỗ trợ
                                    </a>
                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">
                                        Đơn hàng của tôi
                                    </a>
                                    <form method="POST" action="#" role="none">
                                        <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm uppercase" role="menuitem" tabindex="-1" id="menu-item-3">
                                            Đăng xuất
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>