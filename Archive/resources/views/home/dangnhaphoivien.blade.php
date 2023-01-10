@include('header')
<section class="bg-gray-200 p-2 mb-2 mt-24">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="flex justify-center">
            <li><a href="http://localhost:8000/" class=" text-sm md:text-base"> Trang chủ</a>&nbsp;&nbsp;<i class="fas fa-arrow-right text-sm md:text-base "></i>&nbsp;&nbsp;</li>
                 <li class="font-bold text-sm md:text-base py-1 md:py-0"> Đăng nhập</li>
                        
          </ul>
        </div>
    </div>
</section>
  <div class="flex justify-center ">
        <form class="w-full md:w-1/4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-8" >
          <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2 text-2xl">
                  Đăng nhập
              </label>
          </div>
          <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                  Tên đăng nhập:
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Tên đăng nhập hoặc email">
          </div>
          <div class="mb-6">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Mật khẩu:
              </label>
              <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
              <p class="text-red-500 text-xs italic">Please choose a password.</p>
          </div>
          <div class="mb-6 ">
              <input  type="checkbox" class="w-3 h-3  border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
              <label  class="font-light text-gray-500 dark:text-gray-300">Ghi nhớ</label>
          </div>
          <div class="flex items-center justify-between">
              <button class="bg-supernova-500 hover:bg-supernova-700  text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              <i class='fas fa-user' style='font-size:24px'></i> Đăng nhập
              </button>
              <a class="inline-block align-baseline font-bold text-sm  hover:text-blue-800" href="http://localhost:8000/doimatkhau">
                Quên mật khẩu ?
              </a>
          </div>
          <div class="mb-4 mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
              <a href="http://localhost:8000/dangky"> <i class="fas fa-edit" style='font-size:24px'></i>  Đăng ký tài khoản </a>
                </label>
          </div>
        </form>
  </div>
</div>

@include('footer')
