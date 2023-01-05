@include('header')
<style>
    .hotline-phone-ring-wrap {
		position: fixed;
		bottom: -10px;
		left: 0;
		z-index: 999999;
	}

	.hotline-phone-ring {
		position: relative;
		visibility: visible;
		background-color: transparent;
		width: 110px;
		height: 110px;
		cursor: pointer;
		z-index: 11;
		-webkit-backface-visibility: hidden;
		-webkit-transform: translateZ(0);
		transition: visibility .5s;
		left: 0;
		bottom: 0;
		display: block;
	}

	.hotline-phone-ring-circle {
		width: 87px;
		height: 87px;
		top: 10px;
		left: 10px;
		position: absolute;
		background-color: transparent;
		border-radius: 100%;
		border: 2px solid #1d2a9d;
		-webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
		animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
		transition: all .5s;
		-webkit-transform-origin: 50% 50%;
		-ms-transform-origin: 50% 50%;
		transform-origin: 50% 50%;
		opacity: 0.5;
	}

	.hotline-phone-ring-circle-fill {
		width: 57px;
		height: 57px;
		top: 25px;
		left: 25px;
		position: absolute;
		background-color: #1d2a9d;
		border-radius: 100%;
		border: 2px solid transparent;
		-webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
		animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
		transition: all .5s;
		-webkit-transform-origin: 50% 50%;
		-ms-transform-origin: 50% 50%;
		transform-origin: 50% 50%;
	}

	.hotline-phone-ring-img-circle {
		background-color: #1d2a9d;
		width: 33px;
		height: 33px;
		top: 37px;
		left: 37px;
		position: absolute;
		background-size: 20px;
		border-radius: 100%;
		border: 2px solid transparent;
		-webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
		animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
		-webkit-transform-origin: 50% 50%;
		-ms-transform-origin: 50% 50%;
		transform-origin: 50% 50%;
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.hotline-phone-ring-img-circle .pps-btn-img {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
	}

	.hotline-phone-ring-img-circle .pps-btn-img img {
		width: 30px;
		height: 30px;
	}

	.hotline-bar {
		position: absolute;
		background: #1d2a9d;
		height: 40px;
		width: 250px;
		line-height: 40px;
		border-radius: 3px;
		padding: 0 10px;
		background-size: 100%;
		cursor: pointer;
		transition: all 0.8s;
		-webkit-transition: all 0.8s;
		z-index: 9;
		box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
		border-radius: 50px !important;
		left: 30px;
		bottom: 37px;
	}

	.hotline-bar>a {
		color: #fff;
		text-decoration: none;
		font-size: 15px;
		font-weight: bold;
		text-indent: 50px;
		display: block;
		letter-spacing: 1px;
		line-height: 40px;
	}

	.hotline-bar>a:hover,
	.hotline-bar>a:active {
		color: #fff;
	}

	@-webkit-keyframes phonering-alo-circle-anim {
		0% {
			-webkit-transform: rotate(0) scale(0.5) skew(1deg);
			-webkit-opacity: 0.1;
		}

		30% {
			-webkit-transform: rotate(0) scale(0.7) skew(1deg);
			-webkit-opacity: 0.5;
		}

		100% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
			-webkit-opacity: 0.1;
		}
	}

	@-webkit-keyframes phonering-alo-circle-fill-anim {
		0% {
			-webkit-transform: rotate(0) scale(0.7) skew(1deg);
			opacity: 0.6;
		}

		50% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
			opacity: 0.6;
		}

		100% {
			-webkit-transform: rotate(0) scale(0.7) skew(1deg);
			opacity: 0.6;
		}
	}

	@-webkit-keyframes phonering-alo-circle-img-anim {
		0% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
		}

		10% {
			-webkit-transform: rotate(-25deg) scale(1) skew(1deg);
		}

		20% {
			-webkit-transform: rotate(25deg) scale(1) skew(1deg);
		}

		30% {
			-webkit-transform: rotate(-25deg) scale(1) skew(1deg);
		}

		40% {
			-webkit-transform: rotate(25deg) scale(1) skew(1deg);
		}

		50% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
		}

		100% {
			-webkit-transform: rotate(0) scale(1) skew(1deg);
		}
	}
	.text-hotline{
		position: absolute;
		left: 15px;
	}
	@media (max-width: 768px) {
		.hotline-bar {
			display: none;
		}
	}
	.zalo {
		position: fixed;
		bottom: 90px;
		left: 24px;
		z-index: 999999;
	}	
	.facebook {
		position: fixed;
		bottom: 165px;
		left: 24px;
		z-index: 999999;
	}	
	.messenger {
		position: fixed;
		bottom: 80px;
		left: 30px;
		z-index: 999999;
		width: 56px;
		 height:56px;
	}	
	.zalo img{
		 width: 60px;
		 height:60px;
		}
	.facebook img{
	 width: 60px;
	 height:60px;
	}

