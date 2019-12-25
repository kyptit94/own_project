@if (!empty(sc_config('Content')))
<ul>
    @php
    $entries = (new \App\Modules\Cms\Models\CmsContent)->with('category')->where('status',1)->limit(6)->get();
    @endphp
</ul>
@endif
<!--code product latest new-->
<div class="container lastest">
    <div class="title">
        <h2 class="text-center" style="padding: 20px 0;">bài viết mới</h2>
    </div>
    <div class="row">
    @foreach ($entries as $entri)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 lastest-item">
            <div class="card">
                <div class="row no-gutters">
                    <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 col-6">
                        <a href="{{$entri->getUrl()}}"><img src="{{$entri->image}}" class="card-img" alt="..."></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-6">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{$entri->getUrl()}}">{{$entri->title}}</a></h5>
                            <p class="card-text">
                                <a href="{!!$entri->category->getUrl()!!}"> {{$entri->category->title}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
<!--end code product lastest new-->