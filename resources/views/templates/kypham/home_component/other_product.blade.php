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
                            <div class="carousel-item active">
                                @foreach ($products_hot_1 as  $key => $product_hot)
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="best1.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
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
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
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
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="best1.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Nutritional herbs</a></p>

                                                <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>51

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>41
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="best2.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/best2.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Against aging</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="best1.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/best1.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Nutritional herbs</a></p>

                                                <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>51

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>41
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="best2.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/best2.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Makeup </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Against aging</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>On the other hand, we denounce with righteous indignation and
                                                        dislike
                                                        men.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="title-best-new">
                        <div class="float-left">
                            <h2>New Arrivals</h2>
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
                            <div class="carousel-item active">
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="new1.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/new1.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Baebody eye cream</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="new2.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/new2.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Eye gel for dark </a></p>
                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="new1.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/new1.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Baebody eye cream</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class=" col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="new2.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/new2.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Eye gel for dark </a></p>
                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">

                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="new1.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/new1.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class=" col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Baebody eye cream</a></p>

                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Nor again is there anyone who loves or pursues or desires to
                                                        obtain pain.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card col-md-12 col-sm-12 col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-6 col-sm-6 col-12">
                                            <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                                <img class="image-cover" src="new2.jpg" tppabs="http://html.physcode.com/uray/imager/product-popular/new2.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                            <div class="card-body">
                                                <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                                                <p class="woocommerce-loop-product__title"><a
                                                        href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                    Eye gel for dark </a></p>
                                                <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                                <div class="content-best-new">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium.</p>
                                                </div>
                                                <button>ADD TO CARD</button>
                                                <button><span class="lnr lnr-heart"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end best and new-->
    </div>