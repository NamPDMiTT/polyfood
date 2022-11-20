
    <body>
        <h3>CHI TIẾT BÌNH LUẬN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php?product_id=<?=$product_id?>" method="post" class="form-control">
            <h3>HÀNG HÓA: <?= $items[0]['product_name']?></h3>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>NỘI DUNG</th>
                        <th>Rate</th>
                        <th>Image</th>
                        <th>NGÀY BL</th>
                        <th>NGƯỜI BL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_bl[]" value="<?=$feedback_id?>"></th>
                        <td><?=$content?></td>
                        <td><?=$rate?></td>
                        <td><img src="<?= $CONTENT_URL ?>/images/feedbacks/<?=$image?>" alt="" class="w-16 h-16 block mx-auto" /></td>
                        <td><?=$time_send?></td>
                        <td><?=$user_name?></td>
                        <td>
                            <a href="index.php?btn_delete&feedback_id=<?=$feedback_id?>&product_id=<?=$product_id?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <button id="check-all" type="button" class="btn btn-outline-primary">Chọn tất cả</button>
                            <button id="clear-all" type="button" class="btn btn-outline-success">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-outline-secondary">Xóa các mục chọn</button>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
