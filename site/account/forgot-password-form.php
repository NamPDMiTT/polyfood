    <main class="w-full mt-14">
        <h1 class="text-3xl text-center">Get Password</h1>

        <div class="form__login my-10 w-full flex justify-center">
            <form action="forgot-password.php" method="post" enctype="multipart/form-data" class="form__login--content w-[300px] sm:w-[500px]  flex flex-col  gap-4">
                <div class="form__group flex flex-col gap-2">
                    <label for="user_name">User name</label>
                    <input type="text" name="user_name" id="user_name" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Enter your registration user name ..."/>
                </div>

                <div class="form__group flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Enter your registration email ..."/>
                </div>
                <?php
                if (strlen($MESSAGE)) {
                    echo "<h5 class=''>$MESSAGE</h5>";
                }
                ?>
                <div class="form__group flex flex-col justify-center items-center gap-3">
                    <button type="submit" name="btn_forgot" class="text-white bg-orange-600 p-2 rounded-sm w-full sm:w-[100px] text-center">
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </main>