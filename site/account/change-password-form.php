<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CongTienDev KeyBoard</title>
    <link rel="icon" type="image/x-icon" href="./IMG/favicon.ico" sizes="16x16" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css" />
</head>

<body>
    <div id="root" class="font-montserrat min-w-[320px] max-w-[1400px] mx-auto">
        <div class="content-wrapper max-w-screen-2xl mx-auto  text-base bg-white">
            <header class="py-6 lg:mx-10 max-w-[1400px]">
                <nav class="bg-white
                    fixed top-0 left-0 right-0 z-[100] 94
                    flex flex-row justify-between items-center p-4">
                    <a href="index.php">
                        <div class="logo  flex items-center justify-end font-semibold cursor-pointer mr-5 lg:mr-0">
                            <a href="index.php">
                                <img src="./Site/IMG/lct-logo.png" alt="logo" class="w-20 h-auto" />
                            </a>
                            <h1 class="text-xs font-bold italic text-orange-500">
                                CONGTIEN<span class="text-black">DEV</span>
                            </h1>
                        </div>
                    </a>
                    <ul id="list-menu" class="  hidden 
			        lg:flex lg:justify-end lg:items-center lg:gap-8 
					text-center text-sm text-gray-500 font-medium uppercase 
					cursor-pointer
					">
                        <li class="menu-item">
                            <a class="" href="../../../Tailwind/index.php">Home</a>
                        </li>
                        <li class="group relative">
                            <a class="" href="index.php?action=products">Products</a>
                            <div class="drop__dow absolute hidden  group-hover:lg:block group-hover:animate-down
 bg-white shadow-lg z-50">
                                <ul class="drop__dow__list sm:flex flex-col text-left mt-[10px]">
                                    <li class="drop__dow__item  hover:bg-gray-100 p-2">
                                        <a class="p-2 px-3" href="index.php?action=allProducts">ALL</a>
                                    </li>
                                    <li class="drop__dow__item  hover:bg-gray-100 p-2">
                                        <a class="p-2 px-3" href="index.php?action=products&category_id=24">Keyboard</a>
                                    </li>
                                    <li class="drop__dow__item  hover:bg-gray-100 p-2">
                                        <a class="p-2 px-3" href="index.php?action=products&category_id=37">Mouse</a>
                                    </li>
                                    <li class="drop__dow__item  hover:bg-gray-100 p-2">
                                        <a class="p-2 px-3" href="index.php?action=products&category_id=42">Headphone</a>
                                    </li>
                                    <li class="drop__dow__item  hover:bg-gray-100 p-2">
                                        <a class="p-2 px-3" href="index.php?action=products&category_id=45">Accessories</a>
                                    </li>
                                    <li class="drop__dow__item  hover:bg-gray-100 p-2">
                                        <a class="p-2 px-3" href="index.php?action=products&category_id=61">sgdfg</a>
                                    </li>
                                    <li class="drop__dow__item  hover:bg-gray-100 p-2">
                                        <a class="p-2 px-3" href="index.php?action=products&category_id=62">gdfgdfg</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item">
                            <a class="" href="index.php?action=about">About</a>
                        </li>
                        <li class="menu-item">
                            <a class="" href="https://www.facebook.com/devshop03">FANPAGE</a>
                        </li>
                    </ul>

                    <ul class="tools flex justify-between gap-1 sm:gap-3 items-center bassic-1/6 ml-4  lg:ml-16 
			         uppercase text-gray-700 text-sm font-semibold">
                        <li class="search-box md:w-[100px] lg:w-[150px] flex justify-end items-center group">
                            <form action="index.php?action=products" method="post" class="search flex items-center p-2 border rounded-2xl">
                                <input type="text" name="search" placeholder="Search" placeholder="Search" class="search__input bg-transparent focus:outline-none px-2" />
                                <button class="search-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-gray-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </button>
                            </form>
                        </li>

                        <li>
                            <div onclick="boxUser();" class="user__box relative group">
                                <a href="#" class="w-10 h-10 user flex items-center justify-center">
                                    <img class="w-6 h-6 sm:w-7 sm:h-7 rounded-[50%]" src="./Backend/uploads/avatar/6331e0352b951-AVT.jpg" />
                                </a>
                                <div class="user__box__drop-dow hidden">
                                    <div class="user__box__drop-dow--content
 flex absolute  flex-col gap-3 left-1 w-[120px] md:w-32 h-44 bg-white rounded-md shadow-md p-3">
                                        <div class="edit__account w-full flex justify-center items-center gap-[6px]">
                                            <img class="w-6 h-6 sm:w-7 sm:h-7 rounded-[50%]" src="./Backend/uploads/avatar/6331e0352b951-AVT.jpg" />
                                            <a href="" class="user__name text-[10px]">congtiendev</a>
                                        </div>
                                        <div class="user__box__drop-dow--list-tools">
                                            <ul class="list-tools flex flex-col gap-2">
                                                <li class="list-tools__item">
                                                    <a href="index.php?action=admin" class="list-tools__item--link text-xs">ADMIN</a>
                                                </li>
                                                <li class="list-tools__item">
                                                    <a href="index.php?action=editAccount" class="list-tools__item--link text-xs">My Account</a>
                                                </li>
                                                <li class="list-tools__item">
                                                    <a href="index.php?action=myorder" class="list-tools__item--link text-xs 
