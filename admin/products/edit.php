<?php $cate_id=$category_id;
$cates=categories_select_all()

?>
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
  <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <section class="add__category w-full mt-5">
            <section class="add__products-title flex  items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h1 class="text-left lg:text-xl text-gray-500">ADD PRODUCT</h1>
            </section>

            <section class="mt-5  w-full">
                <form action="index.php" class="form__add-category w-full" method="post" enctype="multipart/form-data">
                    <div class="list__form-group w-full grid  grid-cols-1 gap-10">
                        <div class="form__group flex flex-col">
                            <label for="categorytid" class="text-gray-500 text-xs sm:text-sm md:text-base lg:text-base">PRODUCT ID</label>
                            <input value="<?= $product_id ?>" readonly type="text" name="product_id" id="product__id" class="form__input-add__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
                        </div>
                        <div class="form__group flex flex-col ">
                            <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="name">PRODUCT NAME</label>
                            <input type="text" value="<?= $product_name ?>" class="form__input-add__prodcut shadow-2xl border border-gray-200 focus:outline-none text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3  rounded-md text-gray-500 " name="product_name" id="name" placeholder="Product name" />
                        </div>
                        <div class="form__group flex flex-col ">
                        <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="name">CATEGORY</label>

                        <select name="category_id" class="mt-2 p-2 px-3  shadow-2xl border border-gray-200 focus:outline-none text-xs sm:text-sm  bg-gray-100 rounded-md text-gray-500">
            <?php foreach($cates as $cate): ?>
                <?php extract($cate) ?>
             <option value="<?=$category_id?>" <?= $cate_id==$category_id?"selected":"" ?>><?=$category_name?></option>
                <?php endforeach; ?>
          </select>
                        </div>
                        <div class="form__group flex flex-col ">
                            <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="name">PRICE</label>
                            <input type="number" value="<?= $price ?>" class="form__input-add__prodcut shadow-2xl border border-gray-200 focus:outline-none text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3  rounded-md text-gray-500 " name="price" id="name" placeholder="Price" />
                        </div>
                        <div class="form__group flex flex-col ">
                            <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="name">DISCOUNT</label>
                            <input type="number" value="<?= $discount ?>" class="form__input-add__prodcut shadow-2xl border border-gray-200 focus:outline-none text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3  rounded-md text-gray-500 " name="discount" id="name" placeholder="Discount" />
                        </div>
                        <div class="form__group flex flex-col">
                             <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="quantity">Quantity</label>
                             <input type="number" value="<?= $quantity ?>" min="0" class="form__input-add__prodcut mt-2 p-2 px-3  shadow-2xl border border-gray-200 focus:outline-none text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 rounded-md text-gray-500" name="quantity" id="quantity" placeholder="Quantity" value="" />
                         </div>
                        <div class="form__group flex flex-col ">
                            <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="name">IMAGE</label>
                            <input  type="hidden" name="image" value="<?= $image ?>" id="image" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" />
<input  type="file" name="upload_image" id="upload_image" class="form__input-edit__prodcut shadow-2xl border border-gray-200 focus:outline-none
text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 mt-2 p-2 px-3
rounded-md text-gray-500
" /> (<?= $image ?>)
                        </div>
                        <label class="text-xs sm:text-sm md:text-base lg:text-base text-gray-500" for="detail">Detail</label>
                         <textarea cols="30" rows="10"  name="detail" id="detail" class="mt-2 p-2 px-3   shadow-2xl border border-gray-200 focus:outline-none text-xs sm:text-sm md:text-base lg:text-base bg-gray-100 rounded-md  text-gray-500">
                         <?=$detail?>
                        </textarea>
                        <div class="form__add-category--list-button w-full mt-7 flex gap-3 justify-center items-center">
                        <button type="submit" name="btn_update" style="text-shadow: 0.6px 0.6px 0 #fff; color: #61677c; box-shadow: 1.5px 1.5px
2.5px #babecc, -2px -2px 5px #fff;" class="p-2 border w-[120px] text-center
rounded-md text-sm hover:bg-gray-200 leading-4 ">
                             Save
                         </button>
                         <button type="reset" name="reset" style="text-shadow: 0.6px 0.6px 0 #fff; color: #61677c; box-shadow: 1.5px 1.5px
2.5px #babecc, -2px -2px 5px #fff;" class="p-2 border w-[120px] text-center
rounded-md text-sm hover:bg-gray-200 leading-4 ">
                             Reset
                         </button>
                         <button type="submit" name="btn_list" style="text-shadow: 0.6px 0.6px 0 #fff; color: #61677c; box-shadow: 1.5px 1.5px
2.5px #babecc, -2px -2px 5px #fff;" class="p-2 border w-[120px] text-center
rounded-md text-sm hover:bg-gray-200 leading-4 ">
                             List
                         </button>
                        </div>
                    </div>
                </form>
            </section>
        </section>
        <!-- End add_product -->
    </main>
</article>
</div>
</div>
</body>

</html>