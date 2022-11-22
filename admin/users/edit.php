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
  
  <?php if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
        <section class="edit__account w-full mt-5">
            <section class="edit__products-title flex  items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              
  
                <h1 class="text-left lg:text-xl text-gray-500 uppercase">edit account</h1>
            </section>

            <section class="mt-5  w-full">
                <form action="index.php" class="form__edit-account w-full" method="post" enctype="multipart/form-data">
                    <div class="list__form-group w-full grid  grid-cols-1 gap-10">
                        <div class="form__group flex flex-col">
                            <label for="accounttid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">ACCOUNT ID</label>
                            <input type="text" name="user_id" value="<?= $user_id ?>" id="user_id" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" readonly/>
                        </div>
                        <div class="form__group flex flex-col">
                            <label for="accounttid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">Full Name</label>
                            <input type="text" name="name" value="<?= $name ?>" id="name" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
                        </div>
                        <div class="form__group flex flex-col">
                            <label for="accounttid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">User Name</label>
                            <input  type="text" name="user_name" value="<?= $user_name ?>" id="user_name" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
                        </div>
                        <div class="form__group flex flex-col">
                            <label for="accounttid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">Password</label>
                            <input  type="text" name="password" value="<?= $password ?>" id="password" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
                        </div>
                        <div class="form__group flex flex-col">
                            <label for="accounttid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">Email</label>
                            <input  type="text" name="email" value="<?= $email ?>" id="email" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
                        </div>
                        <div class="form__group flex flex-col">
                            <label for="accounttid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">Phone</label>
                            <input  type="text" name="phone" value="<?= $phone ?>" id="phone" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
                        </div>
                        <div class="form__group flex flex-col">
                            <label for="accounttid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">Image</label>
                            <input  type="hidden" name="image" value="<?= $image ?>" id="image" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
<input  type="file" name="upload_image" id="upload_image" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" /> (<?= $image ?>)
                        </div>
                        <div class="form__group flex flex-col ">
                            <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="name">ROLE</label>
                            <select class="form__input form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none text-xs sm:text-sm md:text-base lg:text-base  bg-gray-100
                                    mt-2 p-2 px-3 rounded-md text-gray-500" name="role" id="role">
                                <option value="0" <?= $role==0?"selected":"" ?>>USER</option>
                                <option value="1" <?= $role==1?"selected":"" ?>>ADMIN</option>
                            </select>
                        </div>

                        <div class="form__edit-account--list-button w-full mt-7 flex gap-3 justify-center items-center">
                            <button type="submit" name="btn_update" style="text-shadow: 0.6px 0.6px 0 #fff; color: #61677c; box-shadow: 1.5px 1.5px
2.5px #babecc, -2px -2px 5px #fff;" class="p-2 border w-[120px] text-center
rounded-md text-sm hover:bg-gray-200 leading-4 ">
                                SAVE
                            </button>
                            <button><a href="<?= $ADMIN_URL ?>/users/index.php?btn_list">Danh sách</a></button>
                        </div>
                </form>
            </section>
        </section>
        <!-- End edit_product -->
    </main>

</article>
</div>
</div>
</body>

</html>