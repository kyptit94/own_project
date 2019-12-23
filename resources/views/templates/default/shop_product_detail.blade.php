@extends('templates.'.sc_store('template').'.shop_layout')

@section('center')
          <div class="product-details"><!--product-details-->
            <div class="col-sm-6">


              <div id="product-detail-image" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="view-product item active"  data-slide-number="0">
                        <img src="{{ asset($product->getImage()) }}" alt="">
                      </div>
                    @if ($product->images->count())
                       @foreach ($product->images as $key=>$image)
                        <div class="view-product item"  data-slide-number="{{ $key + 1 }}">
                          <img src="{{ asset($image->getImage()) }}" alt="">
                        </div>
                        @endforeach
                    @endif
                    </div>
                  {{-- </div> --}}
              </div>
              @if ($product->images->count())
                    <!-- Controls -->
                    <a class="left item-control" style="display: inherit;" href="#product-detail-image" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#product-detail-image" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    </a>
                @endif
            </div>

          <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#details" data-toggle="tab">{{ trans('product.description') }}</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade  active in" id="product-detail-content" >
                {!! sc_html_render($product->content) !!}
              </div>
            </div>
          </div><!--/category-tab-->
@if ($productsToCategory->count())
          <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">{{ trans('front.recommended_items') }}</h2>

            <div id="recommended-item-carousel" class="carousel slide">
              <div class="carousel-inner">
               @foreach ($productsToCategory as  $key => $product_rel)
                @if ($key % 4 == 0)
                  <div class="item {{  ($key ==0)?'active':'' }}">
                @endif
                  <div class="col-sm-3">
                    <div class="product-image-wrapper product-single">
                      <div class="single-products   product-box-{{ $product_rel->id }}">
                          <div class="productinfo text-center">
                            <a href="{{ $product_rel->getUrl() }}"><img src="{{ asset($product_rel->getThumb()) }}" alt="{{ $product_rel->name }}" /></a>
                        {!! $product_rel->showPrice() !!}
                            <a href="{{ $product_rel->getUrl() }}"><p>{{ $product_rel->name }}</p></a>
                          </div>
                          @if ($product_rel->price != $product_rel->getFinalPrice())
                          <img src="{{ asset('templates/'.sc_store('template').'/images/home/sale.png') }}" class="new" alt="" />
                          @elseif($product_rel->type == 1)
                          <img src="{{ asset('templates/'.sc_store('template').'/images/home/new.png') }}" class="new" alt="" />
                          @endif
                      </div>
                    </div>
                  </div>
                @if ($key % 4 == 3)
                  </div>
                @endif
               @endforeach
              </div>
            </div>
          </div><!--/recommended_items-->
@endif


@endsection

@section('breadcrumb')
@endsection

@push('styles')

@endpush

@push('scripts')
<script type="text/javascript">
  $('.product-group').click(function(event) {
    if($(this).hasClass('active')){
      return;
    }
    $('.product-group').removeClass('active');
    $(this).addClass('active');
    var id = $(this).data("id");
      $.ajax({
          url:'{{ route("product.info") }}',
          type:'POST',
          dataType:'json',
          data:{id:id,"_token": "{{ csrf_token() }}"},
          beforeSend: function(){
              $('#loading').show();
          },
          success: function(data){
            console.log(data);
            $('#product-detail-name').html(data.name);
            $('#product-detail-model').html(data.sku);
            $('#product-detail-price').html(data.showPrice);
            $('#product-detail-brand').html(data.brand_name);
            $('#product-detail-image').html(data.showImages);
            $('#product-detail-available').html(data.availability);
            $('#product-detail-id').val(data.id);
            $('#product-detail-image').carousel();
            $('#loading').hide();
            window.history.pushState("", "", data.url);            
          }
      });

  });
</script>
@endpush
