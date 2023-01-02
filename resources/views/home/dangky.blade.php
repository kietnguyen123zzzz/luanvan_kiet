@include('header')
<section class="bg-gray-200 p-2 mb-2 mt-24">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="flex justify-center">
            <li><a href="http://localhost:8000/" class=" text-sm md:text-base"> Trang chủ</a>&nbsp;&nbsp;<i class="fas fa-arrow-right text-sm md:text-base "></i>&nbsp;&nbsp;</li>
                 <li class="font-bold text-sm md:text-base py-1 md:py-0"> Đăng ký</li>
                        
          </ul>
        </div>
    </div>
</section>

<div class="bg-gray">
    <div class="container mx-auto px-4 max-w-screen-sm py-4">
      
        <div class="bg-white">
            <div class="text-center font-bold p-4 md:text-2xl text-xl uppercase text-supernova-500">
               Thông tin đăng ký
            </div>
           
                <input type="hidden" name="type" value="0">

                <div class="px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                       Họ và Tên (*)
                    </label>
                    <input name="name_enterprise" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-200 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Họ và tên">
                </div>
                <div class="px-3 mb-6 md:mb-0 mt-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Tên đăng nhập:
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Tên đăng nhập hoặc email">
                </div>
                <div class="px-3 mb-6 md:mb-0 mt-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Mật khẩu:
                    </label>
                    <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                   
                </div>
                <div class="px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                        Địa chỉ  (*)
                    </label>
                    <input name="address1" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-200 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Địa chỉ ">
                </div>
                <div class="px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                        Số điện thoại (*)
                    </label>
                    <input name="phone1" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-200 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Số điện thoại của bạn">
                </div>
                <div class="px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                       Địa chỉ email (*)
                    </label>
                    <input name="email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-gray-200 rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Email của bạn">
                </div>               
            </form>
        </div>
            <button  type="submit" class="p-3 mb-6 md:mb-0 mt-4">
                <a class="bg-blue-800 block text-white font-bold w-48 p-2 rounded zoom ">
                     Đăng ký
                </a>
            </button>
         </div>
    </div>
</div>
@include('footer')