</style>
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="tel:0888964449 " class="pps-btn-img">
                <img src="/image/Hotline-xanhduong.png" alt="Số điện thoại" >
            </a>
        </div>
    </div>
    <div class="hotline-bar">
        <a href="tel:0888964449 ">
            <span class="text-hotline">Hotline: 0888964449 </span>
        </a>
    </div>
    
</div>

<div class="zalo">
	<a href="https://zalo.me/0888964449 " target="_blank">
		<img class="" src="/image/widget_icon_zalo.svg" alt="">
	</a>
</div>
<div class="facebook">
	<a href="https://www.facebook.com/profile.php?id=100087485005845 " target="_blank">
		<img class="" src="/image/FB.png" alt="">
	</a>
</div>



<section class="md:mt-24">
  <div class="swiper swiper-slider-banner ">
    <div class="swiper-wrapper">
            <div class="swiper-slide">
        <a href="https://seafood.mientaynet.info/banner/26" target="">
          <img src="https://seafood.mientaynet.info/data/banner/slideshow_1.png" alt="banner1" class="w-full">
        </a>
      </div>
            <div class="swiper-slide">
        <a href="https://seafood.mientaynet.info/banner/0" target="">
          <img src="https://seafood.mientaynet.info/data/banner/1.png" alt="" class="w-full">
        </a>
      </div>
          </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  
</section>
<!--slider-->
                        
<style>
.hover\:text-lucky-point:hover{
color:#1d2a9d;

}
.text-lucky-point{
    color:#1d2a9d;
}
.border-lucky-point{
    color:#1d2a9d;
}
.bg-lucky-point{
    color:#1d2a9d;
}
.zoom:hover {
   transform: scale(1.1);
 }

</style>
    <div class="lg:container lg:mx-auto px-5 lg:px-10 py-2" >
        <div class="border-b-2 border-lucky-point flex justify-center"  >
            <div class="text-xl text-lucky-point font-bold"   >
            CÁC LOẠI HẢI SẢN
            </div>
            <div>
                <a class="hover:text-red-500 " href="/tin-tuc/linh-vuc-san-xuat"></a>  
            </div>
        </div>
        <div class="flex flex-wrap mt-5  ">
        <div class="w-full md:w-1/3  py-5 md:p-5 relative zoom">
                        <a class="block" href="/category/the-gioi-tom.html">
                            <img class="w-full" src="/data/cms-image/TOP/IconTour/hinh-anh-tom-hum-dep.jpg" alt="">
                            <div class="absolute w-full px-0 md:p-5 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="w-full py-4 text-center uppercase hover:shadow-2xl" style="background: #1d2a9d;opacity: 80%;">
                                    <p class="font-bold" style="color: #fff;opacity: 100%;">TÔM</p>
                                    <p class="text-xs normal-case hover:text-red-500  text-white" >(Xem thêm)</p>
                                </div>
                            </div>
                        </a>
                    </div>
              
                    <div class="w-full md:w-1/3  py-5 md:p-5 relative zoom">
                        <a class="block" href="/category/the-gioi-cua.html">
                            <img class="w-full" src="/data/cms-image/TOP/IconTour/anh-con-cua.jpg" alt="">
                            <div class="absolute w-full px-0 md:p-5 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="w-full py-4 text-center uppercase hover:shadow-2xl" style="background: #1d2a9d;opacity: 80%;">
                                    <p class="font-bold" style="color: #fff;opacity: 100%;">CUA</p>
                                    <p class="text-xs normal-case hover:text-red-500  text-white" >(Xem thêm)</p>
                                </div>
                            </div>
                        </a>
                    </div>
              
                    <div class="w-full md:w-1/3  py-5 md:p-5 relative zoom">
                        <a class="block" href="/category/the-gioi-ca.html">
                            <img class="w-full" src="/data/cms-image/TOP/IconTour/ca-thu-1.jpg" alt="">
                            <div class="absolute w-full px-0 md:p-5 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <div class="w-full py-4 text-center uppercase hover:shadow-2xl" style="background: #1d2a9d;opacity: 80%;">
                                    <p class="font-bold" style="color: #fff;opacity: 100%;">CÁ</p>
                                    <p class="text-xs normal-case hover:text-red-500  text-white" >(Xem thêm)</p>
                                </div>
                            </div>
                        </a>
                    </div>
            
        </div>
    </div>

