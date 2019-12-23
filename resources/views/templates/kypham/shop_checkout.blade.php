@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')
<section>
    <div class="container">
      <div class="row">
@if (count($cart) ==0)
    <div class="col-md-12 text-danger">
        Cart empty!
    </div>
@else
    <style>
    .shipping_address td{
        padding: 3px !important;
    }
    .shipping_address textarea,.shipping_address input[type="text"]{
        width: 100%;
        padding: 7px !important;
    }
    .row_cart>td{
        vertical-align: middle !important;
    }
    input[type="number"]{
        text-align: center;
        padding:2px;
    }
</style>
<div class="table-responsive">
<table class="table box table-bordered">
    <thead>
      <tr  style="background: #eaebec">
        <th style="width: 50px;">No.</th>
        <th style="width: 100px;">{{ trans('product.sku') }}</th>
        <th>{{ trans('product.name') }}</th>
        <th>{{ trans('product.price') }}</th>
        <th >{{ trans('product.quantity') }}</th>
        <th>{{ trans('product.total_price') }}</th>
      </tr>
    </thead>
    <tbody>

    @foreach($cart as $item)
        @php
            $n = (isset($n)?$n:0);
            $n++;
            $product = App\Models\ShopProduct::find($item->id);
        @endphp
    <tr class="row_cart">
        <td >{{ $n }}</td>
        <td>{{ $product->sku }}</td>
        <td>
            {{ $product->getName() }}<br>
{{-- Process attributes --}}
            @if ($item->options->count())
            (
                @foreach ($item->options as $keyAtt => $att)
                    <b>{{ $attributesGroup[$keyAtt] }}</b>: <i>{{ $att }}</i> ;
                @endforeach
            )<br>
            @endif
{{-- //end Process attributes --}}
            <a href="{{$product->getUrl() }}"><img width="100" src="{{asset($product->getImage())}}" alt=""></a>
        </td>
        <td>{!! $product->showPrice() !!}</td>
        <td>{{$item->qty}}</td>
        <td align="right">{{sc_currency_render($item->subtotal)}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>
  </div>
<form class="shipping_address" style="width:100%" id="form-order" role="form" method="POST" action="{{ route('order.add') }}">
    {{ csrf_field() }}
    <div class="row">
    <div class="col-md-6">
        <h3 class="control-label"><i class="fa fa-truck" aria-hidden="true"></i> {{ trans('cart.shipping_address') }}:<br></h3>
        <table class="table box table-bordered" id="showTotal">
            <tr>
                <th>{{ trans('cart.first_name') }}:</td>
                <td>{{ $shippingAddress['first_name'] }}</td>
            </tr>
            <tr>
                <th>{{ trans('cart.last_name') }}:</td>
                <td>{{ $shippingAddress['last_name'] }}</td>
            </tr>
            <tr>
                <th>{{ trans('cart.phone') }}:</td>
                <td>{{ $shippingAddress['phone'] }}</td>
            </tr>
             <tr>
                <th>{{ trans('cart.email') }}:</td>
                <td>{{ $shippingAddress['email'] }}</td>
            </tr>
             <tr>
                <th>{{ trans('cart.address') }}:</td>
                <td>{{ $shippingAddress['address1'].' '.$shippingAddress['address2'].','.$shippingAddress['country'] }}</td>
            </tr>
             <tr>
                <th>{{ trans('cart.note') }}:</td>
                <td>{{ $shippingAddress['comment'] }}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-6">
{{-- Total --}}
        <div class="row">
            <div class="col-md-12">
                <h3 class="control-label"><i class="fa fa-cash" aria-hidden="true"></i> Thành tiền:<br></h3>
                <table class="table box table-bordered" id="showTotal">
                    @foreach ($dataTotal as $key => $element)
                    @if ($element['value'] !=0)

                     @if ($element['code']=='total')
                         <tr class="showTotal" style="background:#f5f3f3;font-weight: bold;">
                     @else
                        <tr class="showTotal">
                     @endif
                             <th>{!! $element['title'] !!}</th>
                            <td style="text-align: right" id="{{ $element['code'] }}">{{$element['text'] }}</td>
                        </tr>
                    @endif

                    @endforeach
                </table>
        {{-- Payment method --}}
            <div class="row">
                <div class="col-md-12">
                        <div class="form-group">
                            <h3 class="control-label"><i class="fa fa-credit-card-alt"></i> {{ trans('cart.payment_method') }}:<br></h3>
                        </div>
                        <div class="form-group">
                                <div>
                                    <label class="radio-inline">
                                     <img title="{{ $paymentMethodData['title'] }}" alt="{{ $paymentMethodData['title'] }}" src="{{ asset($paymentMethodData['image']) }}" style="width: 120px;">
                                    </label>
                                </div>
                        </div>
                </div>
            </div>
        {{-- //Payment method --}}
            </div>
        </div>
{{-- End total --}}

    </div>
            <div class="col-md-12 text-center">
             <div class="pull-left">
                <button class="btn btn-default" type="button" style="cursor: pointer;padding:10px 30px" onClick="location.href='{{ route('cart') }}'"><i class="fa fa-arrow-left"></i>{{ trans('cart.back_to_cart') }}</button>
                </div>
                    <div class="pull-right">
                        <button class="btn btn-success" id="submit-order" type="submit" style="cursor: pointer;padding:10px 30px"><i class="fa fa-check"></i> {{ trans('cart.confirm') }}</button>
                    </div>
            </div>
</div>
</form>
@endif
        </div>
    </div>
</section>
@endsection

@section('breadcrumb')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('cart') }}">{{ trans('front.cart_title') }}</a></li>
          <li class="active">{{ $title }}</li>
        </ol>
      </div>
@endsection

@push('scripts')
@endpush
