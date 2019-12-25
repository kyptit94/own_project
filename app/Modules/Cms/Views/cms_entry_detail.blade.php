@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')

<section>
    <div class="container">
        <div class="row content-blog">
            <div class="col-md-9">
                <div class="content-blog-right">
                    <div class="item-blog">
                        <img src="{{$entry_currently->image}}" alt="">
                        <h1>{{$entry_currently->title}}</h1>
                        {!!$entry_currently->content!!}
                    </div>
                    <div class="post-comment">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="content-blog-left">
                    
                    <div class="category-blog">
                        <h2>Chuyên mục</h2>
                        @if (!empty(sc_config('Content')))
                        @php
                        $cmsCategories = (new \App\Modules\Cms\Models\CmsCategory)->where('status',1)->get();
                        @endphp
                        @foreach ($cmsCategories as $cmsCategory)
                        <a href="{{ $cmsCategory->getUrl() }}">{{ sc_language_render($cmsCategory->title) }} ({!!$cmsCategory->getCountContent($cmsCategory->id)!!})</a>
                        @endforeach
                    @endif
                    </div>

                    <div class="lastest-blog">
                        <h2>Bài viết mới</h2>
                        @foreach($entry_currently->category->getRelateContent($entry_currently->id,$entry_currently->category->id) as $entri)
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-6 col-6">
                                    <div class="img-lastest-blog">
                                        <img src="{{$entri->image}}" class="card-img" alt="...">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-6 col-6">
                                    <div class="card-body">
                                        <span class="card-text"><a href="{{$entri->getUrl()}}"> {{$entri->title}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('breadcrumb')
<div class="title-page" style="background-image: url('title-page1.jpg')/*tpa=http://html.physcode.com/uray/imager/title-page1.jpg*/;background-position: center center;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 inner-title-page">
                <h1>{{$entry_currently->title}}</h1>
                <p><span><a href="{{asset('/')}}">Home</a></span>/ <a href="{{$entry_currently->category->getUrl()}}">{{$entry_currently->category->title}}</a> / {{$entry_currently->title}}</p>
            </div>
        </div>
    </div>
</div>
@endsection