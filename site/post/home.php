
<article class="lg:px-10">
  <form id="new__post" action="./index.php" class="bg-white shadow rounded-lg mb-6 p-4" method="post" enctype="multipart/form-data">
    <textarea name="content" placeholder="Bạn đang nghĩ gì..." class="w-full rounded-lg p-3 text-sm focus:outline-none bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400">

      </textarea>
    <div class="flex items-center justify-center w-full">
      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-28 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
          <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
          </svg>
          <p class="mb-2 text-sm text-gray-400 dark:text-gray-400">
            Chọn ảnh
          </p>
        </div>
        <input id="dropzone-file" name="image[]" type="file" class="hidden" multiple />
        <input name="post_id" type="number" class="hidden" value="<?php if (check_exist() > 0) {
                                                                  echo check_exist() + 1;
                                                                } else {
                                                                  echo 1;
                                                                }
                                                                ?>" multiple />
      </label>
    </div>

    <button name="btn_insert" class="flex items-center mt-3 py-2 px-4 rounded-lg text-sm bg-blue-600 text-white shadow-lg">
      Đăng
      <svg class="ml-1" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <line x1="22" y1="2" x2="11" y2="13"></line>
        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
      </svg>
    </button>
  </form>

  <div class="bg-white shadow rounded-lg mb-6">
    <div class="flex flex-row px-2 py-3 mx-3">
      <div class="w-auto h-auto rounded-full">
        <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" alt="User avatar" src="../../content/images/posts/son.jpg" />
      </div>
      <div class="flex flex-col mb-2 ml-4 mt-1">
        <div class="text-gray-600 text-sm font-semibold">
          Nguyễn Công Sơn
        </div>
        <div class="flex w-full mt-1">
          <div class="text-gray-700 font-light text-xs">1 giờ trước</div>
        </div>
      </div>
    </div>
    <div class="border-b border-gray-100"></div>
    <div class="text-gray-500 text-sm mb-6 mx-3 p-2">
      Vãi loz luon dau cut moi !
    </div>

    <div class="text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2">
      <div class="grid grid-cols-6 col-span-2 gap-2">
        <div class="overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
          <img class="h-full w-full object-cover" src="../IMG/slide1.jpg" alt="" />
        </div>
        <div class="overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
          <img class="h-full w-full object-cover" src="../IMG/slide2.jpg" alt="" />
        </div>
        <div class="overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
          <img class="h-full w-full object-cover" src="../IMG/slide3.jpg" alt="" />
        </div>
        <div class="overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
          <img class="h-full w-full object-cover" src="../IMG/slide1.jpg" alt="" />
        </div>
        <div class="relative overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
          <div class="text-white text-xl absolute inset-0 bg-slate-900/80 flex justify-center items-center">
            + 23
          </div>
          <img class="h-full w-full object-cover" src="../IMG/background-product.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="flex justify-start mb-4 border-t border-gray-100">
      <div class="flex w-full mt-1 pt-2 pl-5">
        <span class="bg-white transition ease-out duration-300 hover:text-red-500 border w-8 h-8 px-2 pt-2 text-center rounded-full text-gray-400 cursor-pointer mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
          </svg>
        </span>
        <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="../../content/images/posts/son.jpg" alt="" />

        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="../../content/images/posts/son.jpg" alt="" />
        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="../../content/images/posts/son.jpg" alt="" />
      </div>
      <div class="flex justify-end w-full mt-1 pt-2 pr-5">
        <span class="transition ease-out duration-300 hover:bg-blue-50 bg-blue-100 w-8 h-8 px-2 py-2 text-center rounded-full text-blue-400 cursor-pointer mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
          </svg>
        </span>
        <span class="transition ease-out duration-300 hover:bg-gray-50 bg-gray-100 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
          <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
          </svg>
        </span>
      </div>
    </div>
    <div class="flex w-full border-t border-gray-100">
      <div class="mt-3 mx-5 flex items-center gap-5 text-xs">
        <span class="flex text-gray-700 font-normal rounded-md gap-1 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
          </svg>

          <div class="ml-1 text-gray-400 text-ms">30</div>
        </span>
        <span class="flex text-gray-700 font-normal rounded-md items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>

          <span class="ml-1 text-gray-400 text-ms">6000</span>
        </span>
      </div>
      <div class="mt-3 mx-5 w-full flex justify-end text-xs">
        <div class="flex text-gray-700 rounded-md mb-2 mr-4 items-center">
          Lượt thích
          <div class="ml-1 text-gray-400 text-ms">120</div>
        </div>
      </div>
    </div>
    <div class="text-black p-4 antialiased flex">
      <img class="rounded-full h-8 w-8 mr-2 mt-1" src="../../content/images/posts/son.jpg" />
      <div>
        <div class="bg-gray-100 rounded-lg px-4 pt-2 pb-2.5">
          <div class="font-semibold text-sm leading-relaxed">
            Nguyễn Công Sơn
          </div>
          <div class="text-xs leading-snug md:leading-normal">
            Fuck wibu !
          </div>
        </div>
        <div class="text-xs mt-0.5 text-gray-500">1 giờ trước</div>
      </div>
    </div>
    <form class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
      <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar" src="../../content/images/posts/son.jpg" />
      <span class="absolute inset-y-0 right-0 flex items-center pr-6">
        <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
          <svg class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </button>
      </span>
      <input type="search" class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400" style="border-radius: 25px" placeholder="Nhập bình luận..." autocomplete="off" />
    </form>
  </div>

  <div class="bg-white shadow rounded-lg">
    <div class="flex flex-row px-2 py-3 mx-3">
      <div class="w-auto h-auto rounded-full border-2">
        <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" alt="User avatar" src="
                  ../../content/images/posts/son.jpg" />
      </div>
      <div class="flex flex-col mb-2 ml-4 mt-1">
        <div class="text-gray-600 text-sm font-semibold">
          Nguyễn Công Sơn
        </div>
        <div class="flex w-full mt-1">
          <span class="text-gray-400 font-thin text-xs">• 1 ngày </span>
        </div>
      </div>
    </div>
    <div class="border-b border-gray-100"></div>

    <p class="text-gray-500 text-sm mb-6 mx-3 px-2">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in
      ipsum id orci porta dapibus.
    </p>
    <div class="text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2">
      <img class="rounded w-full" src="../IMG/anh-bia.jpg" />
    </div>

    <div class="flex justify-start mb-4 border-t border-gray-100">
      <div class="flex w-full mt-1 pt-2 pl-5">
        <span class="bg-white transition ease-out duration-300 hover:text-red-500 border w-8 h-8 px-2 pt-2 text-center rounded-full text-gray-400 cursor-pointer mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
          </svg>
        </span>
        <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="../../content/images/posts/son.jpg" alt="" />

        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="../../content/images/posts/son.jpg" alt="" />
        <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer" src="../../content/images/posts/son.jpg" alt="" />
      </div>
      <div class="flex justify-end w-full mt-1 pt-2 pr-5">
        <span class="transition ease-out duration-300 hover:bg-blue-50 bg-blue-100 w-8 h-8 px-2 py-2 text-center rounded-full text-blue-400 cursor-pointer mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
          </svg>
        </span>
        <span class="transition ease-out duration-300 hover:bg-gray-50 bg-gray-100 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
          <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
          </svg>
        </span>
      </div>
    </div>
    <div class="flex w-full border-t border-gray-100">
      <div class="mt-3 mx-5 flex items-center gap-5 text-xs">
        <span class="flex text-gray-700 font-normal rounded-md gap-1 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
          </svg>

          <div class="ml-1 text-gray-400 text-ms">30</div>
        </span>
        <span class="flex text-gray-700 font-normal rounded-md items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>

          <span class="ml-1 text-gray-400 text-ms">6000</span>
        </span>
      </div>
      <div class="mt-3 mx-5 w-full flex justify-end text-xs">
        <div class="flex text-gray-700 rounded-md mb-2 mr-4 items-center">
          Lượt thích
          <div class="ml-1 text-gray-400 text-ms">120</div>
        </div>
      </div>
    </div>
    <div class="text-black p-4 antialiased flex">
      <img class="rounded-full h-8 w-8 mr-2 mt-1" src="../../content/images/posts/son.jpg" />
      <div>
        <div class="bg-gray-100 rounded-lg px-4 pt-2 pb-2.5">
          <div class="font-semibold text-sm leading-relaxed">
            Nguyễn Công Sơn
          </div>
          <div class="text-xs leading-snug md:leading-normal">
            Fuck wibu !
          </div>
        </div>
        <div class="text-xs mt-0.5 text-gray-500">1 giờ trước</div>
      </div>
    </div>
    <form class="relative flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
      <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar" src="../../content/images/posts/son.jpg" />
      <span class="absolute inset-y-0 right-0 flex items-center pr-6">
        <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
          <svg class="w-6 h-6 transition ease-out duration-300 hover:text-blue-500 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </button>
      </span>
      <input type="search" class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400" style="border-radius: 25px" placeholder="Nhập bình luận..." autocomplete="off" />
    </form>
  </div>
</article>
</main>