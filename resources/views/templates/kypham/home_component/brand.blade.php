<div class="logo-homepage3">
        <div class="owl-carousel owl-theme">
            @foreach($brands_group as $brand)
                <div class="item"><a href="#"><img src="{{$brand->image}}" alt=""></a></div>
            @endforeach
        </div>
    </div>