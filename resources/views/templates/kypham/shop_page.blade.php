@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')
<section >
<div class="container">
    <div class="row">
        <h2 class="title text-center">{{ $title }}</h2>
        {!! sc_html_render($page->content) !!}
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