">My order</a>
                                                </li>
                                                <li class="list-tools__item flex  items-center gap-2">
                                                    <a href="index.php?action=logout" class="list-tools__item--link text-xs
">LOG OUT</a>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="cart">
                            <a href="index.php?action=viewCart" class="flex w-10 h-10 items-center relative">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                                <span class="cart-quantity absolute left-3 bottom-5 rounded-full bg-orange-500 text-white text-center text-[10px] px-1.5">
                                    0
                                </span>
                            </a>
                        </li>

                        <li class="btn-menu-mobile ">
                            <div id="menu-mobile-btn" class="lg:hidden cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>
            <main class="w-full mt-14">
                <div class="profile__box my-10 w-full flex justify-center sm:gap-8 md:gap-12">
                    <div class="profile__card bg-white justify-center flex flex-col w-[250px] h-[280px] sm:w-[250px] sm:h-[250px] lg:w-[300px] lg:h-[300px] px-3 py-5 rounded-md shadow-md  items-center  gap-4">
                        <div class="profile__card-avatar flex items-center gap-3">
                            <img class="w-[50px] h-[50px] lg:w-[80px] lg:h-[80px] rounded-[50%]" src="./Backend/uploads/avatar/6331e0352b951-AVT.jpg" alt="" />
                            <div class="profile__card-name flex flex-col">
                                <h2 class="text-lg lg:text-xl">Le Cong Tien</h2>
                                <span class="text-sm sm:text-xs text-gray-500">congtiendev</span>
                            </div>
                        </div>

                        <div class="profile__card-info flex flex-col gap-2">
                            <p class="text-gray-500 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <span class="text-sm sm:text-xs">Minh Khai,Bac Tu Liem,Ha Noi</span>
                            </p>

                            <p class="text-gray-500 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <span class="text-sm sm:text-xs"> Female </span>
                            </p>

                            <p class="text-gray-500 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <span class="birth_year text-sm sm:text-xs">
                                    07/02/2001
                                </span>
                            </p>

                            <p class="text-gray-500 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <span class="text-sm sm:text-xs text-[#ff6b6b]">0387002258</span>
                            </p>

                            <p class="text-gray-500 flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <span class="text-sm sm:text-xs">tienlcph26838@fpt.edu.vn</span>
                            </p>
                        </div>
                        <a href="index.php?action=editAccountMobile" class="edit__profile-btn sm:hidden flex items-center justify-center gap-2 text-white text-sm bg-orange-600 p-2 rounded-sm w-full text-center">
                            <span>Edit Profile</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </a>
                    </div>

                    <div class="profile__edit sm:flex flex-col gap-5">
                        <div class="profile__edit-title flex flex-col gap-2">
                            <h1 class="text-xl text-center sm:text-left">
                                CHANGE PASSWORD
                            </h1>
                            <p class="sub-title text-sm text-gray-500 text-center sm:text-left
">
                                Manage profile information for account security
                            </p>
                        </div>

                        <form action="change-password.php" method="post" class="form__login--content w-full flex flex-col justify-center items-center gap-5">
                            <div class="list__form-input w-[300px] sm:w-full flex flex-col sm:grid sm:grid-cols-1 gap-4">
                                <div class="form__group flex flex-col gap-2 ">
                                    <label for="Password">Old password</label>
                                    <input type="password" name="password" id="Password" placeholder="Enter old password" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" value="" />
                                    <span class="error text-red-500 text-xs"></span>
                                </div>

                                <div class="form__group flex flex-col gap-2 ">
                                    <label for="password2">New password</label>
                                    <input type="password" name="password2" id="Password2" placeholder="Enter new password" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" value="" />
                                    <span class="error text-red-500 text-xs"></span>
                                </div>

                                <div class="form__group flex flex-col gap-2 ">
                                    <label for="password3">Cofirm password</label>
                                    <input type="password" name="password3" id="Password3" placeholder="Confirm password" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" />
                                    <span class="error text-red-500 text-xs"></span>
                                </div>
                            </div>

                            <div class="form__group w-[90%] flex flex-col sm:w-auto sm:flex-row  justify-center items-center gap-3">
                                <button type="submit" name="btn_change" class="text-white bg-orange-600 p-2 rounded-sm w-full sm:w-[100px] text-center">
                                    SAVE
                                </button>
                                <button type="reset" class="text-white bg-orange-600 p-2 rounded-sm w-full sm:w-[100px] text-center">
                                    RESET
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
            <footer class="w-full grid gap-4 grid-cols-2  md:grid-cols-3 lg:grid-cols-4 px-8 md:px-14 lg:px-20">
                <div class="footer__item mb-5 ml-5">
                    <h1 class="footer__item-title text-xl block mb-3 font-extrabold">
                        KeyBoard.
                    </h1>
                    <p class="footer-item-title--desc mt-4 text-gray-600 text-sm  max-w-[220px]">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Quisquam, quod.
                    </p>
                    <a href="#" class="author block mt-10 text-sm text-gray-500 ">CongTienDev Blog. © 2022</a>
                </div>
                <div class="footer__item mb-5 ml-5">
                    <h1 class="footer__item-title text-xl block mb-3 font-bold">
                        ABOUT US
                    </h1>
                    <ul class="footer__item-list mt-3">
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                About us
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Contact us
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Terms & Conditions
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer__item mb-5 ml-5">
                    <h1 class="footer__item-title text-xl block mb-3 font-bold">
                        CUSTOMER SERVICE
                    </h1>
                    <ul class="footer__item-list mt-3">
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Shipping & Delivery
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Returns & Exchanges
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Payment Methods
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer__item mb-5 ml-5">
                    <h1 class="footer__item-title text-xl block mb-3 font-bold">
                        CONTACT US
                    </h1>
                    <ul class="footer__item-list mt-3">
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Thuy Duong - Thuy Loi - Tien Lu -Hung Yen
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                Email: tienlcph26838@fpt.edu.vn
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                                096.506.7842
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                            </a>
                        </li>
                        <li class="footer__item-list-item">
                            <a href="#" class="footer__item-list-item-link block mb-3 text-sm text-gray-500 ">
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <script src="./Site/Javascript/main.js"></script>
    <script type="text/javascript" src="./Site/Javascript/vanilla-tilt.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll('.product__card'), {
            max: 25,
            speed: 400,
            scale: 0.9,
            glare: true,
            'max-glare': 0.8,
            'background-color': '#ccc'
        })
    </script>
</body>

</html>