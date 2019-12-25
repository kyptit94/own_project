<!--Footer-->

<!--Module top footer -->
@isset ($blocksContent['footer'])
@foreach ( $blocksContent['footer'] as $layout)
@php
$arrPage = explode(',', $layout->page)
@endphp
@if ($layout->page == '*' || (isset($layout_page) && in_array($layout_page, $arrPage)))
@if ($layout->type =='html')
{!! $layout->text !!}
@elseif($layout->type =='view')
@if (view()->exists('blockView.'.$layout->text))
@include('blockView.'.$layout->text)
@endif
@elseif($layout->type =='module')
{!! sc_block_render($layout->text) !!}
@endif
@endif
@endforeach
@endisset
<!--//Module top footer -->
<!-- .entry-content -->
</article>
</div>
<!-- </.content> -->
</div>
<!-- </.content_wrap> -->
</div>
<!-- </.page_content_wrap> -->
<!--footer-->
<div class="footer" style="margin-top:100px">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <img src="{{ asset(sc_store('logo')) }}" alt="">
                <ul class="list-inline">
                    <li>{{ sc_store('description') }}</li>
                    <li><a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="content-footer">
                    <h2>Thông tin liên hệ</h2>
                    <ul class="list-inline">
                        <li>{{ sc_store('title') }}</li>
                        <li>{{ sc_store('address') }}</li>
                        <li>{{ sc_store('long_phone') }}</li>
                        <li>{{ sc_store('email') }}</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="content-footer">
                    <h2>Trang</h2>
                    <ul class="list-inline">
                            @php
                                $cmsPages = (new \App\Models\ShopPage)->where('status',1)->get();
                                @endphp
                                @foreach ($cmsPages as $page)
                            <li><a href="{{ $page->getUrl() }}">{{ $page->title}}</a></li>
                            @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 ">
                <h2>Newsletter</h2>
                <ul class="list-inline">
                    <li>Subscribe to our newsletter</li>
                    <li><input type="text" placeholder="Email">
                        <button> ></button>
                    </li>
                    <li>@2019 Uray.Get The Theme</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end footer-->