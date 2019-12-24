
<!--header-->
<!--header desktop-->

<div class="header">
    <div class="container-fluid search-header">
        <form>
            <input type="text" placeholder="Search">
            <span class="close-search">X</span>
        </form>
    </div>
    <div class="container-fluid">
        <div class="header-desktop ">
            <div class=" header-menu-desktop d-flex justify-content-between">
                <div>
                    <div class="logo">
                        <a href="{{ route('home') }}" tppabs="http://html.physcode.com/uray/index.html"><img src="{{ asset(sc_store('logo')) }}" tppabs="http://html.physcode.com/uray/imager/home/Logo.png" alt=""></a>
                    </div>
                </div>
                <div>
                    <div class="menu">
                        <ul>
                            <li><a href="index.html" tppabs="http://html.physcode.com/uray/index.html" class="menu-active">home</a>
                                <ul>
                                    <li><a href="index.html" tppabs="http://html.physcode.com/uray/index.html">Home Page_v1</a></li>
                                    <li><a href="index2.html" tppabs="http://html.physcode.com/uray/index2.html">Home Page_v2</a></li>
                                    <li><a href="index3.html" tppabs="http://html.physcode.com/uray/index3.html">Home Page_v3</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html" tppabs="http://html.physcode.com/uray/about.html">page</a>
                                <ul>
                                    <li><a href="about.html" tppabs="http://html.physcode.com/uray/about.html">About Us</a></li>
                                    <li><a href="what-we-offer.html" tppabs="http://html.physcode.com/uray/what-we-offer.html">What We Offer</a></li>
                                    <li><a href="our-team.html" tppabs="http://html.physcode.com/uray/our-team.html">Our Team</a></li>
                                    <li><a href="comming-soon.html" tppabs="http://html.physcode.com/uray/comming-soon.html">Comming Soon</a></li>
                                    <li><a href="error-page.html" tppabs="http://html.physcode.com/uray/error-page.html">Error Page</a></li>
                                </ul>
                            </li>
                            <li><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">shop</a>
                                <ul>
                                    <li><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Product List</a></li>
                                    <li><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">Product Single</a></li>
                                    <li><a href="shop-2-colum.html" tppabs="http://html.physcode.com/uray/shop-2-colum.html">Layouts</a><span
                                        class="lnr lnr-chevron-right"></span>
                                        <ul>
                                            <li><a href="shop-2-colum.html" tppabs="http://html.physcode.com/uray/shop-2-colum.html">2 Colums</a></li>
                                            <li><a href="shop-3-colum.html" tppabs="http://html.physcode.com/uray/shop-3-colum.html">3 Colums</a></li>
                                            <li><a href="shop-4-colum.html" tppabs="http://html.physcode.com/uray/shop-4-colum.html">4 Colums</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="cart.html" tppabs="http://html.physcode.com/uray/cart.html">Shop Page</a><span class="lnr lnr-chevron-right"></span>
                                        <ul>
                                            <li><a href="my-account.html" tppabs="http://html.physcode.com/uray/my-account.html">My Account</a></li>
                                            <li><a href="cart.html" tppabs="http://html.physcode.com/uray/cart.html">Cart</a></li>
                                            <li><a href="wishlist.html" tppabs="http://html.physcode.com/uray/wishlist.html">Wish List</a></li>
                                            <li><a href="checkout.html" tppabs="http://html.physcode.com/uray/checkout.html">Check Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('news') }}" tppabs="{{ route('news') }}">blog</a>
                                @if (!empty(sc_config('Content')))
                                <ul>
                                    @php
                                    $cmsCategories = (new \App\Modules\Cms\Models\CmsCategory)->where('status',1)->get();
                                    @endphp
                                    @foreach ($cmsCategories as $cmsCategory)
                                    <li><a href="{{ $cmsCategory->getUrl() }}">{{ sc_language_render($cmsCategory->title) }}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                                
                            </li>
                            <li><a href="contact-us.html" tppabs="http://html.physcode.com/uray/contact-us.html">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="header-right">
                        <ul class="list-inline">
                            <li><a href="#" class="cart-index">
                                <img src="bag-2.png" tppabs="http://html.physcode.com/uray/imager/home/bag-2.png" alt=""
                                style="width: 16px;height: 22px;margin-top: -10px;">
                                <div class="number-cart">
                                    {{ $carts['count'] }}
                                </div>
                            </a>
                            <span>Giỏ hàng</span>
                            <div class="widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        @foreach($carts['items'] as $cart)
                                        <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                            <a class="product-image" href="#">
                                                <img src="{{$cart['image']}}" height="81" width="70" alt="cart-1">
                                            </a>
                                            <a class="product-title" href="#">{!!\Illuminate\Support\Str::limit($cart['name'],15,'...')!!}</a>

                                            <span class="woocommerce-Price-amount amount">
                                              {!!$cart['showPrice']!!}
                                          </span>
                                          <span class="quantity">
                                           Số lượng: {{$cart['qty']}}
                                       </span>
                                   </li>
                                   @endforeach
                               </ul>
                               <p class="woocommerce-mini-cart__total total">
                                <span>Tổng tiền:</span>
                                <span class="woocommerce-Price-amount amount subtotal_cart">
                                    {{$carts['subtotal']}}
                                </span>
                            </p>
                            <p class="woocommerce-mini-cart__buttons buttons">
                                <a href="{{ route('cart') }}" class="button wc-forward au-btn btn-small">XEM GIỎ HÀNG &
                                THANH TOÁN</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('wishlist') }}"><span  class="cart-qty sc-wishlist shopping-wishlist" id="shopping-wishlist">{{ Cart::instance('wishlist')->count() }}</span><i class="fa fa-star"></i> {{ trans('front.wishlist') }}</a></li>
                <li><a href="{{ route('compare') }}"><span  class="cart-qty sc-compare shopping-compare" id="shopping-compare">{{ Cart::instance('compare')->count() }}</span><i class="fa fa-crosshairs"></i> {{ trans('front.compare') }}</a></li>


                <li><a href="javascript:void(0)" class="search-header1"><img src="search-header.png" tppabs="http://html.physcode.com/uray/imager/home/search-header.png" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                </li>
                <li><a href="javascript:void(0)" class="introduce1"><img
                    src="control-introduce.png" tppabs="http://html.physcode.com/uray/imager/home/control-introduce.png" alt=""
                    style="width: 16px;height: 16px;margin-top: -10px;"></a>
                </li>
            </ul>

        </div>
    </div>
    <div class="introduce">
        <div class="content-introduce">
            <h3>follow instagram</h3>
            <p>@Ura.cosmetic_beauty</p>
            <div class="img-controduce">
                <img src="introduce.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce.jpg" alt="">
                <img src="introduce1.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce1.jpg" alt="">
                <img src="introduce2.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce2.jpg" alt="">
                <img src="introduce3.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce3.jpg" alt="">
                <img src="introduce4.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce4.jpg" alt="">
                <img src="introduce5.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce5.jpg" alt="">
            </div>
            <h4>newsletter</h4>
            <p>Subcribe to our newsletter</p>
            <input type="text" placeholder="Email">
            <button class="bt"><i class="fas fa-angle-right"></i></button>
            <div class="icon-introduce">
                <a href="" style="margin-left: 95px;"><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
            <span class="lnr lnr-cross close-introduce"></span>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--end header desktop-->
