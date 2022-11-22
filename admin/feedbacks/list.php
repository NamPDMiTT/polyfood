<!DOCTYPE html>
<html>
    <body>
        <h3>TỔNG HỢP FEEDBACKS</h3>
        <form action="index.php" method="post">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>PRODUCTS</th>
                        <th>Total</th>
                        <th>MỚI NHẤT</th>
                        <th>CŨ NHẤT</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item);
                ?>
                    <tr>
                        <td><?=$product_name?></td>
                        <td><?=$total?></td>
                        <td><?=$old?></td>
                        <td><?=$new?></td>
                        <td>
                            <a href="<?= $ADMIN_URL ?>/feedbacks/index.php?product_id=<?=$product_id?>">Chi tiết</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </form>
    </body>
</html>