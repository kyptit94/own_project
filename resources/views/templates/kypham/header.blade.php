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
                        <a href="{{ route('home') }}" tppabs="http://html.physcode.com/uray/index.html"><img src="{{ asset(sc_store('logo')) }}" alt=""></a>
                    </div>
                </div>
                <div>
                    <div class="menu">
                        <ul>
                            <li><a href="{{asset('/')}}" class="menu-active">Trang chủ</a>
                            </li>
                            <li><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Cửa hàng</a>
                                @include('templates.'.sc_store('template').'.home_component.categories')
                            </li>
                            <li><a href="{{ route('news') }}" tppabs="{{ route('news') }}">Blog</a>
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

                                @php
                                $cmsPages = (new \App\Models\ShopPage)->where('status',1)->get();
                                @endphp
                                @foreach ($cmsPages as $page)
                            <li><a href="{{ $page->getUrl() }}">{{ $page->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="header-right">
                        <ul class="list-inline">
                            
                            <li><a href="#" class="cart-index">
                                    <img src="bag-2.png" tppabs="http://html.physcode.com/uray/imager/home/bag-2.png" alt="" style="width: 16px;height: 22px;margin-top: -10px;">
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
                            <li><a href="{{ route('wishlist') }}"><span class="cart-qty sc-wishlist shopping-wishlist" id="shopping-wishlist">{{ Cart::instance('wishlist')->count() }}</span><i class="fa fa-star"></i> Yêu thích</a></li>
                            <li><a href="{{ route('compare') }}"><span class="cart-qty sc-compare shopping-compare" id="shopping-compare">{{ Cart::instance('compare')->count() }}</span><i class="fa fa-crosshairs"></i> So sánh</a></li>


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
                            @guest
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> {{ trans('front.login') }}</a></li>
                            @else
                            <li><a href="{{ route('member.index') }}"><i class="fa fa-user"></i> {{ trans('front.account') }}</a></li>
                            <li><a href="{{ route('logout') }}" rel="nofollow" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ trans('front.logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                            @endguest
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
                    <img src="Logo.png" alt="">
                </div>
                <div>
                    <div class="row header-right">
                        <ul class="list-inline">
                            <li><a href="#" class="cart-index">
                                    <img src="bag-2.png" alt="" style="width: 16px;height: 22px;margin-top: -10px;">
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-mobile">
            <ul>
                <li><a href="{{asset('/')}}" class="menu-active">Trang chủ</a>
                </li>
                <li><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Cửa hàng</a>
                    @include('templates.'.sc_store('template').'.home_component.categories')
                </li>
                <li><a href="{{ route('news') }}" tppabs="{{ route('news') }}">Blog</a>
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
</div>
<!--end header mobile-->
<!--end header-->