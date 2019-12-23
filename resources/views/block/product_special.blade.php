  @php
    $productsSpecial = (new \App\Models\ShopProduct)->getProductsSpecial($limit = 1, $random = true)
  @endphp
  @if (!empty($productsSpecial))
<style type="text/css">
  .special .new-price {
    font-size: 12px;
    padding: 4px;
  }
  .special .old-price {
    font-size: 12px;
    padding: 4px;
  }
</style>
<div class="popular-item">
                <h2>Hàng bán chạy</h2>
                  
                    @foreach ($productsSpecial as $key => $productSpecial)
                      <div class="card">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                                   <a href="{!!$productSpecial->getUrl()!!}" "><img src="{{$productSpecial->image}}" width="85" height="59" class="card-img" alt="..."></a>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-6 col-6">
                                    <div class="card-body">
                                        <h5 class="card-title woocommerce-loop-product__title"><a href="{!!$productSpecial->getUrl()!!}" >{!!\Illuminate\Support\Str::limit($productSpecial->name,30,'...')!!}</a></h5>
                                        <p class="card-text price">
                                            <ins>
                          <span class="special woocommerce-Price-amount amount">
                            {!! $productSpecial->showPrice() !!}
                          </span>
                                            </ins>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
  </div>
  @endif