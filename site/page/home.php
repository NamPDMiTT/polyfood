 <section class="text-gray-700 background min-w-[320px]">
     <div class="container mx-auto">
         <div class="swiper mySwiper h-auto max-h-[750px]">
             <div class="swiper-wrapper">
                 <div class="swiper-slide">
                     <img class="w-full h-full block object-cover" src="../IMG/slide1.jpg" alt="" />
                 </div>
                 <div class="swiper-slide">
                     <img class="w-full h-full block object-cover" src="../IMG/slide2.jpg" alt="" />
                 </div>
                 <div class="swiper-slide">
                     <img class="w-full h-full block object-cover" src="../IMG/slide3.jpg" alt="" />
                 </div>
             </div>
             <div class="swiper-pagination"></div>
         </div>

         <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

         <script>
             var swiper = new Swiper('.mySwiper', {
                 spaceBetween: 30,
                 pagination: {
                     el: '.swiper-pagination',
                     clickable: true
                 },
                 autoplay: {
                     delay: 2500,
                     disableOnInteraction: false
                 }
             })
         </script>
     </div>
 </section>
 <section id="order__step" class="text-gray-700 border-t border-gray-200">
     <div class="container px-5 py-8 lg:py-16 mx-auto">
         <div class="flex flex-col text-center w-full mb-20">
             <h2 class="text-xs text-orange-600 tracking-widest font-medium title-font mb-1">
                 Làm thế nào tôi có thể đặt hàng?
             </h2>
             <h1 class="sm:text-3xl text-2xl font-medium title-font mt-2 text-gray-900">
                 Các bước đặt hàng
             </h1>
         </div>
         <div class="flex flex-wrap -m-4 px-5 sm:px-3">
             <div class="p-4 md:w-1/3 relative">
                 <div class="step">
                     <img class="w-16 absolute top-0 right-0 animate-bounce" src="../IMG/number-1.png" alt="" />
                 </div>

                 <div class="flex items-center rounded-lg h-full bg-gray-100 flex-col gap-5 p-5 sm:p-8">
                     <div class="flex-grow w-full">
                         <img class="w-[80%] block mx-auto" src="../IMG/online-order.png" alt="" />
                     </div>
                     <h2 class="text-gray-500 text-base md:text-lg title-font font-medium">
                         Chọn đồ ăn yêu thích của bạn
                     </h2>
                 </div>
             </div>
             <div class="p-4 md:w-1/3 relative">
                 <div class="step">
                     <img class="w-16 absolute top-0 right-0 animate-bounce" src="../IMG/number-2.png" alt="" />
                 </div>

                 <div class="flex items-center rounded-lg h-full bg-gray-100 flex-col gap-5 p-5 sm:p-8">
                     <div class="flex-grow w-full">
                         <img class="w-[80%] block mx-auto" src="../IMG/wait-time.png" alt="" />
                     </div>
                     <h2 class="text-gray-500 text-base md:text-lg title-font font-medium">
                         Chờ thông báo khi món ăn đã sẵn sàng
                     </h2>
                 </div>
             </div>
             <div class="p-4 md:w-1/3 relative">
                 <div class="step">
                     <img class="w-16 absolute top-0 right-0 animate-bounce" src="../IMG/number-3.png" alt="" />
                 </div>

                 <div class="flex items-center rounded-lg h-full bg-gray-100 flex-col gap-5 p-5 sm:p-8">
                     <div class="flex-grow w-full">
                         <img class="w-[80%] block mx-auto" src="../IMG/eat.png" alt="" />
                     </div>
                     <h2 class="text-gray-500 text-base md:text-lg title-font font-medium">
                         Thưởng thức món ăn !
                     </h2>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section id="category" class="text-gray-700 border-t border-gray-200">
     <div class="container px-5 py-24 mx-auto">
         <div class="flex flex-col text-center w-full mb-20">
             <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                 Danh mục
             </h1>
             <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                 Chúng ta có gì ?
             </p>
         </div>
         <div class="flex flex-wrap -m-2">
             <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                 <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4" src="../IMG/bread.png" />
                     <div class="flex-grow">
                         <h2 class="text-gray-900 title-font font-medium">Bánh mì</h2>
                         <p class="text-gray-500 text-xs">
                             Bánh mì pate, bánh mì trứng,...
                         </p>
                     </div>
                 </div>
             </div>
             <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                 <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4" src="../IMG/ramen.png" />
                     <div class="flex-grow">
                         <h2 class="text-gray-900 title-font font-medium">Mì - Phở</h2>
                         <p class="text-gray-500 text-xs">
                             Mì tôm trứng, phở bò, phở gà,...
                         </p>
                     </div>
                 </div>
             </div>
             <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                 <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-14 h-14 object-cover object-center flex-shrink-0 mr-4" src="../IMG/cupcake.png" />
                     <div class="flex-grow">
                         <h2 class="text-gray-900 title-font font-medium">
                             Tráng miệng
                         </h2>
                         <p class="text-gray-500 text-xs">
                             Bánh kem, bánh tráng trộn,...
                         </p>
                     </div>
                 </div>
             </div>
             <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                 <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4" src="../IMG/fried-rice.png" />
                     <div class="flex-grow">
                         <h2 class="text-gray-900 title-font font-medium">Cơm</h2>
                         <p class="text-gray-500 text-xs">
                             Cơm rang, cơm suất,cơm gà,...
                         </p>
                     </div>
                 </div>
             </div>
             <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                 <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4" src="../IMG/snack.png" />
                     <div class="flex-grow">
                         <h2 class="text-gray-900 title-font font-medium">Ăn vặt</h2>
                         <p class="text-gray-500 text-xs">Bim bim, bánh bao,...</p>
                     </div>
                 </div>
             </div>
             <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                 <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                     <img alt="team" class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4" src="../IMG/soft-drink.png" />
                     <div class="flex-grow">
                         <h2 class="text-gray-900 title-font font-medium">Đồ uống</h2>
                         <p class="text-gray-500 text-xs">
                             Coca, Pepsi,Sting,Trà sữa,...
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section id="today__menu" class="text-gray-700 border-t border-gray-200">
     <div class="container px-5 py-24 mx-auto">
         <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
             <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                 Thực đơn hôm nay
             </h1>
             <p class="lg:w-1/2 w-full leading-relaxed text-base text-orange-600 font-medium">
                 " Ăn đã – chuyện khác để sau "
             </p>
         </div>
         <section id="list__products" class="flex flex-wrap -m-4 px-5">
             <div class="product__item w-full sm:w-1/3 lg:w-1/4 p-4">
                 <div class="rounded-xl">
                     <div class="product__img">
                         <img class="w-full object-cover object-center rounded-t-xl" src="../IMG/bunbo.jpeg" alt="content" />
                     </div>
                     <div class="product__info flex flex-col gap-1 rounded-b-xl w-full p-3 border border-gray-300">
                         <h2 class="text-gray-900 font-medium title-font">Bún bò</h2>
                         <p class="leading-relaxed text-xs limited__content-2">
                             Bún bò là món ăn được làm từ bún, thịt bò, rau, gia vị và nước
                             sốt. Bún bò được ăn kèm với rau thơm, hành tây, cà chua, cà
                         </p>
                         <div class="product__cart-rate flex justify-between items-center my-1">
                             <span class="text-sm text-[#FAB500]">★★★★★</span>
                             <span class="text-sm text-orange-600 font-medium">30.000đ</span>
                         </div>
                         <button class="add-to-cart flex gap-2 sm:gap-3 items-center justify-center w-full px-4 py-2 text-xs font-medium text-white bg-orange-600 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                             <span> Thêm vào giỏ </span>
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                             </svg>
                         </button>
                     </div>
                 </div>
             </div>

             <div class="product__item w-full sm:w-1/3 lg:w-1/4 p-4">
                 <div class="rounded-xl">
                     <div class="product__img">
                         <img class="w-full object-cover object-center rounded-t-xl" src="../IMG/bunbo.jpeg" alt="content" />
                     </div>
                     <div class="product__info flex flex-col gap-1 rounded-b-xl w-full p-3 border border-gray-300">
                         <h2 class="text-gray-900 font-medium title-font">Bún bò</h2>
                         <p class="leading-relaxed text-xs limited__content-2">
                             Bún bò là món ăn được làm từ bún, thịt bò, rau, gia vị và nước
                             sốt. Bún bò được ăn kèm với rau thơm, hành tây, cà chua, cà
                         </p>
                         <div class="product__cart-rate flex justify-between items-center my-1">
                             <span class="text-sm text-[#FAB500]">★★★★★</span>
                             <span class="text-sm text-orange-600 font-medium">30.000đ</span>
                         </div>
                         <button class="add-to-cart flex gap-2 sm:gap-3 items-center justify-center w-full px-4 py-2 text-xs font-medium text-white bg-orange-600 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                             <span> Thêm vào giỏ </span>
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                             </svg>
                         </button>
                     </div>
                 </div>
             </div>

             <div class="product__item w-full sm:w-1/3 lg:w-1/4 p-4">
                 <div class="rounded-xl">
                     <div class="product__img">
                         <img class="w-full object-cover object-center rounded-t-xl" src="../IMG/bunbo.jpeg" alt="content" />
                     </div>
                     <div class="product__info flex flex-col gap-1 rounded-b-xl w-full p-3 border border-gray-300">
                         <h2 class="text-gray-900 font-medium title-font">Bún bò</h2>
                         <p class="leading-relaxed text-xs limited__content-2">
                             Bún bò là món ăn được làm từ bún, thịt bò, rau, gia vị và nước
                             sốt. Bún bò được ăn kèm với rau thơm, hành tây, cà chua, cà
                         </p>
                         <div class="product__cart-rate flex justify-between items-center my-1">
                             <span class="text-sm text-[#FAB500]">★★★★★</span>
                             <span class="text-sm text-orange-600 font-medium">30.000đ</span>
                         </div>
                         <button class="add-to-cart flex gap-2 sm:gap-3 items-center justify-center w-full px-4 py-2 text-xs font-medium text-white bg-orange-600 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                             <span> Thêm vào giỏ </span>
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                             </svg>
                         </button>
                     </div>
                 </div>
             </div>

             <div class="product__item w-full sm:w-1/3 lg:w-1/4 p-4">
                 <div class="rounded-xl">
                     <div class="product__img">
                         <img class="w-full object-cover object-center rounded-t-xl" src="../IMG/bunbo.jpeg" alt="content" />
                     </div>
                     <div class="product__info flex flex-col gap-1 rounded-b-xl w-full p-3 border border-gray-300">
                         <h2 class="text-gray-900 font-medium title-font">Bún bò</h2>
                         <p class="leading-relaxed text-xs limited__content-2">
                             Bún bò là món ăn được làm từ bún, thịt bò, rau, gia vị và nước
                             sốt. Bún bò được ăn kèm với rau thơm, hành tây, cà chua, cà
                         </p>
                         <div class="product__cart-rate flex justify-between items-center my-1">
                             <span class="text-sm text-[#FAB500]">★★★★★</span>
                             <span class="text-sm text-orange-600 font-medium">30.000đ</span>
                         </div>
                         <button class="add-to-cart flex gap-2 sm:gap-3 items-center justify-center w-full px-4 py-2 text-xs font-medium text-white bg-orange-600 border border-transparent rounded-md hover:bg-orange-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                             <span> Thêm vào giỏ </span>
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                             </svg>
                         </button>
                     </div>
                 </div>
             </div>
         </section>
         <!-- Phân trang -->
         <div class="pagination flex justify-center items-center gap-2 mt-5">
             <button class="pagination__btn flex justify-center items-center gap-2 p-2 text-sm font-medium text-white bg-orange-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                 </svg>
             </button>
             <button class="pagination__btn flex justify-center items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-orange-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                 <span>1</span>
             </button>
             <button class="pagination__btn flex justify-center items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-orange-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                 <span>2</span>
             </button>
             <button class="pagination__btn flex justify-center items-center gap-2 px-4 py-2 text-sm font-medium text-white bg-orange-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                 <span>3</span>
             </button>
             <button class="pagination__btn flex justify-center items-center p-2 text-sm font-medium text-white bg-orange-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-orange-600">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                 </svg>
             </button>
         </div>
     </div>
 </section>

 <section id="criteria" class="text-gray-700 mt-5">
     <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900">
         Tiêu chí của chúng tôi
     </h1>

     <div class="container px-5 py-8 sm:py-16 mx-auto flex flex-wrap justify-between">
         <div class="lg:w-[60%] w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
             <img alt="feature" class="object-cover object-center h-full w-full" src="../IMG/canteen.jpg" />
         </div>
         <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/3 text-left">
             <div class="flex gap-5 mb-10 lg:items-start items-center">
                 <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-orange-600 mb-5">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                     </svg>
                 </div>
                 <div class="flex-grow">
                     <h2 class="text-orange-600 text-lg title-font font-medium mb-2">
                         Chất lượng
                     </h2>
                     <p class="leading-relaxed text-base">
                         Chúng tôi luôn đảm bảo chất lượng món ăn của mình
                     </p>
                 </div>
             </div>
             <div class="flex gap-5 mb-10 lg:items-start items-center">
                 <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-orange-600 mb-5">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>
                 </div>
                 <div class="flex-grow">
                     <h2 class="text-blue-600 text-lg title-font font-medium mb-2">
                         Thời gian
                     </h2>
                     <p class="leading-relaxed text-base">
                         Thời gian đặt món ăn của bạn sẽ được đảm bảo
                     </p>
                 </div>
             </div>
             <div class="flex gap-5 mb-10 lg:items-start items-center">
                 <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-orange-600 mb-5">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                     </svg>
                 </div>

                 <div class="flex-grow">
                     <h2 class="text-green-600 text-lg title-font font-medium mb-2">
                         Giá cả
                     </h2>
                     <p class="leading-relaxed text-base">
                         Ăn ngon mà không phải lo lắng về giá cả
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="text-gray-700 border-t border-gray-200">
     <div class="container px-5 py-24 mx-auto">
         <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
             <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                 <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
             </svg>
             <!-- Lời ngỏ -->
             <p class="leading-relaxed text-lg">
                 Chúng tôi luôn đặt sự hài lòng của khách hàng lên hàng đầu và luôn
                 cố gắng để mang đến cho khách hàng những trải nghiệm tuyệt vời nhất.
             </p>
             <span class="inline-block h-1 w-10 rounded bg-orange-600 mt-8 mb-6"></span>
             <h2 class="font-medium tracking-wider text-sm">
                 <span class="text-orange-600">poly</span><span class="text-blue-600 font-semibold">F</span><span class="text-orange-600 font-semibold">oo</span><span class="text-green-600 font-semibold">d</span>
             </h2>
             <p class="text-gray-500 uppercase mt-2">FPT Polytechnic</p>
         </div>
     </div>
 </section>
 <section class="text-gray-700 relative">
     <div class="absolute inset-0 bg-gray-300">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863855883132!2d105.74459305018287!3d21.038132792766206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1669010289456!5m2!1svi!2s" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no"></iframe>
     </div>
     <div class="container px-5 py-24 mx-auto flex">
         <form style="
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(2.5px);
            -webkit-backdrop-filter: blur(2.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
          " class="lg:w-1/3 md:w-1/2 rounded-3xl bg-no-repeat bg-center bg-cover md:ml-auto w-full mt-10 md:mt-0 relative z-10">
             <div class="form__group rounded-3xl w-full h-full flex flex-col p-8">
                 <h2 class="text-black text-lg mb-1 font-medium title-font">
                     Liên hệ
                 </h2>
                 <p class="leading-relaxed mb-5 text-gray-500">
                     Bạn có thể liên hệ với chúng tôi bằng cách điền vào mẫu dưới đây
                 </p>
                 <input style="
                background: rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                backdrop-filter: blur(2.5px);
                -webkit-backdrop-filter: blur(2.5px);
                border-radius: 10px;
                border: 1px solid rgba(255, 255, 255, 0.18);
              " class="rounded border focus:outline-none focus:border-orange-600 text-base px-4 py-2 mb-4" placeholder="Email" type="email" />
                 <textarea style="
                background: rgba(255, 255, 255, 0.2);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                backdrop-filter: blur(2.5px);
                -webkit-backdrop-filter: blur(2.5px);
                border-radius: 10px;
                border: 1px solid rgba(255, 255, 255, 0.18);
              " class="backdrop-blur rounded border focus:outline-none h-32 focus:border-orange-600 text-base px-4 py-2 mb-4 resize-none" placeholder="Nội dung"></textarea>
                 <button style="box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)" class="text-white bg-orange-600 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-700 rounded text-lg">
                     Gửi
                 </button>
                 <p class="text-xs text-gray-500 mt-3">
                     Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất
                 </p>
             </div>
         </form>
     </div>
 </section>