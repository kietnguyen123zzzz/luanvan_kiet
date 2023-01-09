<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700">
    <link rel="canonical" href="https://seafood.mientaynet.info" />
    <meta name="description" content="SEAFOOD">
    <meta name="keyword" content="SEAFOOD">
    <title>SEAFOOD</title>
    <link rel="icon" href="https://seafood.mientaynet.info/data/logo/logoseafood.png" type="image/png" sizes="16x16">
    <meta property="og:image" content="https://seafood.mientaynet.info/data/logo/Screenshot%202021-11-22%20005436.png?v=123" />
    <meta property="og:url" content="https://seafood.mientaynet.info" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="SEAFOOD" />
    <meta property="og:description" content="SEAFOOD" />
    <meta name="csrf-token" content="PVvPechaSUl2DJfgQvtjQCGNT1W2ad2Bi6MFnmoB">
    <meta name="google-site-verification" content="eWhymcO8i5ycpVRh1ftd_43wKKY5ikjVRIIYNs-iAdo" />
    <!--Module header -->
    <!--//Module header -->
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!--Module header -->
    @isset ($sc_blocksContent['header'])
    @foreach ( $sc_blocksContent['header'] as $layout)
    @php
    $arrPage = explode(',', $layout->page)
    @endphp
    @if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
        @if ($layout->type =='html')
            {!! $layout->text !!}
        @elseif($layout->type =='view')
            @includeIf($sc_templatePath.'.block.'.$layout->text)
        @endif
    @endif
    @endforeach
    @endisset
    <!--//Module header -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    <style>
        .text-xsm{
            font-size:10px
         }
     </style>
    
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
    @stack('styles')
    <style>
        .swiper-wrapper{
            height: unset;
        }

        .dropdown-menu{
            z-index: 99999;
        }
        
        .dropdown:hover > .dropdown-menu {
            display: block;
        }

        .swiper-container{
            height: 100%; 
            max-height: 100vw;
            min-height: 0;
            min-width: 0;
            max-width: 100vw; 
            width: 100%;
            overflow: hidden;
        }
        

        .hover\:text-danube-500:hover
        {
            color: #568dc7
        }

        .swiper-slide{
            width: auto;
            flex-shrink: 0;
            display: block;
            height: auto;
            max-height: 100%;
        }

        .swiper-wrapper{
            max-height: 100%;
            height: 100%t;
            display: flex;
        }
        .swiper-button-prev, .swiper-button-next{
            display:  none;
        }
        
    </style>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "102052809401542");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    

</head>
<body>
    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
           
        </a>
    </div>

   
    </div>
    <link rel="stylesheet" href="https://seafood.mientaynet.info/templates/herbstory/css/app.css"  media="all">
    <script src="/templates/herbstory/js/core.min.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js" integrity="sha512-QABeEm/oYtKZVyaO8mQQjePTPplrV8qoT7PrwHDJCBLqZl5UmuPi3APEcWwtTNOiH24psax69XPQtEo5dAkGcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script> -->

    <script src="/templates/herbstory/js/custom.js?v=10"></script>
    <!--//end js defaut -->
    @stack('scripts')
    
</body>
</html>
<style>
.hover\:text-lucky-point:hover{
color:#012174;

}
.bg-lucky-point{
background:#012174;
}
.text-lucky-point{
color:#012174;
}
</style>
<!-- Desktop -->

