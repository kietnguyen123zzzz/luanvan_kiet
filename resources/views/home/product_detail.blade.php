@include('header')
<section class="bg-gray-200 p-2 mb-2 mt-24">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="flex justify-center">
            <li><a href="https://seafood.mientaynet.info" class=" text-sm md:text-base"> Trang chủ</a>&nbsp;&nbsp;<i class="fas fa-arrow-right text-sm md:text-base "></i>&nbsp;&nbsp;</li>
                 <li class="font-bold text-sm md:text-base py-1 md:py-0">{{$product->name}} </li>
                        
          </ul>
        </div>
    </div>
</section>
<section class="container mx-auto px-5">
  <div class="text-tundora-500">
                                       
    <div class="w-12/12">
                                  
  <div class="flex flex-wrap mt-10">
    <div class="w-full md:w-8/12 pr-0 md:pr-5">
      <div class="flex flex-wrap">
        
        <div class="w-full md:w-3/5 pr-0 md:pr-5">
          <div class="flex flex-wrap">

          
            <div class="w-full border-2">
                      <img class="w-full" id="zoom_01" src="{{$product->images}}" alt=""  data-zoom-image="{{$product->images}}"/>
            </div>
            
          </div>
        </div>
        
        
        <div class="w-full md:w-2/5 pl-0 mt-5 md:mt-0 md:pl-5 z-50">
          <div>
                      <h3 class="text-xl font-bold text-lucky-point" id="product-detail-name" >{{$product->name}}:</h3>
            <span class="lowercase checked font-medium"style="color:#cb181e" >21197  Người mua</span>
            <div class="mt-2 border-t-2 border-b-2 py-2" style="border-color: #012174;">
               <i class='fa fa-star' style='color: #f3da35'></i>
               <i class='fa fa-star' style='color: #f3da35'></i>
               <i class='fa fa-star' style='color: #f3da35'></i>
               <i class='fa fa-star' style='color: #f3da35'></i>
               <i class='fa fa-star' style='color: #f3da35'></i>
              (1197 Đánh giá)
            </div>
            <div class="mt-2">
              <b>Danh mục sản phẩm: </b>
                              <a href="">{{$category->name}}</a>
                          </div>
            <div class="mt-2">
              <b>Thành phần: </b>
                {{$product->keyword}}
            </div>
            <div class="mt-2"><span class="font-bold">Số lượng trong kho : </span> {{$product->stock}}kg</div>
          </div>
          
        </div>
        <div class="md:hidden md:sticky mt-5 md:top-20">
          <div class="text-lucky-point font-bold text-xl">
            <style>
  .zoom:hover {
   transform: scale(1.1);
 }
  </style>
<div class="text-lucky-point font-bold text-xl">
  <span class="">{{$product->discount}} VNĐ/1kg</span>
  <span class="line-through ml-2">{{$product->price}} VNĐ/1kg</span>    
</div>

<div class="mt-5">
  <form id="buy_block" class="product-information" action="/cart_add/{{$product->id}}" method="get">
    @csrf
        <div>
          <p class="mb-2 mt-5 font-bold md:text-sm text-lucky-point" >Số lượng</p>
        </div>
      <div class="flex items-center">
      
      
        <div class="flex flex-col gap-3">
          <div class="w-8 h-9 border-2 border-gray-300 flex justify-center items-center minus"><i class="fas fa-minus text-xl"></i></div>
        </div>
        <div class="">
          <input class="w-14 h-9 border-t-2 border-b-2 border-gray-300  p-4  text-xl qty text-center" type="number" min=1 value="1" name="qty">
        </div>
        <div>
          <div class="w-8 h-9 border-2 border-gray-300 flex justify-center items-center add"><i class="fas fa-plus text-xl"></i></div>
        </div>
        <!-- <div class="ml-2 md:ml-2 add_to_cart zoom" id="add_to_cart" data-id="1197" data-price="450000" data-store-id="" data-qty="1">
          <button type="submit"  class="w-32 text-sm flex items-center  px-2  h-9 text-white uppercase rounded bg-lucky-point  justify-center  " > 
            <p class="" style="font-size: 12px;">Thêm vào giỏ</p>  
          </button>
        </div> -->
        <div class="ml-2 md:ml-5 zoom">
        <button type="submit" class="w-24 text-sm flex items-center  justify-center bg-lucky-point   px-2  h-9 text-white uppercase rounded " > <p class='' style="font-size: 12px;">MUA NGAY</p>  </button>
        </div>
        
    </div>
    
  </form>
</div>

<div class="mt-5 ">
  <p class="mb-2 font-bold text-lucky-point" >Cam Kết</p>
  
  <p><i class="fa fa-check text-lucky-point" ></i> Được kiểm tra sản phẩm trước khi thanh toán.</p>
  <p><i class="fa fa-check text-lucky-point" ></i> Giao hàng tại nhà trong thành phố Cần Thơ.</p>
  <p><i class="fa fa-check text-lucky-point" ></i> Đổi trả hàng lỗi trong ngày hoàn toàn miễn phí.</p>
</div>

