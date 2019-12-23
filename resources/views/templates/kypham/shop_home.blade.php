@extends('templates.'.sc_store('template').'.shop_layout')

@section('center')
@include('templates.'.sc_store('template').'.home_component.slide')
<div class="content-homepage">    
	@include('templates.'.sc_store('template').'.home_component.other_product')
    @include('templates.'.sc_store('template').'.home_component.product')
    @include('templates.'.sc_store('template').'.home_component.news')
</div>
@include('templates.'.sc_store('template').'.home_component.brand')
@endsection



@push('styles')
@endpush

@push('scripts')

@endpush