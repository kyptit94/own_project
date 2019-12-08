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
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <img src="Logo.png" tppabs="http://html.physcode.com/uray/imager/home/Logo.png" alt="">
                <ul class="list-inline">
                    <li>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</li>
                    <li><a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="content-footer">
                    <h2>Locate Us</h2>
                    <ul class="list-inline">
                        <li>No 40 Baria sreet 133/2</li>
                        <li>+ (156) 1800-366-6666</li>
                        <li>Eric-82@example.com</li>
                        <li>www.uray.com</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="content-footer">
                    <h2>Profile</h2>
                    <ul class="list-inline">
                        <li><a href="my-account.html" tppabs="http://html.physcode.com/uray/my-account.html">My account</a></li>
                        <li><a href="checkout.html" tppabs="http://html.physcode.com/uray/checkout.html">Checkout</a></li>
                        <li><a href="#">Order Tracking</a></li>
                        <li><a href="#">Help & Support</a></li>
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