<div class="mt-5">
  <ul>
    <li class="mb-2 border-b-2 border-dashed pb-2 hover:text-scarlet-500">
      <a class="flex items-center" href="tel:#0888964449">
        <div class="h-7 w-7 mr-5"><img class="w-7" src="/images/icon-details-phone.webp" alt=""></div> Hotline:  0888964449
      </a>
    </li>
    <li class="mb-2 border-b-2 border-dashed pb-2 hover:text-scarlet-500">
      <a class="flex items-center"  href="https://www.facebook.com/TourismtoNature" target="_black">
        <div class="h-7 w-7 mr-5"><img class="w-6" src="/images/icon-details-chat.webp" alt=""></div> Inbox Facebook
      </a>
    </li>
    <li class="mb-2 border-b-2 border-dashed pb-2 hover:text-scarlet-500">
      <a class="flex items-center"  href="0888 964 449" target="_black">
        <div class="h-7 w-7 mr-5"><img class="w-6" src="/images/icon-details-zalo.webp" alt=""></div> Inbox Zalo
      </a>
    </li>
  </ul>
</div>    
          </div>
        </div>
        
      </div>
      <div class="mt-10 border-2">
        <div class="flex">
          <div class="p-4 text-lucky-point" >
          <div class=" border-b-2 py-2" style="border-color: #012174;">
            <p class="font-bold text-xl">THÔNG TIN SẢN PHẨM</p>
          </div>
          </div>
          
        </div>
        <div class="p-4">
          <div class="">
          {{$product->content}}
          </div>
        </div>
        
      </div>

      

    </div>
    <div class="w-full md:w-4/12 md:pl-5 hidden md:block">
      <div class="md:sticky md:top-20">
        <style>
  .zoom:hover {
   transform: scale(1.1);
 }
  </style>
<div class="text-lucky-point font-bold text-xl">
  <span class="">{{$product->discount}} VNĐ/1kg</span>
            <span class="line-through ml-2">{{$product->price}} VNĐ/1kg</span>
        
</div>
<div class="mt-5">
  <form id="buy_block" class="product-information" action="/cart_add/{{$product->id}}" method="post">
    @csrf
    <input type="hidden" name="id" id="product-detail-id" value="{{$product->id}}" />

        <!--<div>
                  <p class="mb-2 mt-5 font-bold md:text-sm text-lucky-point" >Chọn Size</p>
          
                </div>-->
        
        <div>
          <p class="mb-2 mt-5 font-bold md:text-sm text-lucky-point" >Số lượng</p>
        </div>
      <div class="flex items-center">
      
      
        <div class="flex flex-col gap-3">
          <div class="w-8 h-9 border-2 border-gray-300 flex justify-center items-center minus"><i class="fas fa-minus text-xl"></i></div>
        </div>
        <div class="">
          <input class="w-14 h-9 border-t-2 border-b-2 border-gray-300  p-4  text-xl qty text-center" type="number" min=1 value="1" name="qty">
        </div>
        <div>
          <div class="w-8 h-9 border-2 border-gray-300 flex justify-center items-center add"><i class="fas fa-plus text-xl"></i></div>
        </div>
        <!-- <div class="ml-2 md:ml-2 add_to_cart zoom" id="add_to_cart" data-id="1197" data-price="450000" data-store-id="" data-qty="1">
          <button type="submit"  class="w-32 text-sm flex items-center  px-2  h-9 text-white uppercase rounded bg-lucky-point  justify-center  " > 
            <p class="" style="font-size: 12px;">Thêm vào giỏ</p>  
          </button>
        </div> -->
        <div class="ml-2 md:ml-5 zoom">
        <button type="submit" class="w-24 text-sm flex items-center  justify-center bg-lucky-point   px-2  h-9 text-white uppercase rounded " > <p class='' style="font-size: 12px;">MUA NGAY</p>  </button>
        </div>
        
    </div>
    
  </form>
</div>

<div class="mt-5 ">
  <p class="mb-2 font-bold text-lucky-point" >Cam Kết</p>
  
  <p><i class="fa fa-check text-lucky-point" ></i> Được kiểm tra sản phẩm trước khi thanh toán.</p>
  <p><i class="fa fa-check text-lucky-point" ></i> Giao hàng tại nhà trong thành phố Cần Thơ.</p>
  <p><i class="fa fa-check text-lucky-point" ></i> Đổi trả hàng lỗi trong ngày hoàn toàn miễn phí.</p>
</div>



<div class="mt-5">
  <ul>
    <li class="mb-2 border-b-2 border-dashed pb-2 hover:text-scarlet-500">
      <a class="flex items-center" href="tel:#0888964449">
        <div class="h-7 w-7 mr-5"><img class="w-7" src="/images/icon-details-phone.webp" alt=""></div> Hotline:  0888964449
      </a>
    </li>
    <li class="mb-2 border-b-2 border-dashed pb-2 hover:text-scarlet-500">
      <a class="flex items-center"  href="https://www.facebook.com/TourismtoNature" target="_black">
        <div class="h-7 w-7 mr-5"><img class="w-6" src="/images/icon-details-chat.webp" alt=""></div> Inbox Facebook
      </a>
    </li>
    <li class="mb-2 border-b-2 border-dashed pb-2 hover:text-scarlet-500">
      <a class="flex items-center"  href="0888 964 449" target="_black">
        <div class="h-7 w-7 mr-5"><img class="w-6" src="/images/icon-details-zalo.webp" alt=""></div> Inbox Zalo
      </a>
    </li>
  </ul>
</div>     
      </div>
      
    </div>
          
</div>
</section>

 @include('footer')