@foreach($categories as $category)
    <section class="lg:container lg:mx-auto px-5 md:px-10 my-5">
        <div class="mb-5">
            <div class="flex flex-row justify-between items-center mb-5 border-t border-gray-300 pt-5">
                <div class="w-11/12">
                    <p class="px-2 text-xl text-center uppercase text-lucky-point font-bold">{{$category->name}}</p>
                </div>
                <div class="hidden md:block justify-end w-1/12" >
                    <a href=""> 
                        <p class=" text-xs hover:text-red-500 text-lucky-point">Xem thêm </p>
                    </a>
                </div>
            </div>
            
           
            <div class="grid md:grid-cols-4 grid-cols-2  md:gap-0 gap-2">
            @php
dd($category->product)
@endphp
            @foreach($category->products as $product)
                 <div class=" h-full w-full p-0 md:p-1 ">
                                <div class="h-full w-auto  border  hover:shadow-2xl shadow-md rounded-md flex flex-col md:p-1 p-2" style="">
                                    <a href="/product/detail/{{$product->product_id}}">
                                        <img class="w-full mb-2 flex justify-center" loading="lazy" src="{{ $product->images }}" alt=""/>
                                    </a>
                                        <a href="/product/detail/{{$product->product_id}}">
                                    <p class=" text-sm md:text-sm line-clamp-2 mb-2  font-bold  ">
                                        {{ $product->name }}
                                    </p>                               
                                    <div class="mt-2 md:text-sm text-sm">
                                        {{ $product->content }}
                                    </div>
                                    </a>
                                    <div class="mt-auto ">
                                        <div class="flex justify-between items-center text-sm md:text-sm ">
                                            <div class="text-red-500 font-bold">{{ $product->discount }} VNĐ/1kg</div>
                                            <div class="text-gray-500 line-through"> {{ $product->price }} VNĐ/1kg</div>
            
                                            <div class="add_to_cart" data-id="{{$product->product_id}}" data-price="{{$product->price}}" data-store-id="" data-qty="1">
                                               <i class="text-lucky-point fas fa-shopping-cart"> </i>
                                            </div>
                                        </div>                                     
                                    </div>
                                </div>                                            
                     </div>
                     @endforeach
             </div>
            
        </div>
    </section>
 @endforeach


  <section class="lg:container mx-auto px-5 md:px-10 my-5">
      <div class="flex justify-center items-center mb-5 border-t border-gray-300 pt-5">
          <div>
              <p class="px-2 text-xl uppercase text-lucky-point font-bold" >ĐỐI TÁC CỦA CHÚNG TÔI</p>
          </div>        
      </div>
      <div class="mt-10">
        <div class="swiper swiper-partner">
          <div class="swiper-wrapper">
                        
              <div class="swiper-slide">
                  <div>
                    <img class="mb-2 w-full" src="https://seafood.mientaynet.info/data/supplier/logo-sacombank.jpg" alt="Ngân hàng Sacombank" >

                    <p class="text-center font-bold"></p>
                    <p class="text-center"></p>
                  </div>
              </div>
              
                        
              <div class="swiper-slide">
                  <div>
                    <img class="mb-2 w-full" src="https://seafood.mientaynet.info/data/supplier/logo-vietcombank.jpg" alt="Ngân hàng Vietcombank" >

                    <p class="text-center font-bold"></p>
                    <p class="text-center"></p>
                  </div>
              </div>
              
                        
              <div class="swiper-slide">
                  <div>
                    <img class="mb-2 w-full" src="https://seafood.mientaynet.info/data/supplier/logo-viettinbank.jpg" alt="Ngân hàng Viettinbank" >

                    <p class="text-center font-bold"></p>
                    <p class="text-center"></p>
                  </div>
              </div>
              
                      </div>
          <!-- Swiper Pagination-->
          <div class="swiper-pagination"></div>
          <!-- Swiper Navigation-->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
