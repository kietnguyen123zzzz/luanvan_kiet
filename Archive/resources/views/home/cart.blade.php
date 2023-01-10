@include('header')
<section class="bg-gray-200 p-2 mb-2 mt-24">
    <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="flex justify-center">
            <li><a href="" class=" text-sm md:text-base"> Trang chủ</a>&nbsp;&nbsp;<i class="fas fa-arrow-right text-sm md:text-base "></i>&nbsp;&nbsp;</li>
                 <li class="font-bold text-sm md:text-base py-1 md:py-0"> Giỏ hàng</li>
                        
          </ul>
        </div>
    </div>
</section>
<section class="container mx-auto px-5 md:px-10">
    <div class="">
        <div class="">
            <div class="flex justify-between items-center">
                <h5 class="text-base md:text-xl my-5">
                    <i class="fa fa-shopping-bag text-base md:text-xl" aria-hidden="true"></i>  SEAFOOD
                </h5>
            </div>
            
    <div class="flex flex-col mb-5">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-3 py-6 md:py-3  text-xs font-medium text-gray-500 uppercase tracking-wider flex justify-end">No.</th>
                            <th scope="col" class="px-10 py-3 md:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tên SẢN PHẨM</th>
                            <th scope="col" class="px-12 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Giá</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Số lượng</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">GIÁ SẢN PHẨM</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($products as $product)
                        <tr class="row_cart form-group ">
                            <td class="px-3 py-3 whitespace-nowrap flex justify-end text-sm md:text-base">1</td>
                            <td class="px-6 py-1 md:py-3 whitespace-nowrap">
                                <a href="/product/tom-hum.html" class="row_cart-name flex items-center">
                                    <img width="50" class="mr-2" src="{{asset($product->model->images)}}"
                                        alt="{{$product->name}}">
                                    <div class="flex flex-col text-sm md:text-base">
                                        <p>{{$product->name}}</p>  
                                       
                                    </div>  
                                </a>  
                                </a>
                            </td> 
                            <td class=" px-10 md:px-6 py-3 whitespace-nowrap"><div class="text-red-500 font-bold text-sm md:text-base">{{$product->price}} VNĐ/1kg</div></td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="flex gap-5" id="test">
                                    
                                    <div id="reduce"><span><i class="fas fa-minus text-sm md:text-base"></i></span></div>
                                   
                                    <div class="cart-qty">
                                        <input style="width: 100px; margin: 0 auto" value="{{$product->qty}}">
                                    </div>
                                   
                                    <div id="plus"><span><i class="fas fa-plus text-sm md:text-base"></i></span></div>
                                
                                </div>
                                
                                    <span class="text-danger item-qty-1186" style="display: none;"></span>
                            </td>

                            <td class="px-6 py-3 whitespace-nowrap text-sm md:text-base">
                            {{$product->price * $product->qty}} VNĐ/1kg
                            </td>

                            <td class="px-6 py-3 whitespace-nowrap text-sm md:text-base">
                                <form method="post" action="/cart_delete">
                                    @csrf
                                    @method("DELETE")
                                    <input type="hidden" name="rowId" value="{{$product->rowId}}" />
                                    <button type="hidden">
                                        <i class="fa fa-times text-sm md:text-base" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                 </tbody>
                  <tfoot class="bg-gray-50">
                        <th colspan="4" class="py-2"><span class="uppercase text-sm md:text-base">Tổng tiền</span></th>
                        <th class="px-6 text-left py-2 text-sm md:text-base">{{ Cart::priceTotal() }}</th>
                        <th></th>
                    </tfoot>
                    </table>
            </div>
        </div>
  </div>
