   <!--slide-homepage-1-->
    <div class="slide-index2">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as  $key => $banner)
                <div class="carousel-item @if($key == 0) active @endif">
                    <div class="slide-homepage" style="background-image: url('{{$banner->image}}')/*tpa=http://html.physcode.com/uray/imager/home/slide-homepage2.jpg*/">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-10 col-10 content-slide">
                                    {!!$banner->html!!}
                                    <a href="product-list.html" tppabs="http://html.physcode.com/uray/product-list.html">view now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="control-slide-homepage">
                <ul class="carousel-indicators">
                    @foreach ($banners as  $key => $banner)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if($key == 0)class="active"@endif><p>{{$key + 1}}</p></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <!--end slide-homepage-1 -->