</section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8295453778433!2d105.77612011464889!3d10.030920875253726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08821b7117d55%3A0xdda0c293f5c6aaa3!2zTmd1eeG7hW4gVmnhu4d0IEjhu5NuZywgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1663324371697!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<section class="container mx-auto px-5 md:px-10 ">
    <div class="">
        <div class="sc-notice">
 
        </div>
    </div>
</section>

@include('footer')              
    </div>
    <script src="/templates/herbstory/js/core.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <script src="/templates/herbstory/js/custom.js?v=10"></script>
       
<script type="text/javascript">
    
            new Swiper(".swiper-product-44", {
              slidesPerView: 2,
              spaceBetween: 1,
              autoplay: {
               delay: 3000,
             },
              breakpoints: {
                1024: {
                  slidesPerView: 5,
                  spaceBetween: 10,
                },
              },
        
            });

        $(function () {
    $('.content').find('img').css('height','inherit').css('width','inherit');

    $('.add').on('click',function(){
        var $qty=$('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    $('.minus').on('click',function(){
        var $qty=$('.qty');
        var currentVal = parseInt($qty.val());
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
        }
    });
});
$("#attr_desktop").change(function() {
    let arr = $(this).find("option:selected").text().split(" (")
    let price = arr[arr.length - 1].replace("(", "").replace(")", "");
    $(".price").html(price);
    $(".add_to_cart").attr('data-attr', $(this).find(":selected").val())
});

$("#attr_mobile").change(function() {
    let arr = $(this).find("option:selected").text().split(" (")
    let price = arr[arr.length - 1].replace("(", "").replace(")", "");
    $(".price").html(price);
    $(".add_to_cart").attr('data-attr', $(this).find(":selected").val())

});
$("#zoom_01").ezPlus();
// $("#zoom_02").ezPlus();
// $("#zoom_03").ezPlus();
// $("#zoom_04").ezPlus();
// $("#zoom_05").ezPlus();
</script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".add_to_cart").on('click', function (e) {
            e.preventDefault();   
            let productid = $(this).attr('data-id');
            let price = $(this).attr('data-price');
            let qty = 1;
            let shop_id = $(this).attr('data-store-id');
            let form_attr = $(this).attr('data-attr');
            $.post("https://seafood.mientaynet.info/cart_add", {product_id: productid, storeId: shop_id, qty: 1, ajax: '1', "form_attr[2]": form_attr}, 
            function (data) {
                alert('Sản phẩm đã thêm vào giỏ');

            });
        })
        new Swiper(".swiper-slider-banner", {
  navigation: {
    // // nextEl: ".swiper-button-next",
    // // prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
    
  },
});

$(".swiper-slider-banner").hover(function() {
    (this).swiper.autoplay.stop();
}, function() {
    (this).swiper.autoplay.start();
});

new Swiper(".swiper-news", {
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  navigation: {
    // nextEl: ".swiper-button-next",
    // prevEl: ".swiper-button-prev",
  },
});
new Swiper(".swiper-feedback", {
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  navigation: {
    // nextEl: ".swiper-button-next",
    // prevEl: ".swiper-button-prev",
  },
});

new Swiper(".swiper-agency", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  navigation: {
    // nextEl: ".swiper-button-next",
    // prevEl: ".swiper-button-prev",
  },
});

new Swiper(".swiper-partner", {
  slidesPerView: 3,
  spaceBetween: 30,
  breakpoints: {
    768: {
      slidesPerView: 6,
      spaceBetween: 30,
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  navigation: {
    // nextEl: ".swiper-button-next",
    // prevEl: ".swiper-button-prev",
  },
});

new Swiper(".swiper-sale", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  navigation: {
    // nextEl: ".swiper-button-next",
    // prevEl: ".swiper-button-prev",
  },
});
    </script>