@include('header')
<section class="bg-gray-200 p-2 mb-2 mt-24">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="flex justify-center">
            <li><a href="https://seafood.mientaynet.info" class=" text-sm md:text-base"> Trang chủ</a>&nbsp;&nbsp;<i class="fas fa-arrow-right text-sm md:text-base "></i>&nbsp;&nbsp;</li>
                 <li class="font-bold text-sm md:text-base py-1 md:py-0"> Liên hệ </li>
                        
          </ul>
        </div>
    </div>
</section>
<section class="container mx-auto px-5 md:px-10 py-2 ">
  
  <div class="max-w-screen-xl mx-auto ">
    <div class="flex flex-wrap md:flex-nowrap gap-5">
      <div class="w-full md:w-1/2">
        <section class="text-gray-600 body-font relative">
          <div class=" bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h2 class="text-gray-900 text-base md:text-base mb-1 font-medium title-font uppercase">Liên hệ</h2>
            <p class="leading-relaxed mb-5 text-gray-600"></p>
              <div class="text-sm md:text-sm">
              <p class="mb-1">SEAFOOD</p>
              <p class="mb-1"><i class="text-scarlet-500 fas fa-phone"></i> <a href="tel:#0888964449">Điện thoại: 0888964449</a></p>
              <p class="mb-1"><i class="text-scarlet-500 fas fa-phone-alt"></i> <a href="tel:#0888964449">Hotline: 0888964449</a></p>
              <p class="mb-1"><i class="text-scarlet-500 fas fa-map-marker-alt"></i> Địa chỉ: Trụ sở: Nguyễn Việt Hồng, An Phú, Ninh Kiều, Cần Thơ</p>
              
              <p class="mb-1"><i class="text-scarlet-500 fas fa-envelope"></i> <a href="mailto:#seafood@gmail.com">Email: seafood@gmail.com</a></p>
              <p class="mb-1"><i class="text-scarlet-500 fas fa-globe"></i> Website: seafood.mientaynet.info</p>

              </div>
          </div>
        </section>
      </div>
      <div class="w-full md:w-1/2">
        <form method="post" action="https://seafood.mientaynet.info/contact" id="form-process">
          <input type="hidden" name="_token" value="jkIerhkIABy2H8FJK37mnNGesbkUEFxeu1C5rSMi">
            <section class="text-gray-600 body-font relative">
              <div class="container md:px-5 mx-auto">
                
                <div class=" bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                  <h2 class="text-gray-900 text-base md:text-base mb-1 font-medium title-font uppercase">
                     Gửi tin nhắn cho chúng tôi                   </h2>
                  <p class="leading-relaxed mb-5 text-gray-600"></p>
                  <div class="flex flex-wrap md:flex-nowrap md:gap-5">
                    <div class="w-full md:w-1/2 relative mb-4">
                      <label for="name" class="leading-7 text-sm text-gray-600">Tên <span style="color:#005b3a"> (*) </span>:</label>
                      <input type="text" 
                        id="name"
                        name="name" 
                        required
                        maxlength="6"
                        placeholder="Tên" 
                        value=""
                        class="w-full bg-white rounded border border-gray-300 focus:border-sulu-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        >
                                            </div>
                    <div class="w-full md:w-1/2 relative mb-4">
                      <label for="email" class="leading-7 text-sm text-gray-600">Email:</label>
                      <input type="email" 
                      name="email" 
                      placeholder="Email" 
                      value=""
                      class="w-full bg-white rounded border border-gray-300 focus:border-sulu-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      
                    </div>
                  </div>
                
                  <div class="relative mb-4">
                      <label for="phone" class="leading-7 text-sm text-gray-600">Điện thoại <span style="color:#005b3a"> (*) </span>:</label>
                      <input type="telephone" 
                      placeholder="Điện thoại" 
                      value=""
                      minlength="10" maxlength="10"
                      required
                      name="phone"
                      pattern="^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$"
                      title="Số điện thoại chưa chính xác"
                      class="w-full bg-white rounded border border-gray-300 focus:border-sulu-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                  <div class="relative mb-4">
                      <label for="name" class="leading-7 text-sm text-gray-600">Tiêu đề:</label>
                      <input type="text" 
                        id="name"
                        placeholder="Tiêu đề" 
                                                value="" 
                        
                                                name="title"
                        class="w-full bg-white rounded border border-gray-300 focus:border-sulu-500 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        >
                                            </div>
                  <div class="relative mb-4">
                    <label for="content" class="leading-7 text-sm text-gray-600">Nội dung <span style="color:#005b3a"> (*) </span></label>
                    <textarea id="content" name="content" 
                    placeholder="Nội dung"
                    required
                    class="w-full bg-white rounded border border-gray-300 focus:border-sulu-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                    >  </textarea>
                                      </div>
                  <button type="submit" class="text-white  border-0 py-2 px-6 focus:outline-none hover:bg-sulu-600 rounded text-base zoom" style="background: #1d2a9d">Gửi</button>
                </div>
                
              </div>
            </section>
        </form>
      </div>
    </div>
  </div>
    <div class="container px-5 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="w-full bg-gray-300 rounded-lg overflow-hidden  flex items-end justify-start relative h-80">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8295453778433!2d105.77612011464889!3d10.030920875253726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08821b7117d55%3A0xdda0c293f5c6aaa3!2zTmd1eeG7hW4gVmnhu4d0IEjhu5NuZywgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1663325424940!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  </section>
  @include('footer')