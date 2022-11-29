<?php extract($_SESSION['user']) ?>
<main class="w-full mt-14">
    <h1 class="text-3xl text-center">Change Password</h1>

    <div class="form__login my-10 w-full flex justify-center">
        <form action="change-password.php" method="post" enctype="multipart/form-data" class="form__login--content w-[300px] sm:w-[500px]  flex flex-col  gap-4">
            <div class="form__group flex flex-col gap-2">
                <label for="user_name">User name</label>
                <input type="text" name="user_name" id="user_name" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Enter your registration user name ..." value="<?= $user_name ?>"/>
            </div>

            <div class="form__group flex flex-col gap-2">
                <label for="password">Old password</label>
                <input type="password" name="password" id="password" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Enter your registration password ..." value="<?= $password ?>"/>
            </div>

            <div class="form__group flex flex-col gap-2">
                <label for="password2">New password</label>
                <input type="password" name="password2" id="password2" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Enter your new password ..." value="<?= $password2 ?>"/>
            </div>


            <div class="form__group flex flex-col gap-2">
                <label for="password3">Confirm password</label>
                <input type="password" name="password3" id="password3" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Enter confirm password ..." value="<?= $password3 ?>"/>
            </div>
            <?php
            if (strlen($MESSAGE)) {
                echo "<h5 class=''>$MESSAGE</h5>";
            }
            ?>
            <div class="form__group flex flex-col justify-center items-center gap-3">
                <button type="submit" name="btn_change" class="text-white bg-orange-600 p-2 rounded-sm w-full sm:w-[100px] text-center">
                    Change
                </button>
            </div>
        </form>
    </div>
</main>