@include('header')
<section class="bg-gray-200 p-2 mb-2 mt-24">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="flex justify-center">
            <li><a href="http://localhost:8000/" class=" text-sm md:text-base"> Trang chủ</a>&nbsp;&nbsp;<i class="fas fa-arrow-right text-sm md:text-base "></i>&nbsp;&nbsp;</li>
                 <li class="font-bold text-sm md:text-base py-1 md:py-0"> Đổi mật khẩu</li>
                        
          </ul>
        </div>
    </div>
</section>
<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto ">
      <div class="md:w-1/3 w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
          <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Đổi mật khẩu
          </h2>
          <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="#">
              <div>
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tài khoản hoặc Email của bạn</label>
                  <input type="email" name="email" id="email" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" placeholder="name@gmail.com" required="">
              </div>
              <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mật khẩu mới</label>
                  <input type="password" name="password" id="password" placeholder="••••••••" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required="">
              </div>
              <div>
                  <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Xác nhận mật khẩu</label>
                  <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required="">
              </div>
              <div class="flex items-start">
                  <div class="flex items-center h-5">
                  <input id="newsletter" aria-describedby="newsletter" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="newsletter" class="font-light text-gray-500 dark:text-gray-300">Tôi chấp nhận <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">các điều khoản và điều kiện</a></label>
                  </div>
              </div>
              <button type="submit" class="bg-blue-800 hover:bg-supernova-700  text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Đặt lại mật khẩu</button>
          </form>
      </div>
  </div>
</section>
@include('footer')
