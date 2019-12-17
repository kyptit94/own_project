<!--Product out-->
    <div class="container">
        <div class="product-out">
            <div class="title">
                <h2 class="text-center">Sản phẩm mới</h2>
            </div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    @if(count($products_new_2) > 0)
                    <li data-target="#demo" data-slide-to="1"></li>
                    @endif
                    @if(count($products_new_3) > 0)
                    <li data-target="#demo" data-slide-to="2"></li>
                    @endif
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row product">
                            @foreach ($products_new_1 as  $key => $product_new)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="{{ $product_new->getUrl() }}" tppabs="http://html.physcode.com/uray/{{ $product_new->getUrl() }}" class="wp-post-image">
                                            <img class="image-cover" src="{{ asset($product_new->getThumb()) }}" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="{{ $product_new->name }}">
                                        </a>
                                        
                                         @if ($product_new->price != $product_new->getFinalPrice() && $product_new->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_new->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_new->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="{{ $product_new->getUrl() }}" tppabs="http://html.physcode.com/uray/{{ $product_new->getUrl() }}">
                                            {{ $product_new->name }}</a></p>
                                        <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														{{-- <span class="woocommerce-Price-currencySymbol">$</span>79 --}}
                                                        {!! $product_new->showPrice() !!}
													</span>
												</ins>
                                    </span>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    @if(count($products_new_2) > 0)
                    <div class="carousel-item">
                        <div class="row product">
                            @foreach ($products_new_2 as  $key => $product_new)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="{{ $product_new->getUrl() }}" tppabs="http://html.physcode.com/uray/{{ $product_new->getUrl() }}" class="wp-post-image">
                                            <img class="image-cover" src="{{ asset($product_new->getThumb()) }}" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="{{ $product_new->name }}">
                                        </a>
                                        
                                         @if ($product_new->price != $product_new->getFinalPrice() && $product_new->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_new->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_new->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="{{ $product_new->getUrl() }}" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="{{ $product_new->getUrl() }}" tppabs="http://html.physcode.com/uray/{{ $product_new->getUrl() }}">
                                            {{ $product_new->name }}</a></p>
                                        <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{-- <span class="woocommerce-Price-currencySymbol">$</span>79 --}}
                                                        {!! $product_new->showPrice() !!}
                                                    </span>
                                                </ins>
                                    </span>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @if(count($products_new_3) > 0)
                    <div class="carousel-item">
                        <div class="row product">
                            @foreach ($products_new_3 as  $key => $product_new)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-12">
                                <div class="card">
                                    <div class="card-img-top">
                                        <a href="{{ $product_new->getUrl() }}" tppabs="http://html.physcode.com/uray/{{ $product_new->getUrl() }}" class="wp-post-image">
                                            <img class="image-cover" src="{{ asset($product_new->getThumb()) }}" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="{{ $product_new->name }}">
                                        </a>
                                        
                                         @if ($product_new->price != $product_new->getFinalPrice() && $product_new->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_new->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_new->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        <div class="icon-product">
                                            <button class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button type="button" class="btn click-quick-view" data-toggle="modal"
                                                    data-target="#exampleModalCenter">
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                        <p class="woocommerce-loop-product__title"><a href="{{ $product_new->getUrl() }}" tppabs="http://html.physcode.com/uray/{{ $product_new->getUrl() }}">
                                            {{ $product_new->name }}</a></p>
                                        <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{-- <span class="woocommerce-Price-currencySymbol">$</span>79 --}}
                                                        {!! $product_new->showPrice() !!}
                                                    </span>
                                                </ins>
                                    </span>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content container">
                            <div class="product-single-quick-view">
                                <div class="row product_detail">
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div class="flex-quick-view">
                                            <div id="flex-slider" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img src="product_detail.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="product_detail.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="product_detail.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="product_detail.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail.jpg" alt="">
                                                    </li>
                                                    <!-- items mirrored twice, total of 12 -->
                                                </ul>
                                            </div>
                                            <div id="flex-carousel" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img src="product_detail1.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail1.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="product_detail2.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail2.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="product_detail3.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail3.jpg" alt="">
                                                    </li>
                                                    <li>
                                                        <img src="product_detail4.jpg" tppabs="http://html.physcode.com/uray/imager/product-detail/product_detail4.jpg" alt="">
                                                    </li>
                                                    <!-- items mirrored twice, total of 12 -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12 content-product">
                                        <h2>Whitening cream | $65</h2>
                                        <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp; (2 customer
                                            review)</p>
                                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.
                                            It has survived not only five centuries, but also the leap into electronic </p>
                                        <div class="infor-product">
                                            <p><span>Sku: </span>22</p>
                                            <p><span>Category: </span>Cosmetic</p>
                                            <p><span>Tag: </span>Trendy</p>
                                            <p><span>Share: </span>
                                                <a href=""><i class="fab fa-facebook"></i></a>
                                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                                <a href=""><i class="fab fa-instagram"></i></a></p>
                                        </div>
                                        <div>
                                            <div class="btn-group">
                                                <button type="button" class="prev btn ">-</button>
                                                <button type="button" class="show-number btn ">1</button>
                                                <button type="button" class="next btn ">+</button>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn add-to-cart">ADD TO CART<p><i
                                                        class="fas fa-cart-plus"></i></p> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="lnr lnr-cross close-quick-view" data-dismiss="modal"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end Product out-->