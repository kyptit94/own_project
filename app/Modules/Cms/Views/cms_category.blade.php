@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')
<div class="content-what-we-offer">
  <!-- product what we offer-->
  <div class="product-what-we-offer">
    @foreach ($entries as $key => $entryDetail)
    <div class="product-what-we-offer-{{$key%2?'right':'left'}}">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 product-what-we-offer-img">
            <img src="{{$entryDetail->image}}" alt="{{$entryDetail->title}}">
            <p class="rotated-text-{{$key%2?'right':'left'}}">{{$entryDetail->category->title}}</p>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
            <div class=" product-what-we-offer-content">
              <h2>{{$entryDetail->title}}</h2>
              <p>{{$entryDetail->description}}
              </p>
              <a href="{!!$entryDetail->getUrl()!!}"><button type="button" class="btn btn-light">Xem thêm</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>

  <div class="sortPagiBar">
    <div class="pagination-area ">
      {{ $entries->links() }}
    </div>
  </div>
  <!--end product what we offer-->
</div>
@endsection

@section('breadcrumb')
<!--title page-->
<div class="title-page" style="background-image: url('title-page1.jpg')/*tpa=http://html.physcode.com/uray/imager/title-page1.jpg*/;background-position: center center;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class=" col-md-8 inner-title-page">
        <h1>{{$title}}</h1>
        <p><span><a href="{{asset('/')}}">Home</a></span>/{{$title}}</p>
      </div>
    </div>
  </div>
</div>
<!--end title page-->
@endsection