<!--header mobile-->
<div class="header">
    <div class="container-fluid search-header">
        <form method="get" action="{{ route('search') }}">
            <input type="text" name="keyword" placeholder="Tìm kiếm">
            <span class="close-search">X</span>
        </form>
    </div>
    <div class="container-fluid">
        <div class="header-mobile">
            <div class="header-menu-mobile d-flex justify-content-between">
                <div>
                    <button><span class="lnr lnr-menu click-mobile"></span></button>
                </div>
                <div class="logo">
                    <img src="Logo.png" tppabs="http://html.physcode.com/uray/imager/home/Logo.png" alt="">
                </div>
                <div>
                    <div class="row header-right">
                        <ul class="list-inline">
                            <li><a href="#" class="cart-index">
                                <img src="bag-2.png" tppabs="http://html.physcode.com/uray/imager/home/bag-2.png" alt=""
                                style="width: 16px;height: 22px;margin-top: -10px;">
                                <div class="number-cart">
                                    {{ $carts['count'] }}
                                </div>
                            </a>
                            <div class="widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        @foreach($carts['items'] as $cart)
                                        <li class="woocommerce-mini-cart-item mini_cart_item clearfix">
                                            <a class="product-image" href="#">
                                                <img src="{{$cart['image']}}" height="81" width="70" alt="cart-1">
                                            </a>
                                            <a class="product-title" href="#">{!!\Illuminate\Support\Str::limit($cart['name'],15,'...')!!}</a>

                                            <span class="woocommerce-Price-amount amount">
                                              {!!$cart['showPrice']!!}
                                          </span>
                                          <span class="quantity">
                                           Số lượng: {{$cart['qty']}}
                                       </span>
                                   </li>
                                   @endforeach
                               </ul>
                               <p class="woocommerce-mini-cart__total total">
                                <span>Tổng tiền:</span>
                                <span class="woocommerce-Price-amount amount">
                                    {{$carts['subtotal']}}
                                </span>
                            </p>
                            <p class="woocommerce-mini-cart__buttons buttons">
                                <a href="#" class="button wc-forward au-btn btn-small">XEM GIỎ HÀNG & THANH TOÁN</a>
                            </p>
                        </div>
                    </div>
                </li>
                <li><a href="javascript:void(0)" class="search-header1"><img src="search-header.png" tppabs="http://html.physcode.com/uray/imager/home/search-header.png" alt="" style="width: 20px;height: 20px;margin-top: -10px;"></a>
                </li>
                <li><a href="javascript:void(0)" class="introduce1"><img
                    src="control-introduce.png" tppabs="http://html.physcode.com/uray/imager/home/control-introduce.png" alt=""
                    style="width: 16px;height: 16px;margin-top: -10px;"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="introduce">
    <div class="content-introduce">
        <h3>follow instagram</h3>
        <p>@Ura.cosmetic_beauty</p>
        <div class="img-controduce">
            <img src="introduce.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce.jpg" alt="">
            <img src="introduce1.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce1.jpg" alt="">
            <img src="introduce2.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce2.jpg" alt="">
            <img src="introduce3.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce3.jpg" alt="">
            <img src="introduce4.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce4.jpg" alt="">
            <img src="introduce5.jpg" tppabs="http://html.physcode.com/uray/imager/home/introduce5.jpg" alt="">
        </div>
        <h4>newsletter</h4>
        <p>Subcribe to our newsletter</p>
        <input type="text" placeholder="Email">
        <button class="bt"><i class="fas fa-angle-right"></i></button>
        <div class="icon-introduce">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <span class="lnr lnr-cross close-introduce"></span>
    </div>
