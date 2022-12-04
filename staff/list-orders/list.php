<div class="title__list-order mt-5 mb-3">
  <h1 class="text-center text-3xl font-bold text-gray-700">
    Danh sách đơn hàng
  </h1>
</div>
<main style="border-radius: 10px; background: #fff; " class="w-full  px-20  bg-gray-100">

  <!-- Đặt vòng for từ đây -->
  <!-- Khối chứa thông tin sản phẩm -->
  <?php foreach ($items as $item) : ?>
    <?php extract($item); ?>
    <div class="list__product__orded flex flex-col gap-3 items-center justify-center">
      <form class="all__my__cart" action="index.php?order_id=<?= $order_id ?>" method="post">
        <div class="flex sm:flex-row flex-col my-5 gap-3 p-4 border-b-[3px]">
          <div class="list__product__orded-item overflow-y-scroll flex justify-center items-center  w-full gap-5 p-5 rounded-lg border-[3px] border-dashed">
            <!-- 1 sản phẩm -->
            <div style="
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(2.5px);
    -webkit-backdrop-filter: blur(2.5px);
    border-radius: 15px;
    border: 1px solid rgba(255, 255, 255, 0.18);
  " class="list__product__orded__item__product min-w-[305px]  p-2  max-h-[115px] flex gap-5">
              <div class="product__img">
                <img class="rounded-lg w-24 h-24 object-cover object-center" src="<?= $CONTENT_URL ?>/images/products/<?= $image ?>" alt="" />
              </div>
              <div class="product__info flex flex-col gap-1">
                <h1 class="text-xl font-semibold text-gray-700"><?= $product_name ?></h1>
                <p class="text-gray-500 text-xs">Số lượng : <?= $quantity ?></p>
                <p class="text-gray-500 text-xs">Đơn giá : <?= number_format($price * (1 - $discount / 100), 0, '', '.') ?>đ</p>

                <p class="text-gray-500 text-xs">Ngày đặt :
                  <?php
                  $date = date_create($time_order);
                  echo date_format($date, 'd/m/Y');
                  ?>
                </p>
                </p>
              </div>
            </div>


          </div>
          <!-- Khối chứa thông tin khách hàng -->
          <div class="list__porduct__orded__item__user  rounded-lg p-5 border-[3px] border-dashed">
            <div class="list__porduct__orded__item__user__info flex gap-5">
              <div class="user__info">
                <h1 style="width:200px;" class="text-xl font-semibold text-gray-700 ">Thông tin người nhận</h1>
                <p class=" text-gray-600 text-sm font-bold whitespace-nowrap">
                  Họ tên : <span class="font-normal whitespace-nowrap"><?= $name ?></span>
                  </p>
                  <p class="text-gray-600 text-sm font-bold whitespace-nowrap">
                    Mã đơn hàng : <span class="text-orange-500">#<?= $order_id ?></span>
                  </p>

              </div>
            </div>
            <div class="list__porduct__orded__item__user__status flex flex-col">
              <div class="user__status flex items-center gap-1">
                <h1 class="font-bold text-sm text-gray-600 whitespace-nowrap">Trạng thái : </h1>
                <p class="text-yellow-500 text-xs"><?= $status == 1 ? "Đã xong" : "Đang xử lý"; ?></p>
              </div>
              <p class="text-gray-600 text-sm  break-normal">
                <span class="font-bold">Ghi chú : </span> <?= $note ?>
              </p>
              <div class="user__status flex items-center gap-1">

                <h1 class="font-bold text-sm text-gray-600 whitespace-nowrap">Tổng tiền : </h1>
                <p class="text-orange-500 text-sm"><?= number_format($price * (1 - $discount / 100) * $quantity, 0, '', '.') ?>đ</p>
              </div>
            </div>
            <!-- 2 nút xác nhận và hủy -->
            <div class="list__porduct__orded__item__user-check mt-2 flex justify-center items-center gap-2">
              <button type="submit" name="btn_confirm" class="whitespace-nowrap bg-green-500 text-white text-sm font-semibold px-3 py-2 rounded-lg">
                Xác nhận
              </button>
              <button type="submit" name="btn_cancel" class="bg-red-500 text-white text-sm font-semibold px-3 py-2 rounded-lg">
                Hủy
              </button>
            </div>
          </div>
        </div>
      </form>
      <hr>


    </div>
  <?php endforeach; ?>

</main>