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
                                            <button title="Thêm vào giỏ hàng" onClick="addToCartAjax('{{ $product_new->id }}','default')" class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button title="Thêm vào so sánh" onClick="addToCartAjax('{{ $product_new->id }}','compare')" type="button" class="btn click-quick-view" >
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button title="Thêm vào danh sách yêu thích" onClick="addToCartAjax('{{ $product_new->id }}','wishlist')" class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title">
                                            @foreach($product_new->categories as $category)
                                                <a href="{!!$category->getUrl()!!}">{{$category->name}}, </a> 
                                            @endforeach
                                        </p>
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
                                            <button title="Thêm vào giỏ hàng" onClick="addToCartAjax('{{ $product_new->id }}','default')" class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button title="Thêm vào so sánh" onClick="addToCartAjax('{{ $product_new->id }}','compare')" type="button" class="btn click-quick-view" >
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button title="Thêm vào danh sách yêu thích" onClick="addToCartAjax('{{ $product_new->id }}','wishlist')" class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title">
                                             @foreach($product_new->categories as $category)
                                                <a href="{!!$category->getUrl()!!}">{{$category->name}}, </a> 
                                            @endforeach
                                        </p>
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
                                            <button title="Thêm vào giỏ hàng" onClick="addToCartAjax('{{ $product_new->id }}','default')" class="btn">
                                                <span class="lnr lnr-lock"></span>
                                            </button>
                                            <button title="Thêm vào so sánh" onClick="addToCartAjax('{{ $product_new->id }}','compare')" type="button" class="btn click-quick-view" >
                                                <span class="lnr lnr-magnifier"></span>
                                            </button>
                                            <button title="Thêm vào danh sách yêu thích" onClick="addToCartAjax('{{ $product_new->id }}','wishlist')" class="btn">
                                                <span class="lnr lnr-heart"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title">
                                             @foreach($product_new->categories as $category)
                                                <a href="{!!$category->getUrl()!!}">{{$category->name}}, </a> 
                                            @endforeach
                                        </p>
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
            </div>
        </div>
    </div>
    <!--end Product out-->