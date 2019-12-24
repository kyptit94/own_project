@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')
<section >
<div class="container">
    <div class="row">
        @if (count($compare) ==0)
            <div class="col-md-12 text-danger">
               Not found!
            </div>
        @else
<div class="table-responsive">
<table class="table box table-bordered">
    <tbody>
   <tr>
    @php
        $n = 0;
    @endphp
    @foreach($compare as $key => $item)
        @php
            $n++;
            $product = App\Models\ShopProduct::find($item->id);
        @endphp
       <td align="center">
           {{ $product->name }}({{ $product->sku }})
           <hr>
            <a href="{{ $product->getUrl() }}"><img width="100" src="{{asset($product->getImage())}}" alt=""></a>
            <hr>
            {!! $product->showPrice() !!}
            <hr>
            {!! $product->description !!}
            <hr>
            <a onClick="return confirm('Confirm')" title="Remove Item" alt="Remove Item" class="cart_quantity_delete" href="{{route("compare.remove",['id'=>$item->rowId])}}"><i class="fa fa-times"></i></a>
       </td>
       @if ($n % 4 == 0)
      </tr>
       @endif
    @endforeach
</tr>
    </tbody>
  </table>
  </div>
        @endif
        </div>
    </div>
</section>
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

@push('scripts')
</script>
@endpush
