
<!DOCTYPE html>
<html>
    <body>
        <h3>QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
        require_once "../../global.php";
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php?btn_insert" method="post" enctype="multipart/form-data" >
            <div>
                <div>
                    <label>TÀI KHOẢN</label>
                    <input name="user_name" type="text">
                </div>
                <div>
                    <label>HỌ VÀ TÊN</label>
                    <input name="name" type="text">
                </div>
            </div>
            <div>
                <div>
                    <label>MẬT KHẨU</label>
                    <input name="password" type="password" >
                </div>
                <div>
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input name="password2" type="password" >
                </div>
            </div>
            <div>
                <div>
                    <label>ĐỊA CHỈ EMAIL</label>
                    <input name="email" >
                </div>
                <div>
                    <label>HÌNH ẢNH</label>
                    <input name="image" type="file" >
                </div>
            </div>
            <div>
                <div>
                    <label>SỐ ĐIỆN THOẠI</label>
                    <input name="phone" type="text">
                </div>
                <div>
                    <label>VAI TRÒ</label>
                    <div>
                        <label><input name="role" value="0" type="radio" >Khách hàng</label>
                        <label><input name="role" value="1" type="radio"  checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <button name="btn_insert" >Thêm mới</button>
                    <button type="reset" >Nhập lại</button>
                    <button><a href="index.php?btn_list" style="text-decoration:none; color:aliceblue;">Danh sách</a></button>
                </div>
            </div>
        </form>
    </body>
</html>
