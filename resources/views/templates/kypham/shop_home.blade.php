@extends('templates.'.sc_store('template').'.shop_layout')

@section('center')
@include('templates.'.sc_store('template').'.home_component.slide')
@include('templates.'.sc_store('template').'.home_component.brand')
<div class="content-homepage">
    @include('templates.'.sc_store('template').'.home_component.product')
    @include('templates.'.sc_store('template').'.home_component.other_product')
    @include('templates.'.sc_store('template').'.home_component.news')
</div>
@endsection



@push('styles')
@endpush

@push('scripts')

@endpush