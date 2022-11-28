<article class="w-[85%]">
  <header style="border-radius: 10px; background: #fff; box-shadow: 35px 35px 70px #bebebe,
-35px -35px 70px #ffffff;
" class="w-full h-[60px] flex items-center justify-between px-5 py-2">
    <div class="logo-[100px] h-auto px-2 flex gap-2 items-center justify-center">
      <a href="../../index.php">
        <img src="../../Site/IMG/lct-logo.png" alt="logo" class="w-16 h-auto" />
      </a>
      <h1 class="text-xs font-bold italic text-orange-500">
        CONGTIEN<span class="text-black">DEV</span>
      </h1>
    </div>
    <div class="account__admin flex items-center gap-2">
      <div class="account__admin--avatar">
        <img src="' . $avatarSrc . '" alt="" class="w-10 h-10 rounded-full" />
      </div>
      <div class="account__admin--name flex flex-col gap-1">
        <p class="font-medium text-sm text-gray-500">
          Congtiendev
        </p>
        <a href="index.php?action=logout" class="logout text-xs text-gray-500 flex items-center gap-1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
          </svg>
          Logout
        </a>
      </div>
    </div>
  </header>
  <!-- End header -->
  <main style="border-radius: 10px; background: #fff; box-shadow: 35px 35px 70px
#bebebe, -35px -35px 70px #ffffff; " class="w-full  p-5 mt-5 bg-gray-100">
    <section class="list__accounts w-full">
      <section class="list__accounts-title  flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-gray-500">
          <path fill-rule="evenodd" d="M2.625 6.75a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0A.75.75 0 018.25 6h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75zM2.625 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zM7.5 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12A.75.75 0 017.5 12zm-4.875 5.25a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875 0a.75.75 0 01.75-.75h12a.75.75 0 010 1.5h-12a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
        </svg>

        <h1 class="text-left text-xl text-gray-500 uppercase">
          LIST accounts
        </h1>
      </section>
      <form action="index.php?post_id=<?=$post_id?>" method="post">
      <h3>POST ID: <?= $items[0]['post_id']?></h3>
        <div class="list__accounts-table w-full mt-4">
          <table class="w-full text-center rounded-md shadow-md my-3">
            <thead class="boder bg-gray-200 px-2 rounded-t-md">
              <tr>
                <th class=" text-xs  p-2  font-medium"></th>
                <th class=" text-xs  p-2 w-20 font-medium">
                  Nội dung
                </th>
                <th class=" text-xs  p-2  font-medium">
                  Hình ảnh
                </th>
                <th class=" text-xs  px-6 py-2 font-medium">
                 Ngày BL
                </th>
                <th class=" text-xs  px-2 py-2 font-medium">
                  Người BL
                </th>
                <th class=" text-xs  px-6 py-2 font-medium">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
            <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
<tr class="border-t-2 border-dashed">
                <td class="p-2 whitespace-nowrap">
                  <input type="checkbox" name="comment_id[]" value="<?= $comment_id ?>" class="checkbox" />
                </td>
                <td class="p-2 whitespace-nowrap">
                  <p class="text-xs text-gray-900">
                    <?= $content ?>
                  </p>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <p class="text-xs text-gray-900">
                    <img src="<?= $CONTENT_URL ?>/images/comments/<?= $image ?>" width="80" height="80" alt="">
                  </p>
                </td>
                <td class="p-2 w-20 ">
                  <p class="text-xs text-gray-900 truncate w-32 overflow-hidden">
                    <?= $time_send ?>
                  </p>
                </td>
                <td class="p-2 whitespace-nowrap">
                  <p class="text-xs text-gray-900">
                    <?= $user_name ?>
                  </p>
                </td>
                <td class="px-2 mt-7 whitespace-nowrap flex gap-3 items-center justify-center">
                  <a href="index.php?btn_delete&comment_id=<?=$comment_id?>&post_id=<?=$post_id?>" class="text-indigo-600 hover:text-indigo-900">Xóa
                  </a>
                </td>
              </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="list__accounts-table--button w-full px-5 mt-7 flex justify-center gap-5">
          <label for="checkAll" style="text-shadow: 0.6px 0.6px 0 #fff; color: #61677c; box-shadow:
1.5px 1.5px 2.5px #babecc, -2px -2px 5px #fff;" id="select" class=" p-3  border  w-[120px] text-center rounded-md text-xs hover:bg-gray-200 leading-4 ">
            Select All
          </label>
          <label for="checkAll" style="text-shadow: 0.6px 0.6px 0 #fff; color: #61677c; box-shadow:
1.5px 1.5px 2.5px #babecc, -2px -2px 5px #fff;" id="unselect" class=" p-3  border rounded-md w-[120px] text-center text-xs hover:bg-gray-200 leading-4 ">
            Unselect All
          </label>

          <button style="text-shadow: 0.6px 0.6px 0 #fff; color: #61677c; box-shadow:
1.5px 1.5px 2.5px #babecc, -2px -2px 5px #fff;" type="submit" name="btn_delete" class=" p-3  border rounded-md w-[120px] text-center   text-xs hover:bg-gray-200 leading-4 ">
            Delete selected
          </button>
          <input type="checkbox" hidden id="checkAll" name="checkAll" />
        </div>
      </form>
    </section>
  </main>
</article>
</div>
</div>
</body>

</html>