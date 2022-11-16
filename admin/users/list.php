
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
    <table border="1">
     <thead>
        <tr>
            <th></th>
            <th>User Name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th>Role</th>
            <th colspan="2" style="text-align: center ;"><a href="index.php?btn_insert" style="text-decoration: none; color:red;">Nhập thêm</a></th>

        </tr>
        <tbody>
            <?php foreach($users as $user){ 
                extract($user);
                ?>
            <tr>
            <th><input type="checkbox" name="user_id[]" value="<?=$user_id?>"></th>
                <td><?= $user_name ?></td>
                <td><?= $password ?></td>
                <td><?= $email ?></td>
                <td><?= $phone ?></td>
                <td><img src="<?= $image ?>" alt=""></td>
                <td><?= $role ?></td>
                <td style="text-align:center;">
                            <a href="index.php?btn_edit&user_id=<?= $user_id ?>" style="text-decoration:none;">Sửa</a>
                          
                        </td>
                        <td style="text-align:center;">
                        <a href="index.php?btn_delete&user_id=<?= $user_id?>" style="text-decoration:none;">Xóa</a>
                        </td>
            </tr>
            <?php } ?>
        </tbody>
     </thead>
    </table>
    </form>
</body>
</html>