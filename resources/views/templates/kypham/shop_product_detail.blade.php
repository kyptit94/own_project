@extends('templates.'.sc_store('template').'.shop_layout')

@section('center')
  <div class="title-page"
     style="background-image: url('Shop_3Columns-title.jpg')/*tpa=http://html.physcode.com/uray/imager/shop/Shop_3Columns-title.jpg*/;background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>Shop</h1>
                <p><span>Home</span> / Shop / Product Single</p>
            </div>
        </div>
    </div>
</div>
<!--end title detail-->
<!--product detail-->
<div class="container">
    <div class="product-single-detail">
        <div class="row product_detail">
            <div class="col-md-6 col-sm-12 col-12">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                      @if ($product->images->count())
                       @foreach ($product->images as $key=>$image)
                        <li>
                            <img src="{{$image->image}}" alt="">
                        </li>
                        <!-- items mirrored twice, total of 12 -->
                      @endforeach
                    @endif
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        @if ($product->images->count())
                       @foreach ($product->images as $key=>$image)
                        <li>
                            <img src="{{$image->image}}" alt="">
                        </li>
                        <!-- items mirrored twice, total of 12 -->
                        @endforeach
                      @endif
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-12 content-product">
                <h2>{{$product->name}} | {!! $product->showPrice() !!}</h2>
                <p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i> &nbsp; (2 customer review)</p>
                <p>{{$product->description}} </p>
                <div class="infor-product">
                    <p><span>Sku: </span>{{$product->sku}}</p>
                    <p><span>{{ trans('product.brand') }}</span> {{ empty($product->brand->name)?'Không xác định':$product->brand->name }}</p>
                    <p><span>Danh mục: </span>@foreach ($product->categories as $key=>$category) <a href="{{$category->getUrl()}}">{{$category->name}}</a> @endforeach</p>
                    <p><span>Tình trạng: </span>@if (sc_config('show_date_available') && $product->date_available >= date('Y-m-d H:i:s'))
                    {{ $product->date_available }}
                    @elseif($product->stock <=0 && sc_config('product_buy_out_of_stock') == 0)
                    {{ trans('product.out_stock') }}
                    @else
                    {{ trans('product.in_stock') }}
                    @endif</p>

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
                <div>
                  <div  id="product-detail-attr">
                  @if ($product->attributes())
                  {!! $product->renderAttributeDetails() !!}
                  @endif
                </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-12 content-product">
                <div class="information">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                               role="tab" aria-controls="pills-home" aria-selected="true">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                               role="tab" aria-controls="pills-contact" aria-selected="false">Đánh giá</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            {!!$product->content!!}
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                             aria-labelledby="pills-contact-tab">
                            <div class="woocommerce-Reviews" id="reviews">
                                <h2>2 review for Reframe Your Viewpoints</h2>
                                <div id="comments">
                                    <div class="comment-list">
                                        <div class="comment-item">
                                            <div class="comment-content">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="item-coment-blog-single1.jpg" tppabs="http://html.physcode.com/uray/imager/blog/item-coment-blog-single1.jpg" alt="customer">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="comment-body">
                                                            <div class="comment-author">
                                                                <span class="author">Emily Valdez</span>
                                                                <div class="star-rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="comment-time">March 28, 2020</span>
                                                            <p>But I must explain to you how all this mistaken idea of
                                                                denouncing pleasure and praising pain was.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-item">
                                            <div class="comment-content">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="item-coment-blog-single2.jpg" tppabs="http://html.physcode.com/uray/imager/blog/item-coment-blog-single2.jpg" alt="customer">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="comment-body">
                                                            <div class="comment-author">
                                                                <span class="author">Emma Hayes</span>
                                                                <div class="star-rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <span class="comment-time">March 28, 2020</span>
                                                            <p>Nor again is there anyone who loves or pursues or desires to
                                                                obtain pain of itself, because it is pain.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <form id="commentform" class="comment-form common-form js-contact-form"
                                                  action="#" method="POST">
                                                <p class="comment-notes">
                                                    <span>Add a review</span>
                                                    <span id="email-notes">
                                    Your email address will not be published. Required fields are marked
                                    <span class="required">*</span>
                                  </span>
                                                </p>
                                                <div class="comment-form-rating">
                                                    <label>Your rating</label>
                                                    <p class="stars">
                                                        <a href="#" class="star-1"><i class="far fa-star"></i></a>
                                                        <a href="#" class="star-2"><i class="far fa-star"></i></a>
                                                        <a href="#" class="star-3"><i class="far fa-star"></i></a>
                                                        <a href="#" class="star-4"><i class="far fa-star"></i></a>
                                                        <a href="#" class="star-5"><i class="far fa-star"></i></a>
                                                    </p>
                                                </div>
                                                <p class="comment-form-author">
                                                    <input id="author" name="author" type="text" required=""
                                                           placeholder="Your Name">
                                                </p>
                                                <p class="comment-form-email">
                                                    <input type="email" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"
                                                           name="email" id="email" placeholder="Your Email">
                                                </p>
                                                <p class="comment-form-comment">
                                                    <textarea id="comment" name="comment" required=""
                                                              placeholder="Write Your Review..."></textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit"
                                                           class="submit au-btn btn-small" value="Submit">
                                                    <span><i class="zmdi zmdi-arrow-right"></i></span>
                                                </p>
                                            </form>
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
</div>
<!--end product detail-->
<!--product related-->
<div class="container">
    <div class="prodcut-related">
        <div class="title">
            <h3 class="text-center">Sản phẩm liên quan</h3>
        </div>
        <div class="row product">
            @foreach ($productsToCategory as  $key => $product_rel)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-img-top">
                        <a href="{{ $product_rel->getUrl() }}" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                            <img class="image-cover" src="{{ asset($product_rel->getThumb()) }}" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="product">
                        </a>
                        @if ($product_rel->price != $product_rel->getFinalPrice())
                          <p class="onsale">Sale</p>
                          @elseif($product_rel->type == 1)
                          <p class="onnew">Mới</p>
                          @endif
                        
                    </div>
                    <div class="card-body">
                        <p class="card-title"><a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">Beauty </a></p>
                        <p class="woocommerce-loop-product__title"><a href="{{ $product_rel->getUrl() }}" tppabs="http://html.physcode.com/uray/product-single.html">
                            {{ $product_rel->name }}</a></p>
                        <span class="price">
                        <ins>
                          <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">{!! $product_rel->showPrice() !!}</span>
                        </ins>
                                    </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
