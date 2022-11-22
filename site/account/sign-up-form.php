      <main class="w-full mt-14">
        <h1 class="text-3xl text-center">Sign Up</h1>
        <?php
        if (strlen($MESSAGE)) {
          echo "<h5 class=''>$MESSAGE</h5>";
        }
        ?>
        <div class="form__login my-10 w-full flex justify-center">
          <form action="sign-up.php" method="post" enctype="multipart/form-data" class="form__login--content w-[300px] sm:w-[500px]  flex flex-col  gap-4">
            <div class="form__group flex flex-col gap-2 ">
              <label for="name">Full name</label>
              <input type="text" name="name" id="name" placeholder="Name" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" value="<?= $name ?>" />
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['name'])) {
                  echo $error['name'];
                }
                ?>
              </span>
            </div>
            <div class="form__group flex flex-col gap-2">
              <label for="user_name">Username</label>
              <input type="text" name="user_name" id="username" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none" placeholder="Username" value="<?= $user_name ?>" />
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['user_name'])) {
                  echo $error['user_name'];
                }
                ?>
              </span>
            </div>
            <div class="form__group flex flex-col gap-2 ">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm 
                  focus:border-orange-500 focus:outline-none" placeholder="Password" value="<?= $password ?>" />
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['password'])) {
                  echo $error['password'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="password2">Confirm password</label>
              <input type="password" name="password2" id="password2" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="Confirm password" value="<?= $password2 ?>" />
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['password2'])) {
                  echo $error['password2'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="Email" value="<?= $email ?>" />
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['email'])) {
                  echo $error['email'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="phone">Phone</label>
              <input type="tel" name="phone" id="phone" class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="Phone" value="<?= $phone ?>" />
              <span class="text-red-500 text-xs">
                <?php
                if (isset($error['phone'])) {
                  echo $error['phone'];
                }
                ?>
              </span>
            </div>

            <div class="form__group flex flex-col gap-2">
              <label for="avatar">Avatar</label>
              <input type="file" name="avatar" id="avatar" class="form__input  text-xs border border-gray-700  p-[9px] w-full rounded-sm focus:border-orange-500 focus:outline-none" placeholder="avatar" />
            </div>
            <div class="form__group flex flex-col justify-center items-center gap-3">
              <!-- <a href="#" class="text-center">Forgot your password?</a> -->
              <button type="submit" name="btn_register" class="text-white bg-orange-600 p-2 rounded-sm w-full sm:w-[100px] text-center">
                CREATE
              </button>
            </div>
            <!--Default value-->
            <input name="role" value="0" type="hidden">
          </form>
        </div>
      </main>