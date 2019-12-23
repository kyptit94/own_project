@extends('templates.'.sc_store('template').'.shop_layout')

@section('center')
 <div class="container">
    <div class="prodcut-list">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="row header-show-list">
                    <div class="col-md-6 col-sm-12 col-12">
                    </div>
                    <div class="col-md-6 col-sm-12 col-12">
                        <form action="" method="GET" id="filter_sort">
                        <div class="pull-right">
                          <div>
                            @php
                            $queries = request()->except(['filter_sort','page']);
                            @endphp
                            @foreach ($queries as $key => $query)
                            <input type="hidden" name="{{ $key }}" value="{{ $query }}">
                            @endforeach
                            <select name="filter_sort">
                              <option value="">{{ trans('front.filters.sort') }}</option>
                              <option value="price_asc" {{ ($filter_sort =='price_asc')?'selected':'' }}>{{ trans('front.filters.price_asc') }}</option>
                              <option value="price_desc" {{ ($filter_sort =='price_desc')?'selected':'' }}>{{ trans('front.filters.price_desc') }}</option>
                              <option value="sort_asc" {{ ($filter_sort =='sort_asc')?'selected':'' }}>{{ trans('front.filters.sort_asc') }}</option>
                              <option value="sort_desc" {{ ($filter_sort =='sort_desc')?'selected':'' }}>{{ trans('front.filters.sort_desc') }}</option>
                              <option value="id_asc" {{ ($filter_sort =='id_asc')?'selected':'' }}>{{ trans('front.filters.id_asc') }}</option>
                              <option value="id_desc" {{ ($filter_sort =='id_desc')?'selected':'' }}>{{ trans('front.filters.id_desc') }}</option>
                            </select>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="row product">
                  @foreach ($products as  $key => $product)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-img-top">
                                <a href="product-single.html" tppabs="http://html.physcode.com/uray/product-single.html" class="wp-post-image">
                                    <img class="image-cover" src="{{$product->image}}" tppabs="http://html.physcode.com/uray/imager/product/product.jpg" alt="product">
                                </a>
                                @if ($product->price != $product->getFinalPrice() && $product->kind != SC_PRODUCT_GROUP)
                                <p class="onsale">Sale</p>
                                @elseif($product->type == SC_PRODUCT_NEW)
                                <p class="onnew">Mới</p>
                                @elseif($product->type == SC_PRODUCT_HOT)
                                <p class="onnew">HOT</p>
                                @elseif($product->kind == SC_PRODUCT_BUILD)
                                <p class="onsale">Gói Sản phẩm</p>
                                @elseif($product->kind == SC_PRODUCT_GROUP)
                                <p class="onnew">Bộ sản phẩm</p>
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
                                <p class="card-title">
                                  @foreach($product->categories as $category)
                                      <a href="{!!$category->getUrl()!!}">{{$category->name}}, </a> 
                                  @endforeach
                                </p>
                                <p class="woocommerce-loop-product__title"><a href="{!!$product->getUrl()!!}" tppabs="http://html.physcode.com/uray/product-single.html">
                                    {{$product->name}}</a></p>
                                <span class="price">
                        <ins>
                          <span class="woocommerce-Price-amount amount">
                            {!! $product->showPrice() !!}
                          </span>
                        </ins>
                                    </span>
                            </div>
                        </div>

                    </div>
                  @endforeach
                    <div class="col-md-12">
                        {{ $products->appends(request()->except(['page','_token']))->links() }}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="content-blog-left">
                    @section('left')
                <!--Module left -->
                    @isset ($blocksContent['left'])
                        @foreach ( $blocksContent['left']  as $layout)
                        @php
                          $arrPage = explode(',', $layout->page)
                        @endphp
                          @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
                            @if ($layout->type =='html')
                              {!! $layout->text !!}
                            @elseif($layout->type =='view')
                              @if (view()->exists('block.'.$layout->text))
                               @include('block.'.$layout->text)
                              @endif
                            @elseif($layout->type =='module')
                              {!! sc_block_render($layout->text) !!}
                            @endif
                          @endif
                        @endforeach
                    @endisset
                <!--//Module left -->
                </div>
              @show
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection


@section('breadcrumb')
<div class="title-page"
     style="background-image: url('Shop_3Columns-title.jpg')/*tpa=http://html.physcode.com/uray/imager/shop/Shop_3Columns-title.jpg*/;background-position: center center;background-size: cover;
        margin-bottom: 20px; 
     ">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>{{ $title }}</h1>
                <p><span><a href="{{ route('home') }}">Home</a></span>
                / {{ $title }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('filter')

@endsection

@push('styles')
@endpush
@push('scripts')
<script type="text/javascript">
  $('[name="filter_sort"]').change(function(event) {
    $('#filter_sort').submit();
  });
</script>
@endpush