</div>
<div class="menu-mobile">
    <ul>
        <li><a href="index.html" tppabs="http://html.physcode.com/uray/index.html" class="menu-active">home</a><span
            class="lnr lnr-chevron-down drop-link"></span>
            <ul class="drop-menu">
                <li><a href="index.html" tppabs="http://html.physcode.com/uray/index.html">Home Page_v1</a></li>
                <li><a href="index2.html" tppabs="http://html.physcode.com/uray/index2.html">Home Page_v2</a></li>
                <li><a href="index3.html" tppabs="http://html.physcode.com/uray/index3.html">Home Page_v3</a></li>
            </ul>
        </li>
        <li><a href="about.html" tppabs="http://html.physcode.com/uray/about.html">page</a><span class="lnr lnr-chevron-down drop-link"></span>
            <ul class="drop-menu">
                <li><a href="about.html" tppabs="http://html.physcode.com/uray/about.html">About Us</a></li>
                <li><a href="what-we-offer.html" tppabs="http://html.physcode.com/uray/what-we-offer.html">What We Offer</a></li>
                <li><a href="our-team.html" tppabs="http://html.physcode.com/uray/our-team.html">Our Team</a></li>
                <li><a href="comming-soon.html" tppabs="http://html.physcode.com/uray/comming-soon.html">Comming Soon</a></li>
                <li><a href="error-page.html" tppabs="http://html.physcode.com/uray/error-page.html">Error Page</a></li>
            </ul>
        </li>
        <li><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">shop</a><span class="lnr lnr-chevron-down drop-link"></span>
            <ul class="drop-menu">
                <li><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Product List</a></li>
                <li><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">Product Single</a></li>
                <li><a href="shop-2-colum.html" tppabs="http://html.physcode.com/uray/shop-2-colum.html">Layouts</a><span class="lnr lnr-chevron-down drop-link"></span>
                    <ul class="drop-menu">
                        <li><a href="shop-2-colum.html" tppabs="http://html.physcode.com/uray/shop-2-colum.html">2 Colums</a></li>
                        <li><a href="shop-3-colum.html" tppabs="http://html.physcode.com/uray/shop-3-colum.html">3 Colums</a></li>
                        <li><a href="shop-4-colum.html" tppabs="http://html.physcode.com/uray/shop-4-colum.html">4 Colums</a></li>

                    </ul>
                </li>
                <li><a href="cart.html" tppabs="http://html.physcode.com/uray/cart.html">Shop Page</a><span class="lnr lnr-chevron-down drop-link"></span>
                    <ul class="drop-menu">
                        <li><a href="my-account.html" tppabs="http://html.physcode.com/uray/my-account.html">My Account</a></li>
                        <li><a href="cart.html" tppabs="http://html.physcode.com/uray/cart.html">Cart</a></li>
                        <li><a href="wishlist.html" tppabs="http://html.physcode.com/uray/wishlist.html">Wish List</a></li>
                        <li><a href="checkout.html" tppabs="http://html.physcode.com/uray/checkout.html">Check Out</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="blog-single.html" tppabs="http://html.physcode.com/uray/blog-single.html">blog</a><span class="lnr lnr-chevron-down drop-link"></span>
            <ul class="drop-menu">
                <li><a href="blog-masonry.html" tppabs="http://html.physcode.com/uray/blog-masonry.html">Masonry</a></li>
                <li><a href="blog-standard-right-siderbar.html" tppabs="http://html.physcode.com/uray/blog-standard-right-siderbar.html">Standard</a><span
                    class="lnr lnr-chevron-down drop-link"></span>
                    <ul class="drop-menu">
                        <li><a href="blog-standard-right-siderbar.html" tppabs="http://html.physcode.com/uray/blog-standard-right-siderbar.html">Right Sidebar</a></li>
                        <li><a href="blog-standard-left-siderbar.html" tppabs="http://html.physcode.com/uray/blog-standard-left-siderbar.html">Left Sidebar</a></li>
                        <li><a href="blog-standard-no-sliderbar.html" tppabs="http://html.physcode.com/uray/blog-standard-no-sliderbar.html">No Sidebar</a></li>
                    </ul>
                </li>
                <li><a href="blog-single.html" tppabs="http://html.physcode.com/uray/blog-single.html">Single</a></li>
            </ul>
        </li>
        <li><a href="contact-us.html" tppabs="http://html.physcode.com/uray/contact-us.html">contact</a></li>
    </ul>
</div>
</div>
</div>
<!--end header mobile-->
<!--end header-->