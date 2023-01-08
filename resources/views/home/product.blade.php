
@include('header')
<section class="bg-gray-200 p-2 mb-2 mt-24">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="flex justify-center">
            <li><a href="http://localhost:8000/" class=" text-sm md:text-base"> Trang chủ</a>&nbsp;&nbsp;<i class="fas fa-arrow-right text-sm md:text-base "></i>&nbsp;&nbsp;</li>
                 <li class="font-bold text-sm md:text-base py-1 md:py-0"> Tất cả sản phẩm </li>
                        
          </ul>
        </div>
    </div>
</section>
<section class="container mx-auto px-5">
    <div class="text-tundora-500">
         <div class="w-12/12">
             <div class="flex lg:space-x-4">
                <div class="w-0 md:w-3/12 invisible md:visible">
                    <div class="p-4 rounded-md hidden md:block">
                        <div>
                            <h6 class="font-bold mb-2 border-b border-blue-500 pb-2 ">
                            <a href="">
                                DANH MỤC SẢN PHẨM
                            </a>
                            
                            </h6>
                            <ul class="mt-1 capitalize">
                            @foreach($categories as $category)
                                <li class="mb-1">
                                    <div class="flex justify-between items-center border-b border-blue-700 pb-1 ">
                                                <a href=""><p>{{$category->name}}</p></a>
                                            </div>
                                <ul class="category_slide_content ml-3 mt-1"></ul>  
                            </li>
                            @endforeach
                            
                            </ul>
                        </div>
                    
                    </div>
                </div>
                <div class="w-full md:w-9/12">
    <div class="flex justify-between mb-2 items-center">
      
    </div>


    <div class="rounded-md p-0 md:p-4 ">
      <!-- Product list -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-1 md:gap-1">
        @foreach ($products as $product)
        <div class="p-px md:p-2px ">
                            
                <div class="h-full   border hover:shadow-xl shadow-md rounded-md flex flex-col p-px md:p-px">
                    <a href="/product/detail/{{$product->id}}">
                        <img class="w-full mb-2 flex justify-center" loading="lazy" src="{{ $product->images }}" alt=""/>
                    </a>
                        <a href="/product/detail/{{$product->id}}">
                    <p class=" text-sm md:text-sm line-clamp-1 mb-2 font-bold">{{ $product->name }}</p>
                    <div class="mt-2 md:text-sm text-sm">

                                        {{$product->content}}
                                    </div>
                    </a>
                    <div class="mt-auto ">
                        <div class="flex justify-between items-center text-sm md:text-sm ">
                                            <div class="text-red-500 font-bold">{{ $product->discount }} VNĐ/1kg</div>
                                            <div class="text-gray-500 line-through"> {{ $product->price }} VNĐ/1kg</div>
            
                                            <div class="add_to_cart" data-id="{{$product->id}}" data-price="{{$product->price}}" data-store-id="" data-qty="1">
                                               <i class="text-lucky-point fas fa-shopping-cart"> </i>
                                            </div>
                                        </div>      
                        
                    </div>
                </div>
            
            
        </div>
        @endforeach
      </div>
      <!-- //Product list -->
    </div>
    <!-- Render pagination -->
    
    <!--// Render pagination -->
  </div>
</div>
 </section>
       
 @include('footer')  