</div>
            <div class="flex justify-end">
                <a  href="/product">
                    <span class="px-4 py-2 text-white rounded text-sm md:text-base"  style="background: #1d2a9d">
                        TIẾP TỤC ĐẶT HÀNG
                </a>
            </div>
            <div class="w-full">
            <form class="sc-shipping-address" id="form-process" role="form" method="POST" action="/checkout">
                @csrf
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="w-full md:w-1/2 md:pl-5">
                        
                        <div class="">
                            <div class="w-full"> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="pb-2 form-group text-sm md:text-base ">
                                          </div>

                                        <div class="form-group text-sm md:text-base">
                                          </div>
                                    </div>
                                </div>                            
                                <div class="row mt-5 hidden">
                                    <div class="col-md-12">
                                        <div
                                            class="pb-2 form-group ">
                                            <h3 class="text-sm md:text-xl font-bold"><i class="fa fa-truck" aria-hidden="true"></i>
                                                Phương thức vận chuyển:<br></h3>
                                        </div>
                                        <div class="form-group">
                                            <div>
                                                <label class="radio-inline">
                                                    <input checked type="radio" name="shippingMethod"
                                                        value="ShippingStandard"
                                                        style="position: relative;">
                                                    Vận chuyển cơ bản
                                                </label>
                                            </div>
                                         </div>
                                    </div>
                                </div>                                      
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div
                                            class="pb-2 form-group ">
                                            <h3 class="text-base md:text-xl font-bold"><i class="fa fa-credit-card text-base md:text-xl"></i>
                                                Phương Thức Thanh Toán:<br></h3>
                                        </div>
                                        <div class="pb-2 form-group cart-payment-method text-sm md:text-base ">
                                             <div class="border-b-2 border-dashed pt-2 pb-2 md:mr-10 text-sm md:text-base">
                                                <label class="radio-inline">
                                                    <input checked type="radio" name="paymentMethod" value="Cash" style="position: relative;" >
                                                            <label class="radio-inline " for="payment-Cash">
                                                                Thanh toán tiền mặt
                                                            </label>    
                                                </label>
                                            </div>
                                            <div class="border-b-2 border-dashed pt-2 pb-2 md:mr-10 text-sm md:text-base">
                                                <label class="radio-inline">
                                                    <input checked type="radio" name="paymentMethod" value="BankTransfer" style="position: relative;">
                                                            <label class="radio-inline " for="payment-BankTransfer">
                                                                Chuyển khoản ngân hàng
                                                            </label>    
                                                </label>
                                            </div>              
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        NGÂN HÀNG VIETINBANK - CẦN THƠ <br>  CHỦ TÀI KHOẢN: NGUYỄN QUỐC KIỆT  <br> SỐ TÀI KHOẢN: 109868835407
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>    
                            </div>  
                        </div>
                    </div>

                <div class="w-full md:w-1/2 md:pr-5">
                        <div class="mt-5 pb-2 form-group ">
                            <h3 class="text-base md:text-xl font-bold"><i class="fa fa-user text-base md:text-xl"></i>
                                Thông Tin Khách Hàng:<br></h3>
                         </div>
                        <table class="table table-borderless table-responsive">
                            <tr class="mb-5 "  width=100%>
                               <td colspan="2"class="form-group ">
                                    <label for="first_name" class="leading-7 text-sm text-gray-600 "><i class="fa fa-user"></i>
                                         Tên <span style="color:#005b3a"> (*) </span>:</label>
                                        <input class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm md:text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200" required maxlength="6" name="name" type="text" placeholder="Tên" value="" required />
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-2 form-group">
                                        <label for="email" class="leading-7 text-sm text-gray-600"><i class="fa fa-envelope"></i> Email :</label>
                                        <input class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm md:text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="email" type="text" placeholder="Email" value="">
                                        
                                </td>
                                <td class="pb-2 form-group ">
                                        <label for="phone" class="leading-7 text-sm text-gray-600 " ><i class="fa fa-phone" aria-hidden="true"></i> Điện thoại <span style="color:#005b3a"> (*) </span>:</label>
                                        <input class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm md:text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"  required name="phone" minlength="10" maxlength="10" type="text" placeholder="Điện thoại" value="" required  pattern="^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$" title="Số điện thoại chưa chính xác" >
                                </td>
                                </tr>                     
                            <tr>
                            
                             <tr>                                    
                                <td colspan="2" class="pb-2 form-group "><label for="address" class="leading-7 text-sm text-gray-600"><i class="fa fa-university"></i> Địa chỉ nhà <span style="color:#005b3a"> (*) </span></label>
                                        <input class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm md:text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out text-gray-700 "  maxlength="10" name="address" type="text" placeholder="Địa chỉ nhà  "  required value="">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><label class="leading-7 text-sm text-gray-600"><i class="fa fa-calendar-o"></i> Ghi chú:</label> <textarea class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-sm md:text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" rows="5" name="comment" placeholder="Ghi chú...."></textarea>
                                </td>
                            </tr>
                            <tr>
                                
                            </tr>
                    </table>
                        <div style="padding-bottom: 20px;">
                            <div class="">
                                <button class="px-4 py-2 text-white rounded text-sm md:text-base" type="submit" style="background: #1d2a9d">Đặt hàng </button>
                            </div>
                        </div> 
                    </div>

                </div>
            </form>
        </div>
     </div>
    </div>
</section>
@include('footer')