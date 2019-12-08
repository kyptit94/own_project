@extends('templates.'.sc_store('template').'.shop_layout')

@section('center')
<div class="content-homepage">
    <!-- slide-homepage-1-->
    <div class="slide-index2">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-homepage" style="background-image: url('slide-homepage2.jpg')/*tpa=http://html.physcode.com/uray/imager/home/slide-homepage2.jpg*/">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-10 col-10 content-slide">
                                    <h2>Products
                                        from <br/>natural</h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium,
                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta.</p>
                                    <a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">view now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('slide-homepage3.jpg')/*tpa=http://html.physcode.com/uray/imager/home/slide-homepage3.jpg*/">
                        <div class="container">
                            <div class="row">
                                <div class=" col-lg-6 col-md-8 col-sm-10 col-10 content-slide">
                                    <h2> Nutrition
                                        cup <br/>collagen</h2>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti
                                        atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate.</p>
                                    <a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">view now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-homepage" style="background-image: url('slide-homepage4.jpg')/*tpa=http://html.physcode.com/uray/imager/home/slide-homepage4.jpg*/">
                        <div class="container">
                            <div class="row">
                                <div class=" col-lg-6 col-md-8 col-sm-11 col-11 content-slide">
                                    <h2>
                                        White good<br/>
                                        skin care</h2>
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are
                                        so beguiled and demoralized
                                        by the charms of pleasure of the moment, so blinded by desire, that they cannot
                                        foresee.</p>
                                    <a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-slide-homepage">
                <ul class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><p>1</p></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"><p>2</p></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"><p>3</p></li>
                </ul>
            </div>
        </div>

    </div>
    <!--end slide-homepage-1-->
    <!--item homepage-->
    <div class="container">
        <div class="row item-homepage">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 content-item-homepage">
                <div class="wpb_wrapper">
                    <div class="banner-section">
                        <div class="inner-banner-section">
                            <h2>Beauty</h2>
                            <img src="banner-h2-1.png" tppabs="http://html.physcode.com/uray/imager/home/banner-h2-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 content-item-homepage">
                <div class="wpb_wrapper">
                    <div class="banner-section">
                        <div class="inner-banner-section">
                            <h2>Spa</h2>
                            <img src="banner-h2-2.png" tppabs="http://html.physcode.com/uray/imager/home/banner-h2-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 content-item-homepage">
                <div class="wpb_wrapper">
                    <div class="banner-section">
                        <div class="inner-banner-section">
                            <h2>Make Up</h2>
                            <img src="banner-h2-3.png" tppabs="http://html.physcode.com/uray/imager/home/banner-h2-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end item homepage-->
    <!--Product out-->
    <div class="product-out-homepage2">
        <div class="container">
            <div class="product-out">
                <div class="title">
                    <h2 class="text-center">Product Our</h2>
                </div>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row product">
                                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product.jpg" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Cleanser layde</a></p>
                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product2.jpg" tppabs="http://html.physcode.com/uray/imager/product/product2.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Night cream</a></p>

                                            <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>45

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>38
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <!--sale product-->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 sale-product">
                                    <a href="#"><img src="sale-product.jpg" tppabs="http://html.physcode.com/uray/imager/home/sale-product.jpg" alt="">
                                    </a>
                                </div>
                                <!--end sale product-->
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product5.jpg" tppabs="http://html.physcode.com/uray/imager/product/product5.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Make up </a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Perfect Spice</a></p>

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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product6.jpg" tppabs="http://html.physcode.com/uray/imager/product/product6.jpg"
                                                     alt="product">
                                            </a>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Silky smooth skin</a></p>
                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>93
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product7.jpg" tppabs="http://html.physcode.com/uray/imager/product/product7.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Whitening cream</a></p>

                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>45
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product8.jpg" tppabs="http://html.physcode.com/uray/imager/product/product8.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Water flower</a></p>

                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>62
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row product">
                                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product.jpg" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Cleanser layde</a></p>
                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product2.jpg" tppabs="http://html.physcode.com/uray/imager/product/product2.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Night cream</a></p>

                                            <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>45

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>38
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <!--sale product-->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 sale-product">
                                    <a href="#"><img src="sale-product.jpg" tppabs="http://html.physcode.com/uray/imager/home/sale-product.jpg" alt="">
                                    </a>
                                </div>
                                <!--end sale product-->
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product5.jpg" tppabs="http://html.physcode.com/uray/imager/product/product5.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Make up </a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Perfect Spice</a></p>

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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product6.jpg" tppabs="http://html.physcode.com/uray/imager/product/product6.jpg"
                                                     alt="product">
                                            </a>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Silky smooth skin</a></p>
                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>93
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product7.jpg" tppabs="http://html.physcode.com/uray/imager/product/product7.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Whitening cream</a></p>

                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>45
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product8.jpg" tppabs="http://html.physcode.com/uray/imager/product/product8.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Water flower</a></p>

                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>62
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row product">
                                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product.jpg" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Cleanser layde</a></p>
                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>79
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product2.jpg" tppabs="http://html.physcode.com/uray/imager/product/product2.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Night cream</a></p>

                                            <span class="price">
												<del>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>45

													</span>
												</del>
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>38
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <!--sale product-->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 sale-product">
                                    <a href="#"><img src="sale-product.jpg" tppabs="http://html.physcode.com/uray/imager/home/sale-product.jpg" alt="">
                                    </a>
                                </div>
                                <!--end sale product-->
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product5.jpg" tppabs="http://html.physcode.com/uray/imager/product/product5.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onsale">Sale</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Make up </a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Perfect Spice</a></p>

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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product6.jpg" tppabs="http://html.physcode.com/uray/imager/product/product6.jpg"
                                                     alt="product">
                                            </a>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Silky smooth skin</a></p>
                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>93
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product7.jpg" tppabs="http://html.physcode.com/uray/imager/product/product7.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Spa</a></p>
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Whitening cream</a></p>

                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>45
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-img-top">
                                            <a href="#" class="wp-post-image">
                                                <img class="image-cover" src="product8.jpg" tppabs="http://html.physcode.com/uray/imager/product/product8.jpg"
                                                     alt="product">
                                            </a>
                                            <p class="onnew">New</p>
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
                                            <p class="woocommerce-loop-product__title"><a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html">
                                                Water flower</a></p>

                                            <span class="price">
												<ins>
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">$</span>62
													</span>
												</ins>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </div>
    <!--end Product out-->
    <!--introduce homepage-->
    <div class="container">
        <div class="row introduce-homepage">
            <div class="introduce-left">
                <div class="row introduce-homepage-left">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 img-introduce">
                        <img src="HomePage_v2-introduce1.jpg" tppabs="http://html.physcode.com/uray/imager/home/HomePage_v2-introduce1.jpg" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 introduce-homepage-content">
                        <h2>0.1</h2>
                        <h5>Organic Cream</h5>
                        <p>There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going
                            to use a passage of Lorem Ipsum.
                        </p>
                        <button class="btn">VIEW MORE</button>
                    </div>
                </div>
            </div>

            <div class="introduce-right">
                <div class="row introduce-homepage-right">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-0 col-0 introduce-homepage-content sub-intro1">
                        <h2>0.2</h2>
                        <h5>Natural Extracts</h5>
                        <p>There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going
                            to use a passage of Lorem Ipsum.
                        </p>
                        <button class="btn">VIEW MORE</button>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 img-introduce">
                        <img src="HomePage_v2-introduce2.jpg" tppabs="http://html.physcode.com/uray/imager/home/HomePage_v2-introduce2.jpg" alt="">
                    </div>
                    <div class="col-xl-0 col-lg-0 col-md-0 col-sm-12 col-12 introduce-homepage-content sub-intro2">
                        <h2>0.2</h2>
                        <h5>Natural Extracts</h5>
                        <p>There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going
                            to use a passage of Lorem Ipsum.
                        </p>
                        <button class="btn">VIEW MORE</button>
                    </div>
                </div>
            </div>

            <div class="introduce-left">
                <div class="row introduce-homepage-left">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 img-introduce">
                        <img src="HomePage_v2-introduce3.jpg" tppabs="http://html.physcode.com/uray/imager/home/HomePage_v2-introduce3.jpg" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 introduce-homepage-content">
                        <h2>0.3</h2>
                        <h5>Quality Assurance</h5>
                        <p>There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going
                            to use a passage of Lorem Ipsum.
                        </p>
                        <button class="btn">VIEW MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end introduce homepage-->
    <!--contact from-->
    <div class="container-fluid">
        <div class="row contact-from">
            <div class="container">
                <form>
                    <div class="row content-contact-from">
                        <div class="title-contact">
                            <h2>Contact From</h2>
                        </div>
                        <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 input-left" style="padding-left: 0;">
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 input-right" style="padding-right: 0;">
                            <input type="text" placeholder="Last Name">
                            <input type="text" placeholder="Phone">
                        </div>
                        <textarea placeholder="Type your comment"></textarea>
                        <div class="submit-contact">
                            <button class="btn">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end contact from-->
    <!--Follow Instagram-->
    <div class="container">
        <div class="row content-follow-insta">
            <div class="title-follow-insta">
                <h2>Follow Instagram</h2>
                <p>@Uray.cosmetic_beauty</p>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="follow1.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow1.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow2.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow2.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow3.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow3.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow4.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow4.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow5.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow5.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow1.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow1.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow2.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow2.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow3.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow3.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow4.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow4.jpg" alt=""></a></div>
                <div class="item"><a href="#"><img src="follow5.jpg" tppabs="http://html.physcode.com/uray/imager/home/follow5.jpg" alt=""></a></div>
            </div> 

        </div>
    </div>
    <!--end Follow Instagram-->
</div>
@endsection



@push('styles')
@endpush

@push('scripts')

@endpush