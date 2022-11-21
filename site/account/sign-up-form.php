
        <main class="w-full mt-14">
          <h1 class="text-3xl text-center">CREATE ACCOUNT</h1>
          <div class="form__login my-10 w-full flex justify-center">
            <form
              action="index.php?action=createAccount"
              method="post"
              enctype="multipart/form-data"
              class="form__login--content w-[300px] sm:w-[500px]  flex flex-col  gap-4"
            >
              <div class="form__group flex flex-col gap-2 ">
                <label for="fullname">Full name</label>
                <input
                  type="text"
                  name="fullname"
                  id="fullname"
                  placeholder="Fullname"
                  class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none"
                  value=""
                />
                <span class="text-red-500 text-xs"
                  ><?php
                                                        if (isset($error['fullname'])) {
                                                            echo $error['fullname'];
                                                        }
                                                        ?></span
                >
              </div>
              <div class="form__group flex flex-col gap-2">
                <label for="user_name">Username</label>
                <input
                  type="text"
                  name="user_name"
                  id="username"
                  class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm
                  focus:border-orange-500 focus:outline-none"
                  placeholder="Username"
                  value=""
                />
                <span class="text-red-500 text-xs"
                  ><?php
                                                        if (isset($error['user_name'])) {
                                                            echo $error['user_name'];
                                                        }
                                                        ?></span
                >
              </div>
              <div class="form__group flex flex-col gap-2 ">
                <label for="password">Password</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm 
                  focus:border-orange-500 focus:outline-none"
                  placeholder="Password"
                  value=""
                />
                <span class="text-red-500 text-xs"
                  ><?php
                                                        if (isset($error['password'])) {
                                                            echo $error['password'];
                                                        }
                                                        ?></span
                >
              </div>

              <div class="form__group flex flex-col gap-2">
                <label for="confirm_password">Confirm password</label>
                <input
                  type="password"
                  name="confirm_password"
                  id="confirm_password"
                  class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none"
                  placeholder="Confirm password"
                  value=""
                />
                <span class="text-red-500 text-xs"
                  ><?php
                                                        if (isset($error['confirm_password'])) {
                                                            echo $error['confirm_password'];
                                                        }
                                                        ?></span
                >
              </div>

              <div class="form__group flex flex-col gap-2">
                <label for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form__input  text-xs border border-gray-700  p-3 w-full rounded-sm focus:border-orange-500 focus:outline-none"
                  placeholder="Email"
                  value=""
                />
                <span class="text-red-500 text-xs"
                  ><?php
                                                        if (isset($error['email'])) {
                                                            echo $error['email'];
                                                        }
                                                        ?></span
                >
              </div>

              <div class="form__group flex flex-col gap-2">
                <label for="avatar">Avatar</label>
                <input
                  type="file"
                  name="avatar"
                  id="avatar"
                  class="form__input  text-xs border border-gray-700  p-[9px] w-full rounded-sm focus:border-orange-500 focus:outline-none"
                  placeholder="avatar"
                />
              </div>
              <div
                class="form__group flex flex-col justify-center items-center gap-3"
              >
                <!-- <a href="#" class="text-center">Forgot your password?</a> -->
                <button
                  type="submit"
                  name="create_account"
                  class="text-white bg-orange-600 p-2 rounded-sm w-full sm:w-[100px] text-center"
                >
                  CREATE
                </button>
              </div>
            </form>
          </div>
        </main>

       