<section class="hidden md:flex  z-50 w-full opacity-95  fixed top-0 "style="background: #ffffff;" > 
  <div class="w-full ">
  <!--<marquee><span class="text-red-700 text-xl">Website đang bảo trì</span></marquee>-->
    <div class=" mx-auto lg:px-5 lg:px-10 py-2 md:py-0">
      <div class="flex items-center gap-5 justify-between w-full">
        <a href="/"> 
          <img class=" opacity-100 " src="https://seafood.mientaynet.info/data/logo/logoseafood.png" alt="" width="100" height="" />
        </a>
        <p class=" hover:text-red-600 text-lucky-point" > <a href="/"> <i class="lg:text-2xl md:text-xl fas fa-home " ></i> </a></p>
        <ul class="flex items-center justify-center uppercase md:gap-2 xl:gap-5  font-bold">
            <li class="  hover:text-red-600 lg:px-2 text-lucky-point lg:text-base md:text-xs"  >
              <a href="http://localhost:8000/gioithieu">
                <img class="lg:w-14 md:w-10 mx-auto" src="/data/cms-image/ICON/gt.png" alt="">
                Giới thiệu
              </a>
            </li>
            <li class="px-4 py-2  hover:text-red-600   text-lucky-point "  >
                    <a href="/product">
                    <img class="lg:w-14 md:w-10 mx-auto" src="/data/cms-image/ICON/sp.png" alt="">
                      Thế Giới Tôm
                    </a>
              </li>
              <li class="px-4 py-2  hover:text-red-600   text-lucky-point "  >
                    <a href="/product">
                    <img class="lg:w-14 md:w-10 mx-auto" src="/data/cms-image/ICON/sp.png" alt="">
                      Thế Giới Cua
                    </a>
              </li>
              <li class="px-4 py-2  hover:text-red-600   text-lucky-point "  >
                    <a href="/product">
                    <img class="lg:w-14 md:w-10 mx-auto" src="/data/cms-image/ICON/sp.png" alt="">
                      Thế Giới Cá
                    </a>
              </li>
             <li class="  hover:text-red-600 lg:px-2 text-lucky-point lg:text-base md:text-xs"  >
                <a href="http://localhost:8000/lienhe">
                    <img class="lg:w-14 md:w-10 mx-auto" src="/data/cms-image/ICON/lienhe.png" alt="">
                    Liên hệ
                </a>
            </li>
            </ul>
        <div >
         
            <a href="" >
            <i class="fas fa-shopping-cart text-lucky-point  " style="font-size:24px;" ></i>  <span class="text-red-500">(0)</span>
          </a>
        
        </div>
        <div class="relative flex flex-row justify-between" >
              <!--<i class="py-2 flex flex-row"> <img class="w-8 h-8 "  src="/images/vietnam.png " > &ensp; <img class="w-8 h-8" src="/images/united-kingdom.png"> </i>-->
              <form action="/search.html" method="GET">
                <div class="border-2 bg-gray-100 flex items-center">
                  <button type="submit" class="p-2">
                    <i class="fa fa-search"></i>
                  </button>
                  
                  <input class="focus:outline-none w-full border-2 bg-gray-100 p-2 border-gray-100 lg:w-60 md:w-40" name="keyword" placeholder="Tìm sản phẩm" value="">
                </div>
              </form>
              <!--<div class="flex items-center gap-2">
              <div>
                <img src="/images/HotLine.png" alt="">
              </div>
              <div class="">
                <p class="font-bold text-xl text-lucky-point" >0888964449 </p>
                <p class="text-xs text-lucky-point" >Giờ mở cửa 8h00 – 20h00</p>
              </div>
            </div>-->
        </div>
            
      </div>

    </div>
  </div>

</section>

<!-- End Desktop -->


<section class="">
  <div class="bg-lucky-point md:hidden">
    <div class="px-5">
      <div class="flex justify-between items-center">
        <div id="click_menu_mobie">
          <div class="p-2 bg-lucky-point">
            <i class="fas fa-bars text-white text-2xl"></i>
          </div>
          
        </div>
        <div class="text-white">Giỏ hàng <span class="text-white">(0)</span></div>
      </div>
    </div>

  </div>
   <div class="mt-2 md:mt-0 w-full md:hidden flex justify-center ">
    <a href="https://seafood.mientaynet.info">
      <img class="my-1" src="https://seafood.mientaynet.info/data/logo/logoseafood.png" alt="" width="100" />
    </a>
  </div>
  <div class="w-full md:w-1/3 md:hidden md:justify-end text-center">
    <form action="/search.html" method="GET">
      <div class="border-2 bg-gray-100 flex items-center">
        <button type="submit" class="p-2">
          <i class="fa fa-search"></i>
        </button>
        
        <input class="focus:outline-none w-full border-2 bg-gray-100 p-2 border-gray-100 w-60" name="keyword" placeholder="Tìm sản phẩm" value="">
      </div>
    </form>
  </div>
  <div class="bg-white border-2 shadow-md mt-1 w-full md:hidden" id="mobiMenu" style="display:none">
      <ul class="bg-white w-full text-lucky-point">
                              <li class="border-b-2 border-dashed p-1 hover:text-pomegranate-500 w-full" >
              <a class="font-lg font-bold" href="/tin-tuc/gioi-thieu">
                Giới thiệu
              </a>
            </li>
                                  
                <li class="px-4 py-2 border-b-2 border-pomegranate-500">
                    <a href="/category/the-gioi-tom.html">
                      Thế Giới Tôm
                    </a>
                  </li>
                                    <li class="px-4 py-2 border-b-2 border-pomegranate-500">
                    <a href="/category/the-gioi-cua.html">
                      Thế Giới Cua
                    </a>
                  </li>
                                    <li class="px-4 py-2 border-b-2 border-pomegranate-500">
                    <a href="/category/the-gioi-ca.html">
                      Thế Giới Cá
                    </a>
            </li>
             
              <li class="border-b-2 border-dashed p-1 hover:text-pomegranate-500 w-full" >
              <a class="font-lg font-bold" href="/lien-he.html">
                Liên hệ
              </a>
            </li>
          </ul>
  </div>
</section>          