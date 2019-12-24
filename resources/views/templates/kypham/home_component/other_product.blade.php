<div class="best-new">
        <div class="container">
            <div class="row product">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title-best-new">
                        <div class="float-left">
                            <h2>HOT</h2>
                        </div>
                        <div class="float-right btn-group">
                            <div class="btn-left">
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                   data-slide="prev">
                                    <span class="lnr lnr-chevron-left"></span>
                                    <span class="sr-only">Trước</span>
                                </a>
                            </div>
                            <div class="btn-right">
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                   data-slide="next">
                                    <span class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Sau</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @if(count($products_hot_1) > 0)
                            <div class="carousel-item active">
                                @foreach ($products_hot_1 as  $key => $product_hot)
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="{{ $product_hot->getUrl() }}"  class="wp-post-image">
                                                <img class="image-cover" src="{{ $product_hot->image }}" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            @if ($product_hot->price != $product_hot->getFinalPrice() && $product_hot->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_hot->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_hot->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="{{ $product_hot->getUrl() }}" >
                                                    {{ $product_hot->name }}</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														{!! $product_hot->showPrice() !!}
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>{{ $product_hot->description }}</p>
                                                </div>
                                                <button  onClick="addToCartAjax('{{ $product_hot->id }}','default')">ADD TO CARD</button>
                                                <button  onClick="addToCartAjax('{{ $product_hot->id }}','wishlist')"><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @if(count($products_hot_2) > 0)
                            <div class="carousel-item">
                                @foreach ($products_hot_2 as  $key => $product_hot)
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="{{ $product_hot->getUrl() }}"  class="wp-post-image">
                                                <img class="image-cover" src="{{ $product_hot->image }}" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            @if ($product_hot->price != $product_hot->getFinalPrice() && $product_hot->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_hot->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_hot->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="{{ $product_hot->getUrl() }}" >
                                                    {{ $product_hot->name }}</a></p>

                                                <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {!! $product_hot->showPrice() !!}
                                                    </span>
                                                </ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>{{ $product_hot->description }}</p>
                                                </div>
                                                <button  onClick="addToCartAjax('{{ $product_hot->id }}','default')">ADD TO CARD</button>
                                                <button  onClick="addToCartAjax('{{ $product_hot->id }}','wishlist')"><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @if(count($products_hot_3) > 0)
                            <div class="carousel-item">
                                @foreach ($products_hot_3 as  $key => $product_hot)
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="{{ $product_hot->getUrl() }}"  class="wp-post-image">
                                                <img class="image-cover" src="{{ $product_hot->image }}" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            @if ($product_hot->price != $product_hot->getFinalPrice() && $product_hot->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_hot->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_hot->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="{{ $product_hot->getUrl() }}" >
                                                    {{ $product_hot->name }}</a></p>

                                                <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {!! $product_hot->showPrice() !!}
                                                    </span>
                                                </ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>{{ $product_hot->description }}</p>
                                                </div>
                                                <button  onClick="addToCartAjax('{{ $product_hot->id }}','default')">ADD TO CARD</button>
                                                <button  onClick="addToCartAjax('{{ $product_hot->id }}','wishlist')"><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title-best-new">
                        <div class="float-left">
                            <h2>Sale</h2>
                        </div>
                        <div class="float-right btn-group">
                            <div class="btn-left">
                                <a class="carousel-control-prev" href="#carouselExampleControls1" role="button"
                                   data-slide="prev">
                                    <span class="lnr lnr-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="btn-right">
                                <a class="carousel-control-next" href="#carouselExampleControls1" role="button"
                                   data-slide="next">
                                    <span class="lnr lnr-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @if(count($products_sale_1) > 0)
                            <div class="carousel-item active">
                                @foreach ($products_sale_1 as  $key => $product_sale)
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="{{ $product_sale->getUrl() }}"  class="wp-post-image">
                                                <img class="image-cover" src="{{ $product_sale->image }}" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            @if ($product_sale->price != $product_sale->getFinalPrice() && $product_sale->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_sale->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_sale->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="{{ $product_sale->getUrl() }}" >
                                                    {{ $product_sale->name }}</a></p>

                                                <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {!! $product_sale->showPrice() !!}
                                                    </span>
                                                </ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>{{ $product_sale->description }}</p>
                                                </div>
                                                <button  onClick="addToCartAjax('{{ $product_sale->id }}','default')">ADD TO CARD</button>
                                                <button  onClick="addToCartAjax('{{ $product_sale->id }}','wishlist')"><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif

                            @if(count($products_sale_2) > 0)
                            <div class="carousel-item active">
                                @foreach ($products_sale_3 as  $key => $product_sale)
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="{{ $product_sale->getUrl() }}"  class="wp-post-image">
                                                <img class="image-cover" src="{{ $product_hot->image }}" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            @if ($product_sale->price != $product_sale->getFinalPrice() && $product_sale->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @endif
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="{{ $product_sale->getUrl() }}" >
                                                    {{ $product_sale->name }}</a></p>

                                                <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {!! $product_sale->showPrice() !!}
                                                    </span>
                                                </ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>{{ $product_sale->description }}</p>
                                                </div>
                                                <button  onClick="addToCartAjax('{{ $product_sale->id }}','default')">ADD TO CARD</button>
                                                <button  onClick="addToCartAjax('{{ $product_sale->id }}','wishlist')"><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif

                            @if(count($products_sale_3) > 0)
                            <div class="carousel-item active">
                                @foreach ($products_sale_3 as  $key => $product_sale)
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="{{ $product_sale->getUrl() }}"  class="wp-post-image">
                                                <img class="image-cover" src="{{ $product_sale->image }}" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            @if ($product_sale->price != $product_sale->getFinalPrice() && $product_sale->kind != SC_PRODUCT_GROUP)
                                          <p class="onsale">Sale</p>
                                          @elseif($product_sale->type == SC_PRODUCT_NEW)
                                          <p class="onnew">New</p>
                                          @elseif($product_sale->type == SC_PRODUCT_HOT)
                                          <p class="onnew">Hot</p>
                                          @endif
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="{{ $product_sale->getUrl() }}" >
                                                    {{ $product_sale->name }}</a></p>

                                                <span class="price">
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {!! $product_sale->showPrice() !!}
                                                    </span>
                                                </ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>{{ $product_sale->description }}</p>
                                                </div>
                                                <button  onClick="addToCartAjax('{{ $product_sale->id }}','default')">ADD TO CARD</button>
                                                <button  onClick="addToCartAjax('{{ $product_sale->id }}','wishlist')"><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end best and new-->